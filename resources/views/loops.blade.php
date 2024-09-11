<!DOCTYPE html>
<html>
<head>
    <title>Loops Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Days of the Week</h2>
            <ul class="list-group">
                @foreach ($daysOfWeek as $day)
                    <li class="list-group-item">{{ $day }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</body>
</html>

