@extends('frontend.layouts.app')

@section('title', 'Our Impact — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>Impact</span>
            </nav>
            <div class="eyebrow">Transparency &amp; Verifiable Outcomes</div>
            <h1>Sixteen years, <em>measured honestly</em>.</h1>
            <p class="lead">We hold ourselves accountable to the communities we serve. Every statistic represents real individuals whose lives, rights, and security were meaningfully safeguarded.</p>
        </div>
    </header>

    {{-- Impact Stats Grid --}}
    @include('frontend.sections.impact')

    <!-- ============ THEMATIC IMPACT BREAKDOWN ============ -->
    <section class="section" id="breakdown">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Where Change Happens</div>
                <h2>Key dimensions of community transformation</h2>
            </div>

            <div class="impact-breakdown-grid reveal">
                <article class="impact-pillar-card">
                    <h3>01. Financial Restitution &amp; Migrant Justice</h3>
                    <p>Through community mediation and structured grievance mechanisms, we have directly facilitated the recovery and restitution of over BDT 61+ Lakh for defrauded migrant workers and vulnerable families, avoiding protracted court battles.</p>
                    <span class="stat-badge">BDT 61+ Lakh Mediated</span>
                </article>

                <article class="impact-pillar-card">
                    <h3>02. Digital Safety &amp; Counter-Exploitation</h3>
                    <p>Our digital toolkits have reached over half a million migrant workers and youths across high-migration districts, equipping them with the digital literacy required to avoid visa fraud, scam networks, and malicious harassment.</p>
                    <span class="stat-badge">500,000+ Citizens Reached</span>
                </article>

                <article class="impact-pillar-card">
                    <h3>03. Youth Agency &amp; Participatory Filmmaking</h3>
                    <p>Dozens of young men and women from refugee camps and host communities in Cox's Bazar have been trained in camera handling, ethical journalism, and community screenings, producing authentic documentary records.</p>
                    <span class="stat-badge">25 Youth Filmmakers Funded</span>
                </article>

                <article class="impact-pillar-card">
                    <h3>04. Inter-Communal Contact &amp; Dialogue</h3>
                    <p>By providing structured neutral ground for host populations, refugees, local government leaders, and elders, our dialogue circles have mediated localized flashpoints into peaceful municipal accords.</p>
                    <span class="stat-badge">3 Regional Hubs Operational</span>
                </article>
            </div>
        </div>
    </section>

    {{-- Field Stories --}}
    @include('frontend.sections.stories')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
