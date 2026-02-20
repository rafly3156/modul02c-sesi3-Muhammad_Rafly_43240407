<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data - Rafly 43240407</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
        .main-header { 
            background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%); 
            color: #212529; padding: 30px 0; margin-bottom: -40px; 
        }
        .card-edit { 
            border: none; border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); 
        }
        .form-label { fw-bold; color: #495057; font-size: 0.9rem; }
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #dee2e6; }
        .form-control:focus { box-shadow: 0 0 0 0.25 margin-bottom: rgba(255, 193, 7, 0.25); border-color: #ffc107; }
        .btn-update { background-color: #212529; color: white; border-radius: 10px; padding: 12px; transition: 0.3s; }
        .btn-update:hover { background-color: #000; transform: translateY(-2px); }
    </style>
</head>
<body>

<div class="main-header">
    <div class="container text-center">
        <h2 class="fw-bold"><i class="fas fa-user-edit me-2"></i>Edit Data Mahasiswa</h2>
        <p class="opacity-75">Update informasi NIM: 43240407</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card card-edit">
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

                    <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                        @csrf
                        @method('PUT') <div class="mb-3">
                            <label class="form-label">Nomor Induk Mahasiswa (NIM)</label>
                            <input type="text" class="form-control bg-light" value="{{ $mahasiswa->nim }}" readonly>
                            <div class="form-text">NIM tidak dapat diubah sesuai sistem.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap Mahasiswa</label>
                            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mata Kuliah</label>
                                <input type="text" name="matakuliah" class="form-control" value="{{ $mahasiswa->matakuliah }}" required>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-update">
                                <i class="fas fa-save me-2"></i>Simpan Perubahan
                            </button>
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary border-0">
                                <i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-center mt-4 text-secondary small">Sistem Informasi UGJ Cirebon</p>
        </div>
    </div>
</div>

</body>
</html>