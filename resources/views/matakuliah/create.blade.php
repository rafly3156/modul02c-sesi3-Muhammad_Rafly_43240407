<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah - Rafly 43240407</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
        .main-header { background: linear-gradient(135deg, #0d6efd 0%, #0046b1 100%); color: white; padding: 30px 0; margin-bottom: -40px; }
        .card-form { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
        .btn-save { border-radius: 10px; padding: 12px; font-weight: 600; transition: 0.3s; }
        .btn-save:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3); }
    </style>
</head>
<body>

<div class="main-header">
    <div class="container text-center">
        <h2 class="fw-bold"><i class="fas fa-plus-circle me-2"></i>Tambah Mata Kuliah Baru</h2>
        <p class="opacity-75">SI UGJ Cirebon | NIM: 43240407</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-form">
                <div class="card-body p-4">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('matakuliah.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Kode Mata Kuliah</label>
                            <input type="text" name="kode_mk" class="form-control" placeholder="Contoh: SI001" required value="{{ old('kode_mk') }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Mata Kuliah</label>
                            <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan nama mata kuliah" required value="{{ old('nama_mk') }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">SKS (1 - 6)</label>
                                <input type="number" name="sks" class="form-control" placeholder="1-6" required value="{{ old('sks') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Semester</label>
                                <input type="number" name="semester" class="form-control" placeholder="Contoh: 4" required value="{{ old('semester') }}">
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-save">
                                <i class="fas fa-save me-2"></i>Simpan Mata Kuliah
                            </button>
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-light border">
                                <i class="fas fa-arrow-left me-2"></i>Batal & Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>