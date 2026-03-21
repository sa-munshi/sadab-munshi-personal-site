<?php
/**
 * BLOG INDEX PAGE
 * List of all blog posts with glassy card containers
 */
$page_title = 'Blog — Sadab Munshi';
$page_description = 'Writing about what I build, what I break, and what I learn along the way.';

// Blog posts data - all posts
$posts = [
    [
        'title' => 'What I Think About AI',
        'slug' => 'what-i-think-about-ai',
        'excerpt' => 'Artificial intelligence explained humanistically. A simple, honest take on what AI actually is.',
        'date' => '2026-02-23',
        'reading_time' => '3 min read',
    ],
    [
        'title' => 'Slow Growth',
        'slug' => 'slow-growth',
        'excerpt' => 'Embracing the long, unglamorous path of gradual improvement.',
        'date' => '2025-11-08',
        'reading_time' => '5 min read',
    ],
    [
        'title' => 'Why I Started Making Things',
        'slug' => 'why-i-started-building-things',
        'excerpt' => 'On curiosity, starting small, and creating for yourself.',
        'date' => '2025-12-15',
        'reading_time' => '4 min read',
    ],
    [
        'title' => 'Debugging My Brain',
        'slug' => 'debugging-my-brain',
        'excerpt' => 'What coding taught me about my own thought patterns.',
        'date' => '2025-08-03',
        'reading_time' => '6 min read',
    ],
    [
        'title' => 'The Art of Finishing',
        'slug' => 'the-art-of-finishing',
        'excerpt' => 'Why starting is easy and finishing is everything.',
        'date' => '2025-06-14',
        'reading_time' => '5 min read',
    ],
    [
        'title' => 'Notes on Simplicity',
        'slug' => 'notes-on-simplicity',
        'excerpt' => 'Less is usually better. Some thoughts on keeping things simple.',
        'date' => '2025-05-20',
        'reading_time' => '3 min read',
    ],
    [
        'title' => 'Learning in Public',
        'slug' => 'learning-in-public',
        'excerpt' => 'The fear, the vulnerability, and the unexpected benefits of sharing while you learn.',
        'date' => '2025-03-28',
        'reading_time' => '4 min read',
    ],
    [
        'title' => 'Things I Use Every Day',
        'slug' => 'the-tools-i-use-daily',
        'excerpt' => 'A simple setup. What works for me, nothing complicated.',
        'date' => '2025-01-10',
        'reading_time' => '5 min read',
    ],
];

// Sort posts by date (newest first)
usort($posts, function($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

$extra_css = '<style>
/* ======================== EDITORIAL BLOG ======================== */

.blog-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
  margin-top: var(--space-lg);
}

.blog-grid > *:nth-child(even) {
  margin-top: var(--space-lg);
}

/* Blog Card */
.blog-card {
  display: flex;
  flex-direction: column;
  text-decoration: none;
  padding: var(--space-lg);
  background: var(--color-white);
  border-radius: var(--border-radius);
  transition: box-shadow var(--transition-normal), transform var(--transition-normal);
  position: relative;
  cursor: pointer;
}

.blog-card:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-2px);
}

/* Card Content */
.blog-card__content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

/* Meta - Date */
.blog-card__meta {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 0.5rem;
  font-family: var(--font-body);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

/* Title */
.blog-card__title {
  font-family: var(--font-heading);
  font-size: var(--text-lg);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0 0 0.5rem 0;
  line-height: var(--leading-tight);
}

/* Excerpt */
.blog-card__excerpt {
  font-family: var(--font-body);
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin: 0;
  line-height: var(--leading-normal);
}

/* Footer */
.blog-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: var(--space-sm);
  padding-top: var(--space-sm);
}

.blog-card__read-time {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  display: flex;
  align-items: center;
  gap: 0.3rem;
}

.blog-card__read-time::before {
  content: "◷";
  font-size: 0.8rem;
}

/* Read More */
.blog-card__arrow {
  display: flex;
  align-items: center;
  gap: 0.25rem;
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
}

.blog-card__arrow::after {
  content: "→";
}

/* Featured same as regular */
.blog-card--featured {
  grid-column: auto;
}

.blog-card__badge {
  display: none;
}

/* Intro Text */
.blog-intro {
  font-family: var(--font-body);
  font-size: var(--text-base);
  line-height: var(--leading-normal);
  color: var(--color-text-secondary);
  max-width: 65ch;
  margin-bottom: var(--space-sm);
}

/* ======================== Responsive ======================== */
@media (max-width: 768px) {
  .blog-grid {
    grid-template-columns: 1fr;
  }
  .blog-grid > *:nth-child(even) {
    margin-top: 0;
  }
}
</style>';
?>
<div class="container page-content">
  
  <!-- Page Header -->
  <header class="page-header">
    <h1 class="page-header__title">Writing</h1>
    <p class="page-header__desc">Thoughts on building, learning, and keeping things simple.</p>
  </header>
  
  <!-- Content -->
  <article class="content">
    
    <p class="blog-intro">Short essays on things I'm thinking about. No fixed schedule — I write when I have something worth saying.</p>
    
    <!-- Blog Grid - Minimal B&W -->
    <div class="blog-grid">
      <?php foreach ($posts as $post): ?>
      <a href="/blog/<?php echo e($post['slug']); ?>/" class="blog-card">
        <div class="blog-card__content">
          <div class="blog-card__meta">
            <span class="blog-card__date"><?php echo format_date($post['date']); ?></span>
          </div>
          <h2 class="blog-card__title"><?php echo e($post['title']); ?></h2>
          <p class="blog-card__excerpt"><?php echo e($post['excerpt']); ?></p>
        </div>
        <div class="blog-card__footer">
          <span class="blog-card__read-time"><?php echo e($post['reading_time']); ?></span>
          <span class="blog-card__arrow">Read</span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    
  </article>
  
</div>
