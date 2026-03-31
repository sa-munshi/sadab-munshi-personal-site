import type { Metadata } from "next";
import Link from "next/link";
import { siteConfig } from "@/lib/config";
import AudioPlayer from "@/components/AudioPlayer";

export const metadata: Metadata = {
  title: "About",
  description:
    "I don't have everything figured out. Just building small things, reading big ideas, and trying to connect dots.",
};

export default function AboutPage() {
  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── About page ────────────────────────────────────── */
.about-header {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-xl) var(--space-md) 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-sm);
}

.about-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
}

/* ── Listen button ─────────────────────────────────── */
.listen-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  padding: 0.45rem 1rem;
  font-family: var(--font-body);
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
  background: var(--color-surface-low);
  border: 1px solid var(--color-surface);
  border-radius: var(--border-radius-pill);
  cursor: pointer;
  transition: background var(--transition-fast), border-color var(--transition-fast);
}

.listen-btn:hover {
  background: var(--color-surface);
  border-color: var(--color-primary);
}

.listen-btn.playing {
  background: var(--color-primary);
  color: var(--color-white);
  border-color: var(--color-primary);
}

/* ── Story ─────────────────────────────────────────── */
.story {
  max-width: var(--max-width);
  margin: var(--space-lg) auto 0;
  padding: 0 var(--space-md);
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text);
}

.story p {
  margin-bottom: var(--space-md);
}

.story a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
  transition: color var(--transition-fast);
}

.story a:hover {
  color: var(--color-primary-hover);
}

/* ── Site note ─────────────────────────────────────── */
.site-note {
  max-width: var(--max-width);
  margin: var(--space-2xl) auto 0;
  padding: var(--space-md);
  background: var(--color-surface-low);
  border-radius: var(--border-radius);
  font-size: var(--text-sm);
  line-height: var(--leading-relaxed);
  color: var(--color-text-secondary);
}

.site-note h2 {
  font-family: var(--font-heading);
  font-size: var(--text-lg);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  margin-bottom: var(--space-sm);
}

.site-note p {
  margin-bottom: var(--space-xs);
}

.site-note a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 2px;
}

/* ── Credits ───────────────────────────────────────── */
.credits {
  max-width: var(--max-width);
  margin: var(--space-2xl) auto 0;
  padding: 0 var(--space-md);
}

.credits h2 {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  margin-bottom: var(--space-md);
}

.credits p {
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text);
  margin-bottom: var(--space-sm);
}

.credits a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
}

/* ── Resume section ────────────────────────────────── */
.resume-section {
  max-width: var(--max-width);
  margin: var(--space-2xl) auto var(--space-xl);
  padding: 0 var(--space-md);
  text-align: center;
}

.resume-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.5rem;
  font-family: var(--font-body);
  font-size: var(--text-base);
  font-weight: var(--weight-medium);
  color: var(--color-white);
  background: var(--color-primary);
  border: none;
  border-radius: var(--border-radius-pill);
  text-decoration: none;
  cursor: pointer;
  transition: background var(--transition-fast), transform var(--transition-fast);
}

.resume-btn:hover {
  background: var(--color-primary-hover);
  transform: translateY(-1px);
}

.resume-btn svg {
  flex-shrink: 0;
}

/* ── Responsive ────────────────────────────────────── */
@media (max-width: 768px) {
  .about-header {
    flex-direction: column;
    align-items: flex-start;
    padding: var(--space-lg) var(--space-sm) 0;
  }

  .about-header h1 {
    font-size: var(--text-2xl);
  }

  .story {
    padding: 0 var(--space-sm);
  }

  .site-note {
    margin-left: var(--space-sm);
    margin-right: var(--space-sm);
  }

  .credits {
    padding: 0 var(--space-sm);
  }

  .resume-section {
    padding: 0 var(--space-sm);
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .about-header,
  .story,
  .credits,
  .resume-section {
    padding-left: var(--space-md);
    padding-right: var(--space-md);
  }
}

@media (min-width: 1440px) {
  .about-header,
  .story,
  .site-note,
  .credits,
  .resume-section {
    max-width: 860px;
  }
}
`,
        }}
      />

      {/* Header */}
      <div className="about-header">
        <h1>About</h1>
        <AudioPlayer />
      </div>

      {/* Story */}
      <article className="story">
        <p>
          Hi, I&rsquo;m <strong>Sadab Munshi</strong> — a student, a curious
          builder, and someone who learns best by doing.
        </p>
        <p>
          I don&rsquo;t have everything figured out. I&rsquo;m not an expert,
          not a prodigy, and definitely not someone with a five-year plan. What
          I do have is an itch to understand how things work — and the stubborn
          habit of building things to scratch it.
        </p>
        <p>
          I started this site as a place to share what I&rsquo;m learning,
          what I&rsquo;m making, and what I&rsquo;m thinking about. Some of it
          is technical. Some of it is personal. Most of it is just me trying to
          connect dots between big ideas and small experiments.
        </p>
        <p>
          When I&rsquo;m not coding, I&rsquo;m probably reading something I
          don&rsquo;t fully understand yet, watching something that makes me
          think, or going for a walk to let ideas settle.
        </p>
        <p>
          If any of that resonates, feel free to{" "}
          <Link href="/blog/">read the blog</Link>,{" "}
          <Link href="/projects/">browse the projects</Link>, or{" "}
          <Link href="/contact/">say hello</Link>.
        </p>
      </article>

      {/* About this site */}
      <section className="site-note">
        <h2>About this site</h2>
        <p>
          This website is built with{" "}
          <a
            href="https://nextjs.org/"
            target="_blank"
            rel="noopener noreferrer"
          >
            Next.js
          </a>{" "}
          and{" "}
          <a
            href="https://www.typescriptlang.org/"
            target="_blank"
            rel="noopener noreferrer"
          >
            TypeScript
          </a>
          . It&rsquo;s intentionally simple — no heavy frameworks, no
          JavaScript bloat, just clean markup, honest design, and fast page
          loads.
        </p>
        <p>
          The typography is set in{" "}
          <a
            href="https://fonts.google.com/specimen/Newsreader"
            target="_blank"
            rel="noopener noreferrer"
          >
            Newsreader
          </a>{" "}
          and{" "}
          <a
            href="https://fonts.google.com/specimen/Manrope"
            target="_blank"
            rel="noopener noreferrer"
          >
            Manrope
          </a>
          . The palette is what I call &ldquo;Editorial Serenity&rdquo; —
          muted greens on warm parchment.
        </p>
      </section>

      {/* Credits */}
      <section className="credits">
        <h2>My Digital Co-Pilots</h2>
        <p>
          <a
            href="https://kimi.moonshot.cn/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <strong>Kimi</strong>
          </a>{" "}
          — My thinking partner. Kimi helps me brainstorm ideas, outline
          essays, and think through problems from different angles.
        </p>
        <p>
          <a
            href="https://claude.ai/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <strong>Claude</strong>
          </a>{" "}
          — My building partner. Claude helps me write cleaner code, debug
          faster, and ship things I&rsquo;m proud of.
        </p>
      </section>

      {/* Resume */}
      <section className="resume-section">
        <a
          href={siteConfig.resumeFile}
          className="resume-btn"
          download
        >
          <svg
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
          >
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <polyline points="7 10 12 15 17 10" />
            <line x1="12" y1="15" x2="12" y2="3" />
          </svg>
          Download Resume
        </a>
      </section>
    </>
  );
}
