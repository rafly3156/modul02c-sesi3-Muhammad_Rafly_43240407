# Quiz Evaluasi: Controller & Routing (Modul 5)
**Mata Kuliah:** Pemrograman Web Lanjut (Laravel 12)
**Nama:** Muhammad Rafly Putra Mulyana
**NIM:** 43240407
**Kampus:** STMIK IKMI Cirebon

## [cite_start]Tugas yang Dikerjakan [cite: 367-369]
Penyelesaian kuis praktikum mandiri dengan rincian sebagai berikut:
1. [cite_start]**Resource Controller:** Membuat `BukuController` untuk manajemen koleksi perpustakaan [cite: 370-372].
2. [cite_start]**Resource Routing:** Mendaftarkan rute tunggal `/koleksi` yang mencakup 7 method standar CRUD[cite: 374].
3. [cite_start]**Data Binding:** Mengirim data array judul buku dari Controller ke View menggunakan Laravel Blade[cite: 375].
4. [cite_start]**Dynamic URL:** Mengimplementasikan parameter ID pada method `show` untuk menampilkan detail buku secara dinamis[cite: 376].

## [cite_start]Cara Menjalankan Proyek [cite: 377, 378]
1. **Halaman Daftar Buku:**
   [cite_start]Akses URL: `http://localhost:8000/koleksi` [cite: 379, 380]
   [cite_start]*Output: Menampilkan list judul buku menggunakan @foreach.* [cite: 381]
2. **Halaman Detail Buku:**
   [cite_start]Akses URL: `http://localhost:8000/koleksi/{id}` (Contoh: `/koleksi/101`) [cite: 382, 383]
   [cite_start]*Output: Menampilkan teks detail buku sesuai ID yang dimasukkan.* [cite: 384]
3. **Cek List Rute:**
   [cite_start]Jalankan perintah berikut di terminal: `php artisan route:list --path=koleksi` [cite: 385-387]