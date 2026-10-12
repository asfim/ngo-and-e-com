/**
 * Witness Foundation — Frontend Interactions
 */
document.addEventListener('DOMContentLoaded', () => {
  // 1. Header solid-on-scroll
  const header = document.getElementById('siteHeader');
  if (header) {
    const onScroll = () => header.classList.toggle('solid', window.scrollY > 40);
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // 2. Mobile drawer navigation & subnav toggles
  const burger = document.getElementById('burgerBtn');
  const drawer = document.getElementById('mobileDrawer');
  if (burger && drawer) {
    burger.addEventListener('click', () => {
      const open = drawer.classList.toggle('open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    // Submenu accordion toggles
    drawer.querySelectorAll('.mobile-subnav-toggle').forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        const group = btn.closest('.mobile-subnav-group');
        if (group) group.classList.toggle('open');
      });
    });

    drawer.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        drawer.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 3. Reveal elements on scroll
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length > 0 && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('in'));
  }

  // 4. Grounded Accountability Model (GAM) flow step reveal
  const flowSteps = document.querySelectorAll('.flow-step');
  if (flowSteps.length > 0 && 'IntersectionObserver' in window) {
    const io2 = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('in');
      });
    }, { threshold: 0.5 });
    flowSteps.forEach(el => io2.observe(el));
  }

  // 5. Timeline accordion
  const timelineItems = document.querySelectorAll('.t-item');
  timelineItems.forEach(item => {
    const head = item.querySelector('.t-head');
    if (head) {
      head.addEventListener('click', () => {
        const wasOpen = item.classList.contains('open');
        item.classList.toggle('open', !wasOpen);
      });
    }
  });

  // 6. Number counters animation
  function animateCount(el) {
    const target = parseFloat(el.dataset.target);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const dur = 1400;
    const start = performance.now();
    function tick(now) {
      const p = Math.min(1, (now - start) / dur);
      const eased = 1 - Math.pow(1 - p, 3);
      const val = Math.round(target * eased);
      el.textContent = prefix + val + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  const statGrid = document.getElementById('statGrid');
  if (statGrid && 'IntersectionObserver' in window) {
    const io3 = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          statGrid.querySelectorAll('.num').forEach(animateCount);
          io3.disconnect();
        }
      });
    }, { threshold: 0.4 });
    io3.observe(statGrid);
  }

  // 7. Support calculator
  const daysRange = document.getElementById('daysRange');
  const daysValue = document.getElementById('daysValue');
  const supportAmount = document.getElementById('supportAmount');
  let selectedPeople = 4;
  let recurring = false;

  function updateSupportAmount() {
    if (!daysRange || !daysValue || !supportAmount) return;
    const days = Number(daysRange.value);
    const amount = Math.round((days * selectedPeople * 1.7) + (recurring ? 28 : 0));
    daysValue.textContent = days;
    supportAmount.textContent = '$' + amount;
  }

  if (daysRange) {
    daysRange.addEventListener('input', updateSupportAmount);
    document.querySelectorAll('.calc-options, .calc-toggle').forEach(group => {
      group.querySelectorAll('.calc-option').forEach(option => {
        option.addEventListener('click', () => {
          group.querySelectorAll('.calc-option').forEach(item => item.classList.remove('active'));
          option.classList.add('active');
          if (group.dataset.group === 'people') selectedPeople = Number(option.dataset.value);
          if (group.dataset.group === 'recurring') recurring = option.dataset.value === 'yes';
          updateSupportAmount();
        });
      });
    });
    updateSupportAmount();
  }

  // 8. Dynamic Gallery image swap on scroll
  const fieldGallery = document.querySelector('.field-gallery');
  const galleryImages = fieldGallery ? fieldGallery.querySelectorAll('.gallery-card img') : [];
  const gallerySources = [
    [
      'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=1200&q=85',
      'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=1200&q=85',
      'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1200&q=85',
      'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=1200&q=85'
    ],
    [
      'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=85'
    ],
    [
      'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=85'
    ],
    [
      'https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1472162072942-cd5147eb3902?auto=format&fit=crop&w=900&q=85'
    ],
    [
      'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=85',
      'https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?auto=format&fit=crop&w=900&q=85'
    ]
  ];

  let galleryFrame;
  let galleryStep = -1;

  function updateGalleryOnScroll() {
    if (!fieldGallery || !galleryImages.length) return;
    const bounds = fieldGallery.getBoundingClientRect();
    const sectionTop = window.scrollY + bounds.top;
    const scrollDistance = Math.max(1, fieldGallery.offsetHeight - window.innerHeight);
    const progress = Math.max(0, Math.min(1, (window.scrollY - sectionTop) / scrollDistance));
    const nextStep = Math.min(3, Math.floor(progress * 4));

    if (nextStep === galleryStep) return;
    galleryStep = nextStep;

    galleryImages.forEach((image, index) => {
      image.classList.add('is-changing');
      window.setTimeout(() => {
        if (gallerySources[index] && gallerySources[index][galleryStep]) {
          image.src = gallerySources[index][galleryStep];
        }
        image.classList.remove('is-changing');
      }, 120);
    });
  }

  if (fieldGallery) {
    updateGalleryOnScroll();
    window.addEventListener('scroll', () => {
      if (galleryFrame) return;
      galleryFrame = window.requestAnimationFrame(() => {
        updateGalleryOnScroll();
        galleryFrame = null;
      });
    }, { passive: true });
  }

  // 11. Global E-Commerce Header Category Dropdown & Cart Manager
  const catTrigger = document.getElementById('ecomCatTrigger');
  const catMenu = document.getElementById('ecomFloatingCatMenu');
  const catCloseBtn = document.getElementById('floatingCatCloseBtn');
  const isShopHomePage = window.location.pathname.replace(/\/+$/, '').endsWith('/shop');

  if (catTrigger && catMenu) {
    catTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();

      // If on /shop page, smooth scroll to categories sidebar or toggle if mobile
      const sidebarCat = document.querySelector('.ecom-sidebar-categories');
      if (isShopHomePage && sidebarCat && window.innerWidth > 1100) {
        sidebarCat.scrollIntoView({ behavior: 'smooth', block: 'start' });
        sidebarCat.style.transition = 'box-shadow .3s ease';
        sidebarCat.style.boxShadow = '0 0 0 3px var(--orange)';
        setTimeout(() => { sidebarCat.style.boxShadow = ''; }, 1600);
        return;
      }

      // On all other pages (and mobile /shop), open the floating category dropdown
      const isOpen = catMenu.classList.toggle('open');
      catTrigger.classList.toggle('active', isOpen);
      catMenu.setAttribute('aria-hidden', !isOpen);
      catTrigger.setAttribute('aria-expanded', isOpen);
    });

    if (catCloseBtn) {
      catCloseBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        catMenu.classList.remove('open');
        catTrigger.classList.remove('active');
        catMenu.setAttribute('aria-hidden', 'true');
        catTrigger.setAttribute('aria-expanded', 'false');
      });
    }

    document.addEventListener('click', (e) => {
      if (catMenu.classList.contains('open') && !catMenu.contains(e.target) && !catTrigger.contains(e.target)) {
        catMenu.classList.remove('open');
        catTrigger.classList.remove('active');
        catMenu.setAttribute('aria-hidden', 'true');
        catTrigger.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && catMenu.classList.contains('open')) {
        catMenu.classList.remove('open');
        catTrigger.classList.remove('active');
        catMenu.setAttribute('aria-hidden', 'true');
        catTrigger.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // Global Cart Dropdown Management
  const cartTrigger = document.getElementById('cartDropdownTrigger');
  const cartDropdown = document.getElementById('cartDropdownMenu');
  const cartCloseBtn = document.getElementById('cartCloseBtn');
  const cartDropdownList = document.getElementById('cartDropdownList');
  const cartEmptyState = document.getElementById('cartEmptyState');
  const cartDropdownFooter = document.getElementById('cartDropdownFooter');
  const cartBadgeCount = document.getElementById('cartBadgeCount');
  const cartHeaderTotal = document.getElementById('cartHeaderTotal');
  const dropdownItemsBadge = document.getElementById('dropdownItemsBadge');
  const cartSubtotalText = document.getElementById('cartSubtotalText');
  const cartGrandTotalText = document.getElementById('cartGrandTotalText');
  const cartCheckoutBtn = document.getElementById('cartCheckoutBtn');

  if (cartTrigger && cartDropdown) {
    let globalCart = [
      {
        id: 1,
        slug: 'handwoven-chakma-waistcoat',
        name: 'Handwoven Indigenous Pinon Waistcoat',
        price: 1850,
        image: 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=400&q=80',
        qty: 1
      },
      {
        id: 3,
        slug: 'recycled-jute-peace-tote',
        name: 'Hand-Embroidered Natural Jute Tote Bag',
        price: 650,
        image: 'https://images.unsplash.com/photo-1597633425046-08f5110420b5?auto=format&fit=crop&w=400&q=80',
        qty: 1
      },
      {
        id: 2,
        slug: 'participatory-peace-photo-book',
        name: 'Eyes of the River: Photo Essay Book',
        price: 1200,
        image: 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=400&q=80',
        qty: 1
      }
    ];

    try {
      const saved = localStorage.getItem('ecom_shopping_cart');
      if (saved) {
        const parsed = JSON.parse(saved);
        if (Array.isArray(parsed)) globalCart = parsed;
      }
    } catch(e) {}

    function saveGlobalCart() {
      try {
        localStorage.setItem('ecom_shopping_cart', JSON.stringify(globalCart));
      } catch(e) {}
    }

    function formatBDT(amount) {
      return '৳' + Number(amount).toLocaleString('en-IN');
    }

    function renderGlobalCart() {
      if (!cartDropdownList) return;

      const totalItemsCount = globalCart.reduce((sum, item) => sum + item.qty, 0);
      const subtotal = globalCart.reduce((sum, item) => sum + (item.price * item.qty), 0);
      const shipping = totalItemsCount > 0 ? 100 : 0;
      const grandTotal = subtotal + shipping;

      if (cartBadgeCount) {
        cartBadgeCount.textContent = totalItemsCount;
        cartBadgeCount.classList.remove('pop');
        void cartBadgeCount.offsetWidth;
        cartBadgeCount.classList.add('pop');
      }
      if (cartHeaderTotal) cartHeaderTotal.textContent = formatBDT(subtotal);
      if (dropdownItemsBadge) dropdownItemsBadge.textContent = totalItemsCount + (totalItemsCount === 1 ? ' item' : ' items');

      if (globalCart.length === 0) {
        cartDropdownList.style.display = 'none';
        cartDropdownList.innerHTML = '';
        if (cartEmptyState) cartEmptyState.style.display = 'block';
        if (cartDropdownFooter) cartDropdownFooter.style.display = 'none';
        return;
      }

      cartDropdownList.style.display = 'block';
      if (cartEmptyState) cartEmptyState.style.display = 'none';
      if (cartDropdownFooter) cartDropdownFooter.style.display = 'block';

      if (cartSubtotalText) cartSubtotalText.textContent = formatBDT(subtotal);
      if (cartGrandTotalText) cartGrandTotalText.textContent = formatBDT(grandTotal);

      if (cartCheckoutBtn && globalCart.length > 0) {
        cartCheckoutBtn.href = "/shop/checkout?item=" + encodeURIComponent(globalCart[0].slug) + "&qty=" + globalCart[0].qty;
      }

      cartDropdownList.innerHTML = globalCart.map(item => `
        <div class="cart-item-row" data-id="${item.id}">
          <a href="/shop/${item.slug}" class="cart-item-thumb">
            <img src="${item.image}" alt="${item.name}">
          </a>
          <div class="cart-item-details">
            <a href="/shop/${item.slug}" class="cart-item-title" title="${item.name}">${item.name}</a>
            <div class="cart-item-meta">
              <span class="cart-item-price">${formatBDT(item.price)}</span>
              <div class="cart-item-qty-wrap">
                <button type="button" class="cart-qty-btn btn-qty-dec" data-id="${item.id}" aria-label="Decrease quantity">−</button>
                <span class="cart-qty-val">${item.qty}</span>
                <button type="button" class="cart-qty-btn btn-qty-inc" data-id="${item.id}" aria-label="Increase quantity">+</button>
              </div>
            </div>
          </div>
          <button type="button" class="cart-item-remove-btn" data-id="${item.id}" title="Remove item" aria-label="Remove item">
            &times;
          </button>
        </div>
      `).join('');

      // Attach actions
      cartDropdownList.querySelectorAll('.cart-item-remove-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          const id = parseInt(this.getAttribute('data-id'), 10);
          const row = this.closest('.cart-item-row');
          if (row) {
            row.classList.add('removing');
            setTimeout(() => {
              globalCart = globalCart.filter(item => item.id !== id);
              saveGlobalCart();
              renderGlobalCart();
            }, 240);
          } else {
            globalCart = globalCart.filter(item => item.id !== id);
            saveGlobalCart();
            renderGlobalCart();
          }
        });
      });

      cartDropdownList.querySelectorAll('.btn-qty-inc').forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          const id = parseInt(this.getAttribute('data-id'), 10);
          const target = globalCart.find(item => item.id === id);
          if (target) {
            target.qty += 1;
            saveGlobalCart();
            renderGlobalCart();
          }
        });
      });

      cartDropdownList.querySelectorAll('.btn-qty-dec').forEach(btn => {
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          const id = parseInt(this.getAttribute('data-id'), 10);
          const target = globalCart.find(item => item.id === id);
          if (target) {
            if (target.qty > 1) {
              target.qty -= 1;
              saveGlobalCart();
              renderGlobalCart();
            } else {
              const row = this.closest('.cart-item-row');
              if (row) {
                row.classList.add('removing');
                setTimeout(() => {
                  globalCart = globalCart.filter(item => item.id !== id);
                  saveGlobalCart();
                  renderGlobalCart();
                }, 240);
              }
            }
          }
        });
      });
    }

    cartTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const isOpen = cartDropdown.classList.contains('open');
      if (isOpen) {
        cartDropdown.classList.remove('open');
        cartTrigger.classList.remove('active');
        cartDropdown.setAttribute('aria-hidden', 'true');
        cartTrigger.setAttribute('aria-expanded', 'false');
      } else {
        renderGlobalCart();
        cartDropdown.classList.add('open');
        cartTrigger.classList.add('active');
        cartDropdown.setAttribute('aria-hidden', 'false');
        cartTrigger.setAttribute('aria-expanded', 'true');
      }
    });

    if (cartCloseBtn) {
      cartCloseBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        cartDropdown.classList.remove('open');
        cartTrigger.classList.remove('active');
        cartDropdown.setAttribute('aria-hidden', 'true');
        cartTrigger.setAttribute('aria-expanded', 'false');
      });
    }

    cartDropdown.addEventListener('click', (e) => { e.stopPropagation(); });

    document.addEventListener('click', (e) => {
      if (cartDropdown.classList.contains('open') && !cartDropdown.contains(e.target) && !cartTrigger.contains(e.target)) {
        cartDropdown.classList.remove('open');
        cartTrigger.classList.remove('active');
        cartDropdown.setAttribute('aria-hidden', 'true');
        cartTrigger.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && cartDropdown.classList.contains('open')) {
        cartDropdown.classList.remove('open');
        cartTrigger.classList.remove('active');
        cartDropdown.setAttribute('aria-hidden', 'true');
        cartTrigger.setAttribute('aria-expanded', 'false');
      }
    });

    // Open Cart Dropdown Helper
    function openCartDropdown() {
      renderGlobalCart();
      cartDropdown.classList.add('open');
      cartTrigger.classList.add('active');
      cartDropdown.setAttribute('aria-hidden', 'false');
      cartTrigger.setAttribute('aria-expanded', 'true');
    }

    // Global Add to Cart function accessible everywhere
    window.addToCartGlobal = function(item, openDropdown = true) {
      if (!item || !item.id) return;
      const existing = globalCart.find(i => i.id === item.id);
      const qtyToAdd = item.qty || 1;
      if (existing) {
        existing.qty += qtyToAdd;
      } else {
        globalCart.unshift({
          id: item.id,
          slug: item.slug,
          name: item.name,
          price: Number(item.price),
          image: item.image,
          qty: qtyToAdd
        });
      }
      saveGlobalCart();
      renderGlobalCart();

      if (openDropdown) {
        openCartDropdown();
      }
    };

    // Global delegated click listener for any button with class .js-add-to-cart
    document.addEventListener('click', function(e) {
      const btn = e.target.closest('.js-add-to-cart');
      if (btn) {
        e.preventDefault();
        e.stopPropagation();

        const id = parseInt(btn.dataset.id, 10);
        const slug = btn.dataset.slug;
        const name = btn.dataset.name;
        const price = parseFloat(btn.dataset.price);
        const image = btn.dataset.image;
        const qty = parseInt(btn.dataset.qty, 10) || 1;

        if (id && slug) {
          window.addToCartGlobal({ id, slug, name, price, image, qty }, true);

          // Visual button feedback
          const originalHTML = btn.innerHTML;
          btn.classList.add('added-success');
          btn.innerHTML = '<span>✅ Added!</span>';
          setTimeout(() => {
            btn.classList.remove('added-success');
            btn.innerHTML = originalHTML;
          }, 1500);
        }
      }
    });

    renderGlobalCart();
  }
});


