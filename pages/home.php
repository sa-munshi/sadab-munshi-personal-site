<?php
/**
 * HOME PAGE
 * Editorial, polished, content-focused
 */
$page_title = 'Sadab Munshi';
$page_description = 'I learn by building things. Notes on what I make, break, and figure out along the way.';

// Current date with day name in IST: "Sunday, February 22, 2026"
date_default_timezone_set('Asia/Kolkata');
$currentDate = date('l, F j, Y');

// Dynamic blog posts - scan the blog directory
function getBlogPosts() {
    $posts = [];
    $blogDir = __DIR__ . '/blog/';
    
    if (!is_dir($blogDir)) {
        return $posts;
    }
    
    $files = glob($blogDir . '*.php');
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
        $post = [
            'slug' => basename($file, '.php'),
            'title' => 'Untitled',
            'excerpt' => '',
            'date' => date('Y-m-d', filemtime($file)),
        ];
        
        if (preg_match('/\$post\s*=\s*\[[^\]]*\'title\'\s*=>\s*[\'"](.+?)[\'"]/s', $content, $matches)) {
            $post['title'] = $matches[1];
        } elseif (preg_match('/\$page_title\s*=\s*[\'"](.+?)[\'"]/', $content, $matches)) {
            $post['title'] = str_replace(' — Sadab Munshi', '', $matches[1]);
        }
        
        if (preg_match('/\'date\'\s*=>\s*[\'"](\d{4}-\d{2}-\d{2})[\'"]/', $content, $matches)) {
            $post['date'] = $matches[1];
        }
        
        if (preg_match('/\'excerpt\'\s*=>\s*[\'"](.+?)[\'"]/s', $content, $matches)) {
            $post['excerpt'] = $matches[1];
        }
        
        $post['url'] = '/blog/' . $post['slug'] . '/';
        
        $posts[] = $post;
    }
    
    usort($posts, function($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });
    
    return $posts;
}

$recentPosts = getBlogPosts();

// Ensure minimum 3 posts with fallbacks
$defaultPosts = [
    [
        'title' => 'Why I Started Making Things',
        'excerpt' => 'On curiosity and the shift from consumer to creator.',
        'date' => '2025-12-15',
        'url' => '/blog/why-i-started-building-things/'
    ],
    [
        'title' => 'Notes on Simplicity',
        'excerpt' => 'Less is usually better.',
        'date' => '2025-05-20',
        'url' => '/blog/notes-on-simplicity/'
    ],
    [
        'title' => 'Learning in Public',
        'excerpt' => 'The unexpected benefits of sharing while you learn.',
        'date' => '2025-03-28',
        'url' => '/blog/learning-in-public/'
    ]
];

// Remove duplicates based on URL (in case a real post matches a default post)
$existingUrls = array_column($recentPosts, 'url');
$uniqueDefaults = array_filter($defaultPosts, function($post) use ($existingUrls) {
    return !in_array($post['url'], $existingUrls);
});

// Merge and ensure minimum 3
if (count($recentPosts) < 3) {
    $recentPosts = array_merge($recentPosts, array_slice($uniqueDefaults, 0, 3 - count($recentPosts)));
}

$extra_css = '<style>
/* ======================== MAIN CONTAINER ======================== */
.letter-container {
  font-family: var(--font-body);
  line-height: var(--leading-normal);
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-3xl) var(--space-md) var(--space-2xl);
  position: relative;
  z-index: 1;
}

/* ======================== DATE STAMP ======================== */
.letter-date {
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-normal);
  color: var(--color-text-secondary);
  margin-bottom: var(--space-2xl);
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

/* ======================== OPENING LINE ======================== */
.letter-opening {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  line-height: var(--leading-tight);
  color: var(--color-text);
  margin: 0 0 var(--space-xl) 0;
  font-weight: var(--weight-medium);
  letter-spacing: -0.02em;
}

/* ======================== BODY TEXT ======================== */
.letter-body {
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text-secondary);
  margin-bottom: var(--space-xl);
}

.letter-body p {
  margin: 0 0 var(--space-md) 0;
}

.letter-body a {
  color: var(--color-primary);
  text-decoration: none;
  font-weight: var(--weight-medium);
  transition: color var(--transition-fast);
}

