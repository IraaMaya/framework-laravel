<!DOCTYPE html>
<html>
<head>
    <title>Session Data</title>
    <!-- Tambahkan link ke Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Session</h1>

        <!-- Menampilkan pesan notifikasi -->
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Menampilkan data session -->
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $sessionData['id'] }}</p>
                <p><strong>Name:</strong> {{ $sessionData['name'] }}</p>
            </div>
        </div>

        <!-- Tombol untuk set dan delete session data -->
        <a href="{{ route('session.set') }}" class="btn btn-primary mt-3">Set Session Data</a>
        <a href="{{ route('session.delete') }}" class="btn btn-danger mt-3">Delete Session Data</a>
    </div>

    <!-- Tambahkan script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>