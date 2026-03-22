<?php
/**
 * HEADER PARTIAL
 * Contains navigation
 * AI: Edit nav structure here, not on each page
 * 
 * Logo: Upload your logo to assets/images/logo-S.M.png (recommended: 28-36px height, transparent PNG)
 * Layout: Logo (left) | Menu Button (right)
 */
?>
<header class="header">
  <nav class="nav" aria-label="Main navigation">
    <!-- Logo: Clickable link to home (left edge) -->
    <a href="/" class="nav__logo" aria-label="Sadab Munshi - Home">
      <img src="/assets/images/logo-S.M.png"
           class="nav__logo-img"
           alt="Sadab Munshi"
           onerror="this.style.display='none'; this.parentNode.textContent='S.M.';">
    </a>
    
    <!-- Navigation Links -->
    <ul class="nav__links">
      <?php foreach (config('nav_items') as $item): ?>
      <li>
        <a href="<?php echo $item['url']; ?>" class="nav__link <?php echo is_active($item['url']) ? 'nav__link--active' : ''; ?>">
          <?php echo e($item['label']); ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
    
    <!-- Menu Button -->
    <div class="nav__controls">
      <button class="nav__menu-btn" aria-label="Toggle menu" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
      </button>
    </div>
  </nav>
</header>
