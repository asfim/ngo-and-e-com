@extends('frontend.layouts.app')

@section('title', $product['name'] . ' — Fair-Trade Shop Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}">
@endpush

@section('content')
    <section class="pdp-section">
        <div class="wrap">
            <nav class="shop-crumb" style="margin-bottom:30px;" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <a href="{{ route('shop.index') }}">Shop</a>
                <span>/</span>
                <span>{{ $product['name'] }}</span>
            </nav>

            <div class="pdp-grid">
                {{-- Product Image Gallery --}}
                <div class="pdp-gallery reveal">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="pdp-main-img" id="mainPdpImage">
                    <div style="margin-top:16px; padding:16px; background:var(--paper-2); border:1px solid var(--paper-line); border-radius:var(--radius); font-size:13.5px; line-height:1.5;">
                        <b style="color:var(--orange);">🌱 Verified Fair-Trade:</b> Each piece is individually crafted. Subtle variations in texture and weave reflect authentic handcrafted heritage.
                    </div>
                </div>

                {{-- Product Information & Checkout Action --}}
                <div class="pdp-info reveal">
                    <div class="pdp-artisan-badge">
                        <span>📍 {{ $product['region'] }}</span>
                        <span>•</span>
                        <span>{{ $product['artisan'] }}</span>
                    </div>

                    <h1>{{ $product['name'] }}</h1>

                    <div class="pdp-price-box">
                        <span class="pdp-price">৳{{ number_format($product['price']) }}</span>
                        @if(!empty($product['old_price']))
                            <span class="pdp-old-price">৳{{ number_format($product['old_price']) }}</span>
                        @endif
                        <span class="pdp-stock-status">In Stock ({{ $product['stock'] }} available)</span>
                    </div>

                    <div class="pdp-desc">
                        <p>{{ $product['description'] }}</p>
                    </div>

                    {{-- Form targeting checkout --}}
                    <form action="{{ route('shop.checkout') }}" method="GET" class="pdp-form">
                        <input type="hidden" name="item" value="{{ $product['slug'] }}">
                        <div class="qty-control">
                            <button type="button" class="qty-btn" id="btnQtyMinus" aria-label="Decrease quantity">−</button>
                            <input type="number" name="qty" id="inputQty" class="qty-input" value="1" min="1" max="{{ $product['stock'] }}" readonly aria-label="Quantity">
                            <button type="button" class="qty-btn" id="btnQtyPlus" aria-label="Increase quantity">+</button>
                        </div>
                        <button type="submit" class="btn-checkout-now">
                            Buy Now ⚡ (Direct Checkout)
                        </button>
                    </form>

                    {{-- Social Impact Callout --}}
                    <div style="background:#111111; color:#FFFFFF; padding:22px; border-radius:var(--radius); margin-bottom:30px;">
                        <h4 style="font-size:15px; color:var(--orange); text-transform:uppercase; letter-spacing:.08em; margin-bottom:6px; font-weight:700;">
                            ✨ Direct Community Impact
                        </h4>
                        <p style="font-size:14px; opacity:.9; margin:0; line-height:1.6;">
                            {{ $product['impact'] }}
                        </p>
                    </div>

                    {{-- Specifications & Transparency --}}
                    <div class="pdp-specs">
                        <div class="pdp-spec-item">
                            <b>SKU Code:</b>
                            <span>{{ $product['sku'] }}</span>
                        </div>
                        <div class="pdp-spec-item">
                            <b>Materials:</b>
                            <span>{{ $product['materials'] }}</span>
                        </div>
                        <div class="pdp-spec-item">
                            <b>Maker Guild:</b>
                            <span>{{ $product['artisan'] }} ({{ $product['region'] }})</span>
                        </div>
                        <div class="pdp-spec-item">
                            <b>Delivery:</b>
                            <span>1-2 business days within Dhaka; 3-4 days nationwide across all 64 districts.</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Related Community Products --}}
            @if(count($relatedProducts) > 0)
                <div style="margin-top:90px; padding-top:50px; border-top:1px solid var(--paper-line);">
                    <div class="eyebrow">More from our makers</div>
                    <h2 style="font-size:clamp(26px,3.2vw,36px); margin-bottom:32px;">Related Artisan Crafts</h2>
                    <div class="product-grid">
                        @foreach($relatedProducts as $rel)
                            <article class="product-card reveal">
                                <div class="product-media">
                                    <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}" loading="lazy">
                                    <span class="product-tag">{{ $rel['category_name'] }}</span>
                                </div>
                                <div class="product-body">
                                    <span class="product-artisan">📍 {{ $rel['region'] }}</span>
                                    <h3><a href="{{ route('shop.show', $rel['slug']) }}">{{ $rel['name'] }}</a></h3>
                                    <p>{{ $rel['short_desc'] }}</p>
                                    <div class="product-price-row">
                                        <span class="product-price">৳{{ number_format($rel['price']) }}</span>
                                    </div>
                                    <div class="product-footer">
                                        <a href="{{ route('shop.show', $rel['slug']) }}" class="btn-view-details">Details <span>→</span></a>
                                        <a href="{{ route('shop.checkout', ['item' => $rel['slug']]) }}" class="btn-buy">Buy Now ⚡</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const minus = document.getElementById('btnQtyMinus');
        const plus = document.getElementById('btnQtyPlus');
        const qty = document.getElementById('inputQty');

        if (minus && plus && qty) {
            minus.addEventListener('click', () => {
                let v = parseInt(qty.value) || 1;
                if (v > 1) qty.value = v - 1;
            });
            plus.addEventListener('click', () => {
                let v = parseInt(qty.value) || 1;
                qty.value = v + 1;
            });
        }
    });
</script>
@endpush
