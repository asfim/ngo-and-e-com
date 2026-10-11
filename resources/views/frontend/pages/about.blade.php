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

    {{-- News & Events (Integrated in Who We Are) --}}
    <section class="ab-news" id="news-events">
        <div class="wrap">
            <div class="ab-news-head reveal">
                <div>
                    <div class="eyebrow">Stay informed &amp; engaged</div>
                    <h2>News &amp; Events</h2>
                    <p style="margin-top:10px; color:var(--ink); opacity:.8; max-width:54ch;">
                        Updates from our ground operations, participatory media labs, research briefings, and upcoming community dialogues.
                    </p>
                </div>
                <div class="ab-news-filters">
                    <button type="button" class="news-filter-btn active" data-filter="all">All Updates</button>
                    <button type="button" class="news-filter-btn" data-filter="news">Latest News</button>
                    <button type="button" class="news-filter-btn" data-filter="event">Upcoming Events</button>
                </div>
            </div>

            <div class="ab-news-grid">
                <!-- Item 1: Event -->
                <article class="news-card reveal" data-category="event">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="National Youth Peace Dialogue" loading="lazy">
                        <span class="news-badge badge-event">Upcoming Event</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📅 Nov 14, 2026</span>
                            <span>•</span>
                            <span>10:00 AM BST</span>
                        </div>
                        <h3>National Dialogue on Peace &amp; Digital Safety</h3>
                        <p>Convening 80+ youth peace fellows, journalists, and grassroots educators to analyze online hate speech patterns and build community resilience networks.</p>
                        <div class="news-meta">
                            <span>📍 Chittagong Hub &amp; Hybrid</span>
                            <a href="{{ route('contact') }}" class="news-link">RSVP / Details <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Item 2: News -->
                <article class="news-card reveal" data-category="news">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Parliamentary Policy Submission" loading="lazy">
                        <span class="news-badge badge-news">Press Release</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📰 Oct 28, 2026</span>
                            <span>•</span>
                            <span>Policy Dispatch</span>
                        </div>
                        <h3>Parliamentary Brief on Returnee Migrant Worker Safety</h3>
                        <p>Witness Foundation formally tabled an 18-month empirical investigation documenting returnee migrant grievances and recommended systemic legal protections.</p>
                        <div class="news-meta">
                            <span>📍 Dhaka HQ · Advocacy</span>
                            <a href="{{ route('impact') }}" class="news-link">Read Brief <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Item 3: Event -->
                <article class="news-card reveal" data-category="event">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Voices of the Camps Film Showcase" loading="lazy">
                        <span class="news-badge badge-event">Upcoming Event</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📅 Dec 05, 2026</span>
                            <span>•</span>
                            <span>Annual Showcase</span>
                        </div>
                        <h3>Voices of the Camps: Peace Media Film Festival 2026</h3>
                        <p>Special screening of 12 participatory short films created entirely by refugee and host community youth trained in our participatory media lab.</p>
                        <div class="news-meta">
                            <span>📍 Cox's Bazar Cultural Centre</span>
                            <a href="{{ route('projects') }}" class="news-link">Festival Info <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Item 4: News -->
                <article class="news-card reveal" data-category="news">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Community Mediation Hub Ukhiya" loading="lazy">
                        <span class="news-badge badge-news">Field Story</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📰 Sep 19, 2026</span>
                            <span>•</span>
                            <span>Field Impact</span>
                        </div>
                        <h3>Ukhiya Community Mediation Hub Resolves 120 Local Disputes</h3>
                        <p>Independent evaluation highlights 94% satisfaction rating with volunteer-led restorative circles, averting prolonged legal battles and escalations.</p>
                        <div class="news-meta">
                            <span>📍 Cox's Bazar Field Station</span>
                            <a href="{{ route('impact') }}" class="news-link">Read Story <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Item 5: Event -->
                <article class="news-card reveal" data-category="event">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Women Peacebuilders Symposium" loading="lazy">
                        <span class="news-badge badge-event">Upcoming Event</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📅 Dec 18, 2026</span>
                            <span>•</span>
                            <span>Roundtable</span>
                        </div>
                        <h3>Women Peacebuilders Symposium: Grassroots Evidence to Action</h3>
                        <p>Bringing together 50 female mediators and researchers to discuss gender-inclusive conflict prevention frameworks across rural Bangladesh.</p>
                        <div class="news-meta">
                            <span>📍 Dhaka HQ Seminar Hall</span>
                            <a href="{{ route('contact') }}" class="news-link">Register <span>→</span></a>
                        </div>
                    </div>
                </article>

                <!-- Item 6: News -->
                <article class="news-card reveal" data-category="news">
                    <div class="news-card-media">
                        <img src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Research Report Release" loading="lazy">
                        <span class="news-badge badge-news">Research Report</span>
                    </div>
                    <div class="news-card-body">
                        <div class="news-date">
                            <span>📰 Aug 30, 2026</span>
                            <span>•</span>
                            <span>Publications</span>
                        </div>
                        <h3>New Research: Online Hate Speech Dynamics in Bangladesh</h3>
                        <p>A comprehensive data study analyzing over 45,000 public social media comments to understand hate speech triggers and promote counter-narratives.</p>
                        <div class="news-meta">
                            <span>📍 Research &amp; Evidence Hub</span>
                            <a href="{{ route('approach') }}" class="news-link">Download PDF <span>→</span></a>
                        </div>
                    </div>
                </article>
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.news-filter-btn');
        const cards = document.querySelectorAll('.news-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');
                cards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
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

