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
        'title' => 'Things I Use Every Day',
        'excerpt' => 'A simple setup that actually works.',
        'date' => '2025-01-10',
        'url' => '/blog/the-tools-i-use-daily/'
    ],
    [
        'title' => 'Notes on Simplicity',
        'excerpt' => 'Less is usually better.',
        'date' => '2025-05-20',
        'url' => '/blog/notes-on-simplicity/'
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
/* ======================== GLASSY BACKGROUND ======================== */
.glassy-bg {
  position: fixed;
  inset: 0;
  pointer-events: none;
  z-index: 0;
  background: 
    radial-gradient(ellipse at 20% 30%, rgba(167, 139, 250, 0.08) 0%, transparent 50%),
    radial-gradient(ellipse at 80% 70%, rgba(103, 232, 249, 0.08) 0%, transparent 50%),
    radial-gradient(ellipse at 50% 50%, rgba(251, 146, 60, 0.04) 0%, transparent 60%);
}

/* ======================== MAIN CONTAINER ======================== */
.letter-container {
  font-family: Georgia, "Times New Roman", serif;
  line-height: 1.7;
  max-width: 720px;
  margin: 0 auto;
  padding: 8rem 2rem 6rem;
  position: relative;
  z-index: 1;
}

/* ======================== DATE STAMP ======================== */
.letter-date {
  font-family: Georgia, "Times New Roman", serif;
  font-size: 0.9rem;
  font-style: italic;
  font-weight: 400;
  color: var(--color-text-secondary);
  margin-bottom: 4rem;
}

/* ======================== OPENING LINE ======================== */
.letter-opening {
  font-size: 2rem;
  line-height: 1.4;
  color: var(--color-text);
  margin: 0 0 3rem 0;
  font-weight: 400;
  letter-spacing: -0.01em;
}

/* ======================== BODY TEXT ======================== */
.letter-body {
  font-size: 1.15rem;
  line-height: 1.85;
  color: var(--color-text-secondary);
  margin-bottom: 3rem;
}

.letter-body p {
  margin: 0 0 1.5rem 0;
}

.letter-body a {
  color: var(--color-text);
  text-decoration: none;
  border-bottom: 2px solid var(--color-accent);
  font-weight: 600;
  transition: all 0.2s;
  padding-bottom: 2px;
}

.letter-body a:hover {
  background: var(--color-accent);
  color: var(--color-bg);
}

/* ======================== EDITORIAL SECTION ======================== */
.editorial-section {
  margin: 5rem 0;
}

.section-header {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  margin-bottom: 2rem;
  padding-bottom: 0.75rem;
  border-bottom: 1px solid var(--color-border);
}

.section-label {
  font-family: "Courier New", monospace;
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.25em;
  color: var(--color-text-muted);
  margin: 0;
}

.section-link {
  font-size: 0.85rem;
  font-weight: 600;
  color: var(--color-text-secondary);
  text-decoration: none;
  transition: all 0.2s;
}

.section-link:hover {
  color: var(--color-text);
}

/* ======================== EDITORIAL CARDS ======================== */
.digest-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.digest-card {
  display: block;
  text-decoration: none;
  padding: 2rem 2.25rem;
  background: rgba(255, 255, 255, 0.45);
  border: 1px solid rgba(255, 255, 255, 0.6);
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  transition: all 0.35s ease;
  position: relative;
}

[data-theme="dark"] .digest-card {
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.08);
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.digest-card:hover {
  background: rgba(255, 255, 255, 0.65);
  transform: translateY(-3px);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
}

[data-theme="dark"] .digest-card:hover {
  background: rgba(255, 255, 255, 0.08);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.3);
}

.digest-card__meta {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 0.75rem;
}

.digest-card__date {
  font-family: "Courier New", monospace;
  font-size: 0.7rem;
  font-weight: 600;
  color: var(--color-text-muted);
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.digest-card__title {
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--color-text);
  margin: 0 0 0.75rem 0;
  line-height: 1.35;
}

.digest-card__excerpt {
  font-size: 1.05rem;
  color: var(--color-text-secondary);
  margin: 0 0 1.25rem 0;
  line-height: 1.6;
}

.digest-card__action {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  font-size: 0.9rem;
  font-weight: 600;
  color: var(--color-text);
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
  margin: 2.5rem 0;
  padding: 1.25rem 1.75rem;
  background: rgba(255, 255, 255, 0.3);
  border-left: 3px solid var(--color-accent);
  border-radius: 0 8px 8px 0;
  font-size: 0.95rem;
  font-style: italic;
  color: var(--color-text-secondary);
  line-height: 1.6;
}

[data-theme="dark"] .mood-note {
  background: rgba(255, 255, 255, 0.03);
}

