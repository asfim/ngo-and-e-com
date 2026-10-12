@extends('frontend.layouts.app')

@section('title', 'Checkout — Witness Foundation Fair-Trade Shop')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}?v={{ time() }}">
@endpush

@section('content')
    {{-- Unified E-Commerce Header Strip --}}
    @include('frontend.partials.ecom-header')

    <section class="checkout-page-section">
        <div class="wrap checkout-wrap">
            
            {{-- Stepper Navigation (1 Cart -> 2 Shipping -> 3 Payment -> 4 Review) --}}
            <div class="checkout-stepper-bar">
                <div class="stepper-item step-completed">
                    <span class="step-badge check-badge">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </span>
                    <span class="step-label">Cart</span>
                </div>
                <div class="stepper-divider step-divider-active"></div>

                <div class="stepper-item step-current">
                    <span class="step-badge">2</span>
                    <span class="step-label">Shipping</span>
                </div>
                <div class="stepper-divider"></div>

                <div class="stepper-item">
                    <span class="step-badge">3</span>
                    <span class="step-label">Payment</span>
                </div>
                <div class="stepper-divider"></div>

                <div class="stepper-item">
                    <span class="step-badge">4</span>
                    <span class="step-label">Review</span>
                </div>
            </div>

            {{-- Main Form & Summary Grid --}}
            <form action="{{ route('shop.checkout.process') }}" method="POST" id="checkoutForm">
                @csrf
                <input type="hidden" name="product_name" id="hiddenProductName" value="{{ $product['name'] }}">
                <input type="hidden" name="qty" id="hiddenQty" value="{{ $qty }}">
                <input type="hidden" name="total" id="hiddenTotal" value="{{ $subtotal + 60 }}">
                <input type="hidden" name="city" id="hiddenCity" value="Dhaka">

                <div class="checkout-main-grid">
                    
                    {{-- LEFT COLUMN: Step Cards --}}
                    <div class="checkout-left-col">
                        
                        {{-- 01 Shipping address Card --}}
                        <div class="checkout-card">
                            <div class="card-title-row">
                                <span class="step-num">01</span>
                                <div>
                                    <h2 class="card-heading">Shipping address</h2>
                                    <p class="card-subheading">Please enter your shipping delivery details.</p>
                                </div>
                            </div>

                            <div class="checkout-form-grid">
                                <div class="c-field-group">
                                    <label class="c-field-label" for="full_name">FULL NAME</label>
                                    <input type="text" id="full_name" name="name" class="c-input" placeholder="Your full name" required>
                                </div>
                                <div class="c-field-group">
                                    <label class="c-field-label" for="phone_number">PHONE NUMBER</label>
                                    <input type="tel" id="phone_number" name="phone" class="c-input" placeholder="+8801XXXXXXXXX" required>
                                </div>
                                <div class="c-field-group c-field-full">
                                    <label class="c-field-label" for="address">ADDRESS</label>
                                    <textarea id="address" name="address" rows="3" class="c-input c-textarea" placeholder="House, Road, Area, City" required></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- 02 Shipping method Card --}}
                        <div class="checkout-card">
                            <div class="card-title-row">
                                <span class="step-num">02</span>
                                <div>
                                    <h2 class="card-heading">Shipping method</h2>
                                    <p class="card-subheading">Select your delivery zone.</p>
                                </div>
                            </div>

                            <div class="shipping-methods-wrap">
                                {{-- Inside Dhaka Option --}}
                                <label class="method-option-card active" id="methodInsideDhaka">
                                    <div class="method-radio-left">
                                        <input type="radio" name="shipping_zone" value="inside_dhaka" checked class="custom-radio-input">
                                        <span class="custom-radio-circle"></span>
                                        <div class="method-meta">
                                            <span class="method-title">Inside Dhaka</span>
                                            <span class="method-timeline">Delivery within 1–2 business days</span>
                                        </div>
                                    </div>
                                    <div class="method-price" data-cost="60">৳60.00</div>
                                </label>

                                {{-- Outside Dhaka Option --}}
                                <label class="method-option-card" id="methodOutsideDhaka">
                                    <div class="method-radio-left">
                                        <input type="radio" name="shipping_zone" value="outside_dhaka" class="custom-radio-input">
                                        <span class="custom-radio-circle"></span>
                                        <div class="method-meta">
                                            <span class="method-title">Outside Dhaka</span>
                                            <span class="method-timeline">Delivery within 3–5 business days</span>
                                        </div>
                                    </div>
                                    <div class="method-price" data-cost="120">৳120.00</div>
                                </label>
                            </div>
                        </div>

                        {{-- 03 Payment Card --}}
                        <div class="checkout-card">
                            <div class="card-title-row">
                                <span class="step-num">03</span>
                                <div>
                                    <h2 class="card-heading">Payment</h2>
                                    <p class="card-subheading">All transactions are encrypted and secure.</p>
                                </div>
                            </div>

                            <div class="payment-tabs-grid">
                                <label class="payment-tab active" id="tabOnlinePayment">
                                    <input type="radio" name="payment_method" value="Online Payment" checked class="hidden-payment-radio">
                                    <div class="tab-icon">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                                            <line x1="2" y1="10" x2="22" y2="10"></line>
                                        </svg>
                                    </div>
                                    <span class="tab-label">Online Payment</span>
                                </label>

                                <label class="payment-tab" id="tabCodPayment">
                                    <input type="radio" name="payment_method" value="Cash on Delivery" class="hidden-payment-radio">
                                    <div class="tab-icon">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                                            <circle cx="12" cy="12" r="2"></circle>
                                            <path d="M6 12h.01M18 12h.01"></path>
                                        </svg>
                                    </div>
                                    <span class="tab-label">Cash on Delivery</span>
                                </label>
                            </div>

                            {{-- Payment Notice Box --}}
                            <div class="payment-notice-box" id="paymentNoticeBox">
                                <div class="notice-header">
                                    <span class="notice-icon">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#2563EB" stroke="#2563EB" stroke-width="1.5">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        </svg>
                                    </span>
                                    <h4 class="notice-title">SSL Commerz Secure Payment Gateway</h4>
                                </div>
                                <p class="notice-body">
                                    You will be redirected to the secure SSL Commerz gateway to pay using Cards, Mobile Banking (bKash, Nagad, Rocket) or Net Banking.
                                </p>
                            </div>
                        </div>

                    </div>

                    {{-- RIGHT COLUMN: Order summary Sticky Box --}}
                    <div class="checkout-right-col">
                        <div class="order-summary-card">
                            <h3 class="summary-heading">Order summary</h3>
                            <span class="summary-item-count" id="summaryCountLabel">{{ $qty }} item</span>

                            {{-- Item Row in Order Summary --}}
                            <div class="summary-product-item">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="summary-prod-thumb">
                                <div class="summary-prod-details">
                                    <h4 class="summary-prod-name">{{ $product['name'] }}</h4>
                                    <span class="summary-prod-qty">Qty {{ $qty }}</span>
                                </div>
                                <div class="summary-prod-price">
                                    ৳<span id="summaryProdPriceVal">{{ number_format($product['price'] * $qty, 2) }}</span>
                                </div>
                            </div>

                            {{-- Discount Code Input Row --}}
                            <div class="discount-code-row">
                                <input type="text" id="discountCodeInput" class="c-input discount-input" placeholder="Discount code">
                                <button type="button" id="discountApplyBtn" class="btn-discount-apply">Apply</button>
                            </div>

                            {{-- Calculation Rows --}}
                            <div class="calc-table">
                                <div class="calc-row">
                                    <span class="calc-label">Subtotal</span>
                                    <span class="calc-val">৳<span id="subtotalValText">{{ number_format($subtotal, 2) }}</span></span>
                                </div>
                                <div class="calc-row">
                                    <span class="calc-label">Shipping</span>
                                    <span class="calc-val">৳<span id="shippingValText">60.00</span></span>
                                </div>
                            </div>

                            <hr class="summary-divider">

                            {{-- Total Row --}}
                            <div class="total-row">
                                <span class="total-label">Total</span>
                                <span class="total-val">৳<span id="totalValText">{{ number_format($subtotal + 60, 2) }}</span></span>
                            </div>

                            {{-- Place Order Action Button --}}
                            <button type="submit" class="btn-place-order" id="btnPlaceOrder">
                                <span>Place order</span>
                                <span class="arrow-icon">→</span>
                            </button>

                            {{-- Trust Badges Row --}}
                            <div class="summary-trust-row">
                                <span class="trust-badge-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                    Secure
                                </span>
                                <span class="trust-badge-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"></polyline><path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path></svg>
                                    Free returns
                                </span>
                                <span class="trust-badge-item">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                    Tracked shipping
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const methodInsideDhaka = document.getElementById('methodInsideDhaka');
    const methodOutsideDhaka = document.getElementById('methodOutsideDhaka');
    const hiddenCity = document.getElementById('hiddenCity');
    const hiddenTotal = document.getElementById('hiddenTotal');
    const shippingValText = document.getElementById('shippingValText');
    const totalValText = document.getElementById('totalValText');
    const subtotal = {{ $subtotal }};

    let currentShipping = 60;

    function updateTotals() {
        const grandTotal = subtotal + currentShipping;
        if (shippingValText) shippingValText.textContent = currentShipping.toFixed(2);
        if (totalValText) totalValText.textContent = grandTotal.toFixed(2);
        if (hiddenTotal) hiddenTotal.value = grandTotal;
    }

    if (methodInsideDhaka && methodOutsideDhaka) {
        const insideRadio = methodInsideDhaka.querySelector('input[type="radio"]');
        const outsideRadio = methodOutsideDhaka.querySelector('input[type="radio"]');

        methodInsideDhaka.addEventListener('click', function () {
            insideRadio.checked = true;
            methodInsideDhaka.classList.add('active');
            methodOutsideDhaka.classList.remove('active');
            currentShipping = 60;
            if (hiddenCity) hiddenCity.value = 'Dhaka';
            updateTotals();
        });

        methodOutsideDhaka.addEventListener('click', function () {
            outsideRadio.checked = true;
            methodOutsideDhaka.classList.add('active');
            methodInsideDhaka.classList.remove('active');
            currentShipping = 120;
            if (hiddenCity) hiddenCity.value = 'Outside Dhaka';
            updateTotals();
        });
    }

    // Payment Tab switching
    const tabOnline = document.getElementById('tabOnlinePayment');
    const tabCod = document.getElementById('tabCodPayment');
    const noticeBox = document.getElementById('paymentNoticeBox');

    if (tabOnline && tabCod) {
        const radioOnline = tabOnline.querySelector('input');
        const radioCod = tabCod.querySelector('input');

        tabOnline.addEventListener('click', function () {
            radioOnline.checked = true;
            tabOnline.classList.add('active');
            tabCod.classList.remove('active');
            if (noticeBox) {
                noticeBox.innerHTML = `
                    <div class="notice-header">
                        <span class="notice-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="#2563EB" stroke="#2563EB" stroke-width="1.5">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </span>
                        <h4 class="notice-title">SSL Commerz Secure Payment Gateway</h4>
                    </div>
                    <p class="notice-body">
                        You will be redirected to the secure SSL Commerz gateway to pay using Cards, Mobile Banking (bKash, Nagad, Rocket) or Net Banking.
                    </p>
                `;
            }
        });

        tabCod.addEventListener('click', function () {
            radioCod.checked = true;
            tabCod.classList.add('active');
            tabOnline.classList.remove('active');
            if (noticeBox) {
                noticeBox.innerHTML = `
                    <div class="notice-header">
                        <span class="notice-icon" style="color:var(--orange);">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </span>
                        <h4 class="notice-title">Cash on Delivery</h4>
                    </div>
                    <p class="notice-body">
                        Pay with physical cash to the courier representative when your parcel is delivered at your doorstep.
                    </p>
                `;
            }
        });
    }

    // Coupon demo
    const discountBtn = document.getElementById('discountApplyBtn');
    const discountInput = document.getElementById('discountCodeInput');
    if (discountBtn && discountInput) {
        discountBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const val = discountInput.value.trim();
            if (!val) {
                alert('Please enter a coupon code.');
                return;
            }
            if (val.toUpperCase() === 'WITNESS' || val.toUpperCase() === 'SAVE10') {
                alert('Coupon applied! 10% discount added.');
            } else {
                alert('Invalid discount code. Try "WITNESS".');
            }
        });
    }
});
</script>
@endpush
