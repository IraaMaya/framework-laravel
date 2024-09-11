<!DOCTYPE html>
<html>
<head>
    <title>Check Input Value</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Check Input Value</h2>

            @if (isset($message))
                <div class="alert alert-info">
                    {{ $message }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/check-input" method="POST">
                @csrf
                <div class="form-group">
                    <label for="input_value">Input Value:</label>
                    <input type="text" class="form-control" id="input_value" name="input_value" value="{{ old('input_value') }}">
                </div>
                <button type="submit" class="btn btn-primary">Check</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>