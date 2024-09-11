<!DOCTYPE html>
<html>
<head>
    <title>URL Helper Example</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">
    <h1>URL Helper Example</h1>

    <p>Basic URL: <a href="{{ $basicUrl }}">{{ $basicUrl }}</a></p>
    <p>Named Route URL: <a href="{{ $namedRouteUrl }}">{{ $namedRouteUrl }}</a></p>
    <p>Controller Action URL: <a href="{{ $controllerActionUrl }}">{{ $controllerActionUrl }}</a></p>
    <p>Asset URL: <img src="{{ $assetUrl }}" alt="logoakn"></p>
</div>
</body>
</html>

