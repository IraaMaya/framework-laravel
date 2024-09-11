<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Contains Result</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Result</h3>
                </div>
                <div class="card-body">
                    <p>String: <strong>{{ $string }}</strong></p>
                    <p>Substring: <strong>{{ $substring }}</strong></p>
                    <p>
                        Result: 
                        @if($contains)
                            <span class="text-success">The string contains the substring.</span>
                        @else
                            <span class="text-danger">The string does not contain the substring.</span>
                        @endif
                    </p>
                    <a href="{{ route('string.index') }}" class="btn btn-primary">Check Again</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
