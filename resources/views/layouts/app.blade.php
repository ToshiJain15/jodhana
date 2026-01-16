<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jodhana Trip Advisor</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div id="app">
        <nav class="main-nav" id="mainNav">
            <a class="logo" href="{{ url('/') }}">JODHANA</a>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/places') }}" class="{{ Request::is('places') ? 'active' : '' }}">Places</a></li>
                <li><a href="{{ url('/hotel') }}" class="{{ Request::is('hotel') ? 'active' : '' }}">Hotels</a></li>
                <li><a href="{{ url('/details') }}" class="{{ Request::is('details') ? 'active' : '' }}">Cabs & Bus</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('/contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                
                @guest
                    <li><a href="{{ url('/signin') }}">Sign In</a></li>
                    <li><a href="{{ url('/signup') }}">Sign Up</a></li>
                @else
                    <li class="dropdown">
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-content">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Jodhana</h4>
                    <p>Discover the secrets of the Blue City with our curated trip advisor.</p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ url('/places') }}">Places to Visit</a></li>
                        <li><a href="{{ url('/hotel') }}">Best Hotels</a></li>
                        <li><a href="{{ url('/details') }}">Transportation</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Sukhram Nagar, Jodhpur</li>
                        <li><i class="fas fa-phone"></i> +91-7014265827</li>
                        <li><i class="fas fa-envelope"></i> info@jodhana.com</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 3rem; color: var(--text-muted); font-size: 0.8rem;">
                &copy; {{ date('Y') }} Jodhana Trip Advisor. All rights reserved.
            </div>
        </footer>
    </div>

    <script>
        window.onscroll = function() {
            var nav = document.getElementById('mainNav');
            if (window.pageYOffset > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        };
    </script>
</body>
</html>
