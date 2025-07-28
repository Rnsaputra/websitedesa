<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use Illuminate\Http\Request;

class DemografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = demografi::get()->map(function ($item) {
            $item->total_penduduk = $item->laki + $item->perempuan;
            return $item;
        });
        return view('dashboard.demografis.show', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.demografis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namadusun' => 'required|unique:demografis',
            'laki' => 'required|numeric|min:0',
            'perempuan' => 'required|numeric|min:0',
            'kepala' => 'required|numeric|min:0',
        ]);

        demografi::create($validatedData);
        return redirect('/dashboard/admin/demografis/data')->with('success', 'data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(demografi $demografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penduduk = Demografi::where('namadusun', $id)->first();
        return view('dashboard.demografis.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penduduk = Demografi::where('namadusun', $id)->first();
        $rules = ([
            'laki' => 'required|numeric|min:0',
            'perempuan' => 'required|numeric|min:0',
            'kepala' => 'required|numeric|min:0',
        ]);

        if ($request->namadusun != $penduduk->namadusun) {
            $rules['namadusun'] =  'required|unique:demografis';
        }
        $validatedData = $request->validate($rules);
        Demografi::where('id', $penduduk->id)
            ->update($validatedData);
        return redirect('/dashboard/admin/demografis/data')->with('success', 'Content Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penduduk = Demografi::where('namadusun', $id)->first();
        Demografi::destroy($penduduk->id);
        return redirect('/dashboard/admin/demografis/data')->with('success', 'Content Berhasil Ditambahkan');
    }
}
