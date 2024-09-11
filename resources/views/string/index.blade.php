<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Contains Check</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Check if String Contains Substring</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('string.check') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="string">String</label>
                            <input type="text" class="form-control" id="string" name="string" required>
                        </div>
                        <div class="form-group">
                            <label for="substring">Substring</label>
                            <input type="text" class="form-control" id="substring" name="substring" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Check</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
