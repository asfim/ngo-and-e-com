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
      <a href="{{ route('approach') }}" class="{{ request()->routeIs('approach') ? 'active' : '' }}">Our Approach</a>
      <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
      <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
      <a href="{{ route('shop.index') }}" class="{{ request()->routeIs('shop*') ? 'active' : '' }}">Shop</a>
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
