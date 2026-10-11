@extends('frontend.layouts.app')

@section('title', 'Contact Us — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>Contact</span>
            </nav>
            <div class="eyebrow">Dialogue &amp; Engagement</div>
            <h1>We welcome <em>conversation</em>.</h1>
            <p class="lead">Whether you are an affected community member, an institutional partner, a researcher, or a supporter, our team is ready to listen and respond.</p>
        </div>
    </header>

    <!-- ============ CONTACT SECTION ============ -->
    <section class="section" id="contact">
        <div class="wrap">
            <div class="contact-grid">
                <!-- Contact Info Panel -->
                <aside class="contact-info-panel reveal">
                    <div class="eyebrow" style="margin-bottom:8px;">Direct Coordinates</div>
                    <h3>Headquarters &amp; Field Stations</h3>
                    <p style="font-size:14.5px; opacity:.8; line-height:1.6;">Our team operates from three dedicated locations across Bangladesh to stay anchored close to the issues.</p>

                    <div class="contact-info-list">
                        <div class="contact-info-item">
                            <div class="icon">📍</div>
                            <div>
                                <h5>Dhaka Central Office (HQ)</h5>
                                <p>Vision 71 Tower, House 28, Block E, Sector-2, Jahurul Islam Ave, Aftabnagar, Dhaka 1212, Bangladesh</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon">📞</div>
                            <div>
                                <h5>Telephone &amp; Hotline</h5>
                                <p>+880 1729 794203<br><span style="font-size:12px; opacity:.7;">Sun – Thu: 9:00 AM – 5:30 PM (BST)</span></p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon">✉️</div>
                            <div>
                                <h5>Electronic Mail</h5>
                                <p>
                                    General: <a href="mailto:info@witnessfoundation.org.bd" style="color:var(--orange);">info@witnessfoundation.org.bd</a><br>
                                    Programmes: <a href="mailto:programmes@witnessfoundation.org.bd" style="color:var(--orange);">programmes@witnessfoundation.org.bd</a>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="icon">🏛️</div>
                            <div>
                                <h5>Statutory Information</h5>
                                <p>Societies Registration Act: <strong>S-12727</strong><br>NGO Affairs Bureau: <strong>NGOAB No. 3276</strong></p>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Contact Form Panel -->
                <div class="contact-form-panel reveal">
                    <div class="eyebrow" style="margin-bottom:8px;">Send a Dispatch</div>
                    <h3>Reach Out Directly</h3>
                    <p class="sub">Fill out the form below. We review all community and institutional enquiries within two business days.</p>

                    <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you! Your message has been received. Our team will contact you shortly.');">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactName" class="form-label">Full Name *</label>
                                <input type="text" id="contactName" name="name" class="form-control" placeholder="e.g. Tanvir Ahmed" required>
                            </div>
                            <div class="form-group">
                                <label for="contactEmail" class="form-label">Email Address *</label>
                                <input type="email" id="contactEmail" name="email" class="form-control" placeholder="name@domain.org" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="contactPhone" class="form-label">Phone / WhatsApp</label>
                                <input type="tel" id="contactPhone" name="phone" class="form-control" placeholder="+880 1XXXXXXXXX">
                            </div>
                            <div class="form-group">
                                <label for="contactSubject" class="form-label">Topic / Enquiry Type *</label>
                                <select id="contactSubject" name="subject" class="form-control" required>
                                    <option value="">Select a topic</option>
                                    <option value="dispute_mediation">Grievance &amp; Dispute Mediation</option>
                                    <option value="partnership">Institutional Partnership</option>
                                    <option value="youth_media">Participatory Filmmaking / Cohorts</option>
                                    <option value="research">Empirical Research / Data Request</option>
                                    <option value="general">General Support Enquiry</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="contactMessage" class="form-label">Your Message *</label>
                            <textarea id="contactMessage" name="message" class="form-control" placeholder="Please outline the nature of your enquiry, community location, or proposal..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="padding:15px 32px; font-size:15px;">Send Message →</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
