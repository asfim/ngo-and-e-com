<!-- ============ MOBILE DRAWER ============ -->
<div class="mobile-drawer" id="mobileDrawer" aria-label="Mobile navigation">
  <nav>
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('approach') }}" class="{{ request()->routeIs('approach') ? 'active' : '' }}">Our Approach</a>
    <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a>
    <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
    <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
    <a href="{{ route('shop.index') }}" class="{{ request()->routeIs('shop*') ? 'active' : '' }}">Shop</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
  </nav>
  <a href="{{ route('donate') }}" class="btn btn-primary">Give to Witness Foundation</a>
</div>
