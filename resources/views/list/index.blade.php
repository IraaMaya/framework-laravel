<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">List</h1>
        <form action="{{ route('list.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="item">Add Item</label>
                <input type="text" class="form-control" id="item" name="item" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        <h2 class="mt-5">Item List</h2>
        <ul class="list-group">
            @foreach ($items as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>