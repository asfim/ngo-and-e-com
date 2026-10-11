@extends('frontend.layouts.app')

@section('title', 'Projects — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/projects.css') }}">
@endpush

@section('content')
    {{-- Hero --}}
    <section class="pj-hero">
        <div class="wrap">
            <div class="reveal">
                <nav class="pj-crumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a><span>/</span><span>Projects</span>
                </nav>
                <h1>Projects in the <em>field</em>, not on paper.</h1>
                <p>Every project here started as a conversation with a community — and is measured by what changed for them.</p>
            </div>
            <div class="pj-hero-stats reveal">
                <div><b data-count="2">0</b><span>Ongoing</span></div>
                <div><b data-count="9">0</b><span>Completed</span></div>
                <div><b data-count="2">0</b><span>Exploring</span></div>
            </div>
        </div>
    </section>

    {{-- Featured project --}}
    <section class="pj-featured-wrap">
        <div class="wrap">
            <article class="pj-featured reveal">
                <div class="pj-featured-media">
                    <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Community dialogue on safe migration">
                    <span class="ribbon">Featured · Ongoing</span>
                </div>
                <div class="pj-featured-body">
                    <div class="eyebrow">Safe migration</div>
                    <h2>National Migration Dialogue Series</h2>
                    <p>A rolling programme of structured dialogue between returnee migrants, host communities and local government — building toward shared policy recommendations on safe migration.</p>
                    <div class="pj-meta">
                        <div><small>Duration</small><b>2026 – 2027</b></div>
                        <div><small>Locations</small><b>Dhaka · Chittagong</b></div>
                        <div><small>Participants</small><b>1,200+ people</b></div>
                        <div><small>Focus</small><b>Policy &amp; dialogue</b></div>
                    </div>
                    <div class="pj-progress-label"><span>Programme progress</span><span>45%</span></div>
                    <div class="pj-progress"><div class="bar-fill" data-width="45"></div></div>
                </div>
            </article>
        </div>
    </section>

    {{-- Filterable list --}}
    <section class="pj-list">
        <div class="wrap">
            <div class="pj-list-head reveal">
                <div>
                    <div class="eyebrow">All projects</div>
                    <h2>Browse our work</h2>
                </div>
                <div class="pj-filters" data-filter-group="projects">
                    <button type="button" class="active" data-filter="all">All</button>
                    <button type="button" data-filter="ongoing">Ongoing</button>
                    <button type="button" data-filter="completed">Completed</button>
                    <button type="button" data-filter="exploring">Exploring</button>
                </div>
            </div>

            @php
                $projects = [
                    ['status' => 'ongoing', 'year' => '2026 –', 'title' => 'Government Committee Engagement', 'text' => 'Evidence-based engagement with parliamentary and ministerial committees on migration, digital safety and youth policy.', 'loc' => 'Dhaka', 'img' => 'photo-1556761175-b413da4baf72'],
                    ['status' => 'ongoing', 'year' => '2026 – 2027', 'title' => 'National Migration Dialogue Series', 'text' => 'Structured dialogue between returnee migrants, host communities and local government.', 'loc' => 'Dhaka · Chittagong', 'img' => 'photo-1532629345422-7515f3d16bb6'],
                    ['status' => 'completed', 'year' => '2026', 'title' => 'Digital Peace Ambassadors', 'text' => 'Young people trained to counter online harm and lead digital dialogue in their communities.', 'loc' => "Dhaka · Cox's Bazar", 'img' => 'photo-1529156069898-49953e39b3ac'],
                    ['status' => 'completed', 'year' => '2025 – 2026', 'title' => 'Digital Safety for Migrant Workers', 'text' => 'A co-designed toolkit and awareness campaign reaching workers before and during migration.', 'loc' => 'Multiple districts', 'img' => 'photo-1556761175-b413da4baf72'],
                    ['status' => 'completed', 'year' => '2024 – 2025', 'title' => 'Youth-led Films & Dialogue', 'text' => 'Documentaries made entirely by young participants and screened in their own communities.', 'loc' => "Cox's Bazar", 'img' => 'photo-1516026672322-bc52d61a55d5'],
                    ['status' => 'completed', 'year' => '2023', 'title' => 'Cultural Centres for Rohingya & Hosts', 'text' => 'Shared cultural spaces designed with refugee and host communities to build everyday contact.', 'loc' => "Cox's Bazar", 'img' => 'photo-1542810634-71277d95dcbb'],
                    ['status' => 'exploring', 'year' => 'Pilot idea', 'title' => 'Learning Platform for Prospective Migrants', 'text' => 'Verified, practical information before recruiters and rumour fill the gap.', 'loc' => 'Online', 'img' => 'photo-1472162072942-cd5147eb3902'],
                    ['status' => 'exploring', 'year' => 'Pilot idea', 'title' => 'Returnee Peer-Counsellor Network', 'text' => 'Returned migrants trained to support others through reintegration.', 'loc' => 'Chittagong', 'img' => 'photo-1529156069898-49953e39b3ac'],
                ];
            @endphp

            <div class="pj-grid" data-filter-target="projects">
                @foreach ($projects as $project)
                    <article class="pj-card reveal" data-status="{{ $project['status'] }}">
                        <div class="pj-card-img">
                            <img src="https://images.unsplash.com/{{ $project['img'] }}?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="{{ $project['title'] }}" loading="lazy">
                            <span class="pj-status {{ $project['status'] }}">{{ ucfirst($project['status']) }}</span>
                        </div>
                        <div class="pj-card-body">
                            <div class="yr">{{ $project['year'] }}</div>
                            <h3>{{ $project['title'] }}</h3>
                            <p>{{ $project['text'] }}</p>
                            <div class="loc">📍 {{ $project['loc'] }}</div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Horizontal timeline --}}
    <section class="pj-timeline">
        <div class="wrap">
            <div class="eyebrow reveal">Since 2018</div>
            <h2 class="reveal">Milestones along the way</h2>
            <div class="pj-tl-track reveal">
                <div class="pj-tl-item"><div class="y">2018</div><h4>Participatory filmmaking</h4><p>Our founding method: communities document their own reality.</p></div>
                <div class="pj-tl-item"><div class="y">2019</div><h4>Peace Film Festival</h4><p>First national screening of participatory films.</p></div>
                <div class="pj-tl-item"><div class="y">2022</div><h4>Inspiring Women Award</h4><p>Recognising women leading peace work in hosting districts.</p></div>
                <div class="pj-tl-item"><div class="y">2023</div><h4>Cultural centres</h4><p>Shared spaces for Rohingya and host communities.</p></div>
                <div class="pj-tl-item"><div class="y">2024</div><h4>Shanti O Sampriti Sanglap</h4><p>Multi-generational dialogue on social cohesion.</p></div>
                <div class="pj-tl-item"><div class="y">2025</div><h4>Digital safety toolkit</h4><p>Reaching migrant workers across new districts.</p></div>
                <div class="pj-tl-item"><div class="y">2026</div><h4>Digital Peace Ambassadors</h4><p>Forty youth trained in digital mediation.</p></div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="pj-cta">
        <div class="wrap">
            <div class="pj-cta-box reveal">
                <h2>Have a project idea or want to co-fund one?</h2>
                <a href="{{ route('contact') }}" class="btn btn-primary">Talk to our team →</a>
            </div>
        </div>
    </section>
@endsection
