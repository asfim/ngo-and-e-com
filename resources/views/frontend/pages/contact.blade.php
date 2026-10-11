@extends('frontend.layouts.app')

@section('title', 'Contact — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/contact.css') }}">
@endpush

@section('content')
    {{-- Minimal hero --}}
    <section class="ct-hero">
        <div class="wrap reveal">
            <nav class="ct-crumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a><span>/</span><span>Contact</span>
            </nav>
            <h1>Let's start a <em>conversation</em>.</h1>
            <p>Community member, partner, researcher or supporter — we read every message and reply within two working days.</p>
        </div>
    </section>

    {{-- Quick contact cards --}}
    <section class="ct-quick">
        <div class="wrap ct-quick-grid">
            <a href="tel:+8801729794203" class="ct-q reveal"><div class="ic">📞</div><small>Call us</small><b>+880 1729 794203</b></a>
            <a href="mailto:info@witnessfoundation.org.bd" class="ct-q reveal"><div class="ic">✉️</div><small>Email us</small><b>info@witnessfoundation.org.bd</b></a>
            <a href="#map" class="ct-q reveal"><div class="ic">📍</div><small>Visit us</small><b>Aftabnagar, Dhaka 1212</b></a>
        </div>
    </section>

    {{-- Form + map --}}
    <section class="ct-main">
        <div class="wrap ct-main-grid">
            <div class="ct-form reveal">
                <h2>Send us a message</h2>
                <p>Pick a topic so we can route your message to the right team.</p>

                <form id="contactForm">
                    @csrf
                    <div class="ct-topics">
                        <input type="radio" name="topic" id="t1" value="partnership" checked><label for="t1">Partnership</label>
                        <input type="radio" name="topic" id="t2" value="mediation"><label for="t2">Grievance mediation</label>
                        <input type="radio" name="topic" id="t3" value="film"><label for="t3">Film cohort</label>
                        <input type="radio" name="topic" id="t4" value="research"><label for="t4">Research</label>
                        <input type="radio" name="topic" id="t5" value="other"><label for="t5">Other</label>
                    </div>
                    <div class="ct-row">
                        <div class="ct-field"><label for="cName">Full name</label><input type="text" id="cName" name="name" required></div>
                        <div class="ct-field"><label for="cEmail">Email</label><input type="email" id="cEmail" name="email" required></div>
                    </div>
                    <div class="ct-row">
                        <div class="ct-field"><label for="cPhone">Phone / WhatsApp</label><input type="tel" id="cPhone" name="phone"></div>
                        <div class="ct-field"><label for="cOrg">Organisation</label><input type="text" id="cOrg" name="organisation"></div>
                    </div>
                    <div class="ct-field"><label for="cMsg">Message</label><textarea id="cMsg" name="message" required></textarea></div>
                    <button type="submit" class="ct-submit">Send message <span>→</span></button>
                    <div class="ct-success" id="contactSuccess">✓ Thank you! Your message has been received — we'll be in touch soon.</div>
                </form>
            </div>

            <aside class="ct-map-card reveal" id="map" data-tabs>
                <iframe src="https://www.google.com/maps?q=Aftabnagar,Dhaka&amp;output=embed" loading="lazy" title="Witness Foundation location map" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="ct-otabs">
                    <button type="button" class="active" data-tab="dhaka">Dhaka</button>
                    <button type="button" data-tab="ctg">Chittagong</button>
                    <button type="button" data-tab="cox">Cox's Bazar</button>
                </div>
                <div class="ct-opanel active" data-panel="dhaka">
                    <h3>Dhaka — Headquarters</h3>
                    <p>Vision 71 Tower, House 28, Block E, Sector-2, Jahurul Islam Ave, Aftabnagar, Dhaka 1212</p>
                    <p><a href="mailto:info@witnessfoundation.org.bd">info@witnessfoundation.org.bd</a></p>
                </div>
                <div class="ct-opanel" data-panel="ctg">
                    <h3>Chittagong — Regional office</h3>
                    <p>Coastal community dialogue, returnee migrant support and regional youth forums.</p>
                    <p><a href="mailto:info@witnessfoundation.org.bd">info@witnessfoundation.org.bd</a></p>
                </div>
                <div class="ct-opanel" data-panel="cox">
                    <h3>Cox's Bazar — Field station</h3>
                    <p>Participatory media lab and safe spaces for Rohingya and host community cohorts.</p>
                    <p><a href="mailto:info@witnessfoundation.org.bd">info@witnessfoundation.org.bd</a></p>
                </div>
            </aside>
        </div>
    </section>

    {{-- Hours strip --}}
    <section class="ct-hours">
        <div class="wrap">
            <div><b>Office hours</b><br><span>Sunday – Thursday · 9:00 AM – 5:30 PM (BST)</span></div>
            <div class="socials">
                <a href="#" aria-label="Facebook">f</a>
                <a href="#" aria-label="LinkedIn">in</a>
                <a href="#" aria-label="YouTube">▶</a>
            </div>
        </div>
    </section>
@endsection
