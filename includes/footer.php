<?php
/**
 * FOOTER PARTIAL
 * Site footer with logo and copyright
 * AI: Edit footer content here, updates all pages
 */
?>
<footer class="footer">
  <div class="container">
    <a href="/" class="footer__logo-link" aria-label="Sadab Munshi - Home">
      <img src="/assets/images/logo-S.M.png" alt="Sadab Munshi" class="footer__logo-img" onerror="this.style.display='none'; this.parentNode.innerHTML='S.M.';">
    </a>
    
    <div class="footer__bottom">
      <p>&copy; <span class="current-year"><?php echo date('Y'); ?></span> <?php echo e(config('site_name')); ?></p>
    </div>
  </div>
</footer>
