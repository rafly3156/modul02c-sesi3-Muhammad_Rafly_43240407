<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // 1. Menampilkan semua data
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    // 2. Menampilkan form tambah
    public function create()
    {
        return view('mahasiswa.create');
    }

    // 3. Menyimpan data baru dengan Validasi [cite: 29-39]
    public function store(Request $request)
    {
        $request->validate([
            'nim'         => 'required|unique:mahasiswas,nim',
            'nama'        => 'required',
            'kelas'       => 'required',
            'matakuliah'  => 'required'
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    // 4. Menampilkan form edit [cite: 62-66]
    public function edit($nim)
    {
        // Mencari data berdasarkan NIM, jika tidak ada maka Error 404
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    // 5. Memperbarui data yang diedit [cite: 85-97]
    public function update(Request $request, $nim)
    {
        $request->validate([
            'nama'        => 'required',
            'kelas'       => 'required',
            'matakuliah'  => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    // 6. Menghapus data [cite: 106-111]
    public function destroy($nim)
    {
        Mahasiswa::destroy($nim);
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil dihapus');
    }

} // <-- INI ADALAH KURUNG PENUTUP TERAKHIR. JANGAN ADA APAPUN LAGI DI BAWAH INI.