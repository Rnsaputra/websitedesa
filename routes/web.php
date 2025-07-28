<?php

use App\Http\Controllers\AllPostController;
use App\Http\Controllers\home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemografisController;
use App\Http\Controllers\incomeController;
use App\Http\Controllers\outcomecontroller;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\PotensiPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\WriterMiddleware;

Route::get('/', [home::class, 'index']);
Route::get('/berita/{post:slug}', [home::class, 'berita']);
Route::get('/berita', [home::class, 'homeNews']);
Route::get('/login', [loginController::class, 'index'])->middleware('guest');
Route::post('/login', [loginController::class, 'auth']);
Route::post('/logout', [loginController::class, 'logout']);
Route::prefix('dashboard/admin')->middleware(AdminMiddleware::class)->group(function () {
    Route::get('/', [DashboardController::class, 'homeadmin']);
    Route::resource('/posts', PostController::class);
    Route::resource('/user', Usercontroller::class);
    Route::resource('/allposts', AllPostController::class);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/perangkat', PerangkatDesaController::class);
    Route::prefix('potensi')->group(function () {
        Route::get('/', [DashboardController::class, 'potensi']);
        Route::resource('/categories', PotensiController::class);
        Route::resource('/post', PotensiPostController::class);
    });
    route::prefix('apbdes')->group( function () {
        Route::get('/', [DashboardController::class, 'apbdes']);
        Route::resource('/income', incomeController::class);
        Route::resource('/outcome', outcomecontroller::class);
    });
    route::prefix('demografis')->group(function () {

        route::get('/', [DashboardController::class, 'demografis']);
        Route::resource('/data', DemografisController::class);
    });
});

Route::prefix('dashboard/writer')->middleware(WriterMiddleware::class)->group(function () {
    Route::get('/', [DashboardController::class, 'homewriter']);
    Route::resource('/posts', PostController::class);
    Route::resource('/profile', ProfileController::class);    
});
