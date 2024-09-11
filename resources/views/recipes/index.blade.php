<!-- resources/views/recipes/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginate Recipes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Recipes</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Ingredients</th>
            <th>Instructions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipesPaginated as $recipe)
            <tr>
                <td>{{ $recipe['id'] }}</td>
                <td>{{ $recipe['name'] }}</td>
                <td>{{ $recipe['ingredients'] }}</td>
                <td>{{ $recipe['instructions'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Paginasi -->
    <div class="d-flex justify-content-center">
        {{ $recipesPaginated->links('pagination::bootstrap-4') }}
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>