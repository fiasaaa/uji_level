@extends('layouts.master')

@section('content')

<div class="container mt-3" id="content">

    <h2>Produk Saya</h2>

    <!-- Kategori Menu -->
    <ul class="list-group list-group-horizontal mt-3 flex-center">
        <a href="{{route('produk')}}" class="text-decoration-none">
            <li class="list-group-item btn btn-primary">Semua</li>
        </a>
        @foreach ($kategori as $item)
            <a href="{{route('produk')}}?kategori={{$item->id}}" class="text-decoration-none">
                <li class="list-group-item btn btn-primary">{{$item->title}}</li>
            </a>
        @endforeach
    </ul>

    <br>

    <!-- Produk Grid: 4 Columns -->
    <div class="row">
        @foreach ($produks as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <!-- Gambar Produk -->
                    <img src="{{$item->file}}" class="card-img-top" alt="{{$item->title}}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <b class="text-black mt-8">
                            Rp {{number_format($item->price - $item->discount)}}
                            @if ($item->discount > 0)
                                <del>Rp {{number_format($item->price)}}</del>
                            @endif
                        </b>
                        <br>
                        <a href="https://api.whatsapp.com/send?phone=6281381995953" class="text-blue">Order WA</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection
