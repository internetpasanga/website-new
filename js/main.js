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
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
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

  /* ── Contact form — sends to admin via send-contact.php ── */
  const contactForm = document.getElementById('contactForm');
  const captchaImg = document.getElementById('captchaImg');
  const refreshCaptcha = () => {
    if (captchaImg) captchaImg.src = 'captcha.php?_=' + Date.now();
  };
  const captchaRefreshBtn = document.getElementById('captchaRefresh');
  if (captchaRefreshBtn) captchaRefreshBtn.addEventListener('click', refreshCaptcha);

  if (contactForm) {
    contactForm.addEventListener('submit', async function (e) {
      e.preventDefault();
      const btn = contactForm.querySelector('button[type="submit"]');
      const msg = document.getElementById('formMsg');

      btn.textContent = 'Sending…';
      btn.disabled = true;
      msg.style.display = 'none';

      try {
        const res = await fetch('send-contact.php', {
          method: 'POST',
          credentials: 'same-origin',
          body: new FormData(contactForm),
        });
        const data = await res.json();

        if (data.success) {
          msg.className = 'form-msg success';
          msg.textContent = '✓ ' + data.message;
          contactForm.reset();
        } else {
          msg.className = 'form-msg error';
          msg.textContent = '✗ ' + data.message;
        }
      } catch (_) {
        msg.className = 'form-msg error';
        msg.textContent = '✗ Something went wrong. Please email us at support@tamilpasanga.in';
      }

      refreshCaptcha();
      msg.style.display = 'block';
      btn.textContent = 'Send Message';
      btn.disabled = false;
      msg.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  }

  /* ── Hero banner auto-slide ───────────────────────────── */
  const slides = document.querySelectorAll('.banner-slide');
  const indicators = document.querySelectorAll('.banner-dot');
  if (slides.length > 1) {
    let current = 0;
    let autoPlay = null;
    const total = slides.length;

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

    document.querySelector('.banner-prev')?.addEventListener('click', () => { goTo(current - 1); startAuto(); });
    document.querySelector('.banner-next')?.addEventListener('click', () => { goTo(current + 1); startAuto(); });

    // Pause on hover
    const wrap = document.querySelector('.hero-banner-wrap');
    wrap?.addEventListener('mouseenter', stopAuto);
    wrap?.addEventListener('mouseleave', startAuto);
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
    const saved = localStorage.getItem('tp_lang') || 'en';
    document.documentElement.lang = saved;

    function updateBtns(lang) {
      document.querySelectorAll('.lang-toggle-label').forEach(el => {
        el.textContent = lang === 'en' ? 'தமிழ்' : 'EN';
      });
    }
    updateBtns(saved);

    document.addEventListener('click', function (e) {
      if (!e.target.closest('.lang-toggle')) return;
      const next = document.documentElement.lang === 'ta' ? 'en' : 'ta';
      document.documentElement.lang = next;
      localStorage.setItem('tp_lang', next);
      updateBtns(next);
    });
  })();

});
