<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        $userId = auth()->user()->id;
        $post = post::where('author_id', $userId)->filter(request(['search', 'category']))->latest()->paginate(6)->withQueryString();
        return view('dashboard.user.index', compact('post', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create')->with('title', 'Add Profil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users|regex:/^\S*$/',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
            'role' => 'required',
            'ppicture' => 'image|file|max:1024'
        ], [
            'username.regex' => 'username tidak boleh mengandung spasi'
        ]);
        if ($request->file('ppicture')) {
            $validatedData['ppicture'] = $request->file('ppicture')->store('profile-picture');
        }
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);


        return redirect("/dashboard/admin/user")->with('success', 'User Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        return view("dashboard.user.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'ppicture' => 'image|file|max:3072',
            'role' => 'required',
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users|regex:/^\S*$/';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        $validatedData = $request->validate($rules);

        if ($request->file('ppicture')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['ppicture'] = $request->file('ppicture')->store('profile-picture');
        }
        $user->where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/user')->with('success', 'Content Berhasil diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        Post::where('author_id', $user->id)->delete();
        User::destroy($user->id);
        return redirect('/dashboard/admin/user')->with('success', 'User berhasil dihapus!');
    }
}
