<html>
<head>
    <title>Retrieve Input Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Retrieve Input Data</h2>
            <form action="/retrieve-input" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <br>

            <div class="form-group mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <br>

            <div class="form-group mb-3">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <br>

            <div class="form-group mb-3">
                <label for="address">Address: </label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <br>

            <div class="form-group mb-3">
                <label for="message">Message:</label> <textarea class="form-control" id="message" name="message"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br><br>

        @if (isset($inputData))
        <div class="alert alert-info">
            <h4>All Input Data:</h4>
            <pre>{{ print_r($inputData, true) }}</pre>
        </div>
        @endif

    </div>
    </div>
</div>
</body>
</html>