<?php

namespace App\Http\Controllers;

use App\Models\outcome;
use Illuminate\Http\Request;

class outcomecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outcome = outcome::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pengeluaran = $item->pemerintahan + $item->pembangunan + $item->pembinaan + $item->pemberdayaan + $item->bencana;
            return $item;
        });
        return view('dashboard.apbdes.outcome.index', compact('outcome'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.apbdes.outcome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required|unique:outcomes|integer|digits:4|min:2000|max:' . date('Y'), // Validasi tahun
            'pemerintahan' => 'nullable|numeric|min:0', // Validasi pendapatan asli desa
            'pembangunan' => 'nullable|numeric|min:0', // Validasi pendapatan transfer
            'pembinaan' => 'nullable|numeric|min:0', // Validasi pendapatan lainnya
            'pemberdayaan' => 'nullable|numeric|min:0', // Validasi pendapatan lainnya
            'bencana' => 'nullable|numeric|min:0', // Validasi pendapatan lainnya
        ]);
        $fields = ['pemerintahan', 'pembangunan', 'pembinaan', 'pemberdayaan', 'bencana'];
        foreach ($fields as $field) {
            if (!isset($validatedData[$field]) || is_null($validatedData[$field])) {
                $validatedData[$field] = 0;
            }
        }

        outcome::create($validatedData);
        return redirect('/dashboard/admin/apbdes/outcome')->with('success', 'data Berhasil Ditambahkan');
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
    public function edit(outcome $outcome)
    {

        return view('dashboard.apbdes.outcome.edit', compact('outcome'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, outcome $outcome)
    {
        $rules = ([
            'pemerintahan' => 'numeric|min:0', // Validasi pendapatan asli desa
            'pembangunan' => 'numeric|min:0', // Validasi pendapatan transfer
            'pembinaan' => 'numeric|min:0', // Validasi pendapatan lainnya
            'pemberdayaan' => 'numeric|min:0', // Validasi pendapatan lainnya
            'bencana' => 'numeric|min:0', // Validasi pendapatan lainnya
        ]);
        if ($request->year != $outcome->year) {
            $rules['year'] =  'required|unique:incomes|integer|digits:4|min:2000|max:' . date('Y');
        }

        $validatedData = $request->validate($rules);
        outcome::where('id', $outcome->id)
            ->update($validatedData);
        return redirect('/dashboard/admin/apbdes/outcome')->with('success', 'Content Berhasil Diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(outcome $outcome)
    {
        outcome::destroy($outcome->id);
        return redirect('/dashboard/admin/apbdes/outcome')->with('success', 'Content Berhasil dihapus');
    }
}
