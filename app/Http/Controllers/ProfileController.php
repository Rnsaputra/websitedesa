<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.profile.index', compact('user'));
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
    public function edit(string $id)
    {
        $user = Auth::user();
        return view('dashboard.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name' => 'required|max:255',
            'ppicture' => 'image|file|max:3072'
        ];
        $user = Auth::user();

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
        $user->update($validatedData);
        if ($user->role === 'admin') {
            return redirect('/dashboard/admin/profile')->with('success', 'Content Berhasil diperbaruhi');
        } elseif ($user->role === 'writer') {
            return redirect('/dashboard/writer/profile')->with('success', 'Content Berhasil diperbaruhi');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
