<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Langkah Penting Modul 5b 

class InfoController extends Controller
{
    // Method halo dari Modul 5a [cite: 83]
    public function halo()
    {
        return "Halo! Ini adalah respon dari InfoController.";
    }

    // Tugas Eksperimen 5.1a [cite: 113]
    public function kampus()
    {
        return "Saya kuliah di STMIK IKMI Cirebon";
    }

    // Langkah 1 Modul 5b: Menyiapkan Data [cite: 131-132]
    public function dosen(): View
    {
        // 1. Menyiapkan data dalam variabel [cite: 145]
        $namaDosen = "Rudi Kurniawan, S.Kom., M.T."; // [cite: 146]
        $matkul = "Pemrograman Web Lanjut"; // [cite: 147]
        $tahun = "2025/2026"; // Tugas Eksperimen 5.1b [cite: 205]
        
        // Tugas Eksperimen 5.1b: Menambah 2 nama teman [cite: 204]
        $mahasiswa = ["Andi", "Budi", "Siti", "Dedi", "Rafly", "Farah"]; 

        // 2. Mengirim data ke view menggunakan array [cite: 150-151]
        return view('info_dosen', [
            'nama' => $namaDosen,
            'mata_kuliah' => $matkul,
            'tahun' => $tahun, // Mengirim variabel tahun [cite: 206]
            'list_mhs' => $mahasiswa
        ]);
    }
    public function detailMahasiswa($nama, $nim): View
{
    return view('detail_mahasiswa', [
        'nama_mhs' => $nama,
        'nim_mhs' => $nim
    ]);
}
}