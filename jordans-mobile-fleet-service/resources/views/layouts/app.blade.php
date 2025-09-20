<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordans Mobile Fleet Service</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        :root {
            --dark-orange: #A35A33;
            --light-orange: #E88349;
            --grey: #8E8E8E;
            --dark-grey: #333333;
            --black: #0f0f0f;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Jordans Mobile Fleet Service Logo" class="logo">
            </a>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('sales') }}">Sales</a></li>
            <li><a href="{{ route('company') }}">Company</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class="main-footer">
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} Jordans Mobile Fleet Service. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>