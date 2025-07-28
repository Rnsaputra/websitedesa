<?php

namespace App\Http\Controllers;

use App\Models\income;
use Illuminate\Http\Request;

class incomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $income = income::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pendapatan = $item->aslidesa + $item->transfer + $item->lainnya;
            return $item;
        });        
        return view('dashboard.apbdes.income.index', compact('income', ));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.apbdes.income.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'year' => 'required|unique:incomes|integer|digits:4|min:2000|max:' . date('Y'), // Validasi tahun
            'aslidesa' => 'numeric|min:0', // Validasi pendapatan asli desa
            'transfer' => 'numeric|min:0', // Validasi pendapatan transfer
            'lainnya' => 'numeric|min:0', // Validasi pendapatan lainnya
        ]);

        income::create($validatedData);
        return redirect('/dashboard/admin/apbdes/income')->with('success', 'Content Berhasil Ditambahkan');
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
    public function edit(income $income)
    {    
        return view('dashboard.apbdes.income.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, income $income)
    {

        $rules = ([
            'aslidesa' => 'numeric|min:0', // Validasi pendapatan asli desa
            'transfer' => 'numeric|min:0', // Validasi pendapatan transfer
            'lainnya' => 'numeric|min:0', // Validasi pendapatan lainnya
        ]);
        if ($request->year != $income->year) {
            $rules['year'] =  'required|unique:incomes|integer|digits:4|min:2000|max:' . date('Y');
        }

        $validatedData = $request->validate($rules);
        income::where('id', $income->id)
            ->update($validatedData);
        return redirect('/dashboard/admin/apbdes/income')->with('success', 'Content Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(income $income)
    {
        income::destroy($income->id);
        return redirect('/dashboard/admin/apbdes/income')->with('success', 'Content Berhasil dihapus');
    }
}
