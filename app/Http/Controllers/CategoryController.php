<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['id' => 1, 'nama' => 'Fiksi'],
            ['id' => 2, 'nama' => 'Non-Fiksi'],
            ['id' => 3, 'nama' => 'Sejarah'],
            ['id' => 4, 'nama' => 'Sains'],
            ['id' => 5, 'nama' => 'Pengembangan Diri'],
        ];

        return view('categories.index', compact('categories'));
    }
}