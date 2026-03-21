<?php
/**
 * BLOG POST: Spend Less Time Counting, More Time Living
 * Individual blog post template
 */
$page_title = 'Spend Less Time Counting, More Time Living — Sadab Munshi';
$page_description = 'Why I built a personal finance app that uses AI to handle the boring parts of tracking money.';

$post = [
    'title' => 'Spend Less Time Counting, More Time Living',
    'date' => '2026-03-22',
    'reading_time' => '4 min read',
    'modified' => '2026-03-22',
];
?>
<div class="container page-content">
  
  <!-- Article Header -->
  <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
    <h1 class="page-header__title" style="font-size: 2rem;"><?php echo e($post['title']); ?></h1>
    <div class="post-meta" style="color: var(--color-text-secondary); font-size: 0.875rem; margin-top: 1rem;">
      <span><?php echo format_date($post['date']); ?></span>
      <span style="margin: 0 0.5rem;">•</span>
      <span><?php echo e($post['reading_time']); ?></span>
    </div>
  </header>
  
  <!-- Article Content -->
  <article class="content" style="max-width: 65ch; margin: 0 auto;">
    
    <p class="lead" style="font-size: 1.125rem; color: var(--color-text-secondary);">
      Most people don't track their finances because it's boring. Opening a spreadsheet, typing in every coffee and grocery run, categorising each one manually — it's the kind of task that's easy to skip. And then skip again. Until you've skipped it for three months and have no idea where your money went.
    </p>
    
    <p>That's the problem FinFlow is trying to fix.</p>
    
    <p>FinFlow is a personal finance app I built to make tracking as effortless as possible. It uses AI to handle the tedious parts — so you spend less time entering data and more time actually understanding your money. It's designed with Indian users in mind, supporting INR, and works in Hindi, Bengali, and English. But honestly, the core idea applies to anyone who's ever given up on budgeting because it felt like too much work.</p>
    
    <p>The heart of the app is how you add transactions. There are four ways, and you can use whichever fits the moment.</p>
    
    <p>The first is manual entry — the classic approach. Fill in a form, pick a category, save it. Simple, familiar, nothing surprising. If you like being in control of every detail, this is for you.</p>
    
    <p>The second is text input. You type something like "spent 500 on lunch" or "paid 1200 for electricity" and the app reads it, pulls out the amount, figures out the category, and logs the transaction. No form filling. Just a quick line of text and you're done. It handles natural phrasing, so you don't need to write in any specific format — just write how you'd say it to a friend.</p>
    
    <p>The third is voice input. Speak in Hindi, Bengali, or English, and FinFlow transcribes what you said and categorises the expense automatically. This one's particularly useful when your hands are full or you just don't want to type. Say it out loud, move on.</p>
    
    <p>The fourth is receipt scanning. Take a photo of a receipt — from a restaurant, a store, wherever — and the app reads it. It pulls out the amount, the date, and what it was for, and creates the transaction for you. No typing at all.</p>
    
    <p>Once your transactions are in, the budgeting side kicks in. You set monthly limits for different categories — food, transport, entertainment, whatever matters to you — and the app shows you a progress bar for each one. It sounds simple, and it is. But seeing a bar slowly fill up across the month does something a number in a spreadsheet doesn't. It makes the limit feel real.</p>
    
    <p>The AI insights feature goes a step further. It looks at your actual spending data and surfaces observations specific to you. Not generic tips like "spend less on coffee." More like noticing that your food spending spikes every Friday, or that a particular category has been quietly growing for two months. It's not perfect — it's working with whatever data you've given it — but it's more useful than advice that could apply to anyone.</p>
    
    <p>At the end of each month, the app generates a summary report. Plain language, no jargon. What came in, what went out, which categories took the most, how it compares to the month before. It's meant to be the kind of summary you'd actually want to read, not a wall of charts that takes twenty minutes to interpret.</p>
    
    <p>One thing worth being upfront about: FinFlow is a prototype. It's in testing right now, not a finished commercial product. Things might break. Features are still being refined. I'm sharing it because I think the idea is genuinely useful — not because it's ready to compete with established apps.</p>
    
    <p>I built it because I kept running into the same problem myself. I'd try to track spending, give up after a week, lose track for months, feel vaguely anxious about money, repeat. The tools that existed either asked too much effort upfront or gave back too little in return. FinFlow is my attempt at something in between — something that lowers the friction enough that actually using it becomes the easier option.</p>
    
    <p>Whether it gets there is still being figured out.</p>
    
    <hr style="margin: 3rem 0;">
    
    <p style="color: var(--color-text-secondary);">
      <em>Thanks for reading. If you enjoyed this, check out <a href="/blog/">more writing</a> or <a href="/contact/">get in touch</a>.</em>
    </p>
    
  </article>
  
</div>
