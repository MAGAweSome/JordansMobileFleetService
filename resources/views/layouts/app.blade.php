<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordans Mobile Fleet Service</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #E8743B;
            --dark-orange: #A35A33;
            --light-orange: #E88349;
            --grey: #8E8E8E;
            --dark-grey: #2f2f2f;
            --black: #0f0f0f;
            --muted-text: #e8e8e8;
        }
        /* ensure root font fallback if Google Fonts blocked */
        html { font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="site-container">
        <nav class="navbar">
            <div class="container">
                
                <div class="navbar-brand">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Jordans Mobile Fleet Service Logo" class="logo">
                    </a>
                </div>

                <ul class="desktop-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('sales') }}">Services</a></li>
                    <li><a href="{{ route('company') }}">Company</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>

                <div class="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>

        <div class="mobile-nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('sales') }}">Sales</a></li>
                <li><a href="{{ route('company') }}">Company</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        @yield('content')
    </div>

    <footer class="main-footer">
        <div class="container">
            <div style="display:flex; gap:20px; align-items:center; justify-content:space-between; flex-wrap:wrap;">
                <div style="min-width:220px;">
                    <strong>Jordan's Mobile Fleet Service</strong>
                    <div style="margin-top:6px; font-size:0.95rem; color:#cfcfcf">&copy; {{ date('Y') }} Jordan's Mobile Fleet Service</div>
                </div>

                <div style="display:flex; gap:18px; flex-wrap:wrap; align-items:center;">
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('sales') }}">Services</a>
                    <a href="{{ route('company') }}">Company</a>
                </div>

                <div style="min-width:220px; text-align:right;">
                        <div style="font-weight:700; color:var(--primary);"><a href="tel:+12269793659" style="color:var(--primary); text-decoration:none;">(226) 979-3659</a></div>
                        <div style="margin-top:6px;"><a href="mailto:Admin@jordansmobilefleetservice.com">Admin@jordansmobilefleetservice.com</a></div>
                </div>
            </div>
            <div style="margin-top:12px; text-align:center; color:#bdbdbd;">
                    <a href="https://www.instagram.com/jordans_mobile" target="_blank" rel="noopener noreferrer" style="margin-right:8px; color:inherit;"><i class="fab fa-instagram"></i> Jordans Mobile Fleet Service</a>
            </div>
        </div>
    </footer>

    <script>
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const mobileNav = document.querySelector('.mobile-nav');

        hamburgerMenu.addEventListener('click', () => {
            hamburgerMenu.classList.toggle('active');
            mobileNav.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!mobileNav.contains(e.target) && !hamburgerMenu.contains(e.target)) {
                mobileNav.classList.remove('active');
                hamburgerMenu.classList.remove('active');
            }
        });
    </script>

</body>
</html>