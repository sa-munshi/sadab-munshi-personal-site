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
        'title' => 'Spend Less Time Counting, More Time Living',
        'slug' => 'spend-less-time-counting',
        'excerpt' => 'Why I built a personal finance app that uses AI to handle the boring parts of tracking money.',
        'date' => '2026-03-22',
        'reading_time' => '4 min read',
    ],
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
];

// Sort posts by date (newest first)
usort($posts, function($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
});

$post_count = count($posts);

$extra_css = '<style>
/* ======================== EDITORIAL BLOG ======================== */

/* Back Navigation */
.blog-back {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-text-secondary);
  text-decoration: none;
  margin-bottom: var(--space-md);
  transition: color var(--transition-fast);
}

.blog-back:hover {
  color: var(--color-primary);
}

/* Page Header — tighter spacing */
.blog-page .page-header {
  padding: var(--space-xl) 0 var(--space-sm);
  margin-bottom: var(--space-sm);
}

.blog-page .page-header__title {
  animation: fadeInUp 0.5s ease forwards;
}

.blog-page .page-header__desc {
  animation: fadeInUp 0.5s ease forwards;
  animation-delay: 0.08s;
  opacity: 0;
}

/* Post count label */
.blog-page .page-header__count {
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-normal);
  color: var(--color-text-secondary);
}

.blog-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
  margin-top: var(--space-md);
}

.blog-grid > *:nth-child(even) {
  margin-top: var(--space-md);
}

/* Blog Card */
.blog-card {
  display: flex;
  flex-direction: column;
  text-decoration: none;
  padding: var(--space-md);
  background: var(--color-white);
  border-radius: var(--border-radius);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(0, 0, 0, 0.04);
  transition: box-shadow var(--transition-normal),
              transform var(--transition-normal),
              background var(--transition-normal);
  position: relative;
  cursor: pointer;
  opacity: 0;
  animation: fadeInUp 0.45s ease forwards;
}

.blog-card:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-3px);
  background: var(--color-surface-low);
}

/* Card Content */
.blog-card__content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

/* Meta - Date Tag */
.blog-card__meta {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 0.4rem;
}

.blog-card__date {
  font-family: var(--font-body);
  font-size: 0.7rem;
  font-weight: var(--weight-medium);
  color: var(--color-text-secondary);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  background: var(--color-surface-low);
  padding: 0.15em 0.5em;
  border-radius: var(--border-radius-sm);
}

/* Title — slightly larger */
.blog-card__title {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0 0 0.4rem 0;
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

/* Footer — read time + arrow on same line */
.blog-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: auto;
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

/* Read More — accent color, bolder */
.blog-card__arrow {
  display: flex;
  align-items: center;
  gap: 0.25rem;
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-semibold);
  color: var(--color-primary);
  transition: gap var(--transition-fast);
}

.blog-card__arrow::after {
  content: "→";
  transition: transform 0.2s;
}

.blog-card:hover .blog-card__arrow {
  gap: 0.5rem;
}

.blog-card:hover .blog-card__arrow::after {
  transform: translateX(3px);
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
  margin-bottom: var(--space-xs);
  animation: fadeInUp 0.5s ease forwards;
  animation-delay: 0.15s;
  opacity: 0;
}

/* Staggered card animations */
.blog-card:nth-child(1) { animation-delay: 0.10s; }
.blog-card:nth-child(2) { animation-delay: 0.18s; }
.blog-card:nth-child(3) { animation-delay: 0.26s; }
.blog-card:nth-child(4) { animation-delay: 0.34s; }
.blog-card:nth-child(5) { animation-delay: 0.42s; }
.blog-card:nth-child(6) { animation-delay: 0.50s; }
.blog-card:nth-child(7) { animation-delay: 0.58s; }
.blog-card:nth-child(8) { animation-delay: 0.66s; }

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(16px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
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
<div class="container page-content blog-page">
  
  <!-- Back Navigation -->
  <a href="/" class="blog-back">← Home</a>
  
  <!-- Page Header -->
  <header class="page-header">
    <h1 class="page-header__title">Blog <span class="page-header__count" aria-label="Total posts: <?php echo $post_count; ?>">— <?php echo $post_count; ?> posts</span></h1>
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
