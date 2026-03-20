@extends('layouts.app')

@section('title','Detail')

@section('content')

<x-hero />




<div class="sa-header">
    <div class="sa-badge">
        <div class="badge-dot"></div>
        Service
    </div>


    <h2 class="sa-title">
        We Provide <span class="accent">Services Area</span>
    </h2>
    <p class="sa-subtitle">
        At JunkDrop, we believe junk removal should be simple, stress-free, and reliable.
    </p>
</div>
<div class="jd-serv-container">
    <div class="jd-serv-grid">

        @foreach($services as $index => $service)
        <div class="jd-serv-card">
            <div class="jd-serv-img-wrap">

                <img src="{{ asset('storage/' . $service->card_image) }}">

                <div class="jd-serv-overlay">

                    <span class="jd-serv-num">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} /
                        {{ str_pad($services->count(), 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h3 class="jd-serv-title">
                        {!! nl2br(e($service->service_name)) !!}
                    </h3>

                </div>
            </div>

            <div class="jd-serv-body">
                <div class="jd-serv-line"></div>

                <p class="jd-serv-text">
                    {{ $service->description }}
                </p>

                <a href="{{ route('service-detail', $service->slug) }}" class="jd-serv-btn">
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