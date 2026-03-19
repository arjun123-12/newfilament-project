@extends('layouts.app')

@section('title','City')

@section('content')

<x-hero />

@php
$cities = [
[ 'name' => 'Toronto', 'img' => 'https://images.unsplash.com/photo-1517090504586-fde19ea6066f?w=600&q=80', 'featured' => true ],
[ 'name' => 'Mississauga', 'img' => 'https://images.unsplash.com/photo-1609462642313-31f43a4bc45e?w=600&q=80' ],
[ 'name' => 'Brampton', 'img' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600&q=80' ],
[ 'name' => 'Markham', 'img' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&q=80' ],
[ 'name' => 'Vaughan', 'img' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=600&q=80' ],
[ 'name' => 'Oakville', 'img' => 'https://images.unsplash.com/photo-1444723121867-7a241cacace9?w=600&q=80' ],
[ 'name' => 'Burlington', 'img' => 'https://images.unsplash.com/photo-1501854140801-50d01698950b?w=600&q=80' ],
[ 'name' => 'Hamilton', 'img' => 'https://images.unsplash.com/photo-1493246507139-91e8fad9978e?w=600&q=80' ],
[ 'name' => 'Oshawa', 'img' => 'https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?w=600&q=80' ],
[ 'name' => 'Barrie', 'img' => 'https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=600&q=80' ],
[ 'name' => 'Niagara Falls', 'img' => 'https://images.unsplash.com/photo-1489447068241-b3490214e879?w=600&q=80' ],
[ 'name' => 'St. Catharines', 'img' => 'https://images.unsplash.com/photo-1505118380757-91f5f5632de0?w=600&q=80' ],
[ 'name' => 'Kitchener', 'img' => 'https://images.unsplash.com/photo-1519608425089-7f3bfa6f6bb8?w=600&q=80' ],
[ 'name' => 'Guelph', 'img' => 'https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=600&q=80' ],
[ 'name' => 'London', 'img' => 'https://images.unsplash.com/photo-1494887205043-c5f291293cf6?w=600&q=80' ],
[ 'name' => 'Brantford', 'img' => 'https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?w=600&q=80' ],
[ 'name' => 'Richmond Hill', 'img' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80' ],
];
@endphp

<div class="cities-page">
    <!-- Subtle paper texture overlay -->
    <div class="paper-texture"></div>

    <!-- Decorative corner ornaments -->


    <div class="content-container">

        <!-- Header -->
        <div class="header-section animate-on-scroll">
            <!-- Service badge -->
            <div class="service-badge">
                <div class="badge-line"></div>
                <span class="badge-text">Service Areas</span>
                <div class="badge-line"></div>
            </div>

            <!-- Main Title -->
            <h1 class="main-title">
                Covering All Major <br class="hidden sm:block" />
                <em>Cities Across Ontario</em>
            </h1>

            <!-- Decorative divider -->
            <div class="decorative-divider">
                <div class="divider-line right"></div>
                <svg width="14" height="14" viewBox="0 0 14 14">
                    <path d="M7 0 L8.5 5.5 L14 7 L8.5 8.5 L7 14 L5.5 8.5 L0 7 L5.5 5.5 Z" fill="#c9a96e" />
                </svg>
                <div class="divider-line left"></div>
            </div>

            <!-- Subtitle -->
            <p class="subtitle">
                Delivering trusted service to communities across the Greater Ontario region
            </p>
        </div>

        <!-- City Grid -->
        <div class="city-grid">
            @foreach($cities as $index => $city)
            <div class="city-card animate-city">
                <!-- City Image -->
                <img class="city-image" src="{{ $city['img'] }}" alt="{{ $city['name'] }}" onerror="this.src='https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&q=80'">

                <!-- Gradient overlay -->
                <div class="gradient-overlay"></div>

                <!-- Gold line accent top -->
                <div class="gold-line-top"></div>

                <!-- City Name -->
                <div class="city-name-container">
                    <p class="city-name">{{ $city['name'] }}</p>
                    <!-- Gold underline -->
                    <div class="gold-underline"></div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer accent -->
        <div class="footer-accent">
            <div class="footer-accent-inner">
                <div class="divider-line short-right"></div>
                <svg width="10" height="10" viewBox="0 0 14 14">
                    <path d="M7 0 L8.5 5.5 L14 7 L8.5 8.5 L7 14 L5.5 8.5 L0 7 L5.5 5.5 Z" fill="#c9a96e" opacity="0.6" />
                </svg>
                <div class="divider-line short-left"></div>
            </div>
        </div>

    </div>
</div>

<x-steps-section />

<x-recycle-section />


<x-faqs-section />


@endsection