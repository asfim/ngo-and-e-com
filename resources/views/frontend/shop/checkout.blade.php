@extends('frontend.layouts.app')

@section('title', 'Secure Checkout — Witness Foundation Fair-Trade Shop')

@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/shop.css') }}">
@endpush

@section('content')
    <section class="checkout-section">
        <div class="wrap">
            <nav class="shop-crumb" style="margin-bottom:28px;" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <span>/</span>
                <a href="{{ route('shop.index') }}">Shop</a>
                <span>/</span>
                <span>Checkout</span>
            </nav>

            <div class="checkout-grid">
                {{-- Left: Checkout Form --}}
                <div class="checkout-form-box reveal">
                    <h2>Shipping &amp; Delivery Details</h2>

                    <form action="{{ route('shop.checkout.process') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                        <input type="hidden" name="qty" value="{{ $qty }}">
                        <input type="hidden" name="total" value="{{ $total }}">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name <span style="color:var(--orange);">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="e.g. Tanvir Ahmed" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Phone (BD) <span style="color:var(--orange);">*</span></label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="017XXXXXXXX" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="tanvir@example.com">
                            </div>
                            <div class="form-group">
                                <label for="city">District / City <span style="color:var(--orange);">*</span></label>
                                <select id="city" name="city" class="form-control" required>
                                    <option value="Dhaka">Dhaka (1-2 days delivery)</option>
                                    <option value="Chittagong">Chittagong (2-3 days delivery)</option>
                                    <option value="Cox's Bazar">Cox's Bazar (2-3 days delivery)</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barisal">Barisal</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                    <option value="Other">Other District (Nationwide courier)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Full Delivery Address <span style="color:var(--orange);">*</span></label>
                            <textarea id="address" name="address" rows="3" class="form-control" placeholder="House / Flat no, Road no, Area, Landmark" required></textarea>
                        </div>

                        <div style="margin:30px 0 20px;">
                            <h3 style="font-size:20px; margin-bottom:14px;">Select Payment Method</h3>
                            <div class="payment-options">
                                <label class="payment-label selected">
                                    <input type="radio" name="payment_method" value="Cash on Delivery" checked>
                                    <div>
                                        <b style="display:block; color:var(--ink);">Cash on Delivery (COD)</b>
                                        <small style="opacity:.8;">Pay with cash upon delivery anywhere in Bangladesh.</small>
                                    </div>
                                </label>

                                <label class="payment-label">
                                    <input type="radio" name="payment_method" value="bKash / Nagad Mobile Banking">
                                    <div>
                                        <b style="display:block; color:var(--ink);">bKash / Nagad Instant Mobile Banking</b>
                                        <small style="opacity:.8;">Merchant payment gateway via personal or merchant wallet.</small>
                                    </div>
                                </label>

                                <label class="payment-label">
                                    <input type="radio" name="payment_method" value="Credit/Debit Card (Visa/Mastercard)">
                                    <div>
                                        <b style="display:block; color:var(--ink);">Credit / Debit Card (Visa, Mastercard, AMEX)</b>
                                        <small style="opacity:.8;">Encrypted 256-bit SSL secured transaction.</small>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div style="margin:24px 0; font-size:13.5px; opacity:.85;">
                            <label style="display:flex; align-items:flex-start; gap:8px; cursor:pointer;">
                                <input type="checkbox" required checked style="margin-top:3px;">
                                <span>I agree to the Fair-Trade purchase terms. 100% of profit directly supports community peacebuilding and artisan livelihoods.</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%; padding:16px; font-size:16px; font-weight:700;">
                            Place Fair-Trade Order ⚡ (৳{{ number_format($total) }})
                        </button>
                    </form>
                </div>

                {{-- Right: Order Summary --}}
                <div class="order-summary-box reveal">
                    <h3>Order Summary</h3>

                    <div class="order-item-row">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="order-item-thumb">
                        <div style="flex:1;">
                            <h4 style="font-size:15px; margin-bottom:4px; line-height:1.3;">{{ $product['name'] }}</h4>
                            <div style="font-size:13px; opacity:.8;">Qty: {{ $qty }} × ৳{{ number_format($product['price']) }}</div>
                            <div style="font-size:12px; color:var(--orange); font-weight:600; margin-top:2px;">📍 {{ $product['artisan'] }}</div>
                        </div>
                        <div style="font-weight:700; font-size:16px;">
                            ৳{{ number_format($subtotal) }}
                        </div>
                    </div>

                    <div class="order-calc-row">
                        <span>Items Subtotal</span>
                        <span>৳{{ number_format($subtotal) }}</span>
                    </div>

                    <div class="order-calc-row">
                        <span>Nationwide Delivery</span>
                        <span>৳{{ number_format($shipping) }}</span>
                    </div>

                    <div class="order-total-row">
                        <span>Total Payable</span>
                        <span>৳{{ number_format($total) }}</span>
                    </div>

                    <div class="ethical-guarantee">
                        <b style="color:var(--orange); display:block; margin-bottom:4px;">🌱 Fair-Trade Guarantee</b>
                        Witness Foundation certifies that every artisan receives ethical remuneration above statutory minimum wage and safe working conditions.
                    </div>

                    <div style="margin-top:20px; font-size:13px; text-align:center; opacity:.75;">
                        Questions about your order? Call <b>+880 1729 794203</b>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
