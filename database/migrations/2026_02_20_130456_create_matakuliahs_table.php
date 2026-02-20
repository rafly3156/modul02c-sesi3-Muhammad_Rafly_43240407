<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    // 1. Menampilkan semua data Mata Kuliah
    public function index()
    {
        $matakuliahs = Matakuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    // 2. Menampilkan form tambah Mata Kuliah
    public function create()
    {
        return view('matakuliah.create');
    }

    // 3. Menyimpan data baru dengan validasi
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk'  => 'required|unique:matakuliahs,kode_mk',
            'nama_mk'  => 'required',
            'sks'      => 'required|numeric|between:1,6', // Tugas Akhir Modul
            'semester' => 'required|numeric'
        ]);

        Matakuliah::create($request->all()); //

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil ditambahkan'); //
    }

    // 4. Menampilkan form edit berdasarkan kode_mk
    public function edit($kode_mk)
    {
        $mk = Matakuliah::findOrFail($kode_mk); //
        return view('matakuliah.edit', compact('mk')); //
    }

    // 5. Memperbarui data yang sudah diedit
    public function update(Request $request, $kode_mk)
    {
        $request->validate([
            'nama_mk'  => 'required',
            'sks'      => 'required|numeric|between:1,6', // Validasi SKS 1-6
            'semester' => 'required|numeric'
        ]);

        $mk = Matakuliah::findOrFail($kode_mk); //
        $mk->update($request->all()); //

        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil diperbarui'); //
    }

    // 6. Menghapus data Mata Kuliah
    public function destroy($kode_mk)
    {
        Matakuliah::destroy($kode_mk); //
        
        return redirect()->route('matakuliah.index')
            ->with('success', 'Mata Kuliah berhasil dihapus'); //
    }

} // <-- Pastikan ini penutup terakhir class!