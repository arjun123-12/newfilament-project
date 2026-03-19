@extends('layouts.app')

@section('title','Detail')

@section('content')

<x-hero />




<style>
    .jd-serv-container {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 20px;
    }

    .jd-serv-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    /* Responsive breakpoints */
    @media (max-width: 992px) {
        .jd-serv-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .jd-serv-grid {
            grid-template-columns: 1fr;
        }
    }

    .jd-serv-card {
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .jd-serv-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
    }

    .jd-serv-img-wrap {
        position: relative;
        height: 320px;
        overflow: hidden;
    }

    .jd-serv-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    .jd-serv-card:hover .jd-serv-img-wrap img {
        transform: scale(1.08);
        /* slight zoom on hover for premium feel */
    }

    /* Overlay semi-transparent dark gradient from bottom */
    .jd-serv-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 30px;
        width: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0) 100%);
        box-sizing: border-box;
        z-index: 10;
    }

    .jd-serv-num {
        color: #bd9b60;
        /* Elegant gold tone */
        font-size: 0.75rem;
        letter-spacing: 3px;
        margin-bottom: 12px;
        display: block;
        text-transform: uppercase;
    }

    .jd-serv-title {
        color: #ffffff;
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        font-weight: 500;
        margin: 0;
        line-height: 1.15;
        letter-spacing: -0.5px;
    }

    .jd-serv-body {
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .jd-serv-line {
        width: 30px;
        height: 1px;
        background-color: #bd9b60;
        margin-bottom: 25px;
    }

    .jd-serv-text {
        color: #777777;
        /* Softer, low-contrast text resembling the image */
        font-size: 0.95rem;
        line-height: 1.8;
        margin-top: 0;
        margin-bottom: 30px;
        font-weight: 300;
        flex-grow: 1;
    }

    .jd-serv-btn {
        text-decoration: none;
        color: #bd9b60;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        display: inline-flex;
        align-items: center;
        transition: color 0.3s ease;
        margin-top: auto;
        /* Push to bottom if description is short */
    }

    .jd-serv-btn span {
        margin-left: 12px;
        font-size: 1.2rem;
        transition: transform 0.3s ease;
        line-height: 1;
    }

    .jd-serv-btn:hover {
        color: #9e7f4c;
    }

    .jd-serv-btn:hover span {
        transform: translateX(6px);
    }
</style>
</head>

<body>

    @php
    $services = [
    [
    'title' => "Residential\nRemoval",
    'image' => "https://images.unsplash.com/photo-1581578731548-c64695cc6952?q=80&w=800&auto=format&fit=crop",
    'description' => "Clear out garages, basements, attics, and whole homes. We handle all types of household clutter with total discretion."
    ],
    [
    'title' => "Commercial\nRemoval",
    'image' => "https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop",
    'description' => "Office cleanouts, retail spaces, warehouses — swift and professional with minimal disruption to your operations."
    ],
    [
    'title' => "Construction\nDebris",
    'image' => "https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop",
    'description' => "Post-renovation cleanup, drywall, lumber, concrete, and all construction waste removed safely and responsibly."
    ],
    [
    'title' => "Estate\nCleanouts",
    'image' => "https://images.unsplash.com/photo-1628151015968-3a4429e9ef04?q=80&w=800&auto=format&fit=crop",
    'description' => "Respectful and thorough clearing of estates. We manage the process with care, organizing items for donation, recycling, or disposal."
    ],
    [
    'title' => "Furniture\nRemoval",
    'image' => "https://images.unsplash.com/photo-1538688525198-9b88f6f53126?q=80&w=800&auto=format&fit=crop",
    'description' => "Safe removal of heavy couches, wardrobes, and outdated furniture. We ensure items are donated or recycled whenever possible."
    ],
    [
    'title' => "Appliance\nRecycling",
    'image' => "https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=800&auto=format&fit=crop",
    'description' => "Eco-friendly disposal of refrigerators, washers, dryers, and other large appliances in compliance with local regulations."
    ],
    [
    'title' => "Yard Waste\nRemoval",
    'image' => "https://images.unsplash.com/photo-1592424001807-6ba4eb4f014e?q=80&w=800&auto=format&fit=crop",
    'description' => "Clearing branches, leaves, clippings, and old landscaping materials. Reclaim your outdoor space quickly and effortlessly."
    ],
    [
    'title' => "E-Waste\nDisposal",
    'image' => "https://images.unsplash.com/photo-1550009158-9ebf6d173cde?q=80&w=800&auto=format&fit=crop",
    'description' => "Secure and responsible recycling of old computers, TVs, and electronics. Data security and environmental safety guaranteed."
    ],
    [
    'title' => "Hot Tub\nRemoval",
    'image' => "https://images.unsplash.com/photo-1574681667084-5f28c2c62c3f?q=80&w=800&auto=format&fit=crop",
    'description' => "Full dismantling and hauling of old or unwanted hot tubs and spas from decks, patios, or backyards safely."
    ],
    [
    'title' => "Storage Unit\nCleanouts",
    'image' => "https://images.unsplash.com/photo-1587293852726-70cdb56c28ea?q=80&w=800&auto=format&fit=crop",
    'description' => "Stop paying rent for things you don't need. We'll empty your storage unit efficiently, sorting items as per your directions."
    ],
    [
    'title' => "Eviction\nCleanouts",
    'image' => "https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=800&auto=format&fit=crop",
    'description' => "Fast and reliable cleanout services for property managers and landlords returning properties to rent-ready condition."
    ],
    [
    'title' => "Shed\nDemolition",
    'image' => "https://images.unsplash.com/photo-1530982011887-3cc11cb858d9?q=80&w=800&auto=format&fit=crop",
    'description' => "Complete teardown and removal of dilapidated sheds, outbuildings, or playsets from your property."
    ],
    [
    'title' => "Carpet\nRemoval",
    'image' => "https://images.unsplash.com/photo-1580227296061-039c94801ed6?q=80&w=800&auto=format&fit=crop",
    'description' => "Pulling up and hauling away old, stained, or worn carpeting and padding as you prepare for flooring upgrades."
    ],
    [
    'title' => "Piano\nRemoval",
    'image' => "https://images.unsplash.com/photo-1552422535-c45813c61732?q=80&w=800&auto=format&fit=crop",
    'description' => "Heavy lifting with extreme care. We safely remove upright or grand pianos from your home without damaging floors."
    ],
    [
    'title' => "Disaster\nCleanup",
    'image' => "https://images.unsplash.com/photo-1517424597022-4ffda8501235?q=80&w=800&auto=format&fit=crop",
    'description' => "Prompt removal of water-logged or fire-damaged furniture, drywall, and belongings to help jumpstart your restoration process."
    ]
    ];
    @endphp

    <div class="jd-serv-container">
        <div class="jd-serv-grid">
            @foreach($services as $index => $service)
            <div class="jd-serv-card">
                <div class="jd-serv-img-wrap">
                    <img src="{{ $service['image'] }}" alt="Service Image">
                    <div class="jd-serv-overlay">
                        <!-- Format number as 01 / 15 -->
                        <span class="jd-serv-num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad(count($services), 2, '0', STR_PAD_LEFT) }}</span>
                        <!-- Replace newlines with <br> for blade output -->
                        <h3 class="jd-serv-title">{!! nl2br(e($service['title'])) !!}</h3>
                    </div>
                </div>
                <div class="jd-serv-body">
                    <div class="jd-serv-line"></div>
                    <p class="jd-serv-text">{{ $service['description'] }}</p>
                    <a href="#" class="jd-serv-btn">
                        Learn More <span>&rarr;</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>












    <x-steps-section />

    <x-recycle-section />
    <x-commercial />

    <x-faqs-section />
    @endsection