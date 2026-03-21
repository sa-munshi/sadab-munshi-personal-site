<?php
/**
 * ABOUT PAGE
 * Grounded, approachable
 */
$page_title = 'About — Sadab Munshi';
$page_description = "I don't have everything figured out. Just building small things, reading big ideas, and trying to connect dots.";

$extra_css = '<style>
/* ======================== About Layout ======================== */
.about-header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  margin-bottom: 2.5rem;
  flex-wrap: wrap;
}

.about-header__title {
  font-size: 2rem;
  font-weight: 600;
  margin: 0;
}

/* ======================== Listen Button ======================== */
.listen-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 10px 20px;
  background: var(--color-bg-secondary, rgba(0,0,0,0.03));
  border: 1px solid var(--color-border);
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 500;
  color: var(--color-text);
  cursor: pointer;
  transition: all 0.2s ease;
  width: fit-content;
}

.listen-btn:hover {
  background: var(--color-text);
  color: var(--color-bg);
  border-color: var(--color-text);
}

.listen-btn.playing {
  background: var(--color-accent);
  color: var(--color-bg);
  border-color: var(--color-accent);
}

.listen-btn svg {
  width: 18px;
  height: 18px;
}

/* ======================== Story Content ======================== */
.story {
  font-size: 1.1rem;
  line-height: 1.9;
  color: var(--color-text);
}

.story p {
  margin-bottom: 1.5rem;
}

.story strong {
  font-weight: 600;
  color: var(--color-text);
}

.story a {
  color: var(--color-accent);
  text-decoration: none;
  border-bottom: 1px solid transparent;
  transition: border-color 0.2s;
}

.story a:hover {
  border-bottom-color: var(--color-accent);
}

/* ======================== This Site Section (True Glassmorphism) ======================== */
.site-note {
  margin: 3rem 0;
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
}

.site-note h2 {
  font-size: 1.1rem;
  font-weight: 600;
  margin: 0 0 0.75rem 0;
  color: var(--color-text);
}

.site-note p {
  font-size: 1rem;
  line-height: 1.7;
  color: var(--color-text);
  margin: 0;
}

/* ======================== Credits Section (True Glassmorphism) ======================== */
.credits {
  margin: 3rem 0;
  padding: 1.5rem;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
}

.credits h2 {
  font-size: 1.1rem;
  font-weight: 600;
  margin: 0 0 1rem 0;
  color: var(--color-text);
}

/* Dark Mode Adaptation for Glassmorphism */
[data-theme="dark"] .site-note,
[data-theme="dark"] .credits {
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
}

.credits-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.credits-list li {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: 0.75rem;
  font-size: 1rem;
  color: var(--color-text-secondary);
}

.credits-list li:last-child {
  margin-bottom: 0;
}

.credits-list a {
  color: var(--color-accent);
  text-decoration: none;
  font-weight: 500;
}

.credits-list a:hover {
  text-decoration: underline;
}

/* ======================== Resume CTA ======================== */
.resume-section {
  margin-top: 2.5rem;
  padding-top: 2rem;
  border-top: 1px solid var(--color-border);
}

.resume-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 14px 28px;
  background: var(--color-text);
  color: var(--color-bg);
  text-decoration: none;
  font-weight: 500;
  border-radius: 12px;
  transition: all 0.2s ease;
}

.resume-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.resume-btn svg {
  width: 18px;
  height: 18px;
}

/* ======================== Dark Mode ======================== */
[data-theme="dark"] .listen-btn.playing {
  background: var(--color-accent);
  color: var(--color-bg);
  border-color: var(--color-accent);
}

/* ======================== Responsive ======================== */
@media (max-width: 768px) {
  .story {
    font-size: 1rem;
  }
  
  .about-header__title {
    font-size: 1.75rem;
  }
}
</style>';

$extra_js = '<script>
// Audio player for About page
(function() {
  const listenBtn = document.getElementById("listen-btn");
  if (!listenBtn) return;
  
  const audio = new Audio("/assets/audio/about.mp3");
  
  // Enable button since audio exists
  listenBtn.removeAttribute("disabled");
  listenBtn.removeAttribute("title");
  
  audio.onended = function() {
    listenBtn.classList.remove("playing");
    listenBtn.innerHTML = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
      Listen
    `;
  };
  
  listenBtn.addEventListener("click", function() {
    if (audio.paused) {
      audio.play();
      listenBtn.classList.add("playing");
      listenBtn.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
        Stop
      `;
    } else {
      audio.pause();
      audio.currentTime = 0;
      listenBtn.classList.remove("playing");
      listenBtn.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
        Listen
      `;
    }
  });
})();
</script>';
?>
<div class="container page-content" style="max-width: 700px;">
  
  <!-- Header -->
  <div class="about-header">
    <h1 class="about-header__title">About</h1>
    
    <button class="listen-btn" id="listen-btn" aria-label="Listen to this page">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
        <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
      </svg>
      Listen
    </button>
  </div>
  
  <!-- Story -->
  <article class="story">
    
    <p><strong>Hello, I am Sadab.</strong> I am a student who likes building things on the internet. I spend most of my time learning how stuff works, breaking things, and figuring out how to fix them.</p>
    
    <p>I do not have it all figured out. I just build small things, write about what I learn, and share it here. If you want to know what I am up to right now, check the <a href="/now/">now page</a>.</p>
    
  </article>
  
  <!-- About This Site -->
  <div class="site-note">
    <h2>About this site</h2>
    <p>This site is built to be fast and simple. No frameworks, no clutter. Just clean HTML, CSS, and a bit of PHP. It is my little corner of the internet where I share what I am working on.</p>
  </div>
  
  <!-- Credits -->
  <div class="credits">
    <h2>My Digital Co-Pilots</h2>
    <ul class="credits-list">
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
        <a href="https://www.moonshot.cn/" target="_blank" rel="noopener noreferrer">Kimi by Moonshot AI</a> — I use this for writing my day-to-day code, building out features, and fixing errors across my projects.
      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
        <a href="https://www.anthropic.com/" target="_blank" rel="noopener noreferrer">Claude by Anthropic</a> — My go-to for deep debugging, untangling messy code, and helping me figure out complex bugs when I get stuck.
      </li>
    </ul>
  </div>
  
  <!-- Resume -->
  <div class="resume-section">
    <p style="font-size: 1rem; color: var(--color-text-secondary); margin-bottom: 1rem;">If you want to see my formal education, timeline, and technical skills, feel free to grab a copy of my resume below.</p>
    <a href="<?php echo config('resume_file'); ?>" download class="resume-btn">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
        <polyline points="7 10 12 15 17 10"></polyline>
        <line x1="12" y1="15" x2="12" y2="3"></line>
      </svg>
      Download Resume
    </a>
  </div>
  
</div>
