@extends('layouts.app')

@section('title', 'Tambah Buku - Library System')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST" style="display: flex; gap: 15px; align-items: flex-start; flex-wrap: wrap;">
        @csrf

        <div>
            <label>Judul Buku</label><br>
            <input type="text" name="judul" value="{{ old('judul') }}">
            @error('judul')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label><br>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
            @error('penulis')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Tahun Terbit</label><br>
            <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
            @error('tahun_terbit')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label><br>
            <input type="text" name="stok" value="{{ old('stok') }}">
            @error('stok')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="category_id">Kategori</label><br>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->nama }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <br>
            <button type="submit">Simpan</button>
        </div>
    </form>

    <br>
    <a href="/books">Kembali ke Daftar Buku</a>
@endsection