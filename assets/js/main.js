/* ═══════════════════════════════════════════════════════
   SADABMUNSHI.ONLINE — MAIN JAVASCRIPT
   Minimal interactions. Maximum impact.
   ═══════════════════════════════════════════════════════ */

(function() {
  'use strict';

  /* ─────────────────────────────────────────────────────
     DOM ELEMENTS
     ───────────────────────────────────────────────────── */
  
  const mobileMenuBtn = document.querySelector('.nav__menu-btn');
  const navLinks = document.querySelector('.nav__links');
  const toast = document.querySelector('.toast');

  /* ─────────────────────────────────────────────────────
     MOBILE MENU
     ───────────────────────────────────────────────────── */
  
  if (mobileMenuBtn && navLinks) {
    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('active');
      mobileMenuBtn.setAttribute('aria-expanded', isOpen);
      
      if (isOpen) {
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>`;
      } else {
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>`;
      }
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>`;
      });
    });
  }

  /* ─────────────────────────────────────────────────────
     EASTER EGG
     ───────────────────────────────────────────────────── */
  
  let easterEggKeys = [];
  const secretCode = ['s', 'm'];
  
  document.addEventListener('keydown', (e) => {
    easterEggKeys.push(e.key.toLowerCase());
    easterEggKeys = easterEggKeys.slice(-2);
    
    if (easterEggKeys.join('') === secretCode.join('')) {
      showToast('You found the secret. Stay curious. ✨');
      easterEggKeys = [];
    }
  });

  /* ─────────────────────────────────────────────────────
     TOAST NOTIFICATION
     ───────────────────────────────────────────────────── */
  
  function showToast(message) {
    if (!toast) {
      const newToast = document.createElement('div');
      newToast.className = 'toast';
      newToast.textContent = message;
      document.body.appendChild(newToast);
      
      setTimeout(() => newToast.classList.add('show'), 10);
      setTimeout(() => {
        newToast.classList.remove('show');
        setTimeout(() => newToast.remove(), 300);
      }, 3000);
    } else {
      toast.textContent = message;
      toast.classList.add('show');
      
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3000);
    }
  }

  /* ─────────────────────────────────────────────────────
     SMOOTH SCROLL FOR ANCHOR LINKS
     ───────────────────────────────────────────────────── */
  
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  /* ─────────────────────────────────────────────────────
     CURRENT YEAR IN FOOTER
     ───────────────────────────────────────────────────── */
  
  const yearElement = document.querySelector('.current-year');
  if (yearElement) {
    yearElement.textContent = new Date().getFullYear();
  }

  /* ─────────────────────────────────────────────────────
     EXTERNAL LINKS - OPEN IN NEW TAB
     ───────────────────────────────────────────────────── */
  
  document.querySelectorAll('a[href^="http"]').forEach(link => {
    if (!link.href.includes(window.location.hostname)) {
      link.setAttribute('target', '_blank');
      link.setAttribute('rel', 'noopener noreferrer');
    }
  });

  /* ─────────────────────────────────────────────────────
     LAZY LOADING IMAGES
     ───────────────────────────────────────────────────── */
  
  if ('loading' in HTMLImageElement.prototype) {
    document.querySelectorAll('img[loading="lazy"]').forEach(img => {
      img.src = img.dataset.src || img.src;
    });
  } else {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src || img.src;
          observer.unobserve(img);
        }
      });
    });

    lazyImages.forEach(img => imageObserver.observe(img));
  }

  /* ─────────────────────────────────────────────────────
     HEADER HIDE/SHOW ON SCROLL
     ───────────────────────────────────────────────────── */

  (function() {
    var header = document.querySelector('.header');
    var lastY = 0;
    window.addEventListener('scroll', function() {
      var y = window.scrollY;
      if (y > lastY && y > 80) {
        header.classList.add('header--hidden');
      } else {
        header.classList.remove('header--hidden');
      }
      lastY = y;
    }, { passive: true });
  })();

  /* ─────────────────────────────────────────────────────
     CONSOLE GREETING
     ───────────────────────────────────────────────────── */
  
  console.log(
    '%c👋 Hello, curious one!',
    'font-size: 16px; font-weight: bold; color: #4f6354;'
  );
  console.log(
    '%cLooking at the source? Nice. Feel free to explore.',
    'font-size: 12px; color: #5b605e;'
  );
  console.log(
    '%c— Sadab',
    'font-size: 12px; font-style: italic; color: #5b605e;'
  );

})();
