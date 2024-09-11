<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Home Page</h1>

        <!-- Menyertahan header sub-view-->
        @include('partials.header')

        <div class="content">
            <p>This is the main content of the home page.</p>
        </div>

        <!-- Menyertakan footer sub-view -->
        @include('partials.footer')
    </div>
</body>
</html>