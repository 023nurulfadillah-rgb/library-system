<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show($id)
    {
        $books = [
            ['id' => 1, 'judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
            ['id' => 2, 'judul' => 'Bumi Manusia', 'penulis' => 'Pramoedya Ananta Toer', 'tahun' => 1980],
            ['id' => 3, 'judul' => 'Negeri 5 Menara', 'penulis' => 'Ahmad Fuadi', 'tahun' => 2009],
            ['id' => 4, 'judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun' => 2018],
            ['id' => 5, 'judul' => 'Cantik Itu Luka', 'penulis' => 'Eka Kurniawan', 'tahun' => 2002],
        ];

        $book = collect($books)->firstWhere('id', $id);

        if (!$book) {
            abort(404);
        }

        return view('books.show', compact('book'));
    }

}