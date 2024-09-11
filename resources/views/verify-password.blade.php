<!DOCTYPE html>
<html>
<head>
    <title>Verify Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Verify Password</h2>

            @if (isset($message))
                <div class="alert alert-info">
                    {{ $message }}
                </div>
            @endif

            <form action="/verify-password" method="POST">
                @csrf
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Verify</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>