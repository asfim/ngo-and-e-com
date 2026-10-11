@extends('frontend.layouts.app')

@section('title', 'About Us — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>About</span>
            </nav>
            <div class="eyebrow">Identity, Values &amp; Governance</div>
            <h1>Rooted in community. <em>Driven by evidence</em>.</h1>
            <p class="lead">Founded in 2010, Witness Foundation operates across Bangladesh to resolve disputes, empower youth through creative media, and advance grounded peacebuilding.</p>
        </div>
    </header>

    {{-- Main About Section (Mission, Vision, Governance, Registration) --}}
    @include('frontend.sections.about')

    <!-- ============ OFFICES & HUBS ============ -->
    <section class="section" style="padding-top: 20px;">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Field Presence</div>
                <h2>Three dedicated operations hubs</h2>
            </div>

            <div class="office-grid reveal">
                <div class="office-card">
                    <span class="tag">Headquarters</span>
                    <h4>Dhaka Central Office</h4>
                    <p>Vision 71 Tower, House 28, Block E, Sector-2, Jahurul Islam Ave, Aftabnagar, Dhaka 1212</p>
                    <p style="margin-top:10px; font-weight:600; color:var(--teal);">+880 1729 794203</p>
                </div>

                <div class="office-card">
                    <span class="tag">Regional Office</span>
                    <h4>Chittagong Hub</h4>
                    <p>Managing coastal community dialogues, returnee migrant worker counselling, and regional youth forums across the Chittagong division.</p>
                    <p style="margin-top:10px; font-weight:600; color:var(--teal);">chittagong@witnessfoundation.org.bd</p>
                </div>

                <div class="office-card">
                    <span class="tag">Field Station</span>
                    <h4>Cox's Bazar Operations</h4>
                    <p>On-the-ground participatory media lab, safe spaces for Rohingya and host community storytelling cohorts, and localized conflict de-escalation.</p>
                    <p style="margin-top:10px; font-weight:600; color:var(--teal);">coxsbazar@witnessfoundation.org.bd</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Photo Carousel --}}
    @include('frontend.sections.gallery-carousel')

    {{-- News & Updates --}}
    @include('frontend.sections.news')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
