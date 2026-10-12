<!-- ============ MOBILE DRAWER ============ -->
<div class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation">
  <nav class="mobile-nav-list">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

    {{-- Mobile Submenu: About --}}
    <div class="mobile-subnav-group">
      <div class="mobile-subnav-header">
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <button type="button" class="mobile-subnav-toggle" aria-label="Toggle About Submenu">▼</button>
      </div>
      <div class="mobile-subnav-items">
        <a href="{{ route('about') }}">Our Story &amp; Mission</a>
        <a href="{{ route('approach') }}">Our Approach (GAM)</a>
        <a href="{{ route('impact') }}">Verified Impact</a>
      </div>
    </div>

    {{-- Mobile Submenu: Projects --}}
    <div class="mobile-subnav-group">
      <div class="mobile-subnav-header">
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
        <button type="button" class="mobile-subnav-toggle" aria-label="Toggle Projects Submenu">▼</button>
      </div>
      <div class="mobile-subnav-items">
        <a href="{{ route('projects') }}">All Projects</a>
        <a href="{{ route('projects') }}#safe-migration">Safe Migration</a>
        <a href="{{ route('projects') }}#youth-peace">Youth Peace Fellowship</a>
        <a href="{{ route('projects') }}#climate-resilience">Climate Resilience</a>
      </div>
    </div>

    {{-- Mobile Submenu: Shop --}}
    <div class="mobile-subnav-group">
      <div class="mobile-subnav-header">
        <a href="{{ route('shop.index') }}" class="{{ request()->routeIs('shop*') ? 'active' : '' }}">Shop</a>
        <button type="button" class="mobile-subnav-toggle" aria-label="Toggle Shop Submenu">▼</button>
      </div>
      <div class="mobile-subnav-items">
        <a href="{{ route('shop.index') }}">All Catalog</a>
        <a href="{{ route('shop.index', ['category' => 'electronics']) }}">Electronics &amp; Smart Tech</a>
        <a href="{{ route('shop.index', ['category' => 'fashion']) }}">Men's &amp; Women's Fashion</a>
        <a href="{{ route('shop.index', ['category' => 'appliances']) }}">Home Appliances &amp; Crafts</a>
        <a href="{{ route('shop.checkout') }}">⚡ Checkout</a>
      </div>
    </div>

    <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
  </nav>

  <div class="mobile-drawer-footer">
    <a href="{{ route('donate') }}" class="btn btn-primary" style="width:100%;">Give to Witness Foundation</a>
  </div>
</div>
