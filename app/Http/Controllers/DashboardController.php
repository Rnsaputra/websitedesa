<?php

namespace App\Http\Controllers;

use App\Models\CategoryPotensi;
use App\Models\income;
use App\Models\outcome;
use App\Models\Demografi;
use App\Models\PerangkatDesa;
use App\Models\Post;
use App\Models\potensi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function apbdes()
    {
        $income = income::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pendapatan = $item->aslidesa + $item->transfer + $item->lainnya;
            return $item;
        });
        $outcome = outcome::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pengeluaran = $item->pemerintahan + $item->pembangunan + $item->pembinaan + $item->pemberdayaan + $item->bencana;
            return $item;
        });
        return view('dashboard.apbdes.index', compact('income', 'outcome'));
    }

    public function demografis()
    {
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

        return view('dashboard.demografis.index', compact('penduduk', 'total'));
    }

    public function potensi()
    {
        $potensi = CategoryPotensi::all();
        $potensipost = potensi::all();

        return view('dashboard.potensi.index', compact('potensi', 'potensipost'));
    }
    public function homeadmin()
    {
        $userCount = User::count();
        $articleCount = Post::count();
        $myarticle = Post::where('author_id', Auth::user()->id)->get();
        $perangkatCount = PerangkatDesa::count();
        $potensiCount = potensi::count();
        $penduduk = Demografi::get()->map(function ($item) {
            $item->total_penduduk = $item->laki + $item->perempuan;
            return $item;
        });
        $income = income::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pendapatan = $item->aslidesa + $item->transfer + $item->lainnya;
            return $item;
        });
        $outcome = outcome::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pengeluaran = $item->pemerintahan + $item->pembangunan + $item->pembinaan + $item->pemberdayaan + $item->bencana;
            return $item;
        });
        return view('dashboard.index', compact('userCount', 'articleCount', 'myarticle', 'perangkatCount', 'potensiCount', 'penduduk', 'income', 'outcome'));
    }
    public function homewriter()
    {
        $userCount = User::count();
        $articleCount = Post::count();
        $myarticle = Post::where('author_id', Auth::user()->id)->get();
        $perangkatCount = PerangkatDesa::count();
        $potensiCount = potensi::count();
        $penduduk = Demografi::get()->map(function ($item) {
            $item->total_penduduk = $item->laki + $item->perempuan;
            return $item;
        });
        $income = income::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pendapatan = $item->aslidesa + $item->transfer + $item->lainnya;
            return $item;
        });
        $outcome = outcome::orderBy('year', 'asc')->get()->map(function ($item) {
            $item->total_pengeluaran = $item->pemerintahan + $item->pembangunan + $item->pembinaan + $item->pemberdayaan + $item->bencana;
            return $item;
        });
        return view('dashboard.index', compact('userCount', 'articleCount', 'myarticle', 'perangkatCount', 'potensiCount', 'penduduk', 'income', 'outcome'));
    }
}
