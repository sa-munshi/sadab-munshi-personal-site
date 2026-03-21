<?php
/**
 * NOW PAGE
 * What you're currently doing (inspired by nownownow.com)
 * AI: Edit content below to update your current activities
 */
$page_title = 'Now — Sadab Munshi';
$page_description = 'What Sadab Munshi is currently doing, thinking about, and working on.';

// Last updated date (change this when updating)
$last_updated = 'February 2026';

// Current activities (easy to add more)
$activities = [
    'Working on <a href="https://app.sadabmunshi.online" target="_blank" rel="noopener noreferrer">something new</a> — a collection of small useful tools',
    'Learning more about how systems work (finance, technology, life)',
    'Writing about ideas, simplicity, and the process of building',
    'Trying to read more and scroll less',
];

$current_location = 'Based in my corner of the world';
?>
<div class="container page-content">
  
  <!-- Page Header -->
  <header class="page-header">
    <h1 class="page-header__title">Now</h1>
    <p class="page-header__desc">What I'm doing right now</p>
  </header>
  
  <!-- Content -->
  <article class="content">
    
    <p><strong><?php echo e($current_location); ?></strong></p>
    
    <p>This is a <a href="https://nownownow.com/about" target="_blank" rel="noopener noreferrer">/now page</a>. It's a snapshot of what I'm focused on at this point in my life. No endless feeds, just what matters now.</p>
    
    <hr>
    
    <h2>Currently</h2>
    
    <ul>
      <?php foreach ($activities as $activity): ?>
      <li><?php echo $activity; ?></li>
      <?php endforeach; ?>
    </ul>
    
    <hr>
    
    <h2>Not Doing</h2>
    
    <ul>
      <li>Chasing every new trend</li>
      <li>Building things I wouldn't use myself</li>
      <li>Trying to optimize everything</li>
    </ul>
    
    <hr>
    
    <p class="text-secondary"><em>Last updated: <?php echo e($last_updated); ?></em></p>
    
    <p class="text-secondary">This page will change as my priorities shift. Check back sometime.</p>
    
  </article>
  
</div>
