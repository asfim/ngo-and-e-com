@extends('frontend.layouts.app')

@section('title', 'Our Approach — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/approach.css') }}">
@endpush

@section('content')
    {{-- Split hero --}}
    <section class="ap-hero">
        <div class="wrap ap-hero-grid">
            <div class="reveal">
                <nav class="ap-crumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a><span>/</span><span>Our Approach</span>
                </nav>
                <h1>One mission. <span>Five instruments.</span></h1>
                <p class="lead">We reject the top-down model. Every programme begins with the people living the problem — then moves through listening, verification and evidence before it ever becomes a policy position.</p>
                <div class="ap-jump">
                    <a href="#film">01 · Film</a>
                    <a href="#dialogue">02 · Dialogue</a>
                    <a href="#digital">03 · Digital &amp; AI</a>
                    <a href="#culture">04 · Culture</a>
                    <a href="#research">05 · Research</a>
                </div>
            </div>
            <div class="ap-hero-img reveal">
                <img src="https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&amp;fit=crop&amp;w=900&amp;q=85" alt="Young people in a community discussion">
                <div class="ap-hero-badge"><b>16 yrs</b>of community-rooted peacebuilding across Bangladesh</div>
            </div>
        </div>
    </section>

    {{-- Zig-zag chapters --}}
    <section class="ap-chapters">
        <div class="wrap">
            <article class="ap-chapter" id="film">
                <div class="ap-ch-media reveal">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Youth filmmaking cohort">
                    <span class="tag">Participatory media</span>
                </div>
                <div class="ap-ch-copy reveal">
                    <div class="ap-ch-num">01</div>
                    <h2>Film &amp; participatory media</h2>
                    <p>Instead of outside crews portraying vulnerable communities, we hand cameras and editing tools to young people. They decide what story matters — and how it is told with dignity.</p>
                    <ul class="ap-ch-list">
                        <li>Youth documentary cohorts in Cox's Bazar</li>
                        <li>Community screenings in the same villages</li>
                        <li>Bangladesh Peace Film Festival</li>
                    </ul>
                </div>
            </article>

            <article class="ap-chapter" id="dialogue">
                <div class="ap-ch-media reveal">
                    <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Two generations in dialogue">
                    <span class="tag">Dialogue</span>
                </div>
                <div class="ap-ch-copy reveal">
                    <div class="ap-ch-num">02</div>
                    <h2>Structured dialogue across divides</h2>
                    <p>We seat generations, faiths, host and refugee communities at the same table. We don't force consensus — we facilitate the slow work of turning disagreement into coexistence.</p>
                    <ul class="ap-ch-list">
                        <li>Shanti O Sampriti Sanglap circles</li>
                        <li>Grandparent–grandchild dialogue sessions</li>
                        <li>Host–refugee trust building</li>
                    </ul>
                </div>
            </article>

            <article class="ap-chapter" id="digital">
                <div class="ap-ch-media reveal">
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Co-designing digital tools">
                    <span class="tag">Digital &amp; AI</span>
                </div>
                <div class="ap-ch-copy reveal">
                    <div class="ap-ch-num">03</div>
                    <h2>Digital safety &amp; AI for peace</h2>
                    <p>Migrant workers and youth are often targets of fraud, disinformation and surveillance. We co-design simple tools with them that protect against trafficking and online harm.</p>
                    <ul class="ap-ch-list">
                        <li>Migrant worker digital safety toolkit</li>
                        <li>Counter-disinformation training</li>
                        <li>Digital Peace Ambassadors network</li>
                    </ul>
                </div>
            </article>

            <article class="ap-chapter" id="culture">
                <div class="ap-ch-media reveal">
                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Children at a cultural programme">
                    <span class="tag">Culture &amp; sports</span>
                </div>
                <div class="ap-ch-copy reveal">
                    <div class="ap-ch-num">04</div>
                    <h2>Culture, arts &amp; sports</h2>
                    <p>Shared rituals and play rebuild trust faster than argument. Tournaments, theatre and traditional arts create natural contact before difficult conversations begin.</p>
                    <ul class="ap-ch-list">
                        <li>Cultural centres for Rohingya &amp; host communities</li>
                        <li>Inter-community sports tournaments</li>
                        <li>Folk and street theatre</li>
                    </ul>
                </div>
            </article>

            <article class="ap-chapter" id="research">
                <div class="ap-ch-media reveal">
                    <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Research and advocacy meeting">
                    <span class="tag">Research &amp; advocacy</span>
                </div>
                <div class="ap-ch-copy reveal">
                    <div class="ap-ch-num">05</div>
                    <h2>Research &amp; policy advocacy</h2>
                    <p>Grassroots work is fragile if institutions don't respond. We document casework, publish policy briefs and carry the evidence into ministries and parliamentary committees.</p>
                    <ul class="ap-ch-list">
                        <li>Parliamentary committee briefings</li>
                        <li>Safe migration policy reform</li>
                        <li>Grievance mediation casework data</li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    {{-- Horizontal process --}}
    <section class="ap-gam">
        <div class="wrap">
            <div class="ap-gam-head reveal">
                <div>
                    <div class="eyebrow">How we work</div>
                    <h2>The Grounded Accountability Model</h2>
                </div>
                <p>Most organisations design a programme, then look for a community. We reverse the order — which keeps us honest about what we know, and who we answer to.</p>
            </div>
            <div class="ap-steps reveal">
                <div class="ap-step"><div class="circle">1</div><div><h3>Community</h3><p>Start with people directly affected.</p></div></div>
                <div class="ap-step"><div class="circle">2</div><div><h3>Listen</h3><p>Dialogue, film and field sessions.</p></div></div>
                <div class="ap-step"><div class="circle">3</div><div><h3>Verify</h3><p>Cross-check every account and claim.</p></div></div>
                <div class="ap-step"><div class="circle">4</div><div><h3>Evidence</h3><p>Build data and documented casework.</p></div></div>
                <div class="ap-step"><div class="circle">5</div><div><h3>Policy action</h3><p>Carry findings to decision makers.</p></div></div>
            </div>
        </div>
    </section>

    {{-- Principles --}}
    <section class="ap-principles">
        <div class="wrap">
            <div class="ap-pr-head reveal">
                <div class="eyebrow">What we believe</div>
                <h2>Three principles behind every project</h2>
            </div>
            <div class="ap-pr-grid">
                <div class="ap-pr reveal"><div class="q">“</div><h3>Lived experience is expertise</h3><p>The people closest to the problem understand it best. We design with them, never just for them.</p></div>
                <div class="ap-pr reveal"><div class="q">“</div><h3>Dignity before data</h3><p>No story, image or statistic is worth more than the safety and consent of the person behind it.</p></div>
                <div class="ap-pr reveal"><div class="q">“</div><h3>Evidence earns a seat</h3><p>We bring verified findings — not slogans — into the rooms where policy is written.</p></div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="ap-cta">
        <div class="wrap">
            <h2>Want to build a programme with us?</h2>
            <a href="{{ route('contact') }}" class="btn">Partner with us →</a>
        </div>
    </section>
@endsection
