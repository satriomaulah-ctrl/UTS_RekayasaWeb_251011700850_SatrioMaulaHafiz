<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdukController;
use App\Models\Toy;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $unggulan = Toy::latest()->take(3)->get();
    return view('page.home', compact('unggulan'));
});

Route::get('/profile', [MahasiswaController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::get('/about', function () {
    return view('page.about');
});