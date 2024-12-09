<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;

class ProdukSayaController extends Controller
{
    public function index() {
        $kategori = Kategori::all();  // Ambil semua kategori
        $produks=Produk::get();
        return view('produk_saya', compact('kategori','produks'));  // Kirim data kategori ke view
    }
}