<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'judul' => 'Pemrograman PHP', 'penulis' => 'Raka Pramudya', 'tahun' => 2022],
            ['id' => 2, 'judul' => 'Laravel untuk Pemula', 'penulis' => 'Salsabila Anindya', 'tahun' => 2019],
            ['id' => 3, 'judul' => 'Basis Data', 'penulis' => 'Fajar Wicaksono', 'tahun' => 2020],
            ['id' => 4, 'judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Meilani Kartika', 'tahun' => 2021],
            ['id' => 5, 'judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Meilani Kartika', 'tahun' => 2024],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $books = [
            ['id' => 1, 'judul' => 'Pemrograman PHP', 'penulis' => 'Raka Pramudya', 'tahun' => 2022],
            ['id' => 2, 'judul' => 'Laravel untuk Pemula', 'penulis' => 'Salsabila Anindya', 'tahun' => 2019],
            ['id' => 3, 'judul' => 'Basis Data', 'penulis' => 'Fajar Wicaksono', 'tahun' => 2020],
            ['id' => 4, 'judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Meilani Kartika', 'tahun' => 2021],
            ['id' => 5, 'judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Meilani Kartika', 'tahun' => 2024],
        ];

        $book = collect($books)->firstWhere('id', $id);

        if (!$book) {
            abort(404);
        }

        return view('books.show', compact('book'));
    }
}