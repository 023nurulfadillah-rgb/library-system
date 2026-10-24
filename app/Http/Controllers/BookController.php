<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('nama')->get();

        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|min:3|max:255|unique:books,judul',
            'penulis' => ['required', 'string', 'min:3', 'max:255', 'regex:/^[\pL\s.\'-]+$/u'],
            'tahun_terbit' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stok' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], $this->pesanValidasi());

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $book = Book::find($id);

        if (!$book) {
            abort(404);
        }

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('nama')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'min:3', 'max:255', Rule::unique('books', 'judul')->ignore($book->id)],
            'penulis' => ['required', 'string', 'min:3', 'max:255', 'regex:/^[\pL\s.\'-]+$/u'],
            'tahun_terbit' => 'required|integer|digits:4|min:1900|max:' . date('Y'),
            'stok' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], $this->pesanValidasi());

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }

    private function pesanValidasi()
    {
        return [
            'judul.required' => 'Judul buku wajib diisi.',
            'judul.min' => 'Judul buku minimal 3 karakter.',
            'judul.max' => 'Judul buku maksimal 255 karakter.',
            'judul.unique' => 'Judul buku sudah ada.',

            'penulis.required' => 'Nama penulis wajib diisi.',
            'penulis.min' => 'Nama penulis minimal 3 karakter.',
            'penulis.max' => 'Nama penulis maksimal 255 karakter.',
            'penulis.regex' => 'Nama penulis hanya boleh berisi huruf, spasi, titik, apostrof, dan strip.',

            'tahun_terbit.required' => 'Tahun terbit wajib diisi.',
            'tahun_terbit.integer' => 'Tahun terbit harus berupa angka bulat.',
            'tahun_terbit.digits' => 'Tahun terbit harus terdiri dari 4 digit.',
            'tahun_terbit.min' => 'Tahun terbit minimal 1900.',
            'tahun_terbit.max' => 'Tahun terbit tidak boleh melebihi tahun ini.',

            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
            'stok.min' => 'Stok tidak boleh negatif.',
            'stok.max' => 'Stok maksimal 1000.',

            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists' => 'Kategori yang dipilih tidak tersedia.',
        ];
    }
}