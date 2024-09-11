<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Album</h2>
        <a class="btn btn-success mb-3" href="{{ route('albums.create') }}">Tambah Album</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Artis</th>
                    <th>Tahun Rilis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $album->title }}</td>
                        <td>{{ $album->artist }}</td>
                        <td>{{ $album->release_year }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('albums.edit', $album->id) }}">Edit</a>
                            <form action="{{ route('albums.destroy', $album->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                <input type="hidden" name="_method" value="POST">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>