<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mata Kuliah - Rafly 43240407</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { background-color: #f8f9fa; font-family: 'Poppins', sans-serif; }
        .main-header { 
            background: linear-gradient(135deg, #17a2b8 0%, #007788 100%); 
            color: white; padding: 40px 0; margin-bottom: -50px; 
        }
        .card-table { 
            border: none; border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; 
        }
        .table thead { background-color: #f1f4f9; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1px; }
        .table td { vertical-align: middle; padding: 15px; }
        .btn-action { border-radius: 10px; padding: 8px 12px; transition: 0.3s; }
        .btn-action:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .badge-sks { background-color: #e0f7fa; color: #00838f; border-radius: 8px; padding: 5px 12px; }
    </style>
</head>
<body>

<div class="main-header">
    <div class="container text-center">
        <h1 class="fw-bold"><i class="fas fa-university me-2"></i>Management Mata Kuliah</h1>
        <p class="opacity-75">SI UGJ Cirebon | Rafly - 43240407</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            
            @if (session('success'))
                <div class="alert alert-info border-0 shadow-sm mb-4 alert-dismissible fade show">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card card-table">
                <div class="card-body p-0">
                    <div class="p-4 d-flex justify-content-between align-items-center border-bottom">
                        <h5 class="mb-0 fw-bold text-dark">Daftar Mata Kuliah SI</h5>
                        <div>
                            <a href="{{ route('matakuliah.create') }}" class="btn btn-info text-white btn-action">
                                <i class="fas fa-plus me-2"></i>Tambah MK
                            </a>
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary btn-action ms-2">
                                <i class="fas fa-users me-2"></i>Ke Data Mahasiswa
                            </a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr class="text-secondary">
                                    <th class="ps-4">Kode MK</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Semester</th>
                                    <th class="text-center">Opsi Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($matakuliahs as $mk)
                                <tr>
                                    <td class="ps-4 fw-bold text-primary">{{ $mk->kode_mk }}</td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    <td><span class="badge-sks">{{ $mk->sks }} SKS</span></td>
                                    <td><i class="fas fa-layer-group me-1 text-secondary"></i> Semester {{ $mk->semester }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('matakuliah.edit', $mk->kode_mk) }}" class="btn btn-light text-warning btn-sm btn-action border me-2" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <form action="{{ route('matakuliah.destroy', $mk->kode_mk) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light text-danger btn-sm btn-action border" 
                                                        onclick="return confirm('Hapus Mata Kuliah {{ $mk->nama_mk }}?')" title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5 text-muted">
                                        <i class="fas fa-book-open d-block mb-3 fs-1 opacity-25"></i>
                                        Belum ada data mata kuliah.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>