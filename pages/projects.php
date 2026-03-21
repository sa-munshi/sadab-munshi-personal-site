<?php
/**
 * PROJECTS PAGE
 * Featured Work - Single showcase
 */
$page_title = 'Projects — Sadab Munshi';
$page_description = 'Featured work.';

$extra_css = '<style>
@import url("https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Inter:wght@400;500&display=swap");

/* ======================== Featured Section ======================== */
.featured-section {
  min-height: 80vh;
  padding: 2.5rem 1.5rem 3rem;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* Section Header */
.featured-header {
  text-align: center;
  margin-bottom: 3.5rem;
}

.featured-label {
  font-family: "Inter", sans-serif;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  color: #8b8398;
  margin-bottom: 0.75rem;
}

.featured-title {
  font-family: "Cormorant Garamond", Georgia, serif;
  font-size: 2.75rem;
  font-weight: 500;
  color: #4a4458;
  margin: 0;
  letter-spacing: -0.01em;
}

/* ======================== Featured Card ======================== */
.featured-card {
  width: 100%;
  max-width: 680px;
  padding: 3rem;
  border-radius: 2rem;
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: all 400ms cubic-bezier(0.16, 1, 0.3, 1);
  
  /* Glassy white */
  background: rgba(255, 255, 255, 0.72);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.8);
  border-left: 4px solid rgba(180, 160, 200, 0.4);
  box-shadow: 
    0 4px 24px rgba(74, 68, 88, 0.08),
    0 1px 3px rgba(74, 68, 88, 0.05),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}

.featured-card:hover {
  transform: translateY(-4px) scale(1.01);
  background: rgba(255, 255, 255, 0.85);
  box-shadow: 
    0 20px 60px rgba(74, 68, 88, 0.12),
    0 8px 24px rgba(74, 68, 88, 0.08),
    inset 0 1px 0 rgba(255, 255, 255, 0.95);
}

/* Subtle texture overlay */
.featured-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(ellipse at top right, rgba(255,255,255,0.4) 0%, transparent 50%);
  pointer-events: none;
}

/* Card Content */
.featured-card__content {
  position: relative;
  z-index: 1;
}

/* Header with status */
.featured-card__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.25rem;
}

.featured-card__name {
  font-family: "Cormorant Garamond", Georgia, serif;
  font-size: 2.5rem;
  font-weight: 600;
  color: #4a4458;
  margin: 0;
  letter-spacing: -0.01em;
  font-style: italic;
}

/* Status - glassy cohesive */
.featured-card__status {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-family: "Inter", sans-serif;
  font-size: 0.75rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: #7a7090;
  padding: 0.5rem 1rem;
  background: rgba(255, 255, 255, 0.6);
  border-radius: 999px;
  border: 1px solid rgba(180, 160, 200, 0.3);
}

.featured-card__status::before {
  content: "";
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #84a98c;
  box-shadow: 0 0 0 3px rgba(132, 169, 140, 0.25);
  animation: pulse-gentle 3s ease-in-out infinite;
}

@keyframes pulse-gentle {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.8; transform: scale(0.95); }
}

/* Description */
.featured-card__desc {
  font-family: "Inter", sans-serif;
  font-size: 1.1rem;
  font-weight: 400;
  color: #5a5468;
  line-height: 1.7;
  margin: 0 0 2rem 0;
  max-width: 90%;
}

/* Tags - glassy cohesive */
.featured-card__tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.625rem;
}

.featured-card__tag {
  font-family: "Inter", sans-serif;
  font-size: 0.75rem;
  font-weight: 500;
  padding: 0.5rem 1rem;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.55);
  color: #6b6578;
  border: 1px solid rgba(180, 160, 200, 0.25);
  transition: all 200ms ease;
}

.featured-card:hover .featured-card__tag {
  background: rgba(255, 255, 255, 0.8);
  border-color: rgba(180, 160, 200, 0.4);
}

/* Arrow indicator */
.featured-card__arrow {
  position: absolute;
  bottom: 2rem;
  right: 2.5rem;
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.8);
  color: #8b8398;
  font-size: 1.25rem;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 400ms cubic-bezier(0.16, 1, 0.3, 1);
  border: 1px solid rgba(180, 160, 200, 0.3);
}

.featured-card:hover .featured-card__arrow {
  opacity: 1;
  transform: translateX(0);
}

/* ======================== Dark Mode ======================== */


[data-theme="dark"] .featured-label {
  color: #9a94a8;
}

[data-theme="dark"] .featured-title {
  color: #e8e4f0;
}

[data-theme="dark"] .featured-card {
  background: rgba(30, 28, 38, 0.72);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-left-color: rgba(140, 130, 160, 0.5);
  box-shadow: 
    0 4px 24px rgba(0, 0, 0, 0.3),
    0 1px 3px rgba(0, 0, 0, 0.2);
}

[data-theme="dark"] .featured-card:hover {
  background: rgba(40, 38, 48, 0.85);
  box-shadow: 
    0 20px 60px rgba(0, 0, 0, 0.4),
    0 8px 24px rgba(0, 0, 0, 0.3);
}

[data-theme="dark"] .featured-card__name {
  color: #e8e4f0;
}

[data-theme="dark"] .featured-card__status {
  color: #a8a0b8;
  background: rgba(0, 0, 0, 0.25);
  border-color: rgba(140, 130, 160, 0.4);
}

[data-theme="dark"] .featured-card__status::before {
  background: #84a98c;
  box-shadow: 0 0 0 3px rgba(132, 169, 140, 0.25);
}

[data-theme="dark"] .featured-card__desc {
  color: #b8b0c8;
}

[data-theme="dark"] .featured-card__tag {
  background: rgba(255, 255, 255, 0.08);
  color: #c8c0d8;
  border-color: rgba(140, 130, 160, 0.3);
}

[data-theme="dark"] .featured-card:hover .featured-card__tag {
  background: rgba(255, 255, 255, 0.15);
  border-color: rgba(140, 130, 160, 0.5);
}

[data-theme="dark"] .featured-card__arrow {
  background: rgba(255, 255, 255, 0.1);
  color: #c8c0d8;
  border-color: rgba(140, 130, 160, 0.4);
}

/* ======================== Responsive ======================== */
@media (max-width: 640px) {
  .featured-section {
    padding: 3rem 1rem;
  }
  
  .featured-title {
    font-size: 2rem;
  }
  
  .featured-card {
    padding: 2rem 1.5rem;
    max-width: 100%;
  }
  
  .featured-card__name {
    font-size: 1.75rem;
  }
  
  .featured-card__header {
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
  }
  
  .featured-card__desc {
    font-size: 1rem;
    max-width: 100%;
  }
  
  .featured-card__arrow {
    display: none;
  }
}
</style>';
?>

<div class="featured-section">
  
  <!-- Section Header -->
  <header class="featured-header">
    <p class="featured-label">Featured Project</p>
    <h1 class="featured-title">Selected Work</h1>
  </header>
  
  <!-- Featured Card -->
  <a href="https://app.sadabmunshi.online" target="_blank" rel="noopener noreferrer" class="featured-card">
    <div class="featured-card__content">
      
      <div class="featured-card__header">
        <h2 class="featured-card__name">FinFlow</h2>
        <span class="featured-card__status">live</span>
      </div>
      
      <p class="featured-card__desc">Personal finance tracker with automated categorization and spending forecasts.</p>
      
      <div class="featured-card__tags">
        <span class="featured-card__tag">Next.js</span>
        <span class="featured-card__tag">TypeScript</span>
      </div>
      
    </div>
    <span class="featured-card__arrow">→</span>
  </a>
  
</div>
