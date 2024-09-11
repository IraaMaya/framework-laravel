<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Music List</h1>
        <form method="GET" action="{{ route('music.index') }}">
            <div class="form-group">
                <label for="order_by">Order By:</label>
                <select name="order_by" id="order_by" class="form-control">
                    <option value="title" {{ request('order_by') == 'title' ? 'selected' : '' }}>Title</option>
                    <option value="artist" {{ request('order_by') == 'artist' ? 'selected' : '' }}>Artist</option>
                    <option value="release_year" {{ request('order_by') == 'release_year' ? 'selected' : '' }}>Release Year</option>
                    <option value="duration" {{ request('order_by') == 'duration' ? 'selected' : '' }}>Duration</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Sort</button>
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Release Year</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                @foreach($music as $track)
                    <tr>
                        <td>{{ $track->title }}</td>
                        <td>{{ $track->artist }}</td>
                        <td>{{ $track->release_year }}</td>
                        <td>{{ $track->duration }} min</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