/* ======================== SIGNATURE ======================== */
.letter-signature {
  margin-top: 5rem;
  text-align: right;
  padding-top: 2.5rem;
  border-top: 1px solid var(--color-border);
}

.signature-name {
  font-family: Georgia, serif;
  font-size: 2.5rem;
  font-weight: 600;
  font-style: italic;
  margin: 0 0 0.75rem 0;
  background: linear-gradient(
    90deg,
    #1a1a1a 0%,
    #1a1a1a 30%,
    #ffffff 50%,
    #1a1a1a 70%,
    #1a1a1a 100%
  );
  background-size: 200% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: cinematic-shimmer 3s linear infinite;
  display: inline-block;
  letter-spacing: -0.02em;
}

[data-theme="dark"] .signature-name {
  background: linear-gradient(
    90deg,
    #f0f0f0 0%,
    #f0f0f0 30%,
    #888888 50%,
    #f0f0f0 70%,
    #f0f0f0 100%
  );
  background-size: 200% 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

@keyframes cinematic-shimmer {
  0% { background-position: 100% 0; }
  100% { background-position: -100% 0; }
}

.signature-title {
  font-family: "Courier New", monospace;
  font-size: 0.8rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.3em;
  color: var(--color-text-muted);
  margin: 0;
}

/* ======================== QUICK LINKS ======================== */
.quick-links {
  margin-top: 4rem;
  display: flex;
  gap: 2.5rem;
  flex-wrap: wrap;
}

.quick-link {
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-text-secondary);
  text-decoration: none;
  position: relative;
  transition: color 0.2s;
  padding-bottom: 4px;
}

.quick-link::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--color-text);
  transition: width 0.3s ease;
}

.quick-link:hover {
  color: var(--color-text);
}

.quick-link:hover::after {
  width: 100%;
}

/* ======================== TABLET LANDSCAPE ======================== */
@media (min-width: 768px) and (max-width: 1024px) {
  .letter-container {
    max-width: 680px;
    padding: 6rem 3rem 5rem;
  }
  
  .letter-opening {
    font-size: 2.2rem;
  }
  
  .letter-body {
    font-size: 1.2rem;
  }
}

/* ======================== LAPTOP / DESKTOP ======================== */
@media (min-width: 1025px) {
  .letter-container {
    max-width: 880px;
    padding: 8rem 5rem 7rem;
  }
  
  .letter-opening {
    font-size: 2.8rem;
    line-height: 1.25;
    margin-bottom: 3.5rem;
  }
  
  .letter-body {
    font-size: 1.3rem;
    line-height: 1.9;
    max-width: 75ch;
  }
  
  .digest-card {
    padding: 2.5rem 3rem;
    margin-bottom: 1.5rem;
  }
  
  .digest-card__title {
    font-size: 1.5rem;
    margin-bottom: 0.75rem;
  }
  
  .digest-card__excerpt {
    font-size: 1.15rem;
    line-height: 1.65;
  }
  
  .digest-list {
    gap: 1.5rem;
  }
  
  .mood-note {
    font-size: 1.1rem;
    padding: 1.5rem 2rem;
    margin: 3rem 0;
  }
  
  .currently-doing {
    padding: 2rem 2.5rem;
    margin: 3.5rem 0;
  }
  
  .currently-doing__content {
    font-size: 1.25rem;
  }
  
  .signature-name {
    font-size: 3.2rem;
  }
  
  .letter-signature {
    margin-top: 6rem;
    padding-top: 3rem;
  }
  
  .quick-links {
    margin-top: 5rem;
    gap: 3rem;
  }
  
  .quick-link {
    font-size: 1.1rem;
  }
}

/* ======================== LARGE SCREENS ======================== */
@media (min-width: 1440px) {
  .letter-container {
    max-width: 800px;
    padding: 8rem 5rem 7rem;
  }
  
  .letter-opening {
    font-size: 3rem;
  }
}

/* ======================== MOBILE ======================== */
@media (max-width: 640px) {
  .letter-container {
    padding: 5rem 1.5rem 4rem;
  }
  
  .letter-opening {
    font-size: 1.6rem;
  }
  
  .digest-card {
    padding: 1.5rem;
  }
  
  .digest-card__title {
    font-size: 1.15rem;
  }
  
  .signature-name {
    font-size: 2rem;
  }
  
  .letter-signature {
    text-align: center;
  }
  
  .quick-links {
    justify-content: center;
    gap: 1.75rem;
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

<!-- Glassy Background -->
<div class="glassy-bg" aria-hidden="true"></div>

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
      <h2 class="section-label">Recent Writing</h2>
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
    <a href="/blog/" class="quick-link">Writing</a>
    <a href="/projects/" class="quick-link">Projects</a>
    <a href="/contact/" class="quick-link">Contact</a>
  </nav>
  
</div>
