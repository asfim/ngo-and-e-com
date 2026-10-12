@extends('frontend.layouts.app')

@section('title', 'Witness E-Commerce — Online Shopping in Bangladesh')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}?v={{ time() }}">
@endpush

@section('content')
<div class="ecom-page-wrap">
    {{-- Unified E-Commerce Header Strip --}}
    @include('frontend.partials.ecom-header')

    <div class="wrap">
        {{-- Hero Showcase Grid (Sidebar Categories + Big Slider Banner) --}}
        <div class="ecom-hero-grid">
            {{-- Left Category Sidebar --}}
            <aside class="ecom-sidebar-categories">
                <ul class="sidebar-cat-list">
                    @foreach($categories as $cat)
                        <li class="{{ $currentCategory === $cat['slug'] ? 'active' : '' }}">
                            <a href="{{ route('shop.index', ['category' => $cat['slug']]) }}">
                                <span class="cat-icon">{{ $cat['icon'] }}</span>
                                <span class="cat-title">{{ $cat['name'] }}</span>
                                <span class="cat-arrow">›</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

            {{-- Big Center Hero Slider Banner --}}
            <div class="ecom-hero-slider" id="ecomHeroSlider">
                <div class="hero-slider-slide active">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=1200&q=85" alt="Mega Electronics & Fashion Fair">
                    <div class="slide-overlay">
                        <span class="slide-pill">MEGA PROMOTION 2026</span>
                        <h2>Mega Electronics &amp; Fashion Fair</h2>
                        <p>Up to 60% OFF on Genuine Brand Gadgets, Apparel, and Artisanal Creations</p>
                        <div class="slide-btns">
                            <a href="{{ route('shop.index', ['category' => 'electronics']) }}" class="btn-slide-primary">Shop Now</a>
                            <a href="{{ route('shop.index', ['category' => 'all']) }}" class="btn-slide-outline">Explore All</a>
                        </div>
                    </div>
                </div>

                <div class="hero-slider-slide">
                    <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1200&q=85" alt="Exclusive Lifestyle & Fashion">
                    <div class="slide-overlay">
                        <span class="slide-pill">NEW ARRIVAL 2026</span>
                        <h2>Exclusive Fashion &amp; Lifestyle</h2>
                        <p>Discover handcrafted artisan collections, modest wear &amp; everyday comfort styles</p>
                        <div class="slide-btns">
                            <a href="{{ route('shop.index', ['category' => 'fashion']) }}" class="btn-slide-primary">Shop Fashion</a>
                            <a href="{{ route('shop.index', ['category' => 'all']) }}" class="btn-slide-outline">View Catalog</a>
                        </div>
                    </div>
                </div>

                <div class="hero-slider-slide">
                    <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?auto=format&fit=crop&w=1200&q=85" alt="Smart Gadgets & Accessories">
                    <div class="slide-overlay">
                        <span class="slide-pill">TOP TECH PICKS</span>
                        <h2>Smart Gadgets &amp; Premium Tech</h2>
                        <p>Authentic quality smartwatches, audio devices &amp; everyday digital accessories</p>
                        <div class="slide-btns">
                            <a href="{{ route('shop.index', ['category' => 'electronics']) }}" class="btn-slide-primary">Shop Gadgets</a>
                            <a href="{{ route('shop.index', ['category' => 'all']) }}" class="btn-slide-outline">Discover More</a>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button class="slider-arrow prev" type="button" aria-label="Previous slide">&#10094;</button>
                <button class="slider-arrow next" type="button" aria-label="Next slide">&#10095;</button>

                <!-- Navigation Dots -->
                <div class="slider-dots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
        </div>

        {{-- FLASH DEALS / SUPER DEALS ROW (Countdown + Horizontal Product Rail) --}}
        <section class="ecom-flash-deals-section">
            <div class="flash-header">
                <div class="flash-title-wrap">
                    <span class="flash-icon">⚡</span>
                    <h2>Flash Deals</h2>
                    <div class="flash-countdown">
                        <span class="time-box">18</span><span>:</span>
                        <span class="time-box">42</span><span>:</span>
                        <span class="time-box">15</span>
                    </div>
                </div>
                <a href="{{ route('shop.index', ['category' => 'all']) }}" class="flash-see-more">View All Deals <span>→</span></a>
            </div>

            <div class="ecom-products-row-rail">
                @foreach($flashSales as $item)
                    <article class="ecom-card">
                        <div class="ecom-card-media">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" loading="lazy">
                            <span class="ecom-discount-badge">-{{ $item['discount'] }}</span>
                        </div>
                        <div class="ecom-card-body">
                            <h4 class="ecom-product-title"><a href="{{ route('shop.show', $item['slug']) }}">{{ $item['name'] }}</a></h4>
                            <div class="ecom-price-line">
                                <span class="current-price">৳{{ number_format($item['price']) }}</span>
                                <span class="original-price">৳{{ number_format($item['old_price']) }}</span>
                            </div>
                            <div class="ecom-meta-line">
                                <span class="rating-stars">★★★★★</span>
                                <span class="sold-pill">{{ $item['sold_count'] }} sold</span>
                            </div>
                            <div class="ecom-card-actions">
                                <a href="{{ route('shop.checkout', ['item' => $item['slug']]) }}" class="btn-ecom-action">Order Now</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- CATEGORY SECTION 1: Electronics & Gadgets --}}
        <section class="ecom-cat-section">
            <div class="section-strip-head">
                <div class="strip-title">
                    <span class="strip-indicator"></span>
                    <h3>Electronics &amp; Smart Tech</h3>
                </div>
                <a href="{{ route('shop.index', ['category' => 'electronics']) }}" class="strip-link">More in Electronics <span>→</span></a>
            </div>
            <div class="ecom-catalog-grid">
                @foreach($electronics as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
                @foreach($appliances as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
            </div>
        </section>

        {{-- CATEGORY SECTION 2: Men's & Women's Fashion --}}
        <section class="ecom-cat-section">
            <div class="section-strip-head">
                <div class="strip-title">
                    <span class="strip-indicator"></span>
                    <h3>Men's &amp; Women's Fashion</h3>
                </div>
                <a href="{{ route('shop.index', ['category' => 'fashion']) }}" class="strip-link">More in Fashion <span>→</span></a>
            </div>
            <div class="ecom-catalog-grid">
                @foreach($fashion as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
                @foreach($women as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
            </div>
        </section>

        {{-- CATEGORY SECTION 3: Home Appliances & Living --}}
        <section class="ecom-cat-section">
            <div class="section-strip-head">
                <div class="strip-title">
                    <span class="strip-indicator"></span>
                    <h3>Home, Appliances &amp; Lifestyle</h3>
                </div>
                <a href="{{ route('shop.index', ['category' => 'appliances']) }}" class="strip-link">More in Home <span>→</span></a>
            </div>
            <div class="ecom-catalog-grid">
                @foreach($appliances as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
                @foreach($stationery as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
            </div>
        </section>

        {{-- CATEGORY SECTION 4: Health, Beauty & Sports --}}
        <section class="ecom-cat-section">
            <div class="section-strip-head">
                <div class="strip-title">
                    <span class="strip-indicator"></span>
                    <h3>Health, Beauty &amp; Sports</h3>
                </div>
                <a href="{{ route('shop.index', ['category' => 'beauty']) }}" class="strip-link">More in Beauty &amp; Sports <span>→</span></a>
            </div>
            <div class="ecom-catalog-grid">
                @foreach($beauty as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
                @foreach($sports as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
            </div>
        </section>

        {{-- CATEGORY SECTION 5: Baby & Automotive --}}
        <section class="ecom-cat-section" style="margin-bottom:80px;">
            <div class="section-strip-head">
                <div class="strip-title">
                    <span class="strip-indicator"></span>
                    <h3>Babies, Toys &amp; Automotive</h3>
                </div>
                <a href="{{ route('shop.index', ['category' => 'automotive']) }}" class="strip-link">More in Auto &amp; Toys <span>→</span></a>
            </div>
            <div class="ecom-catalog-grid">
                @foreach($babies as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
                @foreach($automotive as $item)
                    @include('frontend.shop.partials.product-card', ['item' => $item])
                @endforeach
            </div>
        </section>

        {{-- Trust & Customer Service Row --}}
        <div class="ecom-trust-bar">
            <div class="trust-item">
                <span class="trust-icon">🚚</span>
                <div>
                    <b>Nationwide Express Shipping</b>
                    <small>Delivery in 24-48 hours across Bangladesh</small>
                </div>
            </div>
            <div class="trust-item">
                <span class="trust-icon">💳</span>
                <div>
                    <b>Secure Payment Methods</b>
                    <small>Cash on Delivery, bKash, Nagad, Visa &amp; Mastercard</small>
                </div>
            </div>
            <div class="trust-item">
                <span class="trust-icon">🛡️</span>
                <div>
                    <b>100% Buyer Protection</b>
                    <small>7 days easy replacement &amp; refund warranty</small>
                </div>
            </div>
            <div class="trust-item">
                <span class="trust-icon">💬</span>
                <div>
                    <b>Dedicated Customer Support</b>
                    <small>Call +880 1729 794203 (9 AM - 10 PM)</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('ecomHeroSlider');
    if (!slider) return;

    const slides = slider.querySelectorAll('.hero-slider-slide');
    const dots = slider.querySelectorAll('.slider-dots .dot');
    const prevBtn = slider.querySelector('.slider-arrow.prev');
    const nextBtn = slider.querySelector('.slider-arrow.next');

    if (slides.length <= 1) return;

    let currentIndex = 0;
    let timer = null;
    const intervalTime = 4500;

    function goToSlide(index) {
        slides[currentIndex].classList.remove('active');
        if (dots[currentIndex]) dots[currentIndex].classList.remove('active');

        currentIndex = (index + slides.length) % slides.length;

        slides[currentIndex].classList.add('active');
        if (dots[currentIndex]) dots[currentIndex].classList.add('active');
    }

    function nextSlide() {
        goToSlide(currentIndex + 1);
    }

    function prevSlide() {
        goToSlide(currentIndex - 1);
    }

    function startAutoplay() {
        stopAutoplay();
        timer = setInterval(nextSlide, intervalTime);
    }

    function stopAutoplay() {
        if (timer) {
            clearInterval(timer);
            timer = null;
        }
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function (e) {
            e.preventDefault();
            nextSlide();
            startAutoplay();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', function (e) {
            e.preventDefault();
            prevSlide();
            startAutoplay();
        });
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', function () {
            goToSlide(idx);
            startAutoplay();
        });
    });

    slider.addEventListener('mouseenter', stopAutoplay);
    slider.addEventListener('mouseleave', startAutoplay);

    // Touch swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoplay();
    }, { passive: true });

    slider.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 45) {
            nextSlide();
        } else if (touchEndX - touchStartX > 45) {
            prevSlide();
        }
        startAutoplay();
    }, { passive: true });

    startAutoplay();
});
</script>
@endpush
@php /* cart handled globally in main.js */ @endphp
<style>
/* shop page specific overrides if any */
</style>
<script>
// Keep empty or for shop-specific extensions
</script>


