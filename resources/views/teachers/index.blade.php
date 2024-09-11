<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Teacher List</title>
</head>
<body>
<div class="container mt-5">
    <h1>Teacher List</h1>

    <form method="GET" action="{{ route('teachers.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="{{ request('subject') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Years of Experience</th>
            </tr>
        </thead>
        <tbody>
            @forelse($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->subject }}</td>
                    <td>{{ $teacher->years_of_experience }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No teachers found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>