<?php
// Routing utama UTS Pemrograman Web - Wafiya 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman login 
Route::get('/', [PageController::class, 'login'])->name('login');

//proses login
Route::post('/login', [PageController::class, 'prosesLogin'])->name('login.proses');

// Halaman beranda setelah login
Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');

// Halaman profil pengguna
Route::get('/profile', [PageController::class, 'profileUser'])->name('profile');

// Halaman kelola produk
Route::get('/kelola-produk', [PageController::class, 'kelolaProduk'])->name('kelola.produk');
