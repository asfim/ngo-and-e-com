@php
    $ecomCategories = [
        ['slug' => 'all', 'name' => 'All Categories', 'icon' => '🛍️'],
        ['slug' => 'electronics', 'name' => 'Electronics & Gadgets', 'icon' => '💻'],
        ['slug' => 'appliances', 'name' => 'Home Appliances', 'icon' => '⚡'],
        ['slug' => 'fashion', 'name' => 'Men\'s Fashion', 'icon' => '👔'],
        ['slug' => 'women', 'name' => 'Women\'s Fashion', 'icon' => '👗'],
        ['slug' => 'beauty', 'name' => 'Health & Beauty', 'icon' => '💄'],
        ['slug' => 'sports', 'name' => 'Sports & Outdoors', 'icon' => '⚽'],
        ['slug' => 'babies', 'name' => 'Babies & Toys', 'icon' => '🧸'],
        ['slug' => 'automotive', 'name' => 'Automotive & Motorbike', 'icon' => '🚗'],
        ['slug' => 'stationery', 'name' => 'Stationery & Crafts', 'icon' => '📚'],
    ];
    $currentCategory = $currentCategory ?? request('category', 'all');
    $search = $search ?? request('q', '');
    $isShopHome = request()->routeIs('shop.index');
@endphp

{{-- Top Utility Subheader (Search, Cart & Service Badges) --}}
<div class="ecom-topbar">
    <div class="wrap ecom-topbar-inner">
        <div class="ecom-top-left">
            <span class="ecom-badge-pill">🔥 Super Deals</span>
            <span>Fast 24-48h Delivery Across 64 Districts</span>
        </div>
        <div class="ecom-top-right">
            <span>🛡️ 100% Authentic</span>
            <span>•</span>
            <span>🔄 7 Days Return</span>
            <span>•</span>
            <span>💰 Cash on Delivery</span>
        </div>
    </div>
</div>

{{-- Main E-Commerce Search & Category Row --}}
<div class="ecom-search-bar-wrap">
    <div class="wrap ecom-search-bar-inner">
        {{-- Category Dropdown Wrapper --}}
        <div class="ecom-cat-dropdown-container" id="ecomCatContainer">
            <button type="button" class="ecom-cat-dropdown-trigger" id="ecomCatTrigger" aria-expanded="false" aria-haspopup="true">
                <span class="cat-hamburger">☰</span>
                <b>All Categories</b>
                <span class="caret">▼</span>
            </button>

            {{-- Floating Category Dropdown (Active on other pages, or click on /shop) --}}
            <div class="ecom-floating-cat-menu" id="ecomFloatingCatMenu" aria-hidden="true">
                <div class="floating-cat-header">
                    <span>Explore Categories</span>
                    <button type="button" class="floating-cat-close" id="floatingCatCloseBtn" aria-label="Close categories">&times;</button>
                </div>
                <ul class="floating-cat-list">
                    @foreach($ecomCategories as $cat)
                        <li class="{{ $currentCategory === $cat['slug'] ? 'active' : '' }}">
                            <a href="{{ route('shop.index', ['category' => $cat['slug']]) }}">
                                <span class="cat-icon">{{ $cat['icon'] }}</span>
                                <span class="cat-title">{{ $cat['name'] }}</span>
                                <span class="cat-arrow">›</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <form action="{{ route('shop.index') }}" method="GET" class="ecom-main-search-form">
            <input type="hidden" name="category" value="{{ $currentCategory }}">
            <input type="search" name="q" value="{{ $search }}" placeholder="Search products, brands, models, gadgets..." class="ecom-search-box" aria-label="Search">
            <button type="submit" class="ecom-search-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                Search
            </button>
        </form>

        {{-- Cart Dropdown Container --}}
        <div class="ecom-cart-wrap" id="ecomCartWrap">
            <button type="button" class="ecom-cart-trigger" id="cartDropdownTrigger" aria-expanded="false" aria-haspopup="true">
                <div class="cart-icon-wrap">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                    <span class="cart-counter" id="cartBadgeCount">1</span>
                </div>
                <div class="cart-text">
                    <small>My Cart</small>
                    <b id="cartHeaderTotal">৳1,850</b>
                </div>
            </button>

            {{-- Cart Dropdown Menu --}}
            <div class="ecom-cart-dropdown" id="cartDropdownMenu" aria-hidden="true">
                <div class="cart-dropdown-header">
                    <div class="cart-dropdown-title">
                        <span class="cart-dropdown-icon">🛍️</span>
                        <b>Shopping Bag</b>
                        <span class="cart-dropdown-badge" id="dropdownItemsBadge">1 item</span>
                    </div>
                    <button type="button" class="cart-close-btn" id="cartCloseBtn" aria-label="Close cart">&times;</button>
                </div>

                {{-- Scrollable product items list --}}
                <div class="cart-dropdown-items" id="cartDropdownList">
                    {{-- Dynamically populated via JS --}}
                </div>

                {{-- Empty State --}}
                <div class="cart-dropdown-empty" id="cartEmptyState" style="display:none;">
                    <span class="empty-icon">🛒</span>
                    <p>Your shopping cart is empty!</p>
                    <small>Browse our products and add them to your cart.</small>
                </div>

                {{-- Cart Footer --}}
                <div class="cart-dropdown-footer" id="cartDropdownFooter">
                    <div class="cart-dropdown-summary">
                        <div class="summary-line">
                            <span>Subtotal</span>
                            <b id="cartSubtotalText">৳1,850</b>
                        </div>
                        <div class="summary-line shipping-note">
                            <span>Shipping (Bangladesh)</span>
                            <span>৳100</span>
                        </div>
                        <div class="summary-line total-line">
                            <b>Estimated Total</b>
                            <b class="grand-total-amount" id="cartGrandTotalText">৳1,950</b>
                        </div>
                    </div>

                    <div class="cart-dropdown-actions">
                        <a href="{{ route('shop.checkout') }}" class="btn-cart-checkout" id="cartCheckoutBtn">
                            Proceed to Checkout ⚡
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
