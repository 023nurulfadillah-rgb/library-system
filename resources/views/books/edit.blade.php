@extends('layouts.app')

@section('title', 'Edit Buku - Library System')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST" style="display: flex; gap: 15px; align-items: flex-start; flex-wrap: wrap;">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label><br>
            <input type="text" name="judul" value="{{ old('judul', $book->judul) }}">
            @error('judul')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Penulis</label><br>
            <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}">
            @error('penulis')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Tahun Terbit</label><br>
            <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}">
            @error('tahun_terbit')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Stok</label><br>
            <input type="text" name="stok" value="{{ old('stok', $book->stok) }}">
            @error('stok')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="category_id">Kategori</label><br>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id) == $category->id)>
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
            <button type="submit">Update</button>
        </div>
    </form>

    <br>
    <a href="/books">Kembali ke Daftar Buku</a>
@endsection