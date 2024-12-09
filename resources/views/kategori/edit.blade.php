<!-- resources/views/kategori/tambah.blade.php -->
@extends('layouts.master')

@section('content')
    <h2>Edit</h2>
    <form action="{{ route('kategori.aksi_tambah') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
