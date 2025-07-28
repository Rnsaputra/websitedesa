<?php

namespace App\Http\Controllers;

use App\Models\potensi;
use Illuminate\Http\Request;
use App\Models\CategoryPotensi;
use App\Models\PotensiImage;
use Illuminate\Support\Facades\Storage;

class PotensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.potensi.create');
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

        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:potensi_categories,name',
            'description' => 'required'
        ]);

        CategoryPotensi::create($validatedData);


        return redirect("/dashboard/admin/potensi")->with('success', 'Potensi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = CategoryPotensi::where('name', $id)->first();
        $potensi = potensi::all();
        $image =  PotensiImage::all();

        if ($category) {
            $postings = potensi::where('categories_id', $category->id)->get();
            return view('dashboard.potensi.post.index', compact('postings', 'category', 'potensi', 'image'));
        } else {
            // Jika kategori tidak ditemukan, Anda bisa mengarahkan ke halaman lain atau menampilkan pesan
            return redirect()->back()->with('error', 'Kategori tidak ditemukan.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $potensiCategory = CategoryPotensi::where('name', $id)->firstOrFail();
        return view('dashboard.potensi.edit', compact('potensiCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = CategoryPotensi::where('name', $id)->firstOrFail();
        $validated = [
            'description' => 'required'
        ];
        if ($request->name !== $categories->name) {
            $validated['name'] = 'required|max:255|unique:potensi_categories,name';
        }

        $validatedData = $request->validate($validated);

        CategoryPotensi::where('id', $categories->id)->update($validatedData);


        return redirect("/dashboard/admin/potensi")->with('success', 'Potensi Berhasil Diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // Ambil kategori berdasarkan name (slug atau nama unik)
        $category = CategoryPotensi::where('name', $id)->firstOrFail();

        // Gunakan ID kategori yang benar
        $potensis = Potensi::where('categories_id', $category->id)->get();

        foreach ($potensis as $potensi) {
            // Hapus cover jika ada
            if ($potensi->cover && Storage::disk('public')->exists($potensi->cover)) {
                Storage::disk('public')->delete($potensi->cover);
            }

            // Hapus semua gambar tambahan
            foreach ($potensi->images as $image) {
                if (Storage::disk('public')->exists($image->image_path)) {
                    Storage::disk('public')->delete($image->image_path);
                }
                $image->delete(); // hapus record DB
            }

            $potensi->delete(); // hapus potensi
        }

        // Setelah semua potensi terhapus, baru hapus kategori
        $category->delete();

        return redirect()->back()->with('success', 'Kategori dan semua potensi terkait berhasil dihapus.');
    }
}
