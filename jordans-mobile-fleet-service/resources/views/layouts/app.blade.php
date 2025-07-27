<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordans Mobile Fleet Service</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#home">
                <img src="{{ asset('images/logo.png') }}" alt="Jordans Mobile Fleet Service Logo" class="logo">
            </a>
        </div>
        <ul>
            <li><a href="#about-us">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class="main-footer">
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} Jordans Mobile Fleet Service. All rights reserved.</p>
            <p>Built with &#10084; in Woodstock, Ontario, Canada.</p>
        </div>
    </footer>

</body>
</html>