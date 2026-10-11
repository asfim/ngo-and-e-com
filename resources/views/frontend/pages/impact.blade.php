@extends('frontend.layouts.app')

@section('title', 'Our Impact — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/impact.css') }}">
@endpush

@section('content')
    {{-- Hero + number strip --}}
    <section class="im-hero">
        <div class="wrap reveal">
            <nav class="im-crumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a><span>/</span><span>Impact</span>
            </nav>
            <h1>Sixteen years, <em>measured honestly</em>.</h1>
            <p>Every number below stands for real people whose rights, safety and voice were protected. We publish what worked — and what didn't.</p>
        </div>
        <div class="im-strip">
            <div><b data-count="16" data-suffix=" yrs">0</b><span>of community-rooted work</span></div>
            <div><b data-count="61" data-prefix="৳" data-suffix="L+">0</b><span>mediated in grievance cases</span></div>
            <div><b data-count="500" data-suffix="K+">0</b><span>reached by digital safety campaigns</span></div>
            <div><b data-count="193" data-suffix="">0</b><span>youth applied for one film cohort</span></div>
        </div>
    </section>

    {{-- Reach bars --}}
    <section class="im-bars">
        <div class="wrap im-bars-grid">
            <div class="reveal">
                <div class="eyebrow">Reach by pillar</div>
                <h2>Where our effort goes</h2>
                <p>Share of total programme participants over the last three years, across our main areas of work.</p>
            </div>
            <div class="reveal">
                <div class="im-bar"><div class="im-bar-top"><h4>Digital safety &amp; AI</h4><span>38%</span></div><div class="im-bar-track"><div class="bar-fill" data-width="38"></div></div></div>
                <div class="im-bar"><div class="im-bar-top"><h4>Safe migration &amp; justice</h4><span>27%</span></div><div class="im-bar-track"><div class="bar-fill" data-width="27"></div></div></div>
                <div class="im-bar"><div class="im-bar-top"><h4>Dialogue &amp; social cohesion</h4><span>18%</span></div><div class="im-bar-track"><div class="bar-fill" data-width="18"></div></div></div>
                <div class="im-bar"><div class="im-bar-top"><h4>Film &amp; participatory media</h4><span>11%</span></div><div class="im-bar-track"><div class="bar-fill" data-width="11"></div></div></div>
                <div class="im-bar"><div class="im-bar-top"><h4>Culture, arts &amp; sports</h4><span>6%</span></div><div class="im-bar-track"><div class="bar-fill" data-width="6"></div></div></div>
            </div>
        </div>
    </section>

    {{-- Voices --}}
    <section class="im-voices">
        <div class="wrap">
            <div class="im-voices-head reveal">
                <div class="eyebrow">In their words</div>
                <h2>Impact, told by the people who lived it</h2>
            </div>
            <div class="im-voice-grid">
                <figure class="im-voice reveal">
                    <blockquote>“I didn't want someone else to tell my story wrong again. This time, I held the camera.”</blockquote>
                    <footer><span class="av">YF</span><div><b>Youth filmmaker</b><small>Cox's Bazar cohort, 2024</small></div></footer>
                </figure>
                <figure class="im-voice reveal">
                    <blockquote>“For once, the app asked us what we needed.”</blockquote>
                    <footer><span class="av">MW</span><div><b>Migrant worker</b><small>Digital safety pilot</small></div></footer>
                </figure>
                <figure class="im-voice reveal">
                    <blockquote>“We were arguing the same point from two different griefs.”</blockquote>
                    <footer><span class="av">DP</span><div><b>Dialogue participant</b><small>Chittagong, 2024</small></div></footer>
                </figure>
            </div>
        </div>
    </section>

    {{-- Where we work --}}
    <section class="im-where">
        <div class="wrap im-where-grid">
            <div class="reveal">
                <div class="eyebrow">Where we work</div>
                <h2>Three hubs, many communities</h2>
            </div>
            <div class="im-chips reveal">
                <span class="im-chip hub">Dhaka (HQ)</span>
                <span class="im-chip hub">Chittagong</span>
                <span class="im-chip hub">Cox's Bazar</span>
                <span class="im-chip">Ukhiya</span>
                <span class="im-chip">Teknaf</span>
                <span class="im-chip">Cumilla</span>
                <span class="im-chip">Brahmanbaria</span>
                <span class="im-chip">Tangail</span>
                <span class="im-chip">Narsingdi</span>
                <span class="im-chip">Sylhet</span>
                <span class="im-chip">Noakhali</span>
            </div>
        </div>
    </section>

    {{-- Reports --}}
    <section class="im-reports">
        <div class="wrap">
            <div class="eyebrow reveal">Transparency</div>
            <h2 class="reveal">Annual reports</h2>
            <div class="im-report-grid">
                <a href="#" class="im-report reveal"><span class="ic">PDF</span><div><h4>Annual Report 2025</h4><small>Coming soon</small></div></a>
                <a href="#" class="im-report reveal"><span class="ic">PDF</span><div><h4>Annual Report 2024</h4><small>Coming soon</small></div></a>
                <a href="#" class="im-report reveal"><span class="ic">PDF</span><div><h4>Annual Report 2023</h4><small>Coming soon</small></div></a>
            </div>
        </div>
    </section>
@endsection
