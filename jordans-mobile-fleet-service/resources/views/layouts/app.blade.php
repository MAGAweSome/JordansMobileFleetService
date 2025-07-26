<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordans Mobile Fleet Service</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>