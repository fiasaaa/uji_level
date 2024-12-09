@extends('layouts.master')

@section('content')
    <h2>Kategori</h2>
    <br>
    <div id="content">
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <a href="{{route('kategori.tambah')}}" class="btn btn-primary mb-2">Tambah Kategory</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($kategori as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm me-2">
                                                Edit
                                            </a>

                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('kategori.aksi_hapus', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
