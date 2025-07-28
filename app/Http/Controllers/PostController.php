<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $userId = auth()->user()->id;
        $posts = post::where('author_id', $userId)->filter(request(['search', 'category']))->latest()->paginate(5)->withQueryString();
        return view("dashboard.post.index", compact("posts"))->with('title', 'Berita Desa Setren');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view("dashboard.post.create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:artikel_posts|min:8',
            'slug' => 'required|unique:artikel_posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required|min:50',
            'is_active' => 'nullable|boolean'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['is_active'] = $request->has('is_active') ? 1 : 0;

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        // dd($validatedData);
        Post::create($validatedData);
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/dashboard/admin/posts')->with('success', 'Content Berhasil Ditambahkan');
        } elseif ($user->role === 'writer') {
            return redirect('/dashboard/writer/posts')->with('success', 'Content Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('dashboard.post.show', compact('post'));
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
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/dashboard/admin/posts')->with('success', 'Content Berhasil Ditambahkan');
        } elseif ($user->role === 'writer') {
            return redirect('/dashboard/writer/posts')->with('success', 'Content Berhasil Ditambahkan');
        }
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
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/dashboard/admin/posts')->with('success', 'Content Berhasil Ditambahkan');
        } elseif ($user->role === 'writer') {
            return redirect('/dashboard/writer/posts')->with('success', 'Content Berhasil Ditambahkan');
        }
    }
}
