<!-- ============ HEADER ============ -->
<header class="site" id="siteHeader">
  <div class="wrap nav-row">
    <a href="{{ route('home') }}" class="brand">
      <svg viewBox="0 0 40 40" fill="none" aria-hidden="true">
        <path d="M20 3C11 9 5 15 5 22c0 8.3 6.7 15 15 15s15-6.7 15-15c0-7-6-13-15-19z" stroke="currentColor" stroke-width="1.6"/>
        <path d="M20 11c-3.5 3-8 6.5-8 11a8 8 0 0 0 16 0c0-4.5-4.5-8-8-11z" fill="var(--orange)"/>
      </svg>
      <span class="word">Witness Foundation<small>Peace Begins With Me</small></span>
    </a>

    <nav class="desktop" aria-label="Primary navigation">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

      {{-- Dropdown: About Us --}}
      <div class="nav-dropdown-wrap">
        <a href="{{ route('about') }}" class="nav-dropdown-trigger {{ request()->routeIs('about') ? 'active' : '' }}">
          About
          <svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown-menu">
          <a href="{{ route('about') }}">
            <span class="dropdown-item-title">Our Story &amp; Mission</span>
            <small>Founded in 2010 · Community driven</small>
          </a>
          <a href="{{ route('approach') }}">
            <span class="dropdown-item-title">Our Approach (GAM)</span>
            <small>Grounded Accountability Model</small>
          </a>
          <a href="{{ route('impact') }}">
            <span class="dropdown-item-title">Verified Impact</span>
            <small>32+ dialogues · 14,000+ reached</small>
          </a>
        </div>
      </div>

      {{-- Dropdown: Projects & Work --}}
      <div class="nav-dropdown-wrap">
        <a href="{{ route('projects') }}" class="nav-dropdown-trigger {{ request()->routeIs('projects') ? 'active' : '' }}">
          Projects
          <svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown-menu">
          <a href="{{ route('projects') }}">
            <span class="dropdown-item-title">All Projects</span>
            <small>Field initiatives &amp; research</small>
          </a>
          <a href="{{ route('projects') }}#safe-migration">
            <span class="dropdown-item-title">Safe Migration</span>
            <small>Dialogue with returnee workers</small>
          </a>
          <a href="{{ route('projects') }}#youth-peace">
            <span class="dropdown-item-title">Youth Peace Fellowship</span>
            <small>Digital literacy &amp; countering hate</small>
          </a>
          <a href="{{ route('projects') }}#climate-resilience">
            <span class="dropdown-item-title">Climate Resilience</span>
            <small>Coastal community adaptation</small>
          </a>
        </div>
      </div>

      {{-- Dropdown: Fair-Trade Shop --}}
      <div class="nav-dropdown-wrap">
        <a href="{{ route('shop.index') }}" class="nav-dropdown-trigger {{ request()->routeIs('shop*') ? 'active' : '' }}">
          Shop
          <svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <div class="nav-dropdown-menu">
          <a href="{{ route('shop.index') }}">
            <span class="dropdown-item-title">All Catalog</span>
            <small>Artisan &amp; Fair-Trade products</small>
          </a>
          <a href="{{ route('shop.index', ['category' => 'electronics']) }}">
            <span class="dropdown-item-title">Electronics &amp; Smart Tech</span>
            <small>Tablets, Audio &amp; Accessories</small>
          </a>
          <a href="{{ route('shop.index', ['category' => 'fashion']) }}">
            <span class="dropdown-item-title">Men's &amp; Women's Fashion</span>
            <small>Handwoven apparel &amp; hoodies</small>
          </a>
          <a href="{{ route('shop.index', ['category' => 'appliances']) }}">
            <span class="dropdown-item-title">Home &amp; Lifestyle</span>
            <small>Terracotta, Jute &amp; Crafts</small>
          </a>
          <a href="{{ route('shop.checkout') }}">
            <span class="dropdown-item-title">⚡ Instant Checkout</span>
            <small>Secure COD &amp; Online Payment</small>
          </a>
        </div>
      </div>

      <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="header-right">
      <a href="{{ route('donate') }}" class="btn btn-primary">Give</a>
      <button class="burger" id="burgerBtn" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>
