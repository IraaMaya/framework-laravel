<!DOCTYPE html>
<html>
<head>
    <title>Success Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center">Form Submitted Successfully</h2>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                 @endif
         <a href="/page" class="btn btn-primary">Back to Form</a>
        </div>
    </div>
</div>
</body>
</html>
