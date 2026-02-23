<!DOCTYPE html>
<html lang="id">
<head>
    <title>Info Dosen - IKMI</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        .card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; width: 300px; background-color: #f9f9f9; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Profil Dosen</h2>
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>Tahun:</strong> {{ $tahun }}</p> <p><strong>Matakuliah:</strong> {{ $mata_kuliah }}</p>
    </div>
    <h3>Daftar Mahasiswa:</h3>
    <ul>
        @foreach($list_mhs as $mhs)
            <li>{{ $mhs }}</li>
        @endforeach
    </ul>
</body>
</html>