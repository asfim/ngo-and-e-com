<article class="ecom-card">
    <div class="ecom-card-media">
        <a href="{{ route('shop.show', $item['slug']) }}">
            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" loading="lazy">
        </a>
        @if(!empty($item['discount']))
            <span class="ecom-discount-badge">-{{ $item['discount'] }}</span>
        @endif
        @if(!empty($item['category_name']))
            <span class="ecom-tag-pill">{{ $item['category_name'] }}</span>
        @endif
    </div>
    <div class="ecom-card-body">
        <h4 class="ecom-product-title">
            <a href="{{ route('shop.show', $item['slug']) }}">{{ $item['name'] }}</a>
        </h4>
        <div class="ecom-price-line">
            <span class="current-price">৳{{ number_format($item['price']) }}</span>
            @if(!empty($item['old_price']))
                <span class="original-price">৳{{ number_format($item['old_price']) }}</span>
            @endif
        </div>
        <div class="ecom-meta-line">
            <span class="rating-stars">★★★★★ <small>({{ $item['reviews_count'] ?? 45 }})</small></span>
            <span class="sold-pill">{{ $item['sold_count'] ?? 120 }} sold</span>
        </div>
        <div class="ecom-card-actions">
            <a href="{{ route('shop.checkout', ['item' => $item['slug']]) }}" class="btn-ecom-action">Order Now ⚡</a>
        </div>
    </div>
</article>
