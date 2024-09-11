<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Manage Cart Items</h2>

        {{-- Menampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form untuk menambahkan item ke sesi --}}
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="item" class="form-label">Item</label>
                <input type="text" name="item" class="form-control" id="item" placeholder="Enter item">
            </div>
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>

        {{-- Menampilkan item yang ada di sesi --}}
        @if($item)
            <div class="mt-4">
                <h4>Cart Item: {{ $item }}</h4>
                {{-- Form untuk menghapus item dari sesi --}}
                <form action="{{ route('cart.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Remove from Cart</button>
                </form>
            </div>
        @else
            <p class="mt-4">No item in cart.</p>
        @endif
    </div>
</body>
</html>