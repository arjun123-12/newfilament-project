@extends('layouts.app')

@section('title','About Us - JunkDrop')

@section('content')
<x-hero />

<section id="story" class="intro">
    <div class="intro-img srl on">
        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=800&amp;q=80&amp;auto=format&amp;fit=crop" alt="Crew hauling">
        <div class="intro-overlay"></div>
        <div class="intro-label">
            <h3>From One Truck<br>to a Fleet of 40</h3>
            <p>What started in Marcus Delray's driveway in 2009<br>became Portland's most trusted removal service.</p>
        </div>
    </div>
    <div class="intro-content srr on">
        <p class="ic-sub">Our Story</p>
        <h2 class="ic-h">Built Different.<br><em>Built to Last.</em></h2>
        <p class="ic-p">We started HaulPros with nothing but one truck, two sets of strong hands, and a stubborn belief that junk removal deserved to be done with professionalism and pride.</p>
        <p class="ic-p">Today we operate across five cities, run a fleet of 40 vehicles, and still answer every call with the same energy as day one.</p>
        <div class="ic-quote">
            <q>Every space we clear is someone's fresh start. That responsibility drives everything we do.</q>
            <cite>— Marcus Delray, Founder</cite>
        </div>
        <div class="ribbon-row">
            <div class="ribbon">🏆 BBB A+ Rated</div>
            <div class="ribbon">♻️ 70% Recycled</div>
            <div class="ribbon">⚡ Same-Day</div>
            <div class="ribbon">🔒 Fully Insured</div>
        </div>
    </div>
</section>


<section class="diag">
    <div class="diag-inner">
        <div class="diag-top sr on">
            <h2>What We <em>Stand For</em></h2>
            <p>Not just values on a wall — these are the real standards our crew holds itself to on every single job.</p>
        </div>
        <div class="vgrid">
            <div class="vc sr d1 on">
                <div class="vc-n">01</div><span class="vc-ico">⚡</span>
                <h3>Speed</h3>
                <p>Same-day service is our norm, not a premium. When you call, we move fast — without cutting corners.</p>
            </div>
            <div class="vc sr d2 on">
                <div class="vc-n">02</div><span class="vc-ico">🔒</span>
                <h3>Integrity</h3>
                <p>Flat-rate quotes. What we say is what you pay. No hidden fees, no nonsense, no runaround — ever.</p>
            </div>
            <div class="vc sr d3 on">
                <div class="vc-n">03</div><span class="vc-ico">♻️</span>
                <h3>Planet</h3>
                <p>We donate usable items, recycle what we can, and responsibly dispose of everything else. 70% diverted from landfill.</p>
            </div>
            <div class="vc sr d4 on">
                <div class="vc-n">04</div><span class="vc-ico">🤝</span>
                <h3>Respect</h3>
                <p>Your property, your time, your trust — we treat every job like it's our own home, every time.</p>
            </div>
        </div>
    </div>
</section>
<section class="promise">
    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1400&amp;q=80&amp;auto=format&amp;fit=crop" alt="Our team at work" class="promise-img">
    <div class="promise-content">
        <div class="promise-inner rv in">
            <div class="spill" style="background:rgba(244,97,10,0.15);border-color:rgba(244,97,10,0.3);"><span>Our Guarantee</span></div>
            <h2>YOUR SATISFACTION<br>IS OUR <em>PROMISE</em></h2>
            <p>If you're not 100% satisfied with our service, we'll come back and make it right. No arguments, no runaround. That's the ClearOut guarantee — period.</p>
            <div class="pacts">
                <a href="#contact" class="btn-hero-primary"><span>Book a Job Today</span><span class="arrow">→</span></a>
                <a href="tel:+15551234567" class="btn-hero-primary">📞 Call Us Now</a>
            </div>
        </div>
    </div>
</section>
@endsection