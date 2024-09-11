<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Upload File</h2>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @if (session('file'))
                    <div class="alert alert-info">
                        <p>Uploaded File Path: {{ session('file') }}</p>
                    </div>
                @endif
            @endif

            <form action="/upload-file" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Choose File:</label>
                    <input type="file" class="form-control" id="file" name="file">
                    @if ($errors->has('file'))
                        <div class="alert alert-danger mt-2">
                            {{ $errors->first('file') }}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>