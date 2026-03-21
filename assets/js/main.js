/* ═══════════════════════════════════════════════════════
   SADABMUNSHI.ONLINE — MAIN JAVASCRIPT
   Minimal interactions. Maximum impact.
   ═══════════════════════════════════════════════════════ */

(function() {
  'use strict';

  /* ─────────────────────────────────────────────────────
     DOM ELEMENTS
     ───────────────────────────────────────────────────── */
  
  const html = document.documentElement;
  const themeToggle = document.querySelector('.theme-toggle');
  const mobileMenuBtn = document.querySelector('.nav__menu-btn');
  const navLinks = document.querySelector('.nav__links');
  const toast = document.querySelector('.toast');

  /* ─────────────────────────────────────────────────────
     THEME TOGGLE
     ───────────────────────────────────────────────────── */
  
  // Check for saved theme or system preference
  function getPreferredTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
      return savedTheme;
    }
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  }

  // Apply theme
  function setTheme(theme) {
    html.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
    // Also save as cookie for PHP to read
    document.cookie = 'theme=' + theme + ';path=/;max-age=' + (60*60*24*365);
    updateThemeIcon(theme);
  }

  // Update theme toggle icon
  function updateThemeIcon(theme) {
    if (!themeToggle) return;
    
    const sunIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
    
    const moonIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
    
    themeToggle.innerHTML = theme === 'dark' ? sunIcon : moonIcon;
    themeToggle.setAttribute('aria-label', `Switch to ${theme === 'dark' ? 'light' : 'dark'} mode`);
  }

  // Initialize theme
  setTheme(getPreferredTheme());

  // Theme toggle click handler
  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const currentTheme = html.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      setTheme(newTheme);
    });
  }

  // Listen for system theme changes
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    if (!localStorage.getItem('theme')) {
      setTheme(e.matches ? 'dark' : 'light');
    }
  });

  /* ─────────────────────────────────────────────────────
     MOBILE MENU
     ───────────────────────────────────────────────────── */
  
  if (mobileMenuBtn && navLinks) {
    mobileMenuBtn.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('active');
      mobileMenuBtn.setAttribute('aria-expanded', isOpen);
      
      // Update icon
      if (isOpen) {
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>`;
      } else {
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>`;
      }
    });

    // Close menu when clicking a link
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('active');
        mobileMenuBtn.setAttribute('aria-expanded', 'false');
        mobileMenuBtn.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>`;
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
      // Create toast if it doesn't exist
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
     READING TIME CALCULATOR (For Blog Posts)
     ───────────────────────────────────────────────────── */
  
  function calculateReadingTime(text) {
    const wordsPerMinute = 200;
    const words = text.trim().split(/\s+/).length;
    const minutes = Math.ceil(words / wordsPerMinute);
    return minutes;
  }

  const articleContent = document.querySelector('.content');
  const readingTimeElement = document.querySelector('.reading-time');
  
  if (articleContent && readingTimeElement) {
    const time = calculateReadingTime(articleContent.textContent);
    readingTimeElement.textContent = `${time} min read`;
  }

  /* ─────────────────────────────────────────────────────
     LAZY LOADING IMAGES
     ───────────────────────────────────────────────────── */
  
  if ('loading' in HTMLImageElement.prototype) {
    document.querySelectorAll('img[loading="lazy"]').forEach(img => {
      img.src = img.dataset.src || img.src;
    });
  } else {
    // Fallback for browsers that don't support lazy loading
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
    'font-size: 16px; font-weight: bold; color: #9A8873;'
  );
  console.log(
    '%cLooking at the source? Nice. Feel free to explore.',
    'font-size: 12px; color: #6B6B6B;'
  );
  console.log(
    '%c— Sadab',
    'font-size: 12px; font-style: italic; color: #6B6B6B;'
  );

})();
