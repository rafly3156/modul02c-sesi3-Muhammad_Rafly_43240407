<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Langkah 4: Menampilkan semua data [cite: 312-314]
    public function index()
    {
        return "Halaman Daftar Produk (Read All)";
    }

    // Tugas Eksperimen 5b No 1 [cite: 326]
    public function create()
    {
        return "Halaman Form Tambah Produk";
    }

    public function store(Request $request) { }

    // Langkah 4: Menampilkan detail berdasarkan ID [cite: 316-321]
    public function show(string $id)
    {
        return "Menampilkan detail produk dengan ID: " . $id;
    }

    // Method edit untuk menjawab pertanyaan eksperimen
    public function edit(string $id)
    {
        return "Menampilkan form edit untuk Produk ID: " . $id;
    }

    public function update(Request $request, string $id) { }
    public function destroy(string $id) { }
}