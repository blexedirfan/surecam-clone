<nav class="navbar">
    <div class="logo-container">
        <div class="navbar-brand">
            <a href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Blu Global logo featuring modern typography with gradient blue background" class="logo">
            </a>
        </div>
    </div>

    <div class="links-container d-flex">
        <button class="navbar-toggler" id="navbar-toggler">
            &#9776; <!-- Hamburger icon -->
        </button>
        <ul class="navbar-menu" id="navbar-menu">
            <li class="dropdown">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="dropdown mega-dropdown">
                <a href="#">Products</a>
                <div class="mega-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="dropdown-title" style="text-align: left;color: #35adee;">Products</h2>
                                <p style="font-size: 24px;text-decoration:none">Improve fleet safety, reduce insurance
                                    claims costs,
                                    and boost field team productivity with an
                                    easy and affordable fleet dash camera system.</p>
                            </div>
                            <div class="col-md-4">
                                <h2 class="dropdown-title">Camera options</h2>
                                <ul>
                                    <li><a href="{{ route('products') }}">Front facing dash cams</a></li>
                                    <li><a href="{{ route('products') }}">Rear facing dash cams</a></li>
                                    <li><a href="{{ route('products') }}">Dual facing dash cams</a></li>
                                    <li><a href="{{ route('products') }}">Interior dash cams</a></li>
                                    <li><a href="{{ route('products') }}">Waterproof dash cams</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h2 class="dropdown-title">Browse By Feature</h2>
                                <ul>
                                    <li><a href="{{ route('products') }}">GPS Tracking</a></li>
                                    <li><a href="{{ route('products') }}">Cloud Storage</a></li>
                                    <li><a href="{{ route('products') }}">Live Streaming</a></li>
                                    <li><a href="{{ route('products') }}">Fuel Monitoring</a></li>
                                    <li><a href="{{ route('products') }}">Temperature Monitoring</a></li>
                                    <li><a href="{{ route('products') }}">AI + Driver Coaching</a></li>
                                    <li><a href="{{ route('products') }}">MDVR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li class="dropdown">
                <a href="{{ route('about') }}">About</a>
            </li>
            <li class="dropdown">
                <a href="{{ route('services') }}">Services</a>
            </li>
            <li class="dropdown">
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <button class="navbar-cta demo-btn"><a style="color: #fff; text-decoration: none;text-style:none"
                href="{{ route('pricing') }}">Get a Demo</a></button>
    </div>
</nav>
