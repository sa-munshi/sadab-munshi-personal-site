<?php
/**
 * PROJECTS PAGE
 * Featured Work - Single showcase
 */
$page_title = 'Projects — Sadab Munshi';
$page_description = 'Featured work.';

$extra_css = '<style>
/* Override default .main padding for this page */
.main {
  padding-top: 0;
  padding-bottom: 0;
}

/* ======================== Featured Section ======================== */
@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}

.featured-section {
  padding: var(--space-lg) var(--space-md) var(--space-lg);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  max-width: var(--max-width);
  margin: 0 auto;
  animation: fadeInUp 0.55s cubic-bezier(0.16, 1, 0.3, 1) both;
}

/* Section Header */
.featured-header {
  margin-bottom: var(--space-xl);
}

.featured-title {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0;
  letter-spacing: -0.02em;
}

/* ======================== Cards Grid ======================== */
.projects-grid {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
  width: 100%;
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
  box-shadow: var(--shadow-sm);
}

.featured-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}

/* In-progress card variant */
.featured-card--muted {
  background: var(--color-surface-low);
  opacity: 0.72;
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

.featured-card--muted .featured-card__name {
  color: var(--color-text-secondary);
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

.featured-card__status--live::before {
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
  margin-bottom: var(--space-md);
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

/* Live button */
.featured-card__actions {
  display: flex;
  gap: 0.75rem;
  flex-wrap: wrap;
}

.featured-card__btn {
  display: inline-flex;
  align-items: center;
  gap: 0.3em;
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
  background: transparent;
  border: 1.5px solid var(--color-primary);
  border-radius: var(--border-radius-pill);
  padding: 0.45rem 1rem;
  text-decoration: none;
  transition: background var(--transition-fast), color var(--transition-fast);
  cursor: pointer;
}

.featured-card__btn:hover {
  background: var(--color-primary);
  color: var(--color-white);
}

/* ======================== Responsive ======================== */
@media (max-width: 640px) {
  .featured-section {
    padding: var(--space-md) var(--space-sm) var(--space-md);
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
}
</style>';
?>

<div class="featured-section">
  
  <!-- Section Header -->
  <header class="featured-header">
    <h1 class="featured-title">Projects</h1>
  </header>

  <div class="projects-grid">

    <!-- FinFlow Card -->
    <div class="featured-card">
      <div class="featured-card__content">
        
        <div class="featured-card__header">
          <h2 class="featured-card__name">FinFlow</h2>
          <span class="featured-card__status featured-card__status--live">live</span>
        </div>
        
        <p class="featured-card__desc">Personal finance tracker with automated categorization and spending forecasts.</p>
        
        <div class="featured-card__tags">
          <span class="featured-card__tag">Next.js</span>
          <span class="featured-card__tag">TypeScript</span>
        </div>

        <div class="featured-card__actions">
          <a href="https://app.sadabmunshi.online" target="_blank" rel="noopener noreferrer" class="featured-card__btn" aria-label="Visit FinFlow — opens in new tab">Live ↗</a>
        </div>

      </div>
    </div>

    <!-- Next Project Card — In Progress -->
    <div class="featured-card featured-card--muted" role="status" aria-label="Next project — currently in progress">
      <div class="featured-card__content">
        
        <div class="featured-card__header">
          <h2 class="featured-card__name">Next Project</h2>
          <span class="featured-card__status">In Progress</span>
        </div>
        
        <p class="featured-card__desc">Currently building. Details soon.</p>

      </div>
    </div>

  </div>
  
</div>
