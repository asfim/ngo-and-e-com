@extends('frontend.layouts.app')

@section('title', 'Order Confirmed — Witness Foundation Fair-Trade Shop')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}">
@endpush

@section('content')
    <section class="checkout-section">
        <div class="wrap">
            <div class="success-card reveal">
                <div class="success-icon">✓</div>
                <div class="eyebrow" style="justify-content:center;">Order Confirmed</div>
                <h1 style="font-size:clamp(28px,3.8vw,42px); line-height:1.2; margin-bottom:12px;">
                    Thank you for your fair-trade order!
                </h1>
                <p style="font-size:16px; opacity:.85; max-width:44ch; margin:0 auto;">
                    Your purchase directly provides sustainable livelihoods to rural peacebuilders and craft collectives in Bangladesh.
                </p>

                <div class="order-receipt">
                    <div style="display:flex; justify-content:space-between; margin-bottom:12px; padding-bottom:10px; border-bottom:1px solid var(--paper-line);">
                        <span>Order Reference:</span>
                        <b style="color:var(--orange);">#{{ $orderNumber }}</b>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                        <span>Item Ordered:</span>
                        <b>{{ $productName }} (Qty: {{ $qty }})</b>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                        <span>Total Amount:</span>
                        <b style="color:var(--orange); font-size:17px;">৳{{ number_format($total) }}</b>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                        <span>Payment Method:</span>
                        <span>{{ $paymentMethod }}</span>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom:8px;">
                        <span>Customer:</span>
                        <span>{{ $customerName }} ({{ $phone }})</span>
                    </div>
                    <div style="display:flex; justify-content:space-between;">
                        <span>Delivery Address:</span>
                        <span style="max-width:26ch; text-align:right;">{{ $address }}</span>
                    </div>
                </div>

                <div style="padding:16px; background:var(--paper-2); border:1px solid var(--paper-line); border-radius:var(--radius); margin-bottom:32px; font-size:13.5px; line-height:1.6;">
                    📦 We have sent an SMS notification to <b>{{ $phone }}</b>. Our logistics team will dispatch your parcel within 24 hours.
                </div>

                <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                    <a href="{{ route('shop.index') }}" class="btn btn-primary">Continue Shopping</a>
                    <a href="{{ route('home') }}" class="btn-more">Return to Home <span>→</span></a>
                </div>
            </div>
        </div>
    </section>
@endsection