.letter-body a:hover {
  color: var(--color-primary-hover);
}

/* ======================== EDITORIAL SECTION ======================== */
.editorial-section {
  margin: var(--space-3xl) 0;
}

.section-header {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-bottom: var(--space-lg);
}

.section-label {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-semibold);
  text-transform: uppercase;
  letter-spacing: 0.15em;
  color: var(--color-text-secondary);
  margin: 0;
}

.section-link {
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
  text-decoration: none;
  transition: color var(--transition-fast);
}

.section-link:hover {
  color: var(--color-primary-hover);
}

/* ======================== EDITORIAL CARDS ======================== */
.digest-list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
}

.digest-list > *:nth-child(even) {
  margin-top: var(--space-lg);
}

.digest-card {
  display: block;
  text-decoration: none;
  padding: var(--space-lg);
  background: var(--color-white);
  border-radius: var(--border-radius);
  transition: box-shadow var(--transition-normal), transform var(--transition-normal);
  position: relative;
}

.digest-card:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
}

.digest-card__meta {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 0.75rem;
}

.digest-card__date {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-medium);
  color: var(--color-text-secondary);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

.digest-card__title {
  font-family: var(--font-heading);
  font-size: var(--text-lg);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin: 0 0 0.5rem 0;
  line-height: var(--leading-tight);
}

.digest-card__excerpt {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin: 0 0 var(--space-sm) 0;
  line-height: var(--leading-normal);
}

.digest-card__action {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
  transition: gap 0.2s;
}

.digest-card:hover .digest-card__action {
  gap: 0.75rem;
}

.digest-card__action::after {
  content: "→";
  transition: transform 0.2s;
}

.digest-card:hover .digest-card__action::after {
  transform: translateX(4px);
}

/* ======================== HUMAN TOUCH ======================== */
.mood-note {
  margin: var(--space-xl) 0;
  padding: var(--space-md) var(--space-lg);
  background: var(--color-surface-low);
  border-radius: var(--border-radius-sm);
  font-size: var(--text-sm);
  font-style: italic;
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
}

/* ======================== SIGNATURE ======================== */
.letter-signature {
  margin-top: var(--space-3xl);
  text-align: right;
  padding-top: var(--space-xl);
}

.signature-name {
  font-family: var(--font-heading);
  font-size: var(--text-2xl);
  font-weight: var(--weight-medium);
  font-style: italic;
  margin: 0 0 0.5rem 0;
  display: inline-block;
  letter-spacing: -0.02em;
  background: linear-gradient(
    90deg,
    var(--color-text) 25%,
    #9aada6 42%,
    #d4ddd9 50%,
    #9aada6 58%,
    var(--color-text) 75%
  );
  background-size: 200% auto;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: signature-shimmer 6s linear infinite;
}

@keyframes signature-shimmer {
  0%   { background-position: 100% center; }
  100% { background-position: -100% center; }
}

@media (prefers-reduced-motion: reduce) {
  .signature-name {
    animation: none;
    background-position: 0% center;
  }
}

.signature-title {
  font-family: var(--font-body);
  font-size: var(--text-xs);
  font-weight: var(--weight-medium);
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: var(--color-text-secondary);
  margin: 0;
}

/* ======================== QUICK LINKS ======================== */
.quick-links {
  margin-top: var(--space-2xl);
  display: flex;
  gap: var(--space-lg);
  flex-wrap: wrap;
}

.quick-link {
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-text-secondary);
  text-decoration: none;
  position: relative;
  transition: color var(--transition-fast);
  padding-bottom: 2px;
}

.quick-link::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 1px;
  background: var(--color-primary);
  transition: width 0.3s ease;
}

.quick-link:hover {
  color: var(--color-primary);
}

.quick-link:hover::after {
  width: 100%;
}

/* ======================== TABLET ======================== */
@media (min-width: 768px) and (max-width: 1024px) {
  .letter-container {
    max-width: 680px;
    padding: var(--space-2xl) var(--space-lg) var(--space-2xl);
  }

  .letter-opening {
    font-size: var(--text-2xl);
  }
}

