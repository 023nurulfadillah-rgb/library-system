<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $appTitle = 'Library System';
        $appDescription = 'Aplikasi sederhana untuk mengelola data buku, kategori, dan member perpustakaan.';
        $totalBooks = Book::count();
        $totalMembers = 5;
        $totalCategories = Category::count();

        return view('dashboard.index', compact('appTitle', 'appDescription', 'totalBooks', 'totalMembers', 'totalCategories'));
    }
}