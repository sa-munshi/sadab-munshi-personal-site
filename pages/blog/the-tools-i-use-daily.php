<?php
/**
 * Blog Post: Things I Use Every Day
 */
$page_title = 'Things I Use Every Day — Sadab Munshi';
$page_description = 'A simple setup. What works for me, nothing complicated.';

$post = [
    'title' => 'Things I Use Every Day',
    'date' => '2025-01-10',
    'reading_time' => '5 min read',
];
?>
<div class="container page-content">
  <article class="content">
    <header style="margin-bottom: 3rem;">
      <p style="color: var(--color-text-muted); font-size: 0.875rem; margin-bottom: 0.5rem;">
        <?php echo format_date($post['date']); ?> • <?php echo e($post['reading_time']); ?>
      </p>
      <h1 style="font-size: 2.5rem; line-height: 1.2;"><?php echo e($post['title']); ?></h1>
    </header>
    
    <p>There's a certain aesthetic to the "perfect setup" posts that flood the internet. Gleaming MacBooks on walnut desks, mechanical keyboards with artisan keycaps, monitors arranged like mission control at NASA. They're beautiful, aspirational, and completely divorced from the reality of how most people actually work.</p>
    
    <p>My setup isn't like that. It's held together with digital duct tape, old habits, and the stubborn refusal to learn new tools when the old ones still work. But it works for me. And after years of tinkering, optimizing, and occasionally breaking everything, I've found a rhythm that keeps me productive without driving me crazy.</p>
    
    <p>So here's my setup. No affiliate links, no recommendations you "must" follow. Just what I use, why I use it, and the occasional regret.</p>
    
    <h2>The Hardware</h2>
    
    <p>I work on a laptop. That's it. No external monitor, no mechanical keyboard, no ergonomic mouse that looks like it was designed by aliens. Just a laptop on whatever surface is available — desk, couch, coffee shop table, occasionally my lap when I'm feeling particularly rebellious.</p>
    
    <p>This isn't some statement about minimalism. I'm just lazy about setting things up, and I like being able to close my laptop and move to a different room when the walls start closing in. The freedom to work from anywhere outweighs the benefits of a perfect ergonomic station.</p>
    
    <p>That said, I do have one splurge: a decent pair of headphones. Not the noise-canceling kind that costs as much as a used car — just solid, comfortable headphones that can play music for hours without making my ears feel like they've been in a sauna. Music is essential to my workflow, and bad headphones are a distraction I can't afford.</p>
    
    <h2>The Code Editor</h2>
    
    <p>I use VS Code. I know, I know — it's the Toyota Camry of code editors. Reliable, ubiquitous, deeply uncool. I've tried the alternatives: Vim (spent more time configuring than coding), Sublime (loved it, moved on), JetBrains products (beautiful but overwhelming), Neovim (felt like I was learning a new instrument instead of writing code).</p>
    
    <p>VS Code just works. It has extensions for everything, it doesn't crash, and I can set it up on a new machine in about ten minutes. Is it the most efficient? Probably not. Do I care? Also no.</p>
    
    <p>My theme is a custom color scheme I cobbled together from various sources. It's mostly dark grays with muted accent colors — nothing that screams for attention. The goal is to stare at it for hours without getting a headache, not to impress anyone with my aesthetic sensibilities.</p>
    
    <h2>The Browser Situation</h2>
    
    <p>I use Firefox for personal stuff and whatever browser I need to test on for development. The separation helps. When I'm in Firefox, I'm off the clock. When I'm in the other browsers, I'm working. It's a psychological trick, but it works.</p>
    
    <p>My browser is a mess of bookmarks I'll never organize and tabs I'll never close. I tell myself I'll clean it up someday, but we both know that's a lie. There's a tab from three months ago about a JavaScript framework I was going to learn. It's still there, waiting, judging.</p>
    
    <h2>Notes and Organization</h2>
    
    <p>Here's where things get controversial: I don't use a fancy note-taking app. No Notion, no Obsidian, no Roam Research with its graph view that looks like a conspiracy theorist's corkboard. I use a combination of text files and a simple todo app that I wrote myself.</p>
    
    <p>The text files are organized by project, stored in a folder that syncs across devices. When I have an idea, I open a file and write it down. No formatting, no tags, no backlinks. Just words in a document, the way notes have been taken since the invention of writing.</p>
    
    <p>My todo app is embarrassingly simple. It stores tasks in a text file, lets me mark them complete, and that's about it. I built it because every other todo app tried to do too much. I don't need project management. I don't need collaboration features. I just need a list of things to do and the ability to check them off.</p>
    
    <h2>Communication</h2>
    
    <p>I try to keep communication asynchronous. Email for formal stuff, messaging apps for quick questions, and that's about it. I don't do video calls unless absolutely necessary — they're exhausting in a way that written communication isn't.</p>
    
    <p>My phone stays in another room when I'm working. Not because I'm some productivity guru, but because I'll scroll through it mindlessly if it's within arm's reach. The separation is necessary for my sanity.</p>
    
    <h2>What I Don't Use</h2>
    
    <p>This is probably more important than what I do use. I don't use:</p>
    
    <p><strong>Productivity apps.</strong> I've tried them all. They become hobbies in themselves — optimizing the system instead of doing the work. Now I just write things down and do them.</p>
    
    <p><strong>Time trackers.</strong> I know roughly how long I work. I don't need a pie chart telling me I spent 23% of my day in meetings.</p>
    
    <p><strong>Social media during work.</strong> This one I actually stick to, mostly because I've seen what happens when I don't. The work doesn't get done, and I end the day feeling like I accomplished nothing.</p>
    
    <p><strong>Multiple monitors.</strong> I know, I know. Everyone says they're essential. But I've found that one screen forces me to focus. Multiple screens just mean multiple distractions.</p>
    
    <h2>The Philosophy</h2>
    
    <p>There's a temptation, when you read about other people's setups, to think that copying their tools will copy their success. It won't. The tools are just tools. What matters is what you build with them.</p>
    
    <p>My setup works because I've used it long enough to develop muscle memory. I know where everything is. I don't have to think about the tools; I can just think about the work. That's the goal, really — to make the technology invisible so the creativity can be visible.</p>
    
    <p>Your setup should be boring. It should be invisible. It should be so familiar that you forget it's there. The magic isn't in the tools. It's in what you make with them.</p>
    
    <p>So find what works for you, use it until it breaks, and don't worry about what everyone else is using. The best setup is the one that lets you do your best work. Everything else is just decoration.</p>
    
    <hr style="margin: 3rem 0;">
    
    <p style="color: var(--color-text-muted); font-size: 0.875rem;">
      What's your setup like? I'm always curious about how other people work. <a href="/contact/">Let me know</a>.
    </p>
  </article>
</div>
