<nav class="navbar">
    <div class="logo-container">
        <div class="navbar-brand">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="SureCam Logo" class="logo">
            </a>
        </div>
    </div>

    <div class="links-container d-flex justify-content-end align-items-center">
        <button class="navbar-toggler" id="navbar-toggler">
            &#9776; <!-- Hamburger icon -->
        </button>
        <ul class="navbar-menu" id="navbar-menu">
            <li class="dropdown">
                <a href="#">Solutions</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Fleet Safety</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Compliance</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Products</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Dash Cameras</a></li>
                    <li><a href="#">Platform</a></li>
                    <li><a href="#">Integrations</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">Resources</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Prices</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <button class="navbar-cta demo-btn">Get a Demo</button>
    </div>
</nav>
