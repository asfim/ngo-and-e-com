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

  // 2. Mobile drawer navigation
  const burger = document.getElementById('burgerBtn');
  const drawer = document.getElementById('mobileDrawer');
  if (burger && drawer) {
    burger.addEventListener('click', () => {
      const open = drawer.classList.toggle('open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
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
});
