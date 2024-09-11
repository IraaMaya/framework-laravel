<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Profile Page</h2>
            <p>Profile ID: {{ $id }}</p>
            <p>Name: {{ $name }}</p>
            <p>Address: {{ $address }}</p>
            <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
        </div>
    </div>
</div>
</body>
</html>