<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

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
