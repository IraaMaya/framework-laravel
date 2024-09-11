<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random String</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Generate Random String</h1>
        <form action="{{ route('generate.random.string') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="length">String Length</label>
                <input type="number" name="length" id="length" class="form-control" placeholder="Enter string length" value="16">
            </div>
            <button type="submit" class="btn btn-primary">Generate</button>
        </form>

        @isset($randomString)
        <div class="mt-3">
            <h4>Generated String:</h4>
            <p class="alert alert-success">{{ $randomString }}</p>
        </div>
        @endisset
    </div>
</body>
</html>