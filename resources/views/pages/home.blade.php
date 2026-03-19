@extends('layouts.app')

@section('title','Home')

@section('content')





<section class="hero">
    <div class="hero-bg-img"> <img src="{{ asset('assets/images/home-banner.webp') }}" alt="Junk removal truck" class="hero-image"></div>
    <div class="hero-accent"></div>
    <div class="hero-content">
        <div class="hero-eyebrow">
            <div class="eyebrow-bar"></div>
            <span class="eyebrow-label">Drop the Junk. Keep the Space.</span>
        </div>
        <h1 class="hero-title">
            Residential & <br>Commercial <em>Junk</em><br><em>Removal</em> Services
        </h1>
        <p class="hero-desc">
            Fast, reliable, and eco-conscious junk removal — handled by professionals who care. From a single item to a full property cleanout.
        </p>
        <div class="hero-actions">
            <a href="#" class="btn-hero-primary">
                Get Free Quote
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="#" class="btn-hero-outline">
                <svg viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                See How It Works
            </a>
        </div>

    </div>
</section>


<!-- ABOUT -->
<section class="section-pad theme-light">
    <div class="container about-grid">
        <div class="about-text">





            <div class="sa-header">
                <div class="sa-badge">
                    <div class="badge-dot"></div>
                    About Junk Drop
                </div>


                <h2 class="sa-title">
                    Clear Space Clear Mind <span class="accent">JunkDrop</span>
                </h2>
                <p class="sa-subtitle">
                    At JunkDrop, we believe junk removal should be simple, stress-free, and reliable.
                </p>
            </div>

            <p>Tired of junk taking over your space anywhere in Canada? Junk Drop handles all your junk removal needs coast to coast, from everyday household clutter and beat-up furniture to appliances, yard mess, and building site leftovers – done fast and with care. Our crews sort and recycle nearly 90% of what we haul, so less ends up buried in landfills, and you get a fresh start.
            </p>

            <!-- <p>We're committed to eco-friendly disposal—recycling and donating what we can so less ends up in landfills. Same-day service available.</p> -->
            <a href="#" class="btn-outline">Learn More About Us</a>
        </div>
        <div class="about-image">
            <img src="{{ asset('assets/images/about-img.webp') }}" alt="JunkDrop Team" class="about-img">
        </div>
        <div class="about-stats">
            <div class="stat-card">
                <div class="stat-icon"><svg viewBox="0 0 40 40" fill="none">
                        <path d="M10 14h20M15 14v-3h10v3M13 14l2 16h10l2-16" stroke="#F97316" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="stat-number">550+</div>
                <div class="stat-label">Clean-outs Done Right</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon"><svg viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="12" stroke="#F97316" stroke-width="2.2" />
                        <path d="M20 14v6l4 3" stroke="#F97316" stroke-width="2" stroke-linecap="round" />
                    </svg></div>
                <div class="stat-number">98%</div>
                <div class="stat-label">On-Time Arrivals</div>
            </div>
            <div>
                <p> We're fully licensed to Canadian rules, ready for same-day calls in big cities, and always up front with prices based on how much there is—no tricks or extras. Whether clearing a home in Toronto or a business lot in Vancouver, we make waste management service easy. Give us a call now for smart, green junk pickup that works around your day.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->













<x-service-section />


<!-- WHY CHOOSE US -->
<x-why-choose-us-section />

<!-- HOW IT WORKS -->
<x-steps-section />





<section class=" section-pad sa-section">
    <div class="sa-inner">

        <!-- ── HEADER ── -->
        <div class="sa-header">
            <div class="sa-badge">
                <div class="badge-dot"></div>
                Service Areas
            </div>


            <h2 class="sa-title">
                Covering All Major <span class="accent">Cities Across Ontario</span>
            </h2>
            <p class="sa-subtitle">
                Trusted local expertise, delivered across the province's most vibrant communities.
            </p>
        </div>

        <!-- ── CITY GRID ── -->
        <div class="sa-grid">

            <!-- TORONTO -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-1.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Toronto</div>
                    <div class="city-tag">Primary</div>
                </div>
            </div>

            <!-- MARKHAM -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-2.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Markham</div>
                    <div class="city-tag">Primary</div>
                </div>
            </div>

            <!-- BRAMPTON -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-3.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Brampton</div>
                    <div class="city-tag">Primary</div>
                </div>
            </div>

            <!-- VAUGHAN -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-5.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Vaughan</div>
                    <div class="city-tag">Active</div>
                </div>
            </div>

            <!-- OSHAWA -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-6.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Oshawa</div>
                    <div class="city-tag">Active</div>
                </div>
            </div>

            <!-- BARRIE -->
            <div class="city-card">
                <img src="{{ asset('assets/images/image-4.webp') }}" alt="Toronto" loading="lazy">
                <div class="card-overlay"></div>
                <div class="card-accent-line"></div>
                <div class="card-arrow">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="2" y1="12" x2="12" y2="2" />
                        <polyline points="5,2 12,2 12,9" />
                    </svg>
                </div>
                <div class="card-info">
                    <div class="city-name">Barrie</div>
                    <div class="city-tag">Active</div>
                </div>
            </div>

        </div>
        <!-- end grid -->

        <!-- FOOTER -->
        <div class="sa-footer">
            <div class="sa-divider"><span>And more locations</span></div>
            <p>Don't see your city? We're always expanding our coverage across Ontario.</p>
            <button class="btn-view-more">
                <span>View All Service Areas</span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="2" y1="8" x2="14" y2="8" />
                    <polyline points="9,3 14,8 9,13" />
                </svg>
            </button>
        </div>

    </div>

    </div>
</section>



<!-- TESTIMONIALS -->
<section class="section-pad bg-dark">
    <div class="container">

        <div class="sa-header">
            <div class="sa-badge">
                <div class="badge-dot"></div>
                What Clients Say
            </div>


            <h2 class="sa-title">
                Trusted by <span class="accent">Thousands</span>
            </h2>
            <p class="sa-subtitle">
                Full-service junk removal for every situation — residential, commercial, and everything in between.
            </p>
        </div>

        <div class="testimonials-grid">
            <div class="review-card">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">"JunkDrop cleared out our entire garage in under two hours. The team was professional, fast, and left the place spotless. Highly recommend!"</p>
                <div class="review-author">
                    <div class="review-avatar">S</div>
                    <div><strong>Sarah M.</strong><span>Homeowner</span></div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">"We use JunkDrop for all our commercial properties. Reliable, affordable, and always on time. They've never let us down."</p>
                <div class="review-author">
                    <div class="review-avatar">D</div>
                    <div><strong>David R.</strong><span>Property Manager</span></div>
                </div>
            </div>
            <div class="review-card">
                <div class="review-stars">★★★★★</div>
                <p class="review-text">"Perfect for post-renovation cleanup. They handle everything from drywall to old fixtures. Made my job so much easier."</p>
                <div class="review-author">
                    <div class="review-avatar">L</div>
                    <div><strong>Lisa T.</strong><span>Interior Designer</span></div>
                </div>
            </div>
        </div>
    </div>

</section>





<x-faqs-section />



@endsection