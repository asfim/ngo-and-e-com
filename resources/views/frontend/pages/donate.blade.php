@extends('frontend.layouts.app')

@section('title', 'Give & Support Our Work — Witness Foundation')

@section('content')
    <!-- ============ PAGE HERO ============ -->
    <header class="page-hero">
        <div class="wrap">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span class="sep">/</span>
                <span>Give</span>
            </nav>
            <div class="eyebrow">Direct Civic Investment</div>
            <h1>Every contribution <em>fuels real dignity</em>.</h1>
            <p class="lead">We keep our administration lean and our books transparent. Your contribution directly sponsors community camera kits, mediated dispute resolutions, and protective toolkits for vulnerable citizens.</p>
        </div>
    </header>

    {{-- Interactive Support Calculator --}}
    @include('frontend.sections.support-calculator')

    <!-- ============ OFFICIAL CONTRIBUTION CHANNELS ============ -->
    <section class="section" id="channels">
        <div class="wrap">
            <div class="section-head reveal">
                <div class="eyebrow">Payment Options</div>
                <h2>Official &amp; Verified Contribution Channels</h2>
            </div>

            <div class="donate-channels-grid reveal">
                <!-- Bank Wire Details -->
                <div class="channel-card">
                    <h3>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="5" width="20" height="14" rx="2"/>
                            <line x1="2" y1="10" x2="22" y2="10"/>
                        </svg>
                        Bank Account Wire Transfer
                    </h3>
                    <p>For institutional grants, direct bank transfers, and international wire contributions under NGOAB regulations:</p>

                    <table class="bank-detail-table">
                        <tr>
                            <td>Account Title</td>
                            <td>Witness Foundation</td>
                        </tr>
                        <tr>
                            <td>Bank Name</td>
                            <td>BRAC Bank PLC</td>
                        </tr>
                        <tr>
                            <td>Account Number</td>
                            <td>1501 2049 8839 0001</td>
                        </tr>
                        <tr>
                            <td>Branch</td>
                            <td>Gulshan Branch, Dhaka</td>
                        </tr>
                        <tr>
                            <td>Routing No.</td>
                            <td>060261726</td>
                        </tr>
                        <tr>
                            <td>SWIFT Code</td>
                            <td>BRAKBDDH</td>
                        </tr>
                    </table>
                </div>

                <!-- Mobile Financial Services -->
                <div class="channel-card">
                    <h3>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2"/>
                            <line x1="12" y1="18" x2="12.01" y2="18"/>
                        </svg>
                        Mobile Financial Services (MFS)
                    </h3>
                    <p>For quick individual support from anywhere in Bangladesh via local mobile wallet payment:</p>

                    <div class="mfs-badges">
                        <span class="mfs-badge" style="color:#d8236c; background:#fae7ef;">bKash Merchant</span>
                        <span class="mfs-badge" style="color:#f76523; background:#feefe8;">Nagad Merchant</span>
                        <span class="mfs-badge" style="color:#8b3799; background:#f5eaf7;">Rocket</span>
                    </div>

                    <table class="bank-detail-table">
                        <tr>
                            <td>Merchant Number</td>
                            <td><strong>01729 794203</strong></td>
                        </tr>
                        <tr>
                            <td>Payment Reference</td>
                            <td>PEACE</td>
                        </tr>
                        <tr>
                            <td>Counter / Option</td>
                            <td>Select "Make Payment"</td>
                        </tr>
                    </table>

                    <p style="margin-top:16px; font-size:13px; opacity:.75;">
                        After sending your contribution, please send a confirmation SMS or email to <em>accounts@witnessfoundation.org.bd</em> with your name to receive your official money receipt.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Child Support Feature --}}
    @include('frontend.sections.child-feature')

    {{-- Closing CTA --}}
    @include('frontend.sections.closing-cta')
@endsection
