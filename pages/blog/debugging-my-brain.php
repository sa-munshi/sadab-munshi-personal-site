<?php
/**
 * Blog Post: Debugging My Brain
 */
$page_title = 'Debugging My Brain — Sadab Munshi';
$page_description = 'What coding taught me about my own thought patterns.';

$post = [
    'title' => 'Debugging My Brain',
    'date' => '2025-08-03',
    'modified' => '2025-08-03',
    'reading_time' => '6 min read',
];
?>
<div class="container page-content">
  <article class="content">
    <header style="margin-bottom: 3rem;">
      <p style="color: var(--color-text-secondary); font-size: 0.875rem; margin-bottom: 0.5rem;">
        <?php echo format_date($post['date']); ?> • <?php echo e($post['reading_time']); ?>
      </p>
      <h1 style="font-size: 2.5rem; line-height: 1.2;"><?php echo e($post['title']); ?></h1>
    </header>
    
    <p>There's a moment in debugging when you realize the problem isn't in the code — it's in your understanding of the code. You thought the function did one thing, but it does another. You assumed the variable held one value, but it holds something else entirely. The bug isn't a technical failure; it's a cognitive one.</p>
    
    <p>I started noticing these moments outside of programming. I'd be in an argument with someone, convinced I was right, when suddenly I'd realize: I misunderstood what they were saying. I filled in the gaps with my assumptions. I was debugging a conversation that never actually happened.</p>
    
    <p>Learning to code taught me something unexpected: how to debug my own brain.</p>
    
    <h2>The Assumption Problem</h2>
    
    <p>Most bugs in code come from assumptions. You assume a function returns a number, but it returns a string. You assume an array has items, but it's empty. You assume the user will input valid data, but they paste an entire novel into a username field.</p>
    
    <p>Our brains work the same way. We assume we know what someone meant. We assume we remember events correctly. We assume our reactions are proportional to the situation. These assumptions are mental shortcuts — usually helpful, occasionally disastrous.</p>
    
    <p>The first step in debugging anything is recognizing that you might be wrong. Not probably wrong, not definitely wrong, but <em>might</em> be wrong. That single word creates enough space for curiosity to enter.</p>
    
    <h2>Console Logging My Thoughts</h2>
    
    <p>In coding, when something isn't working, I add console logs. I print out the values at each step. I watch the data flow through the system, seeing where it transforms, where it breaks, where it surprises me.</p>
    
    <p>I've started doing something similar with my thoughts. When I'm upset, anxious, or stuck, I try to "log" what's happening. What specifically triggered this feeling? What story am I telling myself about what happened? What evidence do I have for that story?</p>
    
    <p>It's uncomfortable. Our thoughts feel like reality. Questioning them feels like questioning reality itself. But that's exactly the point — our thoughts aren't reality. They're interpretations. And interpretations can be wrong.</p>
    
    <h2>The Rubber Duck Method</h2>
    
    <p>Programmers use something called "rubber duck debugging." When you're stuck, you explain your problem to a rubber duck (or any inanimate object). The act of explaining often reveals the solution. You hear yourself say the assumptions out loud, and suddenly the flaw becomes obvious.</p>
    
    <p>I rubber duck my life now. When I'm confused about a decision, I explain it to my cat. She doesn't care, but the explanation forces me to organize my thoughts. I hear myself say, "So the reason I'm doing this is..." and sometimes what follows sounds ridiculous even to me.</p>
    
    <p>We rarely hear ourselves think. We're too close to our own thoughts to see them clearly. Externalizing — even to a rubber duck — creates the distance necessary for clarity.</p>
    
    <h2>Edge Cases and Anxiety</h2>
    
    <p>Good programmers think about edge cases. What happens if the input is empty? What if the user clicks this button a thousand times? What if the network fails at exactly this moment?</p>
    
    <p>Anxious brains are excellent at edge cases. What if I fail? What if they hate it? What if something goes wrong? The problem isn't identifying these possibilities — it's that anxious brains treat all edge cases as equally likely.</p>
    
    <p>Learning to code helped me distinguish between possible and probable. Yes, it's <em>possible</em> that everything will go wrong. But is it <em>probable</em>? What's the actual likelihood? What would have to be true for that worst case to happen?</p>
    
    <p>This doesn't eliminate anxiety, but it contains it. It turns vague dread into specific, manageable concerns. And specific concerns can be addressed.</p>
    
    <h2>Refactoring Old Patterns</h2>
    
    <p>In coding, refactoring means restructuring existing code without changing its behavior. You make it cleaner, more efficient, easier to understand. You don't do it because something is broken; you do it because it could be better.</p>
    
    <p>We all have mental patterns that could use refactoring. Reactions that made sense in childhood but don't serve us now. Coping mechanisms that worked in one context but cause problems in another. Beliefs that were installed by someone else and never examined.</p>
    
    <p>Refactoring your brain is hard. These patterns are deeply embedded. They've been running for years, handling millions of "requests." You can't just swap them out overnight.</p>
    
    <p>But you can start small. You can notice when an old pattern runs. You can ask: is this the best way to handle this? Is there a simpler approach? Can I extract this complexity into something more manageable?</p>
    
    <h2>The Infinite Loop of Overthinking</h2>
    
    <p>Sometimes code gets stuck in infinite loops. It keeps doing the same thing over and over, never progressing, never reaching an end condition. The program appears frozen, even though it's working extremely hard.</p>
    
    <p>Overthinking is an infinite loop. The same thoughts, circling endlessly. No new information enters. No decision is made. Just spinning, spinning, spinning, consuming mental resources with nothing to show for it.</p>
    
    <p>The solution in code is to break the loop. Add a counter. Set a timeout. Force an exit condition.</p>
    
    <p>In life, I use a similar strategy. When I catch myself overthinking, I set a timer. Ten minutes to think about this problem. When the timer goes off, I have to make a decision or move on. It feels artificial, but it works. The constraint forces focus.</p>
    
    <h2>Comments for Future Me</h2>
    
    <p>Good code has comments. Not comments that explain what the code does (the code should do that), but comments that explain <em>why</em>. Why did I choose this approach? What was I thinking at the time? What should future me know about this decision?</p>
    
    <p>I started journaling for the same reason. Not to record what happened, but to record what I was thinking. Future me will look back and wonder, "Why did I make that choice?" My journal is the comment that explains.</p>
    
    <p>We're all maintaining legacy code — our past selves wrote it, and our present selves have to live with it. Good comments make that maintenance easier.</p>
    
    <h2>Handling Errors Gracefully</h2>
    
    <p>In coding, errors are inevitable. The network will fail. The user will do something unexpected. The API will return garbage. Good programs don't avoid errors; they handle them. They fail gracefully, recover when possible, and always inform the user what happened.</p>
    
    <p>Life has errors too. Plans fall through. People disappoint us. We make mistakes. The question isn't whether these errors will happen — they will. The question is how we handle them.</p>
    
    <p>I've learned to build error handling into my expectations. Things will go wrong. That's not pessimism; it's realism. And with realistic expectations, I can plan for recovery. What's my fallback? What's my backup plan? If this fails, what's my next step?</p>
    
    <h2>The Never-Ending Debug</h2>
    
    <p>Code is never truly finished. There are always improvements to make, edge cases to handle, performance to optimize. The debugging never really ends; it just reaches a point where the remaining issues are acceptable.</p>
    
    <p>The same is true of ourselves. We're never "done." There's no final version where all bugs are fixed and all features are implemented. We just reach a point where we're functional enough, where the major issues are handled, where we can ship and iterate.</p>
    
    <p>That's okay. In fact, it's liberating. Perfection isn't the goal. Improvement is. Each day is a new commit, a small iteration on the previous version. Some days we introduce new bugs. Some days we fix old ones. Progress isn't linear.</p>
    
    <p>So I'm learning to debug myself with patience. To treat my mistakes as information, not judgments. To approach my own mind with the same curiosity I bring to a broken program: "Hmm, that's interesting. I wonder why that happened?"</p>
    
    <p>The bug isn't who I am. It's just something I'm working through. And every bug fixed is a step toward better code — and a better me.</p>
    
    <hr style="margin: 3rem 0;">
    
    <p style="color: var(--color-text-secondary); font-size: 0.875rem;">
      What have you learned about yourself from your work? I'd love to hear about it. <a href="/contact/">Get in touch</a>.
    </p>
  </article>
</div>
