@extends('layouts.app')

@section('title', 'Tambah Buku - Library System')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST" style="display: flex; gap: 15px; align-items: flex-end; flex-wrap: wrap;">
        @csrf

        <div>
            <label>Judul:</label><br>
            <input type="text" name="judul" required>
        </div>

        <div>
            <label>Penulis:</label><br>
            <input type="text" name="penulis" required>
        </div>

        <div>
            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" required>
        </div>

        <div>
            <label>Stok:</label><br>
            <input type="number" name="stok" required>
        </div>

        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>

    <br>
    <a href="/books">Kembali ke Daftar Buku</a>
@endsection