<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Order Summary</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Revenue</h5>
                <p class="card-text">Total pendapatan dari semua pesanan: <strong>${{ number_format($totalRevenue, 2) }}</strong></p>
            </div>
        </div>
    </div>
</body>
</html>