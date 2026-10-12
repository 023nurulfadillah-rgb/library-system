@extends('layouts.app')

@section('title', 'Edit Buku - Library System')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST" style="display: flex; gap: 15px; align-items: flex-end; flex-wrap: wrap;">
        @csrf
        @method('PUT')

        <div>
            <label>Judul:</label><br>
            <input type="text" name="judul" value="{{ $book->judul }}" required>
        </div>

        <div>
            <label>Penulis:</label><br>
            <input type="text" name="penulis" value="{{ $book->penulis }}" required>
        </div>

        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}" required>
        </div>

        <div>
            <label>Stok:</label><br>
            <input type="number" name="stok" value="{{ $book->stok }}" required>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>

    <br>
    <a href="/books">Kembali ke Daftar Buku</a>
@endsection