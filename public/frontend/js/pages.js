/**
 * Witness Foundation — inner page interactions
 * Driven by data-attributes so every page can opt in.
 */
document.addEventListener('DOMContentLoaded', () => {
  const onVisible = (els, cb, threshold = 0.35) => {
    if (!els.length) return;
    if (!('IntersectionObserver' in window)) { els.forEach(cb); return; }
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { cb(e.target); io.unobserve(e.target); }
      });
    }, { threshold });
    els.forEach(el => io.observe(el));
  };

  // Count-up numbers: <span data-count="500" data-prefix="" data-suffix="K+">
  onVisible(document.querySelectorAll('[data-count]'), (el) => {
    const target = parseFloat(el.dataset.count);
    const prefix = el.dataset.prefix || '';
    const suffix = el.dataset.suffix || '';
    const start = performance.now();
    const tick = (now) => {
      const p = Math.min(1, (now - start) / 1600);
      el.textContent = prefix + Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
      if (p < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
  });

  // Progress bars: <div class="bar-fill" data-width="72">
  onVisible(document.querySelectorAll('[data-width]'), (el) => {
    el.style.width = el.dataset.width + '%';
  });

  // Filters: buttons [data-filter] inside [data-filter-group="x"], items [data-status] inside [data-filter-target="x"]
  document.querySelectorAll('[data-filter-group]').forEach(group => {
    const target = document.querySelector(`[data-filter-target="${group.dataset.filterGroup}"]`);
    if (!target) return;
    group.querySelectorAll('[data-filter]').forEach(btn => {
      btn.addEventListener('click', () => {
        group.querySelectorAll('[data-filter]').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const f = btn.dataset.filter;
        target.querySelectorAll('[data-status]').forEach(item => {
          item.classList.toggle('is-hidden', f !== 'all' && item.dataset.status !== f);
        });
      });
    });
  });

  // Tabs: [data-tabs] containing [data-tab="id"] buttons and [data-panel="id"] panels
  document.querySelectorAll('[data-tabs]').forEach(wrap => {
    const tabs = wrap.querySelectorAll('[data-tab]');
    const panels = wrap.querySelectorAll('[data-panel]');
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.toggle('active', t === tab));
        panels.forEach(p => p.classList.toggle('active', p.dataset.panel === tab.dataset.tab));
      });
    });
  });

  // Accordion: .acc-item > .acc-q
  document.querySelectorAll('.acc-item .acc-q').forEach(q => {
    q.addEventListener('click', () => {
      const item = q.closest('.acc-item');
      const open = item.classList.contains('open');
      item.parentElement.querySelectorAll('.acc-item').forEach(i => i.classList.remove('open'));
      if (!open) item.classList.add('open');
    });
  });

  // Donation form amount chips
  const donateForm = document.getElementById('donateForm');
  if (donateForm) {
    const total = document.getElementById('donateTotal');
    const custom = document.getElementById('customAmount');
    const freqLabel = document.getElementById('donateFreq');
    const setTotal = (v) => { total.textContent = '৳' + Number(v || 0).toLocaleString('en-IN'); };

    donateForm.querySelectorAll('[data-amount]').forEach(chip => {
      chip.addEventListener('click', () => {
        donateForm.querySelectorAll('[data-amount]').forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        custom.value = '';
        setTotal(chip.dataset.amount);
      });
    });
    custom.addEventListener('input', () => {
      donateForm.querySelectorAll('[data-amount]').forEach(c => c.classList.remove('active'));
      setTotal(custom.value);
    });
    donateForm.querySelectorAll('[data-freq]').forEach(btn => {
      btn.addEventListener('click', () => {
        donateForm.querySelectorAll('[data-freq]').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        freqLabel.textContent = btn.dataset.freq === 'monthly' ? '/ month' : 'one-time';
      });
    });
    donateForm.addEventListener('submit', (e) => {
      e.preventDefault();
      document.getElementById('payment')?.scrollIntoView({ behavior: 'smooth' });
    });
  }

  // Contact form (no backend yet)
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const note = document.getElementById('contactSuccess');
      note.classList.add('show');
      contactForm.reset();
    });
  }
});
