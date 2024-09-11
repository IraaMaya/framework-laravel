<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Acara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Acara</h1>
        <div class="list-group">
            @foreach($acaras as $acara)
                <a href="#" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">{{ $acara['nama'] }}</h5>
                    <p class="mb-1">{{ \Illuminate\Support\Str::limit($acara['deskripsi'], 100) }}</p>
                    <small>Tanggal: {{ \Carbon\Carbon::parse($acara['tanggal'])->format('d M Y') }}</small>
                </a>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $acaras->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>