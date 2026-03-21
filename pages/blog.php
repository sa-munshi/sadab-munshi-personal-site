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
/* ======================== MINIMAL B&W BLOG ======================== */
/* Black and white only - newspaper style */

.blog-grid {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  margin-top: 1.5rem;
}

/* Blog Card - Single column, compact */
.blog-card {
  display: flex;
  flex-direction: column;
  text-decoration: none;
  padding: 1rem 1.25rem;
  background: #ffffff;
  border: 1px solid #e5e5e5;
  border-radius: 16px;
  transition: all 0.2s ease;
  position: relative;
  cursor: pointer;
}

[data-theme="dark"] .blog-card {
  background: #0a0a0a;
  border: 1px solid #333333;
}

/* Hover Effects - subtle */
.blog-card:hover {
  border-color: #000000;
  background: #fafafa;
}

[data-theme="dark"] .blog-card:hover {
  border-color: #ffffff;
  background: #141414;
}

/* Featured card same as regular - no special styling */
.blog-card--featured {
  grid-column: auto;
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
  margin-bottom: 0.375rem;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  font-size: 0.7rem;
  color: #666666;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

[data-theme="dark"] .blog-card__meta {
  color: #888888;
}

/* Title - Clean serif */
.blog-card__title {
  font-family: Georgia, "Times New Roman", serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: #000000;
  margin: 0 0 0.375rem 0;
  line-height: 1.4;
}

[data-theme="dark"] .blog-card__title {
  color: #ffffff;
}

.blog-card:hover .blog-card__title {
  text-decoration: underline;
}

/* Excerpt - Clean sans */
.blog-card__excerpt {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  font-size: 0.875rem;
  color: #444444;
  margin: 0;
  line-height: 1.5;
}

[data-theme="dark"] .blog-card__excerpt {
  color: #aaaaaa;
}

/* Footer - Compact */
.blog-card__footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 0.75rem;
  padding-top: 0.625rem;
  border-top: 1px solid #f0f0f0;
}

[data-theme="dark"] .blog-card__footer {
  border-top-color: #222222;
}

.blog-card__read-time {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  font-size: 0.75rem;
  color: #888888;
  display: flex;
  align-items: center;
  gap: 0.3rem;
}

[data-theme="dark"] .blog-card__read-time {
  color: #666666;
}

.blog-card__read-time::before {
  content: "◷";
  font-size: 0.8rem;
  color: #999999;
}

/* Read More */
.blog-card__arrow {
  display: flex;
  align-items: center;
  gap: 0.25rem;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  font-size: 0.8rem;
  font-weight: 500;
  color: #000000;
}

[data-theme="dark"] .blog-card__arrow {
  color: #ffffff;
}

.blog-card__arrow::after {
  content: "→";
}

/* Hide featured badge completely */
.blog-card__badge {
  display: none;
}

/* Intro Text */
.blog-intro {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
  font-size: 1rem;
  line-height: 1.6;
  color: #444444;
  max-width: 65ch;
  margin-bottom: 0.5rem;
}

[data-theme="dark"] .blog-intro {
  color: #aaaaaa;
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
