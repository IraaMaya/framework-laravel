<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Names</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Contact Names List</h1>
        <ul class="list-group">
            @foreach($names as $name)
                <li class="list-group-item">{{ $name }}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>
