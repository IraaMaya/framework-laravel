<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Album</h2>
        <a class="btn btn-primary mb-3" href="{{ route('albums.index') }}">Kembali</a>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('albums.update', $album->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Album</label>
                <input type="text" name="title" class="form-control" value="{{ $album->title }}" required>
            </div>
            <div class="mb-3">
                <label for="artist" class="form-label">Artis</label>
                <input type="text" name="artist" class="form-control" value="{{ $album->artist }}" required>
            </div>
            <div class="mb-3">
                <label for="release_year" class="form-label">Tahun Rilis</label>
                <input type="number" name="release_year" class="form-control" value="{{ $album->release_year }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>