<?php
/**
 * MAIN LAYOUT TEMPLATE
 * This wraps all pages with header, footer, and SEO
 * Complete SEO implementation - meta tags, Open Graph, Twitter Cards, Schema
 */

// Determine page type
$current_path_raw = current_path();
$is_homepage = ($current_path_raw === '/' || $current_path_raw === '');
$is_about_page = ($current_path_raw === '/about/' || $current_path_raw === '/about');
$is_blog_index = ($current_path_raw === '/blog/' || $current_path_raw === '/blog');
$is_projects_page = ($current_path_raw === '/projects/' || $current_path_raw === '/projects');
$is_now_page = ($current_path_raw === '/now/' || $current_path_raw === '/now');
$is_blog_post = (strpos($current_path_raw, '/blog/') === 0 && !$is_blog_index);
$is_contact_page = ($current_path_raw === '/contact/' || $current_path_raw === '/contact');
$is_watching_page = ($current_path_raw === '/watching/' || $current_path_raw === '/watching');
$is_colophon_page = ($current_path_raw === '/colophon/' || $current_path_raw === '/colophon');

// Build canonical URL - exact format as specified
$canonical_path = rtrim($current_path_raw, '/');
if ($canonical_path === '') {
    $canonical_url = 'https://www.sadabmunshi.online';
} else {
    $canonical_url = 'https://www.sadabmunshi.online/' . ltrim($canonical_path, '/');
}

// Default page title and description if not set
if (!isset($page_title)) {
    $page_title = 'Sadab Munshi';
}
if (!isset($page_description)) {
    $page_description = 'I learn by building things. Notes on what I make, break, and figure out along the way.';
}

// Full title
$full_title = $page_title;

// Open Graph type
$og_type = $is_blog_post ? 'article' : 'website';

// Robots meta - noindex for specific pages
$noindex_pages = ['/contact', '/contact/', '/watching', '/watching/', '/colophon', '/colophon/'];
$robots_content = in_array($current_path_raw, $noindex_pages) ? 'noindex, nofollow' : 'index, follow';

// JSON-LD Schemas
$schemas = [];

// Person schema on Homepage and About page
if ($is_homepage || $is_about_page) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => 'Sadab Munshi',
        'url' => 'https://www.sadabmunshi.online',
        'sameAs' => [
            'https://github.com/sa-munshi',
            'https://linkedin.com/in/sadab-munshi',
            'https://twitter.com/SadabMunshi',
            'https://instagram.com/heysadab'
        ]
    ];
}

// WebSite schema on Homepage
if ($is_homepage) {
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Sadab Munshi',
        'url' => 'https://www.sadabmunshi.online'
    ];

    // SiteNavigationElement for sitelinks
    $schemas[] = [
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'itemListElement' => [
            ['@type' => 'SiteNavigationElement', 'name' => 'About', 'url' => 'https://www.sadabmunshi.online/about'],
            ['@type' => 'SiteNavigationElement', 'name' => 'Now', 'url' => 'https://www.sadabmunshi.online/now'],
            ['@type' => 'SiteNavigationElement', 'name' => 'Projects', 'url' => 'https://www.sadabmunshi.online/projects'],
            ['@type' => 'SiteNavigationElement', 'name' => 'Blog', 'url' => 'https://www.sadabmunshi.online/blog'],
        ]
    ];
}

// Article schema on blog posts
if ($is_blog_post && isset($post)) {
    $article_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => isset($post['title']) ? $post['title'] : $page_title,
        'url' => $canonical_url,
        'author' => [
            '@type' => 'Person',
            'name' => 'Sadab Munshi'
        ]
    ];
    
    if (isset($post['date'])) {
        $article_schema['datePublished'] = $post['date'];
    }
    if (isset($post['modified'])) {
        $article_schema['dateModified'] = $post['modified'];
    } elseif (isset($post['date'])) {
        $article_schema['dateModified'] = $post['date'];
    }
    
    $schemas[] = $article_schema;
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <!-- Primary Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e($full_title); ?></title>
  <meta name="description" content="<?php echo e($page_description); ?>">
  <meta name="robots" content="<?php echo $robots_content; ?>">
  <meta name="author" content="Sadab Munshi">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="<?php echo $canonical_url; ?>">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="<?php echo $og_type; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:title" content="<?php echo e($full_title); ?>">
  <meta property="og:description" content="<?php echo e($page_description); ?>">
  <meta property="og:image" content="https://www.sadabmunshi.online/assets/images/og-image.png">
  <meta property="og:site_name" content="Sadab Munshi">
  <meta property="og:locale" content="en_US">
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?php echo e(config('twitter_handle')); ?>">
  <meta name="twitter:creator" content="<?php echo e(config('twitter_handle')); ?>">
  <meta name="twitter:url" content="<?php echo $canonical_url; ?>">
  <meta name="twitter:title" content="<?php echo e($full_title); ?>">
  <meta name="twitter:description" content="<?php echo e($page_description); ?>">
  <meta name="twitter:image" content="https://www.sadabmunshi.online/assets/images/og-image.png">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
  
  <!-- Manifest -->
  <link rel="manifest" href="/manifest.json">
  <meta name="theme-color" content="#FAF9F6">
  
  <!-- Humans.txt -->
  <link rel="author" type="text/plain" href="/humans.txt">
  
  <!-- Fonts — Newsreader (headings) + Manrope (body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <?php if (isset($extra_css)): ?>
  <?php echo $extra_css; ?>
  <?php endif; ?>
  
  <!-- JSON-LD Structured Data -->
  <?php if (!empty($schemas)): ?>
  <script type="application/ld+json">
  <?php echo json_encode(count($schemas) === 1 ? $schemas[0] : $schemas, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
  </script>
  <?php endif; ?>
</head>
<body>
  <div class="page">
    
    <!-- Header -->
    <?php partial('header'); ?>
    
    <!-- Main Content -->
    <main class="main">
      <?php echo $content; ?>
    </main>
    
    <!-- Footer -->
    <?php partial('footer'); ?>
    
  </div>
  
  <!-- Toast for Easter Egg -->
  <div class="toast" aria-live="polite"></div>
  
  <!-- JavaScript -->
  <script src="/assets/js/main.js"></script>
  <?php if (isset($extra_js)): ?>
  <?php echo $extra_js; ?>
  <?php endif; ?>
</body>
</html>
