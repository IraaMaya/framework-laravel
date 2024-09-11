<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Session</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h1>Check Session Item</h1>

    @if ($sessionHasItem)
        <div class="alert alert-info">
            Session item exists.
        </div>
    @else
        <div class="alert alert-warning">
            Session item does not exist.
        </div>
    @endif

    <a href="{{ route('set.session') }}" class="btn btn-primary mt-3">Set Session Item</a>
</div>
</body>
</html>