<?php
/**
 * WATCHING PAGE
 * Movies and shows you're watching
 * AI: Edit content below to update your watch list
 */
$page_title = 'Watching — Sadab Munshi';
$page_description = 'Movies and shows I have watched or am watching. Personal recommendations and watch list.';

$last_updated = 'February 2026';

// Media categories
$watching = [
    [
        'category' => 'Recently Watched',
        'items' => [
            ['title' => 'The Social Network', 'year' => '2010', 'note' => 'A classic. Makes you want to build something.'],
        ],
    ],
    [
        'category' => 'Currently Watching',
        'items' => [
            ['title' => 'Severance', 'year' => '2022-', 'note' => 'Work-life balance taken to the extreme.'],
        ],
    ],
    [
        'category' => 'Want to Watch',
        'items' => [
            ['title' => 'Dune: Part Two', 'year' => '2024', 'note' => 'Heard it is incredible.'],
            ['title' => 'The Bear', 'year' => '2022-', 'note' => 'Everyone keeps recommending this.'],
        ],
    ],
    [
        'category' => 'All-Time Favorites',
        'items' => [
            ['title' => 'Good Will Hunting', 'year' => '1997', 'note' => 'It is not your fault.'],
            ['title' => 'The Prestige', 'year' => '2006', 'note' => 'Nolan at his best.'],
            ['title' => 'Whiplash', 'year' => '2014', 'note' => 'Obsession and excellence.'],
        ],
    ],
];
?>
<div class="container page-content">
  
  <!-- Page Header -->
  <header class="page-header">
    <h1 class="page-header__title">Watching</h1>
    <p class="page-header__desc">Movies and shows.</p>
  </header>
  
  <!-- Content -->
  <article class="content">
    
    <p>I do not watch a lot, but when I do, I prefer things that make me think or feel something. No particular genre — just good storytelling.</p>
    
    <hr>
    
    <?php foreach ($watching as $section): ?>
    <section class="list-section">
      <h2><?php echo e($section['category']); ?></h2>
      <ul style="list-style: none; padding: 0;">
        <?php foreach ($section['items'] as $item): ?>
        <li style="margin-bottom: 1rem; padding: var(--space-md); background: var(--color-surface-low); border-radius: var(--border-radius-sm);">
          <div style="font-weight: var(--weight-medium); margin-bottom: 0.25rem;">
            <?php echo e($item['title']); ?> 
            <span style="color: var(--color-text-secondary); font-weight: normal;">(<?php echo e($item['year']); ?>)</span>
          </div>
          <p style="margin: 0; font-size: var(--text-sm); color: var(--color-text-secondary);"><?php echo e($item['note']); ?></p>
        </li>
        <?php endforeach; ?>
      </ul>
    </section>
    <?php endforeach; ?>
    
    <hr>
    
    <p class="text-secondary"><em>Last updated: <?php echo e($last_updated); ?></em></p>
    
    <p class="text-secondary">Have a recommendation? <a href="/contact/">Let me know</a>.</p>
    
  </article>
  
</div>
