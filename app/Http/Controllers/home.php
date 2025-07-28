<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\potensi;
use App\Models\User;
use App\Models\income;
use App\Models\outcome;
use App\Models\Category;
use App\Models\CategoryPotensi;
use App\Models\Demografi;
use App\Models\PerangkatDesa;
use App\Models\PotensiImage;

class home extends Controller
{
    public function index()
    {
        $income = income::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pendapatan = $item->aslidesa + $item->transfer + $item->lainnya;
            return $item;
        });

        $outcome = outcome::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pengeluaran = $item->pemerintahan + $item->pembangunan + $item->pembinaan + $item->pemberdayaan + $item->bencana;
            return $item;
        });

        $penduduk = Demografi::get()->map(function ($item) {
            $item->total_penduduk = $item->laki + $item->perempuan;
            return $item;
        });

        $total = [
            'laki' => $penduduk->sum('laki'),
            'perempuan' => $penduduk->sum('perempuan'),
            'kepala' => $penduduk->sum('kepala'),
            'jumlah' => $penduduk->sum('total_penduduk')
        ];

        
        $categoryPotensi = CategoryPotensi::latest()->get();
        $potensi = potensi::latest()->get();
        $image =  PotensiImage::all();
        
        $posts = Post::where('is_active', true)->latest()->take(10)->get();
        $kepala = PerangkatDesa::where('job', 'kepala desa')->first();
        $staf = PerangkatDesa::where('job', '!=', 'kepala desa')->get();
        
        return view('index', compact('posts', 'income', 'outcome', 'total', 'penduduk','categoryPotensi','potensi','kepala','staf','image'));
    }
    public function homeNews()
    {
        $listpost = Post::filter(request(['search', 'category', 'author']))->where('is_active', true)->latest()->paginate(6)->withQueryString();
        $terbaru = Post::where('is_active', true)->latest()->take(5)->get();
        return view('home-news', compact('listpost', 'terbaru'))->with('title', 'Berita Desa Setren');
    }

    public function berita(Post $post)
    {
        $terbaru = Post::where('is_active', true)->latest()->take(5)->get();
        return view('single-news', compact('post', 'terbaru'));
    }

    public function authors(User $user)
    {
        $count = count($user->posts);
        $author = $user->name;
        $listpost = $user->Posts;
        $terbaru = Post::where('is_active', true)->latest()->take(5)->get();
        return view('home-news', compact('listpost', 'author', 'terbaru'))->with('title', $count . ' Articles by ' . $author);
    }
    public function category(Category $category)
    {
        $count = count($category->posts);
        $author = $category->name;
        $listpost = $category->Posts;
        $terbaru = Post::where('is_active', true)->latest()->take(5)->get();
        return view('home-news', compact('listpost', 'author', 'terbaru'))->with('title', $count . '     Articles By category ' . $author);
    }

    public function admin()
    {
        return view('dashboard');
    }
}
