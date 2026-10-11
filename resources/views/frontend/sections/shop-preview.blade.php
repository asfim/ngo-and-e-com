<!-- ============ FAIR-TRADE SHOP (HOME PREVIEW) ============ -->
<section class="section" id="shop">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="eyebrow">Community Marketplace</div>
      <h2>Fair-Trade Peace Crafts</h2>
      <p style="max-width:58ch; margin-top:12px; font-size:16px; opacity:.85;">
        Support rural women peacebuilders, indigenous artisans, and returnee migrant cooperatives by purchasing verified fair-trade ethical goods.
      </p>
    </div>

    <div class="home-news-grid">
      <!-- Item 1 -->
      <article class="product-card reveal">
        <div class="product-media">
          <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Handwoven Indigenous Pinon Waistcoat" loading="lazy">
          <span class="product-tag">Handmade Textiles</span>
        </div>
        <div class="product-body">
          <span class="product-artisan">📍 Chittagong Hill Tracts · Women Weavers</span>
          <h3><a href="{{ route('shop.show', 'handwoven-chakma-waistcoat') }}">Handwoven Indigenous Pinon Waistcoat</a></h3>
          <p>Hand-loomed indigenous waistcoat made from 100% natural dyed organic cotton by women peacebuilders in Rangamati.</p>
          <div class="product-price-row">
            <span class="product-price">৳1,850</span>
            <span class="product-old-price">৳2,200</span>
          </div>
          <div class="product-footer">
            <a href="{{ route('shop.show', 'handwoven-chakma-waistcoat') }}" class="btn-view-details">Details <span>→</span></a>
            <a href="{{ route('shop.checkout', ['item' => 'handwoven-chakma-waistcoat']) }}" class="btn-buy">Buy Now ⚡</a>
          </div>
        </div>
      </article>

      <!-- Item 2 -->
      <article class="product-card reveal">
        <div class="product-media">
          <img src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Eyes of the River Photo Essay Book" loading="lazy">
          <span class="product-tag">Books &amp; Media</span>
        </div>
        <div class="product-body">
          <span class="product-artisan">📍 Cox's Bazar &amp; Dhaka · Media Lab</span>
          <h3><a href="{{ route('shop.show', 'participatory-peace-photo-book') }}">Eyes of the River: Photo Essay Book</a></h3>
          <p>Hardcover 140-page photography book shot entirely by 24 refugee and host community youth documentarians.</p>
          <div class="product-price-row">
            <span class="product-price">৳1,200</span>
            <span class="product-old-price">৳1,500</span>
          </div>
          <div class="product-footer">
            <a href="{{ route('shop.show', 'participatory-peace-photo-book') }}" class="btn-view-details">Details <span>→</span></a>
            <a href="{{ route('shop.checkout', ['item' => 'participatory-peace-photo-book']) }}" class="btn-buy">Buy Now ⚡</a>
          </div>
        </div>
      </article>

      <!-- Item 3 -->
      <article class="product-card reveal">
        <div class="product-media">
          <img src="https://images.unsplash.com/photo-1597633425046-08f5110420b5?auto=format&amp;fit=crop&amp;w=800&amp;q=80" alt="Hand-Embroidered Jute Peace Tote Bag" loading="lazy">
          <span class="product-tag">Accessories</span>
        </div>
        <div class="product-body">
          <span class="product-artisan">📍 Jamalpur · Returnee Migrant Guild</span>
          <h3><a href="{{ route('shop.show', 'recycled-jute-peace-tote') }}">Hand-Embroidered Jute Peace Tote Bag</a></h3>
          <p>Eco-friendly golden jute bag with Nakshi Kantha motifs, handcrafted by returnee female migrant workers.</p>
          <div class="product-price-row">
            <span class="product-price">৳650</span>
            <span class="product-old-price">৳850</span>
          </div>
          <div class="product-footer">
            <a href="{{ route('shop.show', 'recycled-jute-peace-tote') }}" class="btn-view-details">Details <span>→</span></a>
            <a href="{{ route('shop.checkout', ['item' => 'recycled-jute-peace-tote']) }}" class="btn-buy">Buy Now ⚡</a>
          </div>
        </div>
      </article>
    </div>

    <div class="more-row reveal" style="margin-top:40px;">
      <a href="{{ route('shop.index') }}" class="btn-more">More from our shop <span>→</span></a>
    </div>
  </div>
</section>
