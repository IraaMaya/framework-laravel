<!DOCTYPE html>
<html>
<head>
    <title>Daftar Acara</title>
</head>
<body>
    <h1>Daftar Acara</h1>
    <a href="{{ route('events.create') }}">Buat Acara Baru</a>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach ($events as $event)
            <li>{{ $event->name }} - {{ $event->date }} - {{ $event->location }}</li>
        @endforeach
    </ul>
</body>
</html>
