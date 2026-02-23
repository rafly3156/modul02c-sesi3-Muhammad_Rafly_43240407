<!DOCTYPE html>
<html lang="id">
<head>
    <title>Katalog Perpustakaan - IKMI</title>
    <style>
        body { font-family: 'Poppins', sans-serif; padding: 40px; background-color: #f0f2f5; }
        .container { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); max-width: 500px; }
        h1 { color: #1a73e8; font-size: 24px; border-bottom: 2px solid #1a73e8; padding-bottom: 10px; }
        ul { list-style-type: none; padding: 0; }
        li { background: #e8f0fe; margin: 10px 0; padding: 12px; border-radius: 8px; font-weight: 500; color: #1967d2; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Koleksi Perpustakaan IKMI</h1>
        <ul>
            @foreach($data_buku as $buku)
                <li>📖 {{ $buku }}</li>
            @endforeach
        </ul>
        <p style="font-size: 12px; color: #666; margin-top: 20px;">
            Tip: Akses <strong>/koleksi/101</strong> untuk melihat detail buku.
        </p>
    </div>
</body>
</html>