<?php
/**
 * PROJECTS PAGE
 * Featured Work - Single showcase
 */
$page_title = 'Projects — Sadab Munshi';
$page_description = 'Featured work.';

$extra_css = '<style>
/* ======================== Featured Section ======================== */
.featured-section {
  min-height: 70vh;
  padding: var(--space-2xl) var(--space-md) var(--space-3xl);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  max-width: var(--max-width);
  margin: 0 auto;
}

/* Section Header */
.featured-header {
  margin-bottom: var(--space-xl);
}

.featured-label {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-medium);
  text-transform: uppercase;
  letter-spacing: 0.15em;
  color: var(--color-text-secondary);
  margin-bottom: 0.5rem;
}

.featured-title {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0;
  letter-spacing: -0.02em;
}

/* ======================== Featured Card ======================== */
.featured-card {
  width: 100%;
  max-width: 100%;
  padding: var(--space-xl);
  border-radius: var(--border-radius-lg);
  text-decoration: none;
  position: relative;
  overflow: hidden;
  transition: box-shadow var(--transition-normal), transform var(--transition-normal);
  background: var(--color-white);
}

.featured-card:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
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
  margin-bottom: var(--space-md);
}

.featured-card__name {
  font-family: var(--font-heading);
  font-size: var(--text-2xl);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0;
  letter-spacing: -0.01em;
  font-style: italic;
}

/* Status */
.featured-card__status {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-medium);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--color-text-secondary);
  padding: 0.4rem 0.85rem;
  background: var(--color-surface-low);
  border-radius: var(--border-radius-pill);
}

.featured-card__status::before {
  content: "";
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--color-primary);
  animation: pulse-gentle 3s ease-in-out infinite;
}

@keyframes pulse-gentle {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.7; transform: scale(0.9); }
}

/* Description */
.featured-card__desc {
  font-family: var(--font-body);
  font-size: var(--text-base);
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
  margin: 0 0 var(--space-lg) 0;
  max-width: 90%;
}

/* Tags */
.featured-card__tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
}

.featured-card__tag {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-medium);
  padding: 0.4rem 0.85rem;
  border-radius: var(--border-radius-pill);
  background: var(--color-surface-low);
  color: var(--color-text-secondary);
  transition: background var(--transition-fast);
}

.featured-card:hover .featured-card__tag {
  background: var(--color-surface);
}

/* Arrow indicator */
.featured-card__arrow {
  position: absolute;
  bottom: var(--space-lg);
  right: var(--space-lg);
  width: 44px;
  height: 44px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: var(--color-surface-low);
  color: var(--color-text-secondary);
  font-size: 1.25rem;
  opacity: 0;
  transform: translateX(-10px);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.featured-card:hover .featured-card__arrow {
  opacity: 1;
  transform: translateX(0);
}

/* ======================== Responsive ======================== */
@media (max-width: 640px) {
  .featured-section {
    padding: var(--space-xl) var(--space-sm);
  }

  .featured-title {
    font-size: var(--text-2xl);
  }

  .featured-card {
    padding: var(--space-lg);
  }

  .featured-card__name {
    font-size: var(--text-xl);
  }

  .featured-card__header {
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
  }

  .featured-card__desc {
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
