@extends('frontend.layouts.app')

@section('title', 'Our Approach — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>Our Approach</span>
            </nav>
            <div class="eyebrow">Philosophy &amp; Grounded Action</div>
            <h1>One mission, five <em>instruments</em>.</h1>
            <p class="lead">We reject the conventional top-down model. Peacebuilding must start with the people living the problem. Here is how we turn local insight into durable, systemic change.</p>
        </div>
    </header>

    <!-- ============ 5 INSTRUMENTS DETAILED ============ -->
    <section class="section" id="instruments">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Core Methodologies</div>
                <h2>How we engage friction and build trust</h2>
            </div>

            <div class="approach-detailed-grid">
                <article class="approach-detailed-card reveal">
                    <div class="header-row">
                        <div class="icon-wrap">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="2" y="6" width="15" height="12" rx="1"/>
                                <path d="M17 10l5-3v10l-5-3"/>
                            </svg>
                        </div>
                        <div>
                            <span class="eyebrow" style="margin-bottom:4px;">01. Participatory Media</span>
                            <h3>Film &amp; Visual Storytelling</h3>
                        </div>
                    </div>
                    <p>Instead of bringing outside camera crews to portray vulnerable populations, we hand cameras, sound equipment, and editing suites directly to youth and community members. They decide what story matters, ensuring narratives preserve human dignity.</p>
                    <div class="pill-list">
                        <span class="pill">Youth Documentaries</span>
                        <span class="pill">Cox's Bazar Filmmaking</span>
                        <span class="pill">Peace Film Festival</span>
                    </div>
                </article>

                <article class="approach-detailed-card reveal">
                    <div class="header-row">
                        <div class="icon-wrap">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="8" cy="9" r="3.2"/>
                                <circle cx="16" cy="15" r="3.2"/>
                                <path d="M8 12.5V19M16 11.5V5"/>
                            </svg>
                        </div>
                        <div>
                            <span class="eyebrow" style="margin-bottom:4px;">02. Mediated Dialogue</span>
                            <h3>Structured Multi-Generational Dialogue</h3>
                        </div>
                    </div>
                    <p>We facilitate structured circles seating different generations, faiths, host and refugee populations at the same table. We do not demand immediate consensus; we facilitate the hard work of turning bitter disagreement into workable civic coexistence.</p>
                    <div class="pill-list">
                        <span class="pill">Shanti O Sampriti Sanglap</span>
                        <span class="pill">Cross-Generational Circles</span>
                        <span class="pill">Host-Refugee Trust</span>
                    </div>
                </article>

                <article class="approach-detailed-card reveal">
                    <div class="header-row">
                        <div class="icon-wrap">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <rect x="3" y="4" width="18" height="13" rx="1"/>
                                <path d="M9 21h6M12 17v4"/>
                            </svg>
                        </div>
                        <div>
                            <span class="eyebrow" style="margin-bottom:4px;">03. Technology For Peace</span>
                            <h3>Digital Literacy &amp; AI Safety</h3>
                        </div>
                    </div>
                    <p>Migrant workers and marginalized youth are frequently targets of digital disinformation, extortion, and surveillance. We co-design accessible smartphone toolkits that safeguard users from trafficking and online harm.</p>
                    <div class="pill-list">
                        <span class="pill">Migrant Safety Toolkits</span>
                        <span class="pill">AI Counter-Disinformation</span>
                        <span class="pill">Digital Ambassadors</span>
                    </div>
                </article>

                <article class="approach-detailed-card reveal">
                    <div class="header-row">
                        <div class="icon-wrap">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 20V10a8 8 0 0 1 16 0v10"/>
                                <path d="M4 20h16"/>
                            </svg>
                        </div>
                        <div>
                            <span class="eyebrow" style="margin-bottom:4px;">04. Shared Rituals</span>
                            <h3>Culture, Arts &amp; Community Sports</h3>
                        </div>
                    </div>
                    <p>Words can sometimes heighten ideological barriers; communal sports tournaments, theater, and traditional arts bypass rhetoric. They create spaces where divided communities build contact naturally before discussing thorny disputes.</p>
                    <div class="pill-list">
                        <span class="pill">Community Centers</span>
                        <span class="pill">Inter-District Tournaments</span>
                        <span class="pill">Folk &amp; Street Theater</span>
                    </div>
                </article>

                <article class="approach-detailed-card reveal" style="grid-column: 1 / -1;">
                    <div class="header-row">
                        <div class="icon-wrap">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 4h13l3 3v13H4z"/>
                                <path d="M9 9h7M9 13h7M9 17h4"/>
                            </svg>
                        </div>
                        <div>
                            <span class="eyebrow" style="margin-bottom:4px;">05. Systemic Advocacy</span>
                            <h3>Empirical Research &amp; Policy Action</h3>
                        </div>
                    </div>
                    <p>Ground-level peacebuilding is fragile if national institutions remain unresponsive. We document verifiable casework from grassroots dispute mediation, compile rigorous empirical policy briefs, and present them directly to government ministries and parliamentary committees.</p>
                    <div class="pill-list">
                        <span class="pill">Parliamentary Briefings</span>
                        <span class="pill">Migration Policy Reform</span>
                        <span class="pill">Grievance Casework</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Grounded Accountability Model --}}
    @include('frontend.sections.gam')

    {{-- Programmes Feature --}}
    @include('frontend.sections.services')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
