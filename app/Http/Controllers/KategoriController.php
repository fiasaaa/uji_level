<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {
        $kategori = Kategori::all(); // Menggunakan all() yang lebih umum
        return view('kategori.index', compact('kategori'));
    }
    
    public function tambah() {
        return view('kategori.tambah');
    }
    public function aksi_tambah(Request $request) {
        $request->validate([
            'title' => 'required'
        ]);
    
        $data = [
            'title' => $request->title
        ];
        Kategori::insert($data);
        return redirect()->route('kategori');  // Pastikan route 'kategori' sudah ada
    }
    public function edit($id){
        $kategori=Kategori::get();
        $produks=Produk::where('id',$id)->first();
        return view('kategori.edit', compact('kategori','produks') );
    }
    
}
