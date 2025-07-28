<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerangkatDesa;
use Illuminate\Support\Facades\Storage;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = PerangkatDesa::all();
        return view('dashboard.perangkat.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.perangkat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:perangkat_desa,name',
            'job' => 'required|min:3|max:255',
            'profile_picture' => 'image|file|max:1024'
        ]);
        if ($request->file('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('Perangkat-desa');
        }
        PerangkatDesa::create($validatedData);

        return redirect("/dashboard/admin/perangkat")->with('success', 'User Berhasil Ditambahkan');
    }

    public function show(PerangkatDesa $perangkatDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $perangkatDesa)
    {
        $user = PerangkatDesa::where('name', $perangkatDesa)->firstOrFail();
        return view("dashboard.perangkat.edit", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $perangkatDesa)
    {

        $user = PerangkatDesa::where('name', $perangkatDesa)->firstOrFail();

        $rules = [

            'job' => 'required|min:3|max:255',
            'profile_picture' => 'image|file|max:1024'
        ];

        if ($request->name != $user->name) {
            $rules['name'] = 'required|max:255|unique:perangkat_desa,name';
        }
        
        $validatedData = $request->validate($rules);
         
        if ($request->file('profile_picture')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('Perangkat-desa');
        }
        $user->where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/admin/perangkat')->with('success', 'Content Berhasil diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $perangkatDesa)
    {   
        
        $perangkat =  PerangkatDesa::where('name', $perangkatDesa)->firstOrFail();
        PerangkatDesa::destroy($perangkat->id);
        return redirect('/dashboard/admin/perangkat')->with('success', 'User berhasil dihapus!');
    }
}
