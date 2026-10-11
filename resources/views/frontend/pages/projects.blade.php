@extends('frontend.layouts.app')

@section('title', 'Projects & Field Missions — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>Projects</span>
            </nav>
            <div class="eyebrow">Case Files &amp; Field Operations</div>
            <h1>Evidence-based <em>projects</em> in motion.</h1>
            <p class="lead">Every project is designed to resolve friction, protect human dignity, and produce measurable legal or policy changes across Bangladesh.</p>
        </div>
    </header>

    <!-- ============ THEMATIC PILLARS ============ -->
    <section class="section" style="padding-bottom: 20px;">
        <div class="wrap">
            <div class="project-cat-grid reveal">
                <div class="project-cat-box">
                    <div class="count">01</div>
                    <div class="name">Safe Migration &amp; Justice</div>
                </div>
                <div class="project-cat-box">
                    <div class="count">02</div>
                    <div class="name">Youth Participatory Media</div>
                </div>
                <div class="project-cat-box">
                    <div class="count">03</div>
                    <div class="name">Intergenerational Dialogue</div>
                </div>
                <div class="project-cat-box">
                    <div class="count">04</div>
                    <div class="name">Digital Peace &amp; Safety</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ongoing Projects Case Files --}}
    @include('frontend.sections.projects')

    {{-- What's Next (Exploring) --}}
    @include('frontend.sections.whats-next')

    {{-- Past Projects Timeline --}}
    @include('frontend.sections.timeline')

    {{-- Field Stories --}}
    @include('frontend.sections.stories')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
