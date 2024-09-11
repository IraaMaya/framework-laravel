<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <header>
            <h1>@yield('header', 'Welcome to My Application')</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-4">
        <p>&copy; 2024 My Application</p>
    </footer>
    </div>
</body>
</html>

