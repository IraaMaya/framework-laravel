<!DOCTYPE html>
<html>
<head>
    <title>If Statement Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">If Statement Example</h2>

            @if (isset($message))
                <div class="alert alert-info">
                    {{ $message }}
                </div>
            @endif

            <form action="/if-statement" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input_value">Enter 'yes' or 'no': </label>
                    <input type="text" class="form-control" id="input_value" name="input_value">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
