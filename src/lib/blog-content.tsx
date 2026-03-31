import { getPostBySlug, formatDate } from "@/lib/posts";
import Link from "next/link";

export function getBlogContent(slug: string): React.ReactNode | null {
  const post = getPostBySlug(slug);
  if (!post) return null;

  const contents: Record<string, React.ReactNode> = {
    "spend-less-time-counting": (
      <>
        <header className="page-header" style={{ textAlign: "center", marginBottom: "3rem" }}>
          <h1 className="page-header__title" style={{ fontSize: "2rem" }}>{post.title}</h1>
          <div className="post-meta" style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginTop: "1rem" }}>
            <span>{formatDate(post.date)}</span>
            <span style={{ margin: "0 0.5rem" }}>•</span>
            <span>{post.readingTime}</span>
          </div>
        </header>
        <article className="content" style={{ maxWidth: "65ch", margin: "0 auto" }}>
          <p className="lead" style={{ fontSize: "1.125rem", color: "var(--color-text-secondary)" }}>
            Most people don&apos;t track their finances because it&apos;s boring. Opening a spreadsheet, typing in every coffee and grocery run, categorising each one manually — it&apos;s the kind of task that&apos;s easy to skip. And then skip again. Until you&apos;ve skipped it for three months and have no idea where your money went.
          </p>
          <p>That&apos;s the problem FinFlow is trying to fix.</p>
          <p>FinFlow is a personal finance app I built to make tracking as effortless as possible. It uses AI to handle the tedious parts — so you spend less time entering data and more time actually understanding your money. It&apos;s designed with Indian users in mind, supporting INR, and works in Hindi, Bengali, and English. But honestly, the core idea applies to anyone who&apos;s ever given up on budgeting because it felt like too much work.</p>
          <p>The heart of the app is how you add transactions. There are four ways, and you can use whichever fits the moment.</p>
          <p>The first is manual entry — the classic approach. Fill in a form, pick a category, save it. Simple, familiar, nothing surprising. If you like being in control of every detail, this is for you.</p>
          <p>The second is text input. You type something like &quot;spent 500 on lunch&quot; or &quot;paid 1200 for electricity&quot; and the app reads it, pulls out the amount, figures out the category, and logs the transaction. No form filling. Just a quick line of text and you&apos;re done. It handles natural phrasing, so you don&apos;t need to write in any specific format — just write how you&apos;d say it to a friend.</p>
          <p>The third is voice input. Speak in Hindi, Bengali, or English, and FinFlow transcribes what you said and categorises the expense automatically. This one&apos;s particularly useful when your hands are full or you just don&apos;t want to type. Say it out loud, move on.</p>
          <p>The fourth is receipt scanning. Take a photo of a receipt — from a restaurant, a store, wherever — and the app reads it. It pulls out the amount, the date, and what it was for, and creates the transaction for you. No typing at all.</p>
          <p>Once your transactions are in, the budgeting side kicks in. You set monthly limits for different categories — food, transport, entertainment, whatever matters to you — and the app shows you a progress bar for each one. It sounds simple, and it is. But seeing a bar slowly fill up across the month does something a number in a spreadsheet doesn&apos;t. It makes the limit feel real.</p>
          <p>The AI insights feature goes a step further. It looks at your actual spending data and surfaces observations specific to you. Not generic tips like &quot;spend less on coffee.&quot; More like noticing that your food spending spikes every Friday, or that a particular category has been quietly growing for two months. It&apos;s not perfect — it&apos;s working with whatever data you&apos;ve given it — but it&apos;s more useful than advice that could apply to anyone.</p>
          <p>At the end of each month, the app generates a summary report. Plain language, no jargon. What came in, what went out, which categories took the most, how it compares to the month before. It&apos;s meant to be the kind of summary you&apos;d actually want to read, not a wall of charts that takes twenty minutes to interpret.</p>
          <p>One thing worth being upfront about: FinFlow is a prototype. It&apos;s in testing right now, not a finished commercial product. Things might break. Features are still being refined. I&apos;m sharing it because I think the idea is genuinely useful — not because it&apos;s ready to compete with established apps.</p>
          <p>I built it because I kept running into the same problem myself. I&apos;d try to track spending, give up after a week, lose track for months, feel vaguely anxious about money, repeat. The tools that existed either asked too much effort upfront or gave back too little in return. FinFlow is my attempt at something in between — something that lowers the friction enough that actually using it becomes the easier option.</p>
          <p>Whether it gets there is still being figured out.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)" }}>
            <em>Thanks for reading. If you enjoyed this, check out <Link href="/blog">more writing</Link> or <Link href="/contact">get in touch</Link>.</em>
          </p>
        </article>
      </>
    ),

    "what-i-think-about-ai": (
      <>
        <header className="page-header" style={{ textAlign: "center", marginBottom: "3rem" }}>
          <h1 className="page-header__title" style={{ fontSize: "2rem" }}>{post.title}</h1>
          <div className="post-meta" style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginTop: "1rem" }}>
            <span>{formatDate(post.date)}</span>
            <span style={{ margin: "0 0.5rem" }}>•</span>
            <span>{post.readingTime}</span>
          </div>
        </header>
        <article className="content" style={{ maxWidth: "65ch", margin: "0 auto" }}>
          <p className="lead" style={{ fontSize: "1.125rem", color: "var(--color-text-secondary)" }}>
            I noticed something strange the other day. I was talking to a chatbot about feeling stuck with a project, and it responded with something that actually helped. Not because it understood me, but because it organized my own thoughts back to me in a way I could finally see clearly.
          </p>
          <p>That is the thing about artificial intelligence that nobody really explains well. We hear about it taking jobs or becoming sentient or changing everything forever. But when you actually use it, it feels much smaller and much more ordinary. It is a tool that predicts what words should come next. That is it. Nothing more magical than a very sophisticated autocomplete.</p>
          <p>But here is what makes it interesting. This simple mechanism of predicting the next word, when trained on enough human writing, starts to mirror something that looks like understanding. It can answer questions. It can write stories. It can help you debug code or draft an email or think through a problem. Not because it knows anything, but because it has seen enough patterns to guess what a helpful response looks like.</p>
          <p>I think that distinction matters. When we talk about AI like it is a thinking thing, we get scared or we get too excited. Both reactions miss the point. It is not thinking. It is not conscious. It is a mirror made of statistics, reflecting back the collective knowledge of everything humans have written online. Sometimes that reflection is useful. Sometimes it is wrong. Often it is both at the same time.</p>
          <p>The honest way to use AI is to treat it like a very fast, very confident intern who has read everything but understood nothing. It can help you organize your thoughts. It can give you starting points when you are staring at a blank page. It can explain concepts in different ways until something clicks. But you still have to think. You still have to decide what is true and what matters.</p>
          <p>I use AI almost every day now. Not because it replaces my thinking, but because it speeds up the boring parts. I ask it to explain error messages. I use it to outline ideas when my brain feels foggy. I treat it like a conversation partner that helps me hear myself more clearly. It is useful in the same way a calculator is useful. It handles the mechanical stuff so I can focus on what actually requires judgment.</p>
          <p>There is something oddly human about this tool. It was built by copying how we communicate. It works by predicting what we would say. In a weird way, using it feels like talking to a version of humanity that has been compressed into patterns. That does not make it alive. But it does make it strangely familiar.</p>
          <p>I do not know where all of this is going. Nobody really does. The people building these systems are figuring it out as they go, just like the rest of us. I think the best approach is to stay curious without getting carried away. Use the tools that help. Ignore the hype that distracts. Remember that technology has always been about extending what humans can do, not replacing what makes us human.</p>
          <p>Sometimes I wonder if future generations will look back at this moment the way we look at the early internet. A time when everything felt new and slightly confusing and full of possibility. I hope we build something good with it. I hope we remember that the point of any tool is to help people live better lives. That is what I think about when I think about AI.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)" }}>
            <em>Thanks for reading. If you enjoyed this, check out <Link href="/blog">more writing</Link> or <Link href="/contact">get in touch</Link>.</em>
          </p>
        </article>
      </>
    ),

    "slow-growth": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>We live in an age of instant transformation. Thirty-day challenges promise to change your life. Viral success stories flood our feeds. Bootcamps claim to take you from zero to job-ready in twelve weeks. The narrative is clear: if you&apos;re not improving rapidly, you&apos;re doing something wrong.</p>
          <p>But real growth isn&apos;t like that. Real growth is slow, invisible, and deeply unglamorous. It&apos;s the accumulation of small efforts over long periods. It&apos;s showing up when no one is watching, making progress that no one can see, trusting that something is happening even when the evidence suggests otherwise.</p>
          <p>This is a love letter to slow growth. To the tortoises in a world obsessed with hares.</p>
          <h2>The Myth of the Breakthrough</h2>
          <p>We love breakthrough moments. The overnight success, the sudden insight, the dramatic transformation. We tell stories about these moments because they&apos;re compelling. They make for great movies, inspiring speeches, and viral tweets.</p>
          <p>But breakthroughs don&apos;t come from nowhere. They&apos;re the visible result of invisible work. Years of practice, failure, and incremental improvement that finally reach a tipping point. The &quot;overnight&quot; success was ten years in the making.</p>
          <p>When we focus on breakthroughs, we miss the process. We see the flower blooming and forget about the years of root growth. We celebrate the mountain summit and ignore the thousands of steps it took to get there.</p>
          <h2>The Compound Interest of Skill</h2>
          <p>Skills compound like money in a savings account. Small, consistent deposits grow exponentially over time. But the early stages are discouraging. You put in effort and see almost no return. The balance grows slowly, almost imperceptibly.</p>
          <p>This is where most people quit. The gap between effort and results feels too wide. The delayed gratification is too delayed. Why spend an hour practicing when you can&apos;t see any improvement?</p>
          <p>But growth is happening, even when you can&apos;t see it. Neural pathways are forming. Muscle memory is developing. Concepts are slowly clicking into place. You can&apos;t observe these changes directly, but they&apos;re real.</p>
          <h2>The Plateaus Are Part of It</h2>
          <p>Skill development isn&apos;t linear. You improve rapidly at first, then hit a plateau. The plateau feels like stagnation, but it&apos;s actually consolidation. Your brain is integrating what you&apos;ve learned, making it automatic, creating space for the next level.</p>
          <p>Plateaus are frustrating. You practice the same things, make the same mistakes, feel like you&apos;re going nowhere. This is when the temptation to quit is strongest. Why keep doing something that isn&apos;t working?</p>
          <p>But plateaus end. Eventually, something shifts. The skill that felt impossible becomes possible. The concept that seemed foreign becomes familiar. And you realize the plateau wasn&apos;t empty time — it was necessary processing.</p>
          <h2>Learning to Love the Process</h2>
          <p>If you&apos;re only in it for the results, slow growth is torture. The gap between where you are and where you want to be seems impossibly wide. Every day of practice feels inadequate. The progress is too slow to be satisfying.</p>
          <p>But if you learn to love the process itself — the practice, the learning, the gradual mastery — then slow growth becomes sustainable. The daily work becomes its own reward. The destination matters less because the journey is meaningful.</p>
          <p>This is easier said than done. We&apos;re wired for immediate rewards. Our brains evolved to prioritize quick wins over long-term gains. Loving the process requires rewiring some deep programming.</p>
          <h2>The Social Media Distortion</h2>
          <p>Social media makes slow growth harder. Everyone is posting their wins, their transformations, their before-and-afters. No one posts the thousand unremarkable days in between.</p>
          <p>This creates a distorted picture of what progress looks like. You see the highlight reel and compare it to your behind-the-scenes. Their breakthrough moments against your daily grind. Their results against your process.</p>
          <p>It&apos;s not a fair comparison. But more importantly, it&apos;s not a useful comparison. Their timeline isn&apos;t your timeline. Their path isn&apos;t your path. The only meaningful comparison is you today versus you yesterday.</p>
          <h2>The Invisible Improvements</h2>
          <p>Some of the most important growth is invisible. Increased resilience. Better emotional regulation. Improved ability to handle uncertainty. These don&apos;t show up in metrics or photos, but they change everything.</p>
          <p>I think about my own coding journey. The early years were marked by visible milestones — building my first website, learning a new language, shipping a project. But the real growth was invisible. Learning to debug patiently. Handling frustration without quitting. Knowing when to ask for help.</p>
          <p>These invisible skills don&apos;t make for impressive updates. But they&apos;re the foundation that makes everything else possible.</p>
          <h2>Quantity Leads to Quality</h2>
          <p>There&apos;s a theory about creative work: quantity leads to quality. The more you produce, the more likely you are to produce something good. This only works if you embrace slow growth.</p>
          <p>Your first hundred attempts will mostly be bad. That&apos;s not pessimism; it&apos;s statistics. But attempt number one hundred and one might be different. And you only get there by doing the hundred that came before.</p>
          <p>Ira Glass has a quote about this: &quot;Nobody tells this to people who are beginners... all of us who do creative work, we get into it because we have good taste. But there is this gap. For the first couple years you make stuff, it&apos;s just not that good. It&apos;s trying to be good, it has potential, but it&apos;s not.&quot;</p>
          <p>The gap is real. The only way across is through.</p>
          <h2>The Long Now</h2>
          <p>I try to think in decades. Where do I want to be in ten years? Twenty? This long-term perspective changes how I approach daily work. Small improvements compound over time. The person I&apos;ll be in ten years is being built by the habits I practice today.</p>
          <p>This thinking also reduces pressure. I don&apos;t need to master everything today. I don&apos;t need to be impressive today. I just need to make small progress. The rest will come in time.</p>
          <p>The long now mindset also helps with comparison. That person who&apos;s ahead of you? They might have started earlier. Their day one might have been your year negative five. Their head start isn&apos;t your failure.</p>
          <h2>Trusting the Process</h2>
          <p>There&apos;s a leap of faith involved in slow growth. You have to trust that effort accumulates, even when you can&apos;t see it. You have to believe that consistency matters, even when the results are invisible.</p>
          <p>This trust is hard to maintain. Doubt creeps in. Maybe this isn&apos;t working. Maybe I&apos;m wasting my time. Maybe I should try something different, something that promises faster results.</p>
          <p>But the alternatives — jumping from thing to thing, chasing quick wins, abandoning work before it compounds — don&apos;t work either. Slow growth might be slow, but it&apos;s real. Fast growth is often illusion.</p>
          <h2>The Tortoise Wins</h2>
          <p>We know how the fable ends. The tortoise wins. Not because he&apos;s faster, but because he doesn&apos;t stop. The hare sprints, rests, gets distracted. The tortoise just keeps moving.</p>
          <p>Most of us want to be the hare. We want bursts of inspiration, periods of intense productivity, dramatic transformations. But the tortoise has the better strategy. Slow, steady, relentless progress beats sporadic brilliance every time.</p>
          <p>So this is my commitment to slow growth. To showing up, even when the results are invisible. To trusting the process, even when doubt creeps in. To being the tortoise in a world of hares.</p>
          <p>The growth is happening. I just can&apos;t see it yet.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            What are you slowly growing toward? I&apos;d love to hear about your journey. <Link href="/contact">Share it with me</Link>.
          </p>
        </article>
      </>
    ),

    "why-i-started-building-things": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>There&apos;s something magical about the first time you create something that works. Not just compiles, not just renders, but actually <em>works</em>. The kind of working that makes you stop and stare at the screen, half-convinced you did something wrong because it couldn&apos;t possibly be this satisfying.</p>
          <p>I remember that moment clearly. It was a simple to-do list app. Nothing fancy — just a text box, a button, and a list that grew as you typed. But when I clicked that button for the first time and saw my words appear on the screen, something shifted in me. I had commanded the machine, and it had listened.</p>
          <h2>The Fear of Starting</h2>
          <p>Before that moment, I was a consumer. I scrolled through apps, websites, and interfaces without ever questioning how they came to be. They were just... there. Like mountains or rivers — natural features of the digital landscape that had always existed and always would.</p>
          <p>But once you see behind the curtain, you can&apos;t unsee it. Every button becomes a question: &quot;How did they make that click animation?&quot; Every form becomes a puzzle: &quot;Where does that data go?&quot; The internet transforms from a place you visit into a place you could potentially build.</p>
          <p>And that&apos;s terrifying.</p>
          <p>Because building means failing. It means staring at error messages that might as well be written in ancient Sumerian. It means watching tutorials where the instructor breezes through concepts that take you three hours to understand. It means feeling stupid, over and over again, until you don&apos;t.</p>
          <h2>Small Steps, Stubborn Persistence</h2>
          <p>I started small. Smaller than small, actually. I made a button that changed color when you hovered over it. Then a page that said &quot;Hello, World!&quot; in three different languages. Then that to-do list, which I promptly abandoned because I discovered a bug I couldn&apos;t fix and decided the entire project was cursed.</p>
          <p>But I kept coming back. There&apos;s a stubbornness in building that I didn&apos;t know I had. A willingness to break things, to delete entire folders, to start from scratch at 2 AM because the current approach felt wrong. It&apos;s not passion, exactly. It&apos;s more like curiosity with commitment.</p>
          <p>What kept me going wasn&apos;t the finished products. It was the moments in between. The &quot;aha!&quot; when a concept finally clicked. The satisfaction of fixing a bug after hours of hunting. The realization that I was thinking differently — breaking problems into smaller pieces, considering edge cases, anticipating user behavior.</p>
          <h2>Creating for Yourself</h2>
          <p>Here&apos;s what I&apos;ve learned: build for yourself first. Not for an audience, not for a portfolio, not for Twitter likes. Build because there&apos;s something you want to exist in the world, and you can&apos;t find it anywhere else.</p>
          <p>My best projects are the ones I built to solve my own problems. A habit tracker that worked exactly the way my brain works. A reading list that didn&apos;t try to sell me anything. This website — a digital garden where I can plant ideas and watch them grow, pruning when necessary, letting some areas go wild.</p>
          <p>When you build for yourself, perfectionism loses its grip. You&apos;re not trying to impress anyone. You&apos;re just trying to make something useful, something that brings you joy or saves you time or organizes your thoughts. The stakes are low, which paradoxically makes the work better.</p>
          <h2>The Accidental Community</h2>
          <p>Something unexpected happened along the way. When I started sharing what I built — not to promote, just to document — people reached out. They had questions. They wanted to know how I did something, or why I chose this approach over that one. They shared their own projects, their own struggles, their own &quot;aha!&quot; moments.</p>
          <p>I wasn&apos;t alone in this. There were others, thousands of others, all around the world, sitting at their screens at odd hours, muttering curses at uncooperative code, feeling that same surge of triumph when things finally worked. We were a community of strangers, connected by the universal language of &quot;have you tried turning it off and on again?&quot;</p>
          <p>That&apos;s the real gift of making things. Not the things themselves, but the doors they open. The connections they create. The way they change how you see the world — not as a collection of finished products, but as an endless series of possibilities waiting to be built.</p>
          <h2>Still Learning</h2>
          <p>I&apos;m still a beginner in so many ways. There are entire fields I haven&apos;t touched, concepts that make my head spin, tools that feel overwhelming every time I open them. But I&apos;ve learned to be comfortable with not knowing. In fact, I&apos;ve learned to love it.</p>
          <p>Every new technology is a new mystery to solve. Every error message is a puzzle. Every failed project is a lesson in what not to do next time. The learning never stops, and that&apos;s the point.</p>
          <p>If you&apos;re reading this and you&apos;ve been thinking about making something — anything — I have one piece of advice: start ugly. Start small. Start with something so simple that it feels embarrassing. Because the first step isn&apos;t about the quality of what you build. It&apos;s about proving to yourself that you <em>can</em> build.</p>
          <p>Everything else follows from there.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            Thanks for reading. If this resonated with you, I&apos;d love to hear about what you&apos;re building. <Link href="/contact">Get in touch</Link>.
          </p>
        </article>
      </>
    ),

    "debugging-my-brain": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>There&apos;s a moment in debugging when you realize the problem isn&apos;t in the code — it&apos;s in your understanding of the code. You thought the function did one thing, but it does another. You assumed the variable held one value, but it holds something else entirely. The bug isn&apos;t a technical failure; it&apos;s a cognitive one.</p>
          <p>I started noticing these moments outside of programming. I&apos;d be in an argument with someone, convinced I was right, when suddenly I&apos;d realize: I misunderstood what they were saying. I filled in the gaps with my assumptions. I was debugging a conversation that never actually happened.</p>
          <p>Learning to code taught me something unexpected: how to debug my own brain.</p>
          <h2>The Assumption Problem</h2>
          <p>Most bugs in code come from assumptions. You assume a function returns a number, but it returns a string. You assume an array has items, but it&apos;s empty. You assume the user will input valid data, but they paste an entire novel into a username field.</p>
          <p>Our brains work the same way. We assume we know what someone meant. We assume we remember events correctly. We assume our reactions are proportional to the situation. These assumptions are mental shortcuts — usually helpful, occasionally disastrous.</p>
          <p>The first step in debugging anything is recognizing that you might be wrong. Not probably wrong, not definitely wrong, but <em>might</em> be wrong. That single word creates enough space for curiosity to enter.</p>
          <h2>Console Logging My Thoughts</h2>
          <p>In coding, when something isn&apos;t working, I add console logs. I print out the values at each step. I watch the data flow through the system, seeing where it transforms, where it breaks, where it surprises me.</p>
          <p>I&apos;ve started doing something similar with my thoughts. When I&apos;m upset, anxious, or stuck, I try to &quot;log&quot; what&apos;s happening. What specifically triggered this feeling? What story am I telling myself about what happened? What evidence do I have for that story?</p>
          <p>It&apos;s uncomfortable. Our thoughts feel like reality. Questioning them feels like questioning reality itself. But that&apos;s exactly the point — our thoughts aren&apos;t reality. They&apos;re interpretations. And interpretations can be wrong.</p>
          <h2>The Rubber Duck Method</h2>
          <p>Programmers use something called &quot;rubber duck debugging.&quot; When you&apos;re stuck, you explain your problem to a rubber duck (or any inanimate object). The act of explaining often reveals the solution. You hear yourself say the assumptions out loud, and suddenly the flaw becomes obvious.</p>
          <p>I rubber duck my life now. When I&apos;m confused about a decision, I explain it to my cat. She doesn&apos;t care, but the explanation forces me to organize my thoughts. I hear myself say, &quot;So the reason I&apos;m doing this is...&quot; and sometimes what follows sounds ridiculous even to me.</p>
          <p>We rarely hear ourselves think. We&apos;re too close to our own thoughts to see them clearly. Externalizing — even to a rubber duck — creates the distance necessary for clarity.</p>
          <h2>Edge Cases and Anxiety</h2>
          <p>Good programmers think about edge cases. What happens if the input is empty? What if the user clicks this button a thousand times? What if the network fails at exactly this moment?</p>
          <p>Anxious brains are excellent at edge cases. What if I fail? What if they hate it? What if something goes wrong? The problem isn&apos;t identifying these possibilities — it&apos;s that anxious brains treat all edge cases as equally likely.</p>
          <p>Learning to code helped me distinguish between possible and probable. Yes, it&apos;s <em>possible</em> that everything will go wrong. But is it <em>probable</em>? What&apos;s the actual likelihood? What would have to be true for that worst case to happen?</p>
          <p>This doesn&apos;t eliminate anxiety, but it contains it. It turns vague dread into specific, manageable concerns. And specific concerns can be addressed.</p>
          <h2>Refactoring Old Patterns</h2>
          <p>In coding, refactoring means restructuring existing code without changing its behavior. You make it cleaner, more efficient, easier to understand. You don&apos;t do it because something is broken; you do it because it could be better.</p>
          <p>We all have mental patterns that could use refactoring. Reactions that made sense in childhood but don&apos;t serve us now. Coping mechanisms that worked in one context but cause problems in another. Beliefs that were installed by someone else and never examined.</p>
          <p>Refactoring your brain is hard. These patterns are deeply embedded. They&apos;ve been running for years, handling millions of &quot;requests.&quot; You can&apos;t just swap them out overnight.</p>
          <p>But you can start small. You can notice when an old pattern runs. You can ask: is this the best way to handle this? Is there a simpler approach? Can I extract this complexity into something more manageable?</p>
          <h2>The Infinite Loop of Overthinking</h2>
          <p>Sometimes code gets stuck in infinite loops. It keeps doing the same thing over and over, never progressing, never reaching an end condition. The program appears frozen, even though it&apos;s working extremely hard.</p>
          <p>Overthinking is an infinite loop. The same thoughts, circling endlessly. No new information enters. No decision is made. Just spinning, spinning, spinning, consuming mental resources with nothing to show for it.</p>
          <p>The solution in code is to break the loop. Add a counter. Set a timeout. Force an exit condition.</p>
          <p>In life, I use a similar strategy. When I catch myself overthinking, I set a timer. Ten minutes to think about this problem. When the timer goes off, I have to make a decision or move on. It feels artificial, but it works. The constraint forces focus.</p>
          <h2>Comments for Future Me</h2>
          <p>Good code has comments. Not comments that explain what the code does (the code should do that), but comments that explain <em>why</em>. Why did I choose this approach? What was I thinking at the time? What should future me know about this decision?</p>
          <p>I started journaling for the same reason. Not to record what happened, but to record what I was thinking. Future me will look back and wonder, &quot;Why did I make that choice?&quot; My journal is the comment that explains.</p>
          <p>We&apos;re all maintaining legacy code — our past selves wrote it, and our present selves have to live with it. Good comments make that maintenance easier.</p>
          <h2>Handling Errors Gracefully</h2>
          <p>In coding, errors are inevitable. The network will fail. The user will do something unexpected. The API will return garbage. Good programs don&apos;t avoid errors; they handle them. They fail gracefully, recover when possible, and always inform the user what happened.</p>
          <p>Life has errors too. Plans fall through. People disappoint us. We make mistakes. The question isn&apos;t whether these errors will happen — they will. The question is how we handle them.</p>
          <p>I&apos;ve learned to build error handling into my expectations. Things will go wrong. That&apos;s not pessimism; it&apos;s realism. And with realistic expectations, I can plan for recovery. What&apos;s my fallback? What&apos;s my backup plan? If this fails, what&apos;s my next step?</p>
          <h2>The Never-Ending Debug</h2>
          <p>Code is never truly finished. There are always improvements to make, edge cases to handle, performance to optimize. The debugging never really ends; it just reaches a point where the remaining issues are acceptable.</p>
          <p>The same is true of ourselves. We&apos;re never &quot;done.&quot; There&apos;s no final version where all bugs are fixed and all features are implemented. We just reach a point where we&apos;re functional enough, where the major issues are handled, where we can ship and iterate.</p>
          <p>That&apos;s okay. In fact, it&apos;s liberating. Perfection isn&apos;t the goal. Improvement is. Each day is a new commit, a small iteration on the previous version. Some days we introduce new bugs. Some days we fix old ones. Progress isn&apos;t linear.</p>
          <p>So I&apos;m learning to debug myself with patience. To treat my mistakes as information, not judgments. To approach my own mind with the same curiosity I bring to a broken program: &quot;Hmm, that&apos;s interesting. I wonder why that happened?&quot;</p>
          <p>The bug isn&apos;t who I am. It&apos;s just something I&apos;m working through. And every bug fixed is a step toward better code — and a better me.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            What have you learned about yourself from your work? I&apos;d love to hear about it. <Link href="/contact">Get in touch</Link>.
          </p>
        </article>
      </>
    ),

    "the-art-of-finishing": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>I have a folder on my computer called &quot;Graveyard.&quot; It contains 47 abandoned projects. Some are just empty folders with ambitious names. Others have hundreds of lines of code, designs half-implemented, dreams half-realized. They all have one thing in common: I never finished them.</p>
          <p>Starting is intoxicating. The blank canvas, the new repository, the first lines of code — everything is possibility. The project exists in a perfect state, unsullied by the realities of implementation. In your mind, it&apos;s already successful, already beautiful, already complete.</p>
          <p>Then comes the middle. The messy, grinding, doubt-filled middle. And that&apos;s where most projects go to die.</p>
          <h2>The Valley of Despair</h2>
          <p>Every project has a phase where the initial excitement wears off but the end is still far away. I call it the Valley of Despair. The code is messy. The architecture needs refactoring. There are bugs you don&apos;t understand and features you don&apos;t know how to implement.</p>
          <p>This is where the siren song of new projects becomes loudest. &quot;Start fresh,&quot; it whispers. &quot;This time will be different. This time you&apos;ll do it right.&quot; And so you abandon the current project for a new one, trading the valley of despair for the mountaintop of possibility.</p>
          <p>But the cycle repeats. Every project has a valley. The only way out is through.</p>
          <h2>Defining &quot;Done&quot;</h2>
          <p>One problem with finishing is that we rarely define what &quot;finished&quot; means. Is a project finished when it works? When it&apos;s deployed? When it&apos;s perfect? That last one is a trap. Perfect is the enemy of done. If perfection is the standard, nothing ever finishes.</p>
          <p>I&apos;ve started defining &quot;done&quot; explicitly at the start of projects. What does version 1.0 look like? What are the minimum features? What can wait for later? This isn&apos;t about limiting ambition; it&apos;s about creating achievable milestones.</p>
          <p>Done is a scope decision. It&apos;s saying: &quot;This is enough for now.&quot; It&apos;s accepting that good enough is, in fact, good enough.</p>
          <h2>The Power of Ugly Finished</h2>
          <p>Finished is better than perfect. An ugly, buggy, incomplete thing that exists is infinitely more valuable than a beautiful thing that doesn&apos;t. You can iterate on something that exists. You can learn from something that exists. You can&apos;t do anything with something that only exists in your head.</p>
          <p>I have a personal rule now: ship before you&apos;re ready. Not recklessly — I still test, still review, still make sure things work. But I don&apos;t wait for perfect. I don&apos;t wait until every feature is implemented. I ship when it&apos;s useful, even if it&apos;s ugly.</p>
          <p>The first version of this website was embarrassing. The design was basic, the content was sparse, and there were bugs I didn&apos;t discover until weeks later. But it was live. It was real. And that made all the difference.</p>
          <h2>The Discipline of Completion</h2>
          <p>Finishing is a skill. Like any skill, it can be developed through practice. What are those principles? For me, they&apos;re:</p>
          <p><strong>Define done upfront.</strong> Know what you&apos;re aiming for before you start.</p>
          <p><strong>Work in public.</strong> Tell people what you&apos;re building. Create accountability.</p>
          <p><strong>Embrace the grind.</strong> The middle is supposed to be hard. Expect it.</p>
          <p><strong>Set deadlines.</strong> Even arbitrary ones. Constraints force decisions.</p>
          <p><strong>Celebrate completion.</strong> Actually finish, actually celebrate.</p>
          <h2>Finishing as Practice</h2>
          <p>I&apos;ve started treating finishing as a practice in itself. Each completed project makes the next one easier. You build confidence. You build processes. You build a portfolio of evidence that you can, in fact, finish things.</p>
          <p>So here&apos;s my commitment: finish before starting. Complete what&apos;s in progress before beginning something new. Ship the imperfect thing rather than chasing the perfect thing that doesn&apos;t exist.</p>
          <p>Starting is easy. Everyone starts. Finishing is rare. Finishing is valuable. Finishing is everything.</p>
          <p>What will you finish today?</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            What&apos;s your relationship with finishing? Do you have a Graveyard folder too? <Link href="/contact">Tell me about it</Link>.
          </p>
        </article>
      </>
    ),

    "notes-on-simplicity": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>I used to think that complexity was a sign of sophistication. The more features a thing had, the more options it offered, the better it must be. I collected apps with endless settings, subscribed to services with dozens of features, and built projects that tried to do everything at once.</p>
          <p>It was exhausting. And unnecessary. And, worst of all, ineffective.</p>
          <h2>The Seduction of More</h2>
          <p>We live in a culture of more. More features, more options, more customization. The logic seems sound: if some is good, more must be better. But it rarely works out that way.</p>
          <p>Every feature you add is a decision someone has to make. Every option is a question that needs answering. Every customization is a setting that can be wrong. Complexity doesn&apos;t just make things harder to use — it makes them harder to choose.</p>
          <h2>Learning to Subtract</h2>
          <p>The hardest part of simplicity isn&apos;t knowing what to include. It&apos;s knowing what to leave out. Every project starts with ambition. Before you know it, you&apos;ve built a monstrosity. It does everything, but it does nothing well.</p>
          <p>I&apos;ve learned to ask a different question: what can I remove? The answer is usually: a lot more than you think.</p>
          <h2>The Beauty of Constraints</h2>
          <p>Constraints are often seen as limitations. But I&apos;ve come to see them as creative fuel. When you can&apos;t do everything, you&apos;re forced to choose what matters.</p>
          <h2>Simple is Hard</h2>
          <p>Here&apos;s the paradox: simple is harder than complex. Anyone can add features. It takes skill to remove them. When you build something simple, every decision matters more. There&apos;s nowhere to hide.</p>
          <h2>Simplicity in Life</h2>
          <p>This isn&apos;t just about software. I try to apply the same thinking to my life. Fewer possessions, fewer commitments, fewer things competing for my attention. Each simplification was a small act of rebellion against the cult of more. And each one gave me something back: time, energy, clarity.</p>
          <h2>The Eternal Temptation</h2>
          <p>Simplicity isn&apos;t a destination. It&apos;s a practice. You don&apos;t achieve it and move on; you have to keep choosing it, day after day, project after project.</p>
          <p>But the effort is worth it. Because when you strip away the unnecessary, what&apos;s left is something pure. Something focused. Something that actually works.</p>
          <p>And that&apos;s worth more than any number of features.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            Simplicity is a journey, not a destination. What have you simplified lately? <Link href="/contact">Share your thoughts</Link>.
          </p>
        </article>
      </>
    ),

    "learning-in-public": (
      <>
        <article className="content">
          <header style={{ marginBottom: "3rem" }}>
            <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem", marginBottom: "0.5rem" }}>
              {formatDate(post.date)} • {post.readingTime}
            </p>
            <h1 style={{ fontSize: "2.5rem", lineHeight: 1.2 }}>{post.title}</h1>
          </header>
          <p>The first blog post I ever published was terrible. Not charmingly amateur or endearingly rough — just bad. The writing was stilted, the ideas half-formed, and the conclusions predictable. I knew it was bad when I hit publish. But I published it anyway.</p>
          <p>That was three years ago. I&apos;ve published dozens of posts since then. But that first terrible post was the most important one. It broke the seal.</p>
          <h2>The Fear of Exposure</h2>
          <p>We learn in private by default. The idea of sharing our learning process — our mistakes, our confusion, our half-understood ideas — feels dangerous. What if people judge us?</p>
          <p>These fears are valid. But the alternative — learning in isolation — has costs too. You miss feedback, connections, accountability, and the chance to help others just a few steps behind you.</p>
          <h2>The Beginner&apos;s Advantage</h2>
          <p>Beginners make the best teachers for other beginners. Experts have forgotten what it&apos;s like to not know. When you learn in public, you&apos;re creating a trail for the people behind you.</p>
          <h2>The Unexpected Connections</h2>
          <p>When you share your work, you become findable. People stumble across your writing when they&apos;re searching for answers. These connections are based on genuine shared interests.</p>
          <h2>The Accountability Effect</h2>
          <p>There&apos;s something powerful about saying &quot;I&apos;m going to learn this&quot; in public. It creates a powerful forcing function.</p>
          <h2>The Documentation Dividend</h2>
          <p>Even if no one reads what you share, learning in public forces you to organize your thoughts. You can&apos;t fake understanding when you&apos;re writing. The blank page demands clarity.</p>
          <h2>Practical Steps</h2>
          <p><strong>Start small.</strong> Share one thing you learned today.</p>
          <p><strong>Focus on your own questions.</strong> Document your confusion, your process.</p>
          <p><strong>Be consistent, not perfect.</strong> One post a month beats ten in January and nothing else.</p>
          <p><strong>Engage with others.</strong> Learning in public is a conversation, not a broadcast.</p>
          <p><strong>Embrace the cringe.</strong> You&apos;ll look back and wince. That means you&apos;ve grown.</p>
          <h2>The Long Game</h2>
          <p>Learning in public is a long game. The compound interest of consistency kicks in eventually. More importantly, you&apos;ll have documented your own growth.</p>
          <p>So start before you&apos;re ready. Share before you&apos;re expert. The people who matter aren&apos;t looking for perfection — they&apos;re looking for honesty, for curiosity, for the courage to be seen.</p>
          <hr style={{ margin: "3rem 0" }} />
          <p style={{ color: "var(--color-text-secondary)", fontSize: "0.875rem" }}>
            Are you learning in public? I&apos;d love to see your work. <Link href="/contact">Share it with me</Link>.
          </p>
        </article>
      </>
    ),
  };

  return contents[slug] || null;
}
