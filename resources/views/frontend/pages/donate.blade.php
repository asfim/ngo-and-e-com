@extends('frontend.layouts.app')

@section('title', 'Give — Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/donate.css') }}">
@endpush

@section('content')
    {{-- Hero + donation form --}}
    <section class="dn-hero">
        <div class="wrap dn-hero-grid">
            <div class="reveal">
                <nav class="dn-crumb" aria-label="Breadcrumb">
                    <a href="{{ route('home') }}">Home</a><span>/</span><span>Give</span>
                </nav>
                <h1>Your gift becomes <em>someone's voice</em>.</h1>
                <p class="lead">Fund cameras for young storytellers, mediation for defrauded migrant workers, and safe spaces where divided communities meet.</p>
                <ul class="dn-trust">
                    <li>Registered with NGO Affairs Bureau (No. 3276)</li>
                    <li>Official money receipt for every gift</li>
                    <li>68% goes directly to field programmes</li>
                </ul>
            </div>

            <form class="dn-form reveal" id="donateForm">
                <h2>Make a gift</h2>
                <p>Choose an amount and how often you'd like to give.</p>
                <div class="dn-freq">
                    <button type="button" class="active" data-freq="once">One-time</button>
                    <button type="button" data-freq="monthly">Monthly</button>
                </div>
                <div class="dn-amounts">
                    <button type="button" data-amount="500">৳500</button>
                    <button type="button" class="active" data-amount="1000">৳1,000</button>
                    <button type="button" data-amount="2500">৳2,500</button>
                    <button type="button" data-amount="5000">৳5,000</button>
                    <button type="button" data-amount="10000">৳10K</button>
                    <button type="button" data-amount="25000">৳25K</button>
                </div>
                <input type="number" min="100" class="dn-input" id="customAmount" placeholder="Other amount (৳)">
                <input type="text" class="dn-input" placeholder="Your name" required>
                <input type="email" class="dn-input" placeholder="Email for receipt" required>
                <div class="dn-total">
                    <span>Your gift</span>
                    <div><b id="donateTotal">৳1,000</b><small id="donateFreq">one-time</small></div>
                </div>
                <button type="submit" class="dn-submit">Continue to payment →</button>
                <p class="dn-secure">🔒 You'll see bank / bKash / Nagad details next</p>
            </form>
        </div>
    </section>

    {{-- Allocation --}}
    <section class="dn-alloc">
        <div class="wrap dn-alloc-grid">
            <div class="dn-donut reveal">
                <div class="dn-donut-center"><div><b>68%</b><span>to field programmes</span></div></div>
            </div>
            <div class="reveal">
                <div class="eyebrow">Where your money goes</div>
                <h2>Every taka, accounted for</h2>
                <ul class="dn-legend">
                    <li><span class="sw" style="background:var(--teal)"></span><div>Field programmes<small>Dialogue, film, digital safety, mediation</small></div><b>68%</b></li>
                    <li><span class="sw" style="background:var(--orange)"></span><div>Research &amp; advocacy<small>Evidence, briefs, policy engagement</small></div><b>17%</b></li>
                    <li><span class="sw" style="background:#E7B83E"></span><div>Monitoring &amp; safeguarding<small>Verification, community feedback</small></div><b>9%</b></li>
                    <li><span class="sw" style="background:var(--paper-line)"></span><div>Administration<small>Audits, compliance, operations</small></div><b>6%</b></li>
                </ul>
            </div>
        </div>
    </section>

    {{-- Tiers --}}
    <section class="dn-tiers">
        <div class="wrap">
            <div class="dn-tiers-head reveal">
                <div class="eyebrow">What your gift does</div>
                <h2>Small amounts, real change</h2>
            </div>
            <div class="dn-tier-grid">
                <div class="dn-tier reveal"><div class="amt">৳500</div><h3>A dialogue seat</h3><p>Covers one participant's travel and materials for a dialogue circle.</p></div>
                <div class="dn-tier pop reveal"><div class="amt">৳1,000</div><h3>A safety kit</h3><p>Digital safety training and toolkit for one migrant worker.</p></div>
                <div class="dn-tier reveal"><div class="amt">৳2,500</div><h3>A week of filming</h3><p>Equipment and mentoring for a young filmmaker for one week.</p></div>
                <div class="dn-tier reveal"><div class="amt">৳10,000</div><h3>A mediated case</h3><p>Supports a full grievance mediation for a defrauded family.</p></div>
            </div>
        </div>
    </section>

    {{-- Payment methods --}}
    <section class="dn-pay" id="payment">
        <div class="wrap" data-tabs>
            <div class="eyebrow reveal">Payment details</div>
            <h2 class="reveal">Choose how to send your gift</h2>
            <div class="dn-tabs">
                <button type="button" class="active" data-tab="bank">🏦 Bank transfer</button>
                <button type="button" data-tab="bkash">📱 bKash</button>
                <button type="button" data-tab="nagad">📱 Nagad</button>
            </div>

            <div class="dn-panel active" data-panel="bank">
                <table class="dn-table">
                    <tr><td>Account name</td><td>Witness Foundation</td></tr>
                    <tr><td>Bank</td><td>BRAC Bank PLC</td></tr>
                    <tr><td>Account no.</td><td>1501 2049 8839 0001</td></tr>
                    <tr><td>Branch</td><td>Gulshan, Dhaka</td></tr>
                    <tr><td>Routing no.</td><td>060261726</td></tr>
                    <tr><td>SWIFT</td><td>BRAKBDDH</td></tr>
                </table>
                <div class="dn-note"><h4>International donors</h4>Foreign contributions are received under NGO Affairs Bureau regulations. Please email us before sending so we can share the FD-6 approved account details.</div>
            </div>

            <div class="dn-panel" data-panel="bkash">
                <table class="dn-table">
                    <tr><td>Merchant no.</td><td><strong>01729 794203</strong></td></tr>
                    <tr><td>Option</td><td>Make Payment</td></tr>
                    <tr><td>Reference</td><td>PEACE</td></tr>
                </table>
                <div class="dn-note"><h4>After sending</h4>Email your name and transaction ID to accounts@witnessfoundation.org.bd to receive your official receipt.</div>
            </div>

            <div class="dn-panel" data-panel="nagad">
                <table class="dn-table">
                    <tr><td>Merchant no.</td><td><strong>01729 794203</strong></td></tr>
                    <tr><td>Option</td><td>Merchant Pay</td></tr>
                    <tr><td>Reference</td><td>PEACE</td></tr>
                </table>
                <div class="dn-note"><h4>After sending</h4>Email your name and transaction ID to accounts@witnessfoundation.org.bd to receive your official receipt.</div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="dn-faq">
        <div class="wrap dn-faq-grid">
            <div class="reveal">
                <div class="eyebrow">Questions</div>
                <h2>Giving, explained</h2>
            </div>
            <div class="reveal">
                <div class="acc-item open"><button type="button" class="acc-q">Will I get a receipt?</button><div class="acc-a"><p>Yes. Every gift receives an official money receipt by email within three working days.</p></div></div>
                <div class="acc-item"><button type="button" class="acc-q">Can I support a specific programme?</button><div class="acc-a"><p>Absolutely. Mention the programme name in your email or payment reference and we'll allocate it accordingly.</p></div></div>
                <div class="acc-item"><button type="button" class="acc-q">How do monthly gifts work?</button><div class="acc-a"><p>Set up a standing instruction with your bank or send the same amount monthly via bKash/Nagad. You can stop anytime.</p></div></div>
                <div class="acc-item"><button type="button" class="acc-q">Are you audited?</button><div class="acc-a"><p>Yes. Our accounts are audited annually and submitted to the NGO Affairs Bureau.</p></div></div>
            </div>
        </div>
    </section>
@endsection
