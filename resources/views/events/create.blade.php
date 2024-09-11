<!DOCTYPE html>
<html>
<head>
    <title>Buat Acara Baru</title>
</head>
<body>
    <h1>Buat Acara Baru</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="name">Nama Acara:</label>
        <input type="text" name="name" id="name">
        <label for="date">Tanggal Acara:</label>
        <input type="date" name="date" id="date">
        <label for="location">Lokasi Acara:</label>
        <input type="text" name="location" id="location">
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
