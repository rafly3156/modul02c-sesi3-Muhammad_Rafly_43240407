<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3>Tambah Data Mahasiswa</h3>
        <hr>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama Mahasiswa</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control" value="SI KIP P1" required>
            </div>
            <div class="mb-3">
                <label>Mata Kuliah</label>
                <input type="text" name="matakuliah" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Simpan Ke Database</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary w-100 mt-2">Batal</a>
        </form>
    </div>
</div>