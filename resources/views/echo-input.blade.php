<!DOCTYPE html>
<html>
<head>
    <title>Echo Input Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Echo Input Data</h2>

            @if (isset($inputData))
                <div class="alert alert-info">
                    <h4>Input Data:</h4>
                    @if ($inputData['name'])
                        <p><strong>Name:</strong> {{ $inputData['name'] }}</p>
                    @endif
                    @if ($inputData['email'])
                        <p><strong>Email:</strong> {{ $inputData['email'] }}</p>
                    @endif
                    @if ($inputData['message'])
                        <p><strong>Message:</strong> {{ $inputData['message'] }}</p>
                    @endif
                </div>
            @endif

            <form action="/echo-input" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

