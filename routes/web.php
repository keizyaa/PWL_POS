<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

    Route::prefix('category')->group(function () {
    Route::get('/food-beverage', function () {
        return view('category.food');
    });

    Route::get('/beauty-health', function () {
        return view('category.beauty');
    });

    Route::get('/home-care', function () {
        return view('category.homeCare');
    });

    Route::get('/baby-kid', function () {
        return view('category.baby');
    });
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return view('user', compact('id', 'name'));
});

Route::get('/penjualan', function () {
    return view('penjualan');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});
