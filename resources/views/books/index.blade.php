@extends('layouts.app')

@section('title', 'Books - Library System')

@section('content')
    <h2>Daftar Buku</h2>

    <a href="{{ route('books.create') }}">+ Tambah Buku</a>

    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>ID: {{ $book->id }}</strong> — <strong>{{ $book->judul }}</strong> — {{ $book->penulis }} ({{ $book->tahun_terbit }}) — Stok: {{ $book->stok }}
                    <br>
                    <a href="/books/{{ $book->id }}">Lihat Detail</a>
                    |
                    <a href="{{ route('books.edit', $book) }}">Edit</a>
                    |
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada data buku.</p>
    @endif
@endsection