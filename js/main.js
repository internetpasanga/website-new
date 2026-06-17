/* Tamil Pasanga — Landing Page JS */

document.addEventListener('DOMContentLoaded', () => {

  /* ── Sticky navbar shadow ─────────────────────────────── */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

  /* ── Mobile hamburger ─────────────────────────────────── */
  const hamburger   = document.getElementById('hamburger');
  const mobileMenu  = document.getElementById('mobileMenu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
    });
    // Close on link click
    mobileMenu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
      });
    });
  }

  /* ── Active nav link ──────────────────────────────────── */
  const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
  document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(a => {
    const href = a.getAttribute('href').replace(/\/$/, '') || '/';
    if (href === currentPath || (href !== '/' && currentPath.endsWith(href))) {
      a.classList.add('active');
    }
  });

  /* ── Scroll animations (AOS-lite) ────────────────────── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('aos-animate');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('[data-aos]').forEach(el => observer.observe(el));

  /* ── Contact form (static — shows success msg) ────────── */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = contactForm.querySelector('button[type="submit"]');
      const msg = document.getElementById('formMsg');
      btn.textContent = 'Sending…';
      btn.disabled = true;

      // Simulate submission — replace with actual fetch() to backend
      setTimeout(() => {
        msg.className = 'form-msg success';
        msg.textContent = '✓ Your message has been sent! We\'ll get back to you soon.';
        msg.style.display = 'block';
        contactForm.reset();
        btn.textContent = 'Send Message';
        btn.disabled = false;
        msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }, 1200);
    });
  }

  /* ── Hero banner auto-slide ───────────────────────────── */
  const slides     = document.querySelectorAll('.banner-slide');
  const indicators = document.querySelectorAll('.banner-dot');
  if (slides.length > 1) {
    let current  = 0;
    let autoPlay = null;
    const total  = slides.length;

    const goTo = idx => {
      // Remove active from current
      slides[current].classList.remove('active');
      indicators[current]?.classList.remove('active');
      indicators[current]?.setAttribute('aria-selected', 'false');

      // Set new current
      current = (idx + total) % total;

      slides[current].classList.add('active');
      indicators[current]?.classList.add('active');
      indicators[current]?.setAttribute('aria-selected', 'true');
    };

    const startAuto = () => {
      stopAuto();
      autoPlay = setInterval(() => goTo(current + 1), 5000);
    };
    const stopAuto = () => {
      if (autoPlay) clearInterval(autoPlay);
    };

    startAuto();

    indicators.forEach((dot, i) => {
      dot.addEventListener('click', () => { goTo(i); startAuto(); });
    });

    document.querySelector('.banner-prev')?.addEventListener('click', () => { goTo(current - 1); });
    document.querySelector('.banner-next')?.addEventListener('click', () => { goTo(current + 1); });

    // Pause on hover
    const wrap = document.querySelector('.hero-banner-wrap');
    wrap?.addEventListener('mouseenter', stopAuto);
    // wrap?.addEventListener('mouseleave', startAuto);
  }

  /* ── Smooth scroll for anchor links ──────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  /* ── Language toggle ─────────────────────────────────── */
  (function () {
    const urlParams = new URLSearchParams(window.location.search);
    const urlLang   = urlParams.get('lang');

    // URL param takes priority; then localStorage; default is Tamil
    let currentLang;
    if (urlLang === 'en' || urlLang === 'ta') {
      currentLang = urlLang;
      localStorage.setItem('tp_lang', currentLang);
    } else {
      currentLang = localStorage.getItem('tp_lang') || 'ta';
    }

    document.documentElement.lang = currentLang;

    function updateBtns(lang) {
      document.querySelectorAll('.lang-toggle-label').forEach(el => {
        el.textContent = lang === 'en' ? 'தமிழ்' : 'EN';
      });
    }

    function updateLinks(lang) {
      document.querySelectorAll('a[href]').forEach(a => {
        let href = a.getAttribute('href');
        if (!href || href.startsWith('http') || href.startsWith('//') || href.startsWith('mailto:')) return;

        // Strip any existing lang param
        href = href
          .replace(/([?&])lang=[^&#]*/g, (_, sep) => sep === '?' ? '?' : '')
          .replace(/\?&/, '?')
          .replace(/[?&]$/, '');

        if (lang === 'en') {
          const hashIdx = href.indexOf('#');
          if (hashIdx === -1) {
            href += (href.includes('?') ? '&' : '?') + 'lang=en';
          } else {
            const base = href.slice(0, hashIdx);
            href = base + (base.includes('?') ? '&' : '?') + 'lang=en' + href.slice(hashIdx);
          }
        }

        a.setAttribute('href', href);
      });
    }

    updateBtns(currentLang);
    updateLinks(currentLang);

    document.addEventListener('click', function (e) {
      if (!e.target.closest('.lang-toggle')) return;
      const next = document.documentElement.lang === 'ta' ? 'en' : 'ta';
      document.documentElement.lang = next;
      localStorage.setItem('tp_lang', next);
      updateBtns(next);
      updateLinks(next);

      // Sync URL bar so sharing or refreshing preserves the choice
      const newUrl = new URL(window.location.href);
      if (next === 'en') {
        newUrl.searchParams.set('lang', 'en');
      } else {
        newUrl.searchParams.delete('lang');
      }
      history.replaceState(null, '', newUrl.toString());
    });
  })();

});
