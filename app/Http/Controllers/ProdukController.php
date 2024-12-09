<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    // public function index() {
    //     $produks=Produk::get();
    //     return view('produk.index', compact('produks') );
    // }
    public function index() {
        $produks=Produk::get();
        return view('produk.index', compact('produks') );
    }

    public function tambah() {
        $kategori=Kategori::get();
        return view('produk.tambah', compact('kategori') );
    }
    public function aksi_tambah(Request $request) {
        $request->validate([
            'title'=>'required',
            'price'=>'required',
            'category_id'=>'required',
            'file'=>'required'
        ]);
        $data=[
            'title'=>$request->title,
            'price'=>$request->price,
            'category_id'=>$request->category_id,
            'discount'=>$request->discount,
            'description'=>$request->description
        ];
        // skrip memeriksa apakah ada file yang diunggah dengan request menggunakan $request->hasFile('file')
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('produks'), $filename);
            // jika file sudah di upload masukan nama file/folder
            $data['file'] = 'produks/' . $filename;
            // ini tu ['file'] nama file yg mau di update
        }
        Produk::insert($data);
        return redirect()->route('produk')->with('success', 'Data Berhasil Ditambahkan');
    }
    
}
