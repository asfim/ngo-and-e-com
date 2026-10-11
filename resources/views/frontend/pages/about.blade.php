@extends('frontend.layouts.app')

@section('title', 'About Us — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/about.css') }}">
@endpush

@section('content')
    {{-- Full-image hero --}}
    <section class="ab-hero">
        <div class="wrap reveal">
            <nav class="ab-crumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a><span>/</span><span>About</span>
            </nav>
            <h1>Rooted in community. <em>Driven by evidence.</em></h1>
            <div class="ab-hero-meta">
                <div><small>Founded</small><b>2010</b></div>
                <div><small>Headquarters</small><b>Dhaka, Bangladesh</b></div>
                <div><small>Offices</small><b>3 hubs</b></div>
                <div><small>Governance</small><b>7-member Board</b></div>
            </div>
        </div>
    </section>

    {{-- Story --}}
    <section class="ab-story">
        <div class="wrap ab-story-grid">
            <p class="ab-pull reveal">Peace doesn't begin with a treaty. It begins <span>with me.</span></p>
            <div class="ab-story-copy reveal">
                <p>Witness Foundation began in 2010 with a simple conviction: the people living through conflict, displacement and exploitation understand it better than anyone writing reports about them.</p>
                <p>What started as small participatory film workshops grew into an organisation working across dialogue, digital safety, culture and policy advocacy — always starting from the ground up.</p>
                <p>Today we work from Dhaka, Chittagong and Cox's Bazar alongside migrant workers, Rohingya and host communities, young people and local leaders, carrying their evidence into the rooms where decisions are made.</p>
                <div class="ab-mv">
                    <div><h4>Mission</h4><p>To prevent conflict, end violence and empower communities through artistic activism, innovation, research and evidence-based advocacy.</p></div>
                    <div><h4>Vision</h4><p>A peaceful, just and inclusive world where every person can live with dignity, safety and opportunity.</p></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Values --}}
    <section class="ab-values">
        <div class="wrap">
            <div class="ab-values-head reveal">
                <div>
                    <div class="eyebrow">Our values</div>
                    <h2>What guides every decision</h2>
                </div>
            </div>
            <div class="ab-values-grid reveal">
                <div class="ab-value"><div class="ic">🤝</div><h3>Listen first</h3><p>We arrive with questions, not answers.</p></div>
                <div class="ab-value"><div class="ic">🛡️</div><h3>Do no harm</h3><p>Safety and consent come before any story or statistic.</p></div>
                <div class="ab-value"><div class="ic">🔍</div><h3>Verify everything</h3><p>Our advocacy is only as strong as our evidence.</p></div>
                <div class="ab-value"><div class="ic">🌱</div><h3>Stay accountable</h3><p>We answer to communities, not just donors.</p></div>
            </div>
        </div>
    </section>

    {{-- Leadership --}}
    <section class="ab-team">
        <div class="wrap">
            <div class="ab-team-head reveal">
                <div class="eyebrow">Leadership</div>
                <h2>Governing Board &amp; team</h2>
                <p>An independent 7-member Governing Board provides oversight separate from day-to-day programme leadership.</p>
            </div>
            <div class="ab-team-grid">
                <div class="ab-member reveal"><div class="ph">C</div><h3>Chairperson</h3><small>Governing Board</small></div>
                <div class="ab-member reveal"><div class="ph">E</div><h3>Executive Director</h3><small>Management</small></div>
                <div class="ab-member reveal"><div class="ph">P</div><h3>Head of Programmes</h3><small>Programmes</small></div>
                <div class="ab-member reveal"><div class="ph">R</div><h3>Research Lead</h3><small>Research &amp; Advocacy</small></div>
            </div>
        </div>
    </section>

    {{-- Legal --}}
    <section class="ab-legal">
        <div class="wrap ab-legal-grid">
            <h2 class="reveal">Registered, compliant &amp; transparent</h2>
            <div class="ab-docs reveal">
                <div class="ab-doc"><small>Societies Registration Act 1860</small><b>S-12727</b></div>
                <div class="ab-doc"><small>NGO Affairs Bureau</small><b>NGOAB 3276</b></div>
                <div class="ab-doc"><small>Tax compliance</small><b>Valid TIN &amp; VAT</b></div>
            </div>
        </div>
    </section>

    {{-- Offices --}}
    <section class="ab-offices">
        <div class="wrap">
            <div class="eyebrow reveal">Our offices</div>
            <h2 class="reveal">Close to the communities we serve</h2>
            <div class="ab-office-grid">
                <article class="ab-office reveal">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Dhaka office" loading="lazy">
                    <div><small>Headquarters</small><h3>Dhaka</h3><p>Vision 71 Tower, Aftabnagar, Dhaka 1212</p></div>
                </article>
                <article class="ab-office reveal">
                    <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Chittagong office" loading="lazy">
                    <div><small>Regional office</small><h3>Chittagong</h3><p>Dialogue, returnee migrant support and youth forums.</p></div>
                </article>
                <article class="ab-office reveal">
                    <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Cox's Bazar field station" loading="lazy">
                    <div><small>Field station</small><h3>Cox's Bazar</h3><p>Participatory media lab and community safe spaces.</p></div>
                </article>
            </div>
        </div>
    </section>
@endsection


