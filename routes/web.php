<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukSayaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/produk_saya', [ProdukSayaController::class,'index'])->name('produk_saya');
 // produk
 Route::get('/produk',[ProdukController::class,'index'])->name('produk');
 Route::get('/produk/tambah',[ProdukController::class,'tambah'])->name('produk.tambah');
 Route::get('/produk/edit{id}',[ProdukController::class,'edit'])->name('produk.edit');
 Route::post('/produk/aksi_tambah',[ProdukController::class,'aksi_tambah'])->name('produk.aksi_tambah');
 Route::post('/produk/aksi_hapus',[ProdukController::class,'aksi_hapus'])->name('produk.aksi_hapus');

// kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('kategori');
Route::get('/kategori/tambah',[KategoriController::class,'tambah'])->name('kategori.tambah');
Route::get('/kategori/edit{id}',[KategoriController::class,'edit'])->name('kategori.edit');
Route::post('/kategori/aksi_tambah',[KategoriController::class,'aksi_tambah'])->name('kategori.aksi_tambah');
Route::post('/kategori/aksi_hapus',[KategoriController::class,'aksi_hapus'])->name('kategori.aksi_hapus');

