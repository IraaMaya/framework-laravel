<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>My Laravel App</h1>
        </header>

        <nav>
            <!-- Menu navigasi-->
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
        </footer>
    </div>
</body>
</html> 

