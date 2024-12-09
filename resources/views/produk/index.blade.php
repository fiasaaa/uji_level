@extends('layouts.master')

@section('content')
    <h1>Product</h1>
    <br>
    <div id="content">

        <!-- Card Header with Action Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
            <div class="card-body">
                <a href="{{route('produk.tambah')}}" class="btn btn-primary mb-2">Tambah Produk</a>                
                <!-- 4-Column Grid for Products -->
                <div class="row">
                    @foreach ($produks as $item)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="{{asset($item->file)}}" class="card-img-top" alt="Product Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                    <p class="card-text">{{$item->description}}</p>
                                    <p class="card-text">Harga: Rp {{$item->price}}</p>
                                    <p class="card-text">Diskon: {{$item->discount}}%</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('produk.edit', $item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{route('produk.aksi_hapus', $item->id)}}" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>

    </div>
@endsection
