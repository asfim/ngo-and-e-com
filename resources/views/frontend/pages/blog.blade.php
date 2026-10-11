@extends('frontend.layouts.app')

@section('title', 'Blog & Dispatches — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/blog.css') }}">
@endpush

@section('content')
    {{-- Blog Hero --}}
    <section class="blog-hero">
        <div class="wrap reveal">
            <nav class="blog-crumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a><span>/</span><span>Blog &amp; Dispatches</span>
            </nav>
            <h1>Voices from the frontlines <em>of peace.</em></h1>
            <p>
                In-depth essays, field reflections, photo journals, and research briefings written by our community researchers, fellows, and grassroots storytellers.
            </p>
        </div>
    </section>

    {{-- Filter Bar --}}
    <section class="blog-filter-section">
        <div class="wrap blog-filter-bar reveal">
            <div class="blog-categories">
                <button type="button" class="blog-cat-btn active" data-category="all">All Stories</button>
                <button type="button" class="blog-cat-btn" data-category="peacebuilding">Peacebuilding</button>
                <button type="button" class="blog-cat-btn" data-category="media">Grassroots Media</button>
                <button type="button" class="blog-cat-btn" data-category="migrants">Migrant Rights</button>
                <button type="button" class="blog-cat-btn" data-category="digital">Digital Safety</button>
                <button type="button" class="blog-cat-btn" data-category="advocacy">Policy Advocacy</button>
            </div>
            <div style="font-size:14px; color:var(--ink); opacity:.75;">
                Showing <b>7</b> published dispatches
            </div>
        </div>
    </section>

    {{-- Featured Lead Post --}}
    <section class="blog-featured">
        <div class="wrap">
            <article class="featured-post-card reveal">
                <div class="featured-media">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Young filmmakers in Ukhiya" loading="lazy">
                    <span class="featured-badge">Featured Dispatch</span>
                </div>
                <div class="featured-content">
                    <div class="featured-meta">
                        <span>Grassroots Media</span>
                        <span>•</span>
                        <span>October 08, 2026</span>
                        <span>•</span>
                        <span>6 min read</span>
                    </div>
                    <h2>
                        <a href="{{ route('blog.show', 'documenting-hope-ukhiya') }}">
                            Documenting Hope: How Young Filmmakers in Ukhiya Are Reframing Refugee Realities
                        </a>
                    </h2>
                    <p>
                        Inside our participatory film workshops where refugee and host-community youth pass the camera to one another, challenging sensationalist media tropes and uncovering authentic shared solidarity.
                    </p>
                    <div class="featured-author">
                        <div class="author-info">
                            <b>Fahmida Rahman</b>
                            <span>Head of Participatory Media · Cox's Bazar</span>
                        </div>
                        <a href="{{ route('blog.show', 'documenting-hope-ukhiya') }}" class="blog-read-link">Read Story <span>→</span></a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    {{-- Blog Grid --}}
    <section class="blog-grid-section">
        <div class="wrap">
            <div class="blog-grid">
                <!-- Post 1 -->
                <article class="blog-card reveal" data-category="peacebuilding">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Neighborhood mediation circle" loading="lazy">
                        <span class="blog-card-tag">Peacebuilding</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Sep 24, 2026</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'lessons-from-100-mediation-circles') }}">
                                Lessons from 100 Neighborhood Mediation Circles
                            </a>
                        </h3>
                        <p>What happens when you bring disputing shop owners, elders, and young renters into a circle without courtroom formality? Real human reconciliation.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Anisur Zaman</span>
                            <a href="{{ route('blog.show', 'lessons-from-100-mediation-circles') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="blog-card reveal" data-category="migrants">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Returnee migrant support" loading="lazy">
                        <span class="blog-card-tag">Migrant Rights</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Sep 11, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'reintegrating-female-migrants') }}">
                                Reintegrating Returnee Female Migrants with Dignity
                            </a>
                        </h3>
                        <p>Overcoming shame, debt burdens, and stigma: How peer-support circles in Comilla and Sylhet are creating economic lifelines for women returning home.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Nusrat Jahan</span>
                            <a href="{{ route('blog.show', 'reintegrating-female-migrants') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Post 3 -->
                <article class="blog-card reveal" data-category="digital">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Digital literacy workshop" loading="lazy">
                        <span class="blog-card-tag">Digital Safety</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Aug 29, 2026</span>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'countering-hate-in-15-seconds') }}">
                                Countering Online Hate Speech in 15 Seconds
                            </a>
                        </h3>
                        <p>Why debunking misinformation on social media requires emotional empathy, cultural humor, and micro-storytelling rather than academic lectures.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Tanvir Hasan</span>
                            <a href="{{ route('blog.show', 'countering-hate-in-15-seconds') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Post 4 -->
                <article class="blog-card reveal" data-category="media">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1460723237483-7a6dc9d0b212?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Public street theater" loading="lazy">
                        <span class="blog-card-tag">Grassroots Media</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Aug 15, 2026</span>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'art-as-resistance-hill-tracts') }}">
                                Street Theater and Mural Activism in the Hill Tracts
                            </a>
                        </h3>
                        <p>How indigenous youth in Bandarban and Rangamati use folk theater and street art to initiate inter-ethnic dialogue and celebrate cultural pluralism.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Proloy Chakma</span>
                            <a href="{{ route('blog.show', 'art-as-resistance-hill-tracts') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Post 5 -->
                <article class="blog-card reveal" data-category="advocacy">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Listening to community" loading="lazy">
                        <span class="blog-card-tag">Policy Advocacy</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Jul 30, 2026</span>
                            <span>•</span>
                            <span>8 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'accountability-starts-with-listening') }}">
                                Why Accountability Starts with Listening First
                            </a>
                        </h3>
                        <p>Development aid often treats communities as passive beneficiaries. Here is our blueprint for Grounded Accountability before launching any intervention.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Dr. Kazi Ariful</span>
                            <a href="{{ route('blog.show', 'accountability-starts-with-listening') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Post 6 -->
                <article class="blog-card reveal" data-category="peacebuilding">
                    <div class="blog-card-media">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Youth listening circles" loading="lazy">
                        <span class="blog-card-tag">Peacebuilding</span>
                    </div>
                    <div class="blog-card-body">
                        <div class="blog-card-meta">
                            <span>Jul 12, 2026</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                        <h3>
                            <a href="{{ route('blog.show', 'youth-fellowship-diaries') }}">
                                Youth Fellowship Diaries: 30 Days in the Ukhiya Labs
                            </a>
                        </h3>
                        <p>A first-person field account of sitting cross-legged in village tea stalls, listening to generational memories, and rebuilding fractured trust.</p>
                        <div class="blog-card-footer">
                            <span class="blog-card-author">By Sumaiya Akter</span>
                            <a href="{{ route('blog.show', 'youth-fellowship-diaries') }}" class="blog-read-link">Read <span>→</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Newsletter Dispatch Box --}}
    <section class="blog-subscribe">
        <div class="wrap blog-sub-wrap reveal">
            <div>
                <h3>Receive our monthly field journal</h3>
                <p>Grassroots dispatches, research briefings, and unfiltered community stories delivered directly to your inbox on the first Monday of each month.</p>
            </div>
            <form class="blog-sub-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Witness Foundation Field Dispatches!');">
                <input type="email" placeholder="Enter your email address" required aria-label="Email address">
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const catBtns = document.querySelectorAll('.blog-cat-btn');
        const cards = document.querySelectorAll('.blog-card');

        catBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                catBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const selected = btn.getAttribute('data-category');
                cards.forEach(card => {
                    if (selected === 'all' || card.getAttribute('data-category') === selected) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush
