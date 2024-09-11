<!DOCTYPE html>
<html>
<head>
    <title>Generate Password Hash</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Generate Password Hash</h2>

            @if (session('hashedPassword'))
                <div class="alert alert-info">
                    <p><strong>Generated Hash:</strong></p>
                    <pre>{{ session('hashedPassword') }}</pre>
                </div>
            @endif

            <form action="/generate-hash" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Generate Hash</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>