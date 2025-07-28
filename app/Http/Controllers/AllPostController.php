<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = post::filter(request(['search', 'category', 'author']))->latest()->paginate(5)->withQueryString();
        return view("dashboard.post.index", compact("posts"))->with('title', 'Berita Desa Setren');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $category = Category::all();
        return view("dashboard.post.edit", compact('category', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $rules = [
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required|min:50',
            'is_active' => 'nullable|boolean'
        ];

        if ($request->title != $post->title) {
            $rules['slug'] = 'required|unique:artikel_posts';
            $rules['title'] = 'required|max:255|unique:artikel_posts|min:8';
        }



        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }
        $validatedData['is_active'] = $request->has('is_active') ? 1 : 0;
        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Content Berhasil diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'post berhasil dihapus!');
    }
}
