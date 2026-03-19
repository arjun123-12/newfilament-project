<div class="top-bar top-bar-sticky">
    <div class="top-bar-left">
        <span>
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                <circle cx="12" cy="10" r="3"></circle>
            </svg>
            Serving All Over Ontario
        </span>
        <span>
            <svg viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
            Mon–Sun: 7am – 9pm
        </span>
    </div>
    <div class="top-bar-right">
        <span>
            <svg viewBox="0 0 24 24" fill="#F59332">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
            </svg>
            5-Star Rated
        </span>
        <div class="top-bar-sep"></div>
        <a href="#" class="top-bar-link">Book Online →</a>
    </div>
</div>
<header class="site-header" id="site-header">
    <div class="header-inner">
        <a href="#" class="logo">
            <img src="{{ asset('assets/images/junkdrop-logo.png') }}" alt="logo" height="50">

        </a>
        <nav class="nav-desktop">
            <a href="{{ route('home') }}" class="nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-link">About Us</a>
            <div class="nav-dropdown">
                <button class="nav-link nav-dropdown-trigger">Services
                    <svg class="dropdown-caret" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('service')}}">Residential Removal</a></li>
                    <li><a href="#">Commercial Removal</a></li>
                    <li><a href="#">Construction Debris</a></li>
                    <li><a href="#">Appliance Removal</a></li>
                    <li><a href="#">Furniture Haul-Away</a></li>
                </ul>
            </div>
            <a href="#" class="nav-link">Blogs</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
        </nav>

        <div class="header-right">
            <a href="tel:+11234567890" class="phone-link">
                <div class="phone-icon-wrap">
                    <svg viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.7 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.65 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <div>

                    <div class="phone-number">+1-123 456 789</div>
                </div>
            </a>

            <div class="header-sep"></div>

            <a href="#" class="cta-btn">
                Free Quote
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>

        <button class="hamburger" id="hamburger" aria-label="Open menu"><span></span><span></span><span></span></button>
    </div>
    <div class="nav-mobile" id="nav-mobile">
        <nav>
            <a href="#" class="mob-link">Home</a>
            <a href="#" class="mob-link">About Us</a>
            <a href="#" class="mob-link">Services</a>
            <a href="#" class="mob-link">Blogs</a>
            <a href="#" class="mob-link">Contact Us</a>
            <a href="tel:+11234567890" class="mob-link mob-phone">+1-123456789</a>
            <a href="#" class="btn-cta mob-cta">Get Free Quote</a>
        </nav>
    </div>
</header>