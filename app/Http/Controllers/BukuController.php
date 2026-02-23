<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import untuk bonus point 

class BukuController extends Controller
{
    // Soal 2: Menyiapkan data dan mengirim ke View [cite: 345-348]
    public function index(): View
    {
        // Variabel berisi minimal 3 judul buku [cite: 346]
        $data_buku = [
            "Pemrograman Laravel 12 Gacor",
            "Seni Desain Database STMIK IKMI",
            "Membangun API untuk Sistem Perpustakaan",
            "Mastering Controller & Routing"
        ];

        // Mengirim data ke perpus_index.blade.php [cite: 347]
        return view('perpus_index', compact('data_buku'));
    }

    public function create() { }
    public function store(Request $request) { }

    // Soal 3: Menangkap Parameter ID [cite: 350-352]
    public function show(string $id)
    {
        return "Anda sedang melihat detail buku dengan Kode: [" . $id . "]";
    }

    public function edit(string $id) { }
    public function update(Request $request, string $id) { }
    public function destroy(string $id) { }
}