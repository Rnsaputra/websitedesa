<?php

namespace App\Http\Controllers;

use App\Models\potensi;
use App\Models\PotensiImage;
use Illuminate\Http\Request;
use App\Models\CategoryPotensi;
use Illuminate\Support\Facades\Storage;

class PotensiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Anda bisa menggunakan $request untuk mengakses data dari request
        $name = $request->query('category_name'); // Misalnya, ambil nama dari query string
        $category = CategoryPotensi::where('name', $name)->first(); // Mengambil category dari query string

        // Lakukan sesuatu dengan $categoryId, misalnya mengirim ke view
        return view('dashboard.potensi.post.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categories_id' => 'required|exists:potensi_categories,id',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'place' => 'required|string|unique:potensi,place',
            'slugplace' => 'required|string|unique:potensi,slugplace',
            'description' => 'required|string',
            'locate' => 'nullable|string',
            'youtube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'embedlocate' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $data = CategoryPotensi::where('id', $request->categories_id)->first();

        $potensi = Potensi::create([
            'categories_id' => $request->categories_id,
            'place' => $request->place,
            'slugplace' => $request->slugplace,
            'description' => $request->description,
            'locate' => $request->locate,
            'embedlocate' => $request->embedlocate,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'tiktok' => $request->tiktok
        ]);

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('covers');
            $potensi->cover = $coverPath;
            $potensi->save();
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('potensi_images');
                PotensiImage::create([
                    'potensi_id' => $potensi->id,
                    'image_path' => $imagePath,
                ]);
            }
        }
        return redirect('/dashboard/admin/potensi/categories/' . $data->name)->with('success', 'Potensi berhasil ditambahkan.');
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

        $potensi = potensi::where('slugplace', $id)->first();
        $image = PotensiImage::where('');
        return view('dashboard.potensi.post.edit', compact('potensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $potensi = Potensi::where('slugplace', $id)->firstOrFail();

        // Validasi input (bisa sesuaikan)
        $rules = [
            'description' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'youtube' => 'nullable|string',
            'instagram' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'delete_image_ids' => 'nullable|array',
            'place' => 'required',
            'slugplace' => 'required',
        ];

        if ($request->slugplace !== $potensi->slugplace) {
            $rules['slugplace'] .= '|unique:potensi,slugplace';
        }
        if ($request->place !== $potensi->place) {
            $rules['place'] .= '|unique:potensi,place';
        }
        $validated = $request->validate($rules);
        // Update data utama
        
        $potensi->place = $validated['place'];
        $potensi->slugplace = $validated['slugplace'];
        $potensi->description = $validated['description'];
        $potensi->locate = $request->locate;
        $potensi->embedlocate = $request->embedlocate;
        $potensi->youtube = $request->youtube;
        $potensi->instagram = $request->instagram;
        $potensi->tiktok = $request->tiktok;
        $potensi->categories_id = $request->categories_id;

        // Update cover jika ada
        if ($request->hasFile('cover')) {
            // Hapus cover lama
            if ($potensi->cover && Storage::exists($potensi->cover)) {
                Storage::delete($potensi->cover);
            }

            $coverPath = $request->file('cover')->store('potensi-cover', 'public');
            $potensi->cover = $coverPath;
        }

        $potensi->save();

        // Hapus gambar tambahan yang diminta
        if ($request->filled('delete_image_ids')) {
            foreach ($request->delete_image_ids as $id) {
                $img = PotensiImage::find($id);
                if ($img && Storage::exists($img->image_path)) {
                    Storage::delete($img->image_path);
                }
                if ($img) {
                    $img->delete();
                }
            }
        }

        // Simpan gambar tambahan baru jika ada
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('potensi-images', 'public');
                PotensiImage::create([
                    'potensi_id' => $potensi->id,
                    'image_path' => $path,
                ]);
            }
        }
        $data = CategoryPotensi::where('id', $request->categories_id)->first();
        return redirect('/dashboard/admin/potensi/categories/' . $data->name)->with('success', 'Data potensi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $potensi = Potensi::where('slugplace', $id)->firstOrFail();
        $data = CategoryPotensi::where('id', $potensi->categories_id)->first();

    // Hapus cover jika ada
    if ($potensi->cover && Storage::disk('public')->exists($potensi->cover)) {
        Storage::disk('public')->delete($potensi->cover);
    }

    // Hapus semua gambar tambahan
    foreach ($potensi->images as $image) {
        if (Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }
        $image->delete(); // hapus record dari DB
    }

    // Hapus data utama potensi
    $potensi->delete();
    return redirect('dashboard/admin/potensi/categories/' . $data->name)->with('success', 'Data potensi berhasil dihapus.');
    }
    
}
