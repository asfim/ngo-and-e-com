@extends('frontend.layouts.app')

@section('title', 'Field Dispatch — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/blog.css') }}">
@endpush

@section('content')
    <article>
        {{-- Post Hero --}}
        <header class="post-hero">
            <div class="wrap post-hero-wrap reveal">
                <nav class="blog-crumb" style="margin-bottom:24px;" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span>/</span>
                    <a href="{{ route('blog') }}">Blog</a>
                    <span>/</span>
                    <span>Field Dispatch</span>
                </nav>
                <span class="post-tag">Grassroots Media &amp; Peace</span>
                <h1>Documenting Hope: How Young Filmmakers in Ukhiya Are Reframing Refugee Realities</h1>
                <div class="post-meta-row">
                    <span><b>Fahmida Rahman</b> · Head of Participatory Media</span>
                    <span>•</span>
                    <span>October 08, 2026</span>
                    <span>•</span>
                    <span>6 min read</span>
                </div>
            </div>
        </header>

        {{-- Post Content --}}
        <div class="wrap post-content-wrap reveal">
            <img class="post-featured-img" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&amp;fit=crop&amp;w=1400&amp;q=85" alt="Participatory filmmaking in Cox's Bazar" loading="lazy">

            <p>
                For over eight years, the narrative surrounding the refugee camps in Cox's Bazar has been predominantly shaped by external cameras. Breaking-news reporters, humanitarian missions, and international delegations arrive with heavy lenses, document visible distress, and depart within forty-eight hours.
            </p>

            <p>
                While such coverage helped mobilize crucial international relief, it also hardened an unintentional trope: portraying hundreds of thousands of resilient human beings solely through the singular dimension of victimhood.
            </p>

            <blockquote class="post-pullquote">
                “When you hand the camera to someone whose story has only ever been narrated by others, the first thing they film isn’t sorrow. It is how they care for each other.”
            </blockquote>

            <h3>The Participatory Media Lab</h3>
            <p>
                In 2024, Witness Foundation established our permanent Participatory Media Lab in Ukhiya. Rather than training external crews to film camp residents, we invited twelve young refugees and twelve young residents from neighboring host villages to co-design a six-month visual storytelling curriculum.
            </p>

            <p>
                Equipped with compact cameras, mobile microphones, and solar editing stations, these twenty-four fellows began documenting everyday coexistence, shared culinary traditions, local environmental crises, and volunteer disaster management groups.
            </p>

            <h3>Dissolving Host-Community Friction</h3>
            <p>
                One of the most persistent challenges in Southeastern Bangladesh has been subtle tension between long-time host residents and displaced populations over resources, inflation, and deforestation.
            </p>

            <p>
                During a joint screening session organized at a local tea stall in Palongkhali, fellows screened a four-minute micro-documentary showing how refugee volunteers and host-community youth collaborated to rebuild a washed-out bamboo bridge during monsoon floods. Over sixty villagers gathered to watch. For many elders present, it was the first time they witnessed the shared struggle acknowledged on screen.
            </p>

            <div class="post-author-box">
                <div class="post-author-avatar">F</div>
                <div>
                    <h4 style="font-size:18px; margin-bottom:4px; color:var(--ink);">Fahmida Rahman</h4>
                    <p style="font-size:14px; margin-bottom:0; opacity:.8; line-height:1.5;">
                        Fahmida leads Witness Foundation's Participatory Media Labs across Chittagong and Cox's Bazar. She holds a Master's in Mass Communication and has facilitated community audio-visual workshops since 2017.
                    </p>
                </div>
            </div>

            <div style="margin-top:60px; padding-top:30px; border-top:1px solid var(--paper-line); display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:16px;">
                <a href="{{ route('blog') }}" class="btn-more">← Back to all blog posts</a>
                <a href="{{ route('donate') }}" class="btn btn-primary">Support this work</a>
            </div>
        </div>
    </article>
@endsection
