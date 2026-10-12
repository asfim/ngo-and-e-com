@extends('frontend.layouts.app')

@section('title', $product['name'] . ' — Fair-Trade Shop Witness Foundation')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}?v={{ time() }}">
@endpush

@section('content')
    {{-- Unified E-Commerce Header Strip --}}
    @include('frontend.partials.ecom-header')

    <section class="pdp-section">
        <div class="wrap">
            {{-- Breadcrumb Navigation --}}
            <nav class="shop-crumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <a href="{{ route('shop.index') }}">Shop</a>
                <span>/</span>
                <a href="{{ route('shop.index', ['category' => $product['category'] ?? 'all']) }}">{{ $product['category_name'] ?? 'Products' }}</a>
                <span>/</span>
                <span class="active-crumb">{{ $product['name'] }}</span>
            </nav>

            <div class="pdp-grid">
                {{-- Product Image Gallery Left --}}
                <div class="pdp-gallery-wrap">
                    <div class="pdp-main-image-card">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="pdp-main-img" id="mainPdpImage">
                        @if(!empty($product['discount']))
                            <span class="pdp-discount-pill">-{{ $product['discount'] }} OFF</span>
                        @endif
                        <span class="pdp-zoom-badge">🔍 Click to View</span>
                    </div>

                    {{-- Image Thumbnails / Angles --}}
                    <div class="pdp-thumbs-row">
                        <div class="thumb-box active" onclick="switchMainImage('{{ $product['image'] }}', this)">
                            <img src="{{ $product['image'] }}" alt="Front View">
                        </div>
                        <div class="thumb-box" onclick="switchMainImage('https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80', this)">
                            <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=200&q=80" alt="Texture">
                        </div>
                        <div class="thumb-box" onclick="switchMainImage('https://images.unsplash.com/photo-1597633425046-08f5110420b5?auto=format&fit=crop&w=800&q=80', this)">
                            <img src="https://images.unsplash.com/photo-1597633425046-08f5110420b5?auto=format&fit=crop&w=200&q=80" alt="Crafting">
                        </div>
                        <div class="thumb-box" onclick="switchMainImage('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=800&q=80', this)">
                            <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=200&q=80" alt="Packaging">
                        </div>
                    </div>

                    {{-- Verified Fair Trade & Artisan Story Box --}}
                    <div class="pdp-fairtrade-card">
                        <div class="ft-icon">🌱</div>
                        <div class="ft-content">
                            <b>100% Ethical &amp; Fair-Trade Certified</b>
                            <p>Hand-crafted with natural materials by {{ $product['artisan'] }}. 100% profits support community peace initiatives and secondary education.</p>
                        </div>
                    </div>

                    {{-- Social Proof Trust Bar --}}
                    <div class="pdp-trust-badges">
                        <div class="t-badge"><span class="badge-icon">🚚</span> Fast Nationwide Delivery</div>
                        <div class="t-badge"><span class="badge-icon">💵</span> Cash on Delivery</div>
                        <div class="t-badge"><span class="badge-icon">🔄</span> 7 Days Easy Return</div>
                    </div>
                </div>

                {{-- Product Information & Checkout Action Right --}}
                <div class="pdp-info-wrap">
                    <div class="pdp-top-meta">
                        <div class="pdp-artisan-pill">
                            <span>📍 {{ $product['region'] }}</span>
                            <span>•</span>
                            <span>{{ $product['artisan'] }}</span>
                        </div>
                        <div class="pdp-rating-review">
                            <span class="stars">★★★★★</span>
                            <b>{{ $product['rating'] ?? '4.9' }}</b>
                            <span class="count">({{ $product['reviews_count'] ?? '128' }} Verified Reviews)</span>
                        </div>
                    </div>

                    <h1 class="pdp-product-title">{{ $product['name'] }}</h1>
                    
                    <div class="pdp-sku-line">
                        <span>SKU: <b>{{ $product['sku'] }}</b></span>
                        <span class="sep">•</span>
                        <span>Category: <b>{{ $product['category_name'] }}</b></span>
                    </div>

                    {{-- Modern Price Box --}}
                    <div class="pdp-pricing-card">
                        <div class="price-main-group">
                            <span class="pdp-main-price">৳{{ number_format($product['price']) }}</span>
                            @if(!empty($product['old_price']))
                                <span class="pdp-main-old-price">৳{{ number_format($product['old_price']) }}</span>
                                <span class="pdp-save-tag">SAVE ৳{{ number_format($product['old_price'] - $product['price']) }}</span>
                            @endif
                        </div>
                        <div class="stock-badge-pill">
                            <span class="pulse-dot"></span>
                            In Stock ({{ $product['stock'] }} Units Left)
                        </div>
                    </div>

                    {{-- Short description highlight --}}
                    <p class="pdp-summary-text">{{ $product['short_desc'] ?? $product['description'] }}</p>

                    {{-- Interactive Form targeting checkout --}}
                    <form action="{{ route('shop.checkout') }}" method="GET" class="pdp-purchase-form" id="pdpForm">
                        <input type="hidden" name="item" value="{{ $product['slug'] }}">

                        <div class="pdp-qty-row">
                            <label class="qty-label">Quantity:</label>
                            <div class="pdp-qty-picker">
                                <button type="button" class="qty-btn-square" id="btnQtyMinus" aria-label="Decrease quantity">−</button>
                                <input type="number" name="qty" id="inputQty" class="qty-number-input" value="1" min="1" max="{{ $product['stock'] }}" readonly aria-label="Quantity">
                                <button type="button" class="qty-btn-square" id="btnQtyPlus" aria-label="Increase quantity">+</button>
                            </div>
                            <span class="subtotal-calc">Total: <b id="dynamicSubtotal">৳{{ number_format($product['price']) }}</b></span>
                        </div>

                        <div class="pdp-actions-row">
                            <button type="submit" class="btn-buy-instant">
                                <span>⚡ Order Now (Cash on Delivery)</span>
                            </button>
                            <button type="button" class="btn-add-to-cart" id="btnPdpAddToCart">
                                <span>🛒 Add to Cart</span>
                            </button>
                        </div>
                    </form>

                    {{-- Direct Community Impact Banner --}}
                    <div class="pdp-impact-box">
                        <div class="impact-header">
                            <span class="impact-sparkle">✨</span>
                            <h4>Community &amp; Social Impact</h4>
                        </div>
                        <p>{{ $product['impact'] }}</p>
                    </div>

                    {{-- Product Tabs: Specs, Materials & Delivery --}}
                    <div class="pdp-specs-grid">
                        <div class="spec-card">
                            <span class="spec-label">Materials</span>
                            <span class="spec-value">{{ $product['materials'] }}</span>
                        </div>
                        <div class="spec-card">
                            <span class="spec-label">Artisan Guild</span>
                            <span class="spec-value">{{ $product['artisan'] }} ({{ $product['region'] }})</span>
                        </div>
                        <div class="spec-card">
                            <span class="spec-label">Delivery Timeline</span>
                            <span class="spec-value">24-48 hours inside Dhaka; 3-4 days nationwide via courier</span>
                        </div>
                        <div class="spec-card">
                            <span class="spec-label">Payment Security</span>
                            <span class="spec-value">Cash on Delivery, bKash, Nagad &amp; Online Banking</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Full Description and Story Tab --}}
            <div class="pdp-story-section">
                <div class="pdp-tabs-nav">
                    <button class="pdp-tab active" data-tab="desc">Product Story &amp; Details</button>
                    <button class="pdp-tab" data-tab="artisan">About The Artisan</button>
                    <button class="pdp-tab" data-tab="reviews">Customer Reviews ({{ $product['reviews_count'] ?? 128 }})</button>
                </div>
                <div class="pdp-tab-content active" id="tab-desc">
                    <h3>Crafted with Heritage, Woven for Tomorrow</h3>
                    <p>{{ $product['description'] }}</p>
                    <div class="highlight-banner">
                        <p>When you purchase this product, you're not just shopping — you're investing in rural artisans, preserving traditional Bangladeshi heritage, and funding peacebuilding projects across vulnerable communities.</p>
                    </div>
                </div>
            </div>

            {{-- Related Community Products (FAIR-TRADE CATALOG) --}}
            @if(count($relatedProducts) > 0)
                <div class="pdp-related-section">
                    <div class="related-header">
                        <div class="related-title-wrap">
                            <span class="eyebrow-pill">✨ FAIR-TRADE CATALOG</span>
                            <h2>You May Also Like</h2>
                            <p class="related-subtitle">Handmade with care by indigenous artisans &amp; rural cooperatives</p>
                        </div>
                        <a href="{{ route('shop.index') }}" class="btn-all-products">
                            Explore All Products <span>→</span>
                        </a>
                    </div>

                    <div class="pdp-catalog-grid">
                        @foreach($relatedProducts as $rel)
                            <article class="pdp-card">
                                <div class="pdp-card-media">
                                    <a href="{{ route('shop.show', $rel['slug']) }}" class="media-link">
                                        <img src="{{ $rel['image'] }}" alt="{{ $rel['name'] }}" loading="lazy">
                                    </a>
                                    @if(!empty($rel['discount']))
                                        <span class="pdp-card-discount">-{{ $rel['discount'] }}</span>
                                    @endif
                                    <span class="pdp-card-region">📍 {{ $rel['region'] }}</span>
                                </div>
                                <div class="pdp-card-body">
                                    <div class="pdp-card-category">{{ $rel['category_name'] }}</div>
                                    <h4 class="pdp-card-title">
                                        <a href="{{ route('shop.show', $rel['slug']) }}" title="{{ $rel['name'] }}">{{ $rel['name'] }}</a>
                                    </h4>
                                    
                                    <div class="pdp-card-rating">
                                        <span class="stars">★★★★★</span>
                                        <span class="rating-num">{{ $rel['rating'] ?? '4.9' }}</span>
                                        <span class="sales-count">({{ $rel['sold_count'] ?? '120+' }} sold)</span>
                                    </div>

                                    <div class="pdp-card-price-row">
                                        <span class="pdp-card-current-price">৳{{ number_format($rel['price']) }}</span>
                                        @if(!empty($rel['old_price']))
                                            <span class="pdp-card-old-price">৳{{ number_format($rel['old_price']) }}</span>
                                        @endif
                                    </div>

                                    <div class="pdp-card-actions">
                                        <button type="button" 
                                                class="btn-card-add-cart js-add-to-cart"
                                                data-id="{{ $rel['id'] }}"
                                                data-slug="{{ $rel['slug'] }}"
                                                data-name="{{ $rel['name'] }}"
                                                data-price="{{ (int) $rel['price'] }}"
                                                data-image="{{ $rel['image'] }}"
                                                title="Add to Cart">
                                            🛒 Add to Cart
                                        </button>
                                        <a href="{{ route('shop.checkout', ['item' => $rel['slug']]) }}" class="btn-card-buy" title="Direct Checkout">⚡ Buy Now</a>
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
    function switchMainImage(src, thumbElement) {
        const mainImg = document.getElementById('mainPdpImage');
        if (mainImg) {
            mainImg.style.opacity = '0.5';
            setTimeout(() => {
                mainImg.src = src;
                mainImg.style.opacity = '1';
            }, 120);
        }
        document.querySelectorAll('.thumb-box').forEach(el => el.classList.remove('active'));
        if (thumbElement) thumbElement.classList.add('active');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const minus = document.getElementById('btnQtyMinus');
        const plus = document.getElementById('btnQtyPlus');
        const qty = document.getElementById('inputQty');
        const dynamicSubtotal = document.getElementById('dynamicSubtotal');
        const unitPrice = {{ (int) $product['price'] }};

        function updateSubtotal(val) {
            if (dynamicSubtotal) {
                dynamicSubtotal.textContent = '৳' + Number(unitPrice * val).toLocaleString('en-IN');
            }
        }

        if (minus && plus && qty) {
            minus.addEventListener('click', () => {
                let v = parseInt(qty.value) || 1;
                if (v > 1) {
                    qty.value = v - 1;
                    updateSubtotal(v - 1);
                }
            });
            plus.addEventListener('click', () => {
                let v = parseInt(qty.value) || 1;
                qty.value = v + 1;
                updateSubtotal(v + 1);
            });
        }

        // Add to cart button handler (triggers AJAX cart slide-down)
        const addCartBtn = document.getElementById('btnPdpAddToCart');
        if (addCartBtn) {
            addCartBtn.addEventListener('click', function () {
                const currentQty = parseInt(qty.value) || 1;
                const newItem = {
                    id: {{ $product['id'] ?? 1 }},
                    slug: "{{ $product['slug'] }}",
                    name: "{{ addslashes($product['name']) }}",
                    price: {{ (int) $product['price'] }},
                    image: "{{ $product['image'] }}",
                    qty: currentQty
                };

                if (typeof window.addToCartGlobal === 'function') {
                    window.addToCartGlobal(newItem, true);
                }

                // Visual feedback on PDP button
                const originalHtml = addCartBtn.innerHTML;
                addCartBtn.innerHTML = '<span>✅ Added to Cart!</span>';
                addCartBtn.style.background = '#10B981';
                addCartBtn.style.borderColor = '#10B981';
                addCartBtn.style.color = '#fff';

                setTimeout(() => {
                    addCartBtn.innerHTML = originalHtml;
                    addCartBtn.style.background = '';
                    addCartBtn.style.borderColor = '';
                    addCartBtn.style.color = '';
                }, 1600);
            });
        }
    });
</script>
@endpush
