<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'judul' => 'Pemrograman PHP',
            'penulis' => 'Raka Pramudya',
            'tahun_terbit' => 2022,
            'stok' => 10,
        ]);

        Book::create([
            'judul' => 'Laravel untuk Pemula',
            'penulis' => 'Salsabila Anindya',
            'tahun_terbit' => 2019,
            'stok' => 7,
        ]);

        Book::create([
            'judul' => 'Basis Data',
            'penulis' => 'Fajar Wicaksono',
            'tahun_terbit' => 2020,
            'stok' => 5,
        ]);

        Book::create([
            'judul' => 'Algoritma dan Pemrograman',
            'penulis' => 'Meilani Kartika',
            'tahun_terbit' => 2021,
            'stok' => 8,
        ]);

        Book::create([
            'judul' => 'Pemrograman Berorientasi Objek',
            'penulis' => 'Meilani Kartika',
            'tahun_terbit' => 2024,
            'stok' => 4,
        ]);
    }
}