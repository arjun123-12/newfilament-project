@extends('layouts.app')

@section('title','Service Detail')

@section('content')

<x-hero />




<section id="service-detail">
    <div class="container">
        <div class="about-grid">

            <div class="about-body">

                <div class="eyebrow">Our Story</div>

                <h2 class="h2">
                    {{ $service->service_name }}
                </h2>

                {{-- FIRST CONTENT --}}
                @if($service->first_content)
                <p>{!! $service->first_content !!}</p>
                @endif

                {{-- SECOND CONTENT --}}
                @if($service->second_content)
                <p>{!! $service->second_content !!}</p>
                @endif

                {{-- FULL CONTENT --}}
                @if($service->full_content)
                <div class="about-pull">
                    {!! $service->full_content !!}
                </div>
                @endif

                {{-- FULL CONTENT SECOND --}}
                @if($service->full_content_second)
                <p>{!! $service->full_content_second !!}</p>
                @endif

            </div>

            <div class="about-sidebar">
                <div class="sidebar-card">
                    <div class="sc-title">Our Service Commitment</div>
                    <ul class="sc-list">
                        <li><span class="sc-dot">✓</span>On-site within your booked window — miss it and $30 comes straight off your invoice</li>
                        <li><span class="sc-dot">✓</span>Locked-in price the moment you say go — zero surprise fees at the end</li>
                        <li><span class="sc-dot">✓</span>Every item handled with care — our insurance covers any accidental damage</li>
                        <li><span class="sc-dot">✓</span>Work area fully swept and cleared before our crew ever leaves your property</li>
                        <li><span class="sc-dot">✓</span>Not happy? We return and fix it — no forms, no hassle, no argument</li>
                    </ul>
                </div>
                <div class="sidebar-award">
                    <div class="award-icon">🏆</div>
                    <div>
                        <div class="award-title">Top Removal Service — 4 Years Running</div>
                        <div class="award-sub">Metro Excellence Awards 2021, 2022, 2023 &amp; 2024</div>
                    </div>
                </div>
                <div class="sidebar-award">
                    <div class="award-icon">🛡️</div>
                    <div>
                        <div class="award-title">Licensed, Bonded &amp; Fully Insured</div>
                        <div class="award-sub">$3M liability · Workers' comp on every team member</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<x-steps-section />

<x-recycle-section />
<x-commercial />

<x-faqs-section />
@endsection