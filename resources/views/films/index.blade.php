<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Film</title>
</head>
<body>
<div class="container mt-5">
    <h1>Daftar Film</h1>

    <form method="GET" action="{{ route('films.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="genre" class="form-control" placeholder="Genre" value="{{ request('genre') }}">
            </div>
            <div class="col-md-4">
                <input type="text" name="release_year" class="form-control" placeholder="Tahun Rilis" value="{{ request('release_year') }}">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun Rilis</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($films as $film)
            <tr>
                <td>{{ $film->title }}</td>
                <td>{{ $film->genre }}</td>
                <td>{{ $film->release_year }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>