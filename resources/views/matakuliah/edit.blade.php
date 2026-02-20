<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah - Rafly 43240407</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
        .main-header { background: linear-gradient(135deg, #17a2b8 0%, #007788 100%); color: white; padding: 30px 0; margin-bottom: -40px; }
        .card-edit { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); }
        .btn-update { background-color: #007788; color: white; border-radius: 10px; padding: 12px; font-weight: 600; transition: 0.3s; border: none; }
        .btn-update:hover { background-color: #005662; transform: translateY(-2px); }
    </style>
</head>
<body>

<div class="main-header text-center">
    <h2 class="fw-bold"><i class="fas fa-edit me-2"></i>Edit Mata Kuliah</h2>
    <p class="opacity-75">Update Informasi Kode MK: {{ $mk->kode_mk }}</p>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-edit">
                <div class="card-body p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger border-0 shadow-sm mb-4">
                            <ul class="mb-0">@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                        </div>
                    @endif

                    <form action="{{ route('matakuliah.update', $mk->kode_mk) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label fw-bold">Kode Mata Kuliah</label>
                            <input type="text" class="form-control bg-light" value="{{ $mk->kode_mk }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Mata Kuliah</label>
                            <input type="text" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">SKS (1 - 6)</label>
                                <input type="number" name="sks" class="form-control" value="{{ $mk->sks }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Semester</label>
                                <input type="number" name="semester" class="form-control" value="{{ $mk->semester }}" required>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-update"><i class="fas fa-save me-2"></i>Simpan Perubahan</button>
                            <a href="{{ route('matakuliah.index') }}" class="btn btn-light border"><i class="fas fa-arrow-left me-2"></i>Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>