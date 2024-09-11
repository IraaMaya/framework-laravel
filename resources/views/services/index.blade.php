<!DOCTYPE html>
<html>
<head>
    <title>Service List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Service List</h1>

        <form method="GET" action="{{ route('services.index') }}" class="mb-4">
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" class="form-control" value="{{ request('category') }}">
            </div>
            <div class="form-group">
                <label for="min_price">Min Price</label>
                <input type="number" step="0.01" name="min_price" id="min_price" class="form-control" value="{{ request('min_price') }}">
            </div>
            <div class="form-group">
                <label for="max_price">Max Price</label>
                <input type="number" step="0.01" name="max_price" id="max_price" class="form-control" value="{{ request('max_price') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->category }}</td>
                        <td>${{ number_format($service->price, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>