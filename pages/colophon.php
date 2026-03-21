<?php
/**
 * COLOPHON PAGE
 * How this site was made
 * AI: Edit content below, tech details in config.php
 */
$page_title = 'Colophon — Sadab Munshi';
$page_description = 'How this website was made. Typography, technology stack, design decisions, and inspiration.';

$last_updated = 'January 2026';

// Design sections - easy to add more
$sections = [
    'Typography' => [
        ['label' => 'Headings', 'value' => '<a href="https://fonts.google.com/specimen/Fraunces" target="_blank" rel="noopener noreferrer">Fraunces</a>', 'desc' => 'A soft-serif font with character. Editorial feel without being pretentious.'],
        ['label' => 'Body Text', 'value' => '<a href="https://fonts.google.com/specimen/Inter" target="_blank" rel="noopener noreferrer">Inter</a>', 'desc' => 'Clean, readable, designed for screens. Gets out of the way.'],
        ['label' => 'Monospace', 'value' => '<a href="https://fonts.google.com/specimen/JetBrains+Mono" target="_blank" rel="noopener noreferrer">JetBrains Mono</a>', 'desc' => 'For code snippets. Clear, legible, developer-friendly.'],
    ],
    'Technology' => [
        ['label' => 'HTML5', 'value' => 'Semantic markup', 'desc' => 'Accessibility-first structure.'],
        ['label' => 'CSS3', 'value' => 'Custom properties', 'desc' => 'No preprocessors, no frameworks. Just clean CSS.'],
        ['label' => 'PHP', 'value' => 'Lightweight templating', 'desc' => 'Simple includes, no heavy frameworks.'],
        ['label' => 'Vanilla JS', 'value' => 'Minimal interactions', 'desc' => 'Just enough for theme toggle and mobile menu.'],
    ],
    'Design' => [
        ['label' => 'Colors', 'value' => 'Warm neutrals', 'desc' => 'Off-white background, soft black text, bronze accents. Feels like paper and ink.'],
        ['label' => 'Dark Mode', 'value' => 'Auto + toggle', 'desc' => 'Respects system preference. Toggleable. Preference saved locally.'],
        ['label' => 'Layout', 'value' => 'Content-first', 'desc' => 'Max width for readability. Generous whitespace. Mobile-responsive.'],
        ['label' => 'Animations', 'value' => 'Subtle', 'desc' => 'Gentle transitions. Nothing flashy or distracting.'],
    ],
];
?>
<div class="container page-content">
  
  <!-- Page Header -->
  <header class="page-header">
    <h1 class="page-header__title">Colophon</h1>
    <p class="page-header__desc">How this site was made.</p>
  </header>
  
  <!-- Content -->
  <article class="content">
    
    <p>This site is intentionally simple. No heavy frameworks, minimal build process, no unnecessary complexity. Just clean code that works.</p>
    
    <hr>
    
    <?php foreach ($sections as $section_title => $items): ?>
    <section class="list-section" style="margin-bottom: 2.5rem;">
      <h2 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--color-text);"><?php echo e($section_title); ?></h2>
      <ul style="list-style: none; padding: 0;">
        <?php foreach ($items as $item): ?>
        <li style="margin-bottom: 1rem; display: flex; gap: 0.75rem;">
          <span style="color: var(--color-accent);">→</span>
          <div>
            <strong><?php echo e($item['label']); ?>:</strong> <?php echo $item['value']; ?>
            <p style="margin: 0.25rem 0 0 0; font-size: 0.875rem; color: var(--color-text-secondary);"><?php echo $item['desc']; ?></p>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </section>
    <?php endforeach; ?>
    
    <!-- Hosting Section -->
    <section class="list-section" style="margin-bottom: 2.5rem;">
      <h2 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--color-text);">Hosting</h2>
      <ul style="list-style: none; padding: 0;">
        <li style="margin-bottom: 1rem; display: flex; gap: 0.75rem;">
          <span style="color: var(--color-accent);">→</span>
          <div>
            <strong>Domain:</strong> <code>sadabmunshi.online</code>
            <p style="margin: 0.25rem 0 0 0; font-size: 0.875rem; color: var(--color-text-secondary);">Personal domain. Easy to remember.</p>
          </div>
        </li>
        <li style="margin-bottom: 1rem; display: flex; gap: 0.75rem;">
          <span style="color: var(--color-accent);">→</span>
          <div>
            <strong>Hosting:</strong> <a href="https://www.infinityfree.com" target="_blank" rel="noopener noreferrer">InfinityFree</a>
            <p style="margin: 0.25rem 0 0 0; font-size: 0.875rem; color: var(--color-text-secondary);">Free PHP hosting. Reliable and simple.</p>
          </div>
        </li>
        <li style="margin-bottom: 1rem; display: flex; gap: 0.75rem;">
          <span style="color: var(--color-accent);">→</span>
          <div>
            <strong>Code Editor:</strong> VS Code
            <p style="margin: 0.25rem 0 0 0; font-size: 0.875rem; color: var(--color-text-secondary);">Simple, reliable, extensible.</p>
          </div>
        </li>
        <li style="margin-bottom: 1rem; display: flex; gap: 0.75rem;">
          <span style="color: var(--color-accent);">→</span>
          <div>
            <strong>Icons:</strong> <a href="https://feathericons.com/" target="_blank" rel="noopener noreferrer">Feather Icons</a>
            <p style="margin: 0.25rem 0 0 0; font-size: 0.875rem; color: var(--color-text-secondary);">Clean, minimal, open source SVG icons.</p>
          </div>
        </li>
      </ul>
    </section>
    
    <!-- Performance Section -->
    <section class="list-section" style="margin-bottom: 2.5rem;">
      <h2 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--color-text);">Performance</h2>
      <ul>
        <li>No external dependencies (except Google Fonts)</li>
        <li>Minimal CSS (~20KB)</li>
        <li>Minimal JavaScript (~10KB)</li>
        <li>Fast page loads</li>
        <li>Lighthouse score: 95+</li>
      </ul>
    </section>
    
    <!-- Inspiration Section -->
    <section class="list-section" style="margin-bottom: 2.5rem;">
      <h2 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--color-text);">Inspiration</h2>
      <p>This site was inspired by people who build calm, thoughtful corners of the internet. Those who prioritize content over flash, simplicity over complexity.</p>
      <p>Special appreciation to:</p>
      <ul>
        <li>The <a href="https://nownownow.com/about" target="_blank" rel="noopener noreferrer">/now page movement</a> by Derek Sivers</li>
        <li>Personal sites that feel personal</li>
        <li>Designers and developers who share their process</li>
        <li>Anyone building things and putting them online</li>
      </ul>
    </section>
    
    <hr>
    
    <!-- Source Code Section -->
    <section class="list-section">
      <h2 style="font-size: 1.25rem; margin-bottom: 1rem; color: var(--color-text);">Source Code</h2>
      <p>The code for this site is available on <a href="https://github.com/sa-munshi/sadabmunshi.online" target="_blank" rel="noopener noreferrer">GitHub</a>. Feel free to explore, learn from it, or use it as inspiration for your own site.</p>
      <p class="text-secondary">If you build something cool, I'd love to see it.</p>
    </section>
    
    <hr>
    
    <p class="text-secondary"><em>Last updated: <?php echo e($last_updated); ?></em></p>
    
  </article>
  
</div>
