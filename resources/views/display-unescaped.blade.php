<!DOCTYPE html>
<html>
<head>
    <title>Display Unescaped Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Display Unescaped Data</h2>

            @if (isset($rawHtml))
                <div class="alert alert-info">
                    <h4>Unescaped HTML Content:</h4>
                    {!! $rawHtml !!}
                </div>
            @endif

            <form action="/display-unescaped" method="POST">
                @csrf
                <div class="form-group">
                    <label for="raw_html">Raw HTML Content:</label>
                    <textarea class="form-control" id="raw_html" name="raw_html" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