/* ======================== DESKTOP ======================== */
@media (min-width: 1025px) {
  .letter-container {
    max-width: var(--max-width);
    padding: var(--space-3xl) var(--space-lg) var(--space-3xl);
  }

  .letter-opening {
    font-size: var(--text-3xl);
    margin-bottom: var(--space-xl);
  }

  .letter-body {
    max-width: 65ch;
  }

  .digest-card {
    padding: var(--space-lg);
  }

  .digest-card__title {
    font-size: var(--text-lg);
  }

  .signature-name {
    font-size: var(--text-2xl);
  }

  .letter-signature {
    margin-top: var(--space-3xl);
  }
}

/* ======================== LARGE SCREENS ======================== */
@media (min-width: 1440px) {
  .letter-container {
    max-width: 860px;
  }

  .letter-opening {
    font-size: var(--text-3xl);
  }
}

/* ======================== MOBILE ======================== */
@media (max-width: 640px) {
  .letter-container {
    padding: var(--space-2xl) var(--space-sm) var(--space-xl);
  }

  .letter-opening {
    font-size: var(--text-2xl);
  }

  .digest-list {
    grid-template-columns: 1fr;
  }

  .digest-list > *:nth-child(even) {
    margin-top: 0;
  }

  .digest-card {
    padding: var(--space-md);
  }

  .digest-card__title {
    font-size: var(--text-lg);
  }

  .signature-name {
    font-size: var(--text-xl);
  }

  .letter-signature {
    text-align: center;
  }

  .quick-links {
    justify-content: center;
    gap: var(--space-md);
  }
}
</style>';

$moods = [
  "Today feels like a good day to break something and fix it.",
  "Currently resisting the urge to rebuild everything from scratch.",
  "Some days I code. Some days I stare at the screen. Today is one of those days.",
  "Learning that good enough is better than perfect. Slowly.",
  "Coffee level: critical. Curiosity level: high."
];
$todayMood = $moods[array_rand($moods)];
?>

<!-- Letter -->
<div class="letter-container">
  
  <!-- Date -->
  <div class="letter-date">
    <?php echo $currentDate; ?>
  </div>
  
  <!-- Opening -->
  <p class="letter-opening">
    I learn by building things.
  </p>
  
  <!-- Body -->
  <div class="letter-body">
    <p>
      I spend my time exploring how things work, breaking them, and occasionally fixing them. This site is where I share what I learn along the way.
    </p>
    <p>
      You will find <a href="/blog/">notes on building</a>, <a href="/projects/">things I have made</a>, and a <a href="/now/">page about what I am doing now</a>. Nothing fancy. Just real work.
    </p>
  </div>
  
  <!-- Human Touch -->
  <div class="mood-note">
    <?php echo $todayMood; ?>
  </div>
  
  <!-- Recent Writing - Editorial Digest -->
  <section class="editorial-section">
    <div class="section-header">
      <h2 class="section-label">Latest Posts</h2>
      <a href="/blog/" class="section-link">View all →</a>
    </div>
    
    <div class="digest-list">
      <?php 
      $displayPosts = array_slice($recentPosts, 0, 3);
      foreach ($displayPosts as $post): 
      ?>
      <a href="<?php echo $post['url']; ?>" class="digest-card">
        <div class="digest-card__meta">
          <span class="digest-card__date"><?php echo date('F j, Y', strtotime($post['date'])); ?></span>
        </div>
        <h3 class="digest-card__title"><?php echo htmlspecialchars($post['title']); ?></h3>
        <?php if (!empty($post['excerpt'])): ?>
        <p class="digest-card__excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
        <?php endif; ?>
        <span class="digest-card__action">Read more</span>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
  
  <!-- Signature -->
  <div class="letter-signature">
    <p class="signature-name">Sadab Munshi</p>
    <p class="signature-title">Student</p>
  </div>
  
  <!-- Links -->
  <nav class="quick-links">
    <a href="/about/" class="quick-link">About</a>
    <a href="/blog/" class="quick-link">Blog</a>
    <a href="/projects/" class="quick-link">Projects</a>
    <a href="/contact/" class="quick-link">Contact</a>
  </nav>
  
</div>
