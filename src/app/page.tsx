import type { Metadata } from "next";
import Link from "next/link";
import { blogPosts, formatDateLong } from "@/lib/posts";

export const metadata: Metadata = {
  title: "Sadab Munshi — Student, Builder",
  description:
    "I learn by building things. Notes on what I make, break, and figure out along the way.",
};

const moods = [
  "☕ Currently fueled by mass amounts of coffee",
  "🎧 Probably listening to lo-fi right now",
  "🌙 Best ideas come after midnight",
  "📚 Reading more than coding today",
  "🔧 Breaking things to learn how they work",
];

export default function HomePage() {
  const today = new Date().toLocaleDateString("en-US", {
    weekday: "long",
    month: "long",
    day: "numeric",
    year: "numeric",
    timeZone: "Asia/Kolkata",
  });

  const mood = moods[Math.floor(Math.random() * moods.length)];
  const latestPosts = blogPosts.slice(0, 3);

  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Home / Letter ──────────────────────────────────── */
.letter-container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-xl) var(--space-md);
}

.letter-date {
  font-family: var(--font-mono);
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin-bottom: var(--space-lg);
  letter-spacing: 0.02em;
}

.letter-opening h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  line-height: var(--leading-tight);
  color: var(--color-text);
  margin-bottom: var(--space-lg);
}

.letter-body {
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text);
}

.letter-body p {
  margin-bottom: var(--space-md);
}

.letter-body a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
  transition: color var(--transition-fast);
}

.letter-body a:hover {
  color: var(--color-primary-hover);
}

/* ── Editorial section ─────────────────────────────── */
.editorial-section {
  margin-top: var(--space-2xl);
  padding-top: var(--space-lg);
  border-top: 1px solid var(--color-surface);
}

.section-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: var(--space-lg);
}

.section-label {
  font-family: var(--font-mono);
  font-size: var(--text-sm);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--color-text-secondary);
}

.section-link {
  font-size: var(--text-sm);
  color: var(--color-primary);
  text-decoration: none;
  transition: color var(--transition-fast);
}

.section-link:hover {
  color: var(--color-primary-hover);
}

/* ── Digest cards ──────────────────────────────────── */
.digest-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.digest-card {
  display: block;
  padding: var(--space-md);
  border-radius: var(--border-radius);
  background: var(--color-surface-low);
  text-decoration: none;
  color: inherit;
  transition: background var(--transition-fast), box-shadow var(--transition-fast);
}

.digest-card:hover {
  background: var(--color-surface);
  box-shadow: var(--shadow-sm);
}

.digest-card time {
  font-family: var(--font-mono);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  letter-spacing: 0.02em;
}

.digest-card h3 {
  font-family: var(--font-heading);
  font-size: var(--text-lg);
  font-weight: var(--weight-medium);
  margin: 0.35rem 0 0.3rem;
  color: var(--color-text);
}

.digest-card p {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
  margin: 0;
}

.digest-card .read-more {
  display: inline-block;
  margin-top: 0.5rem;
  font-size: var(--text-sm);
  color: var(--color-primary);
  font-weight: var(--weight-medium);
}

/* ── Mood note ─────────────────────────────────────── */
.mood-note {
  margin-top: var(--space-lg);
  padding: var(--space-sm) var(--space-md);
  background: var(--color-surface-low);
  border-radius: var(--border-radius-sm);
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  text-align: center;
}

/* ── Signature ─────────────────────────────────────── */
.letter-signature {
  margin-top: var(--space-2xl);
  padding-top: var(--space-lg);
  border-top: 1px solid var(--color-surface);
}

.signature-name {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  background: linear-gradient(
    120deg,
    var(--color-text) 40%,
    var(--color-primary) 50%,
    var(--color-text) 60%
  );
  background-size: 200% 100%;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: shimmer 3s ease-in-out infinite;
}

@keyframes shimmer {
  0%   { background-position: 100% 0; }
  100% { background-position: -100% 0; }
}

.signature-title {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin-top: 0.15rem;
}

/* ── Quick links ───────────────────────────────────── */
.quick-links {
  margin-top: var(--space-lg);
  display: flex;
  gap: var(--space-sm);
  flex-wrap: wrap;
}

.quick-links a {
  font-size: var(--text-sm);
  color: var(--color-primary);
  text-decoration: none;
  padding: 0.35rem 0.85rem;
  border: 1px solid var(--color-surface);
  border-radius: var(--border-radius-pill);
  transition: background var(--transition-fast), border-color var(--transition-fast);
}

.quick-links a:hover {
  background: var(--color-surface-low);
  border-color: var(--color-primary);
}

/* ── Responsive ────────────────────────────────────── */
@media (max-width: 768px) {
  .letter-container {
    padding: var(--space-lg) var(--space-sm);
  }

  .letter-opening h1 {
    font-size: var(--text-2xl);
  }

  .section-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }

  .quick-links {
    gap: 0.5rem;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .letter-container {
    padding: var(--space-xl) var(--space-md);
  }
}

@media (min-width: 1440px) {
  .letter-container {
    max-width: 860px;
  }
}
`,
        }}
      />

      <div className="letter-container">
        {/* Date */}
        <div className="letter-date">{today}</div>

        {/* Opening */}
        <div className="letter-opening">
          <h1>I learn by building things.</h1>
        </div>

        {/* Body */}
        <div className="letter-body">
          <p>
            Welcome to my little corner of the internet. I&rsquo;m Sadab — a
            student who learns best by making things, breaking them, and writing
            about what happens in between.
          </p>
          <p>
            This site is where I share{" "}
            <Link href="/blog/">notes and essays</Link> on what I&rsquo;m
            figuring out, the{" "}
            <Link href="/projects/">projects I&rsquo;m building</Link>, and a
            running snapshot of{" "}
            <Link href="/now/">what I&rsquo;m up to right now</Link>.
          </p>
          <p>
            No grand thesis. No polished brand. Just an honest log of someone
            learning in public — one commit at a time.
          </p>
        </div>

        {/* Mood note */}
        <div className="mood-note">{mood}</div>

        {/* Latest Posts */}
        <section className="editorial-section">
          <div className="section-header">
            <span className="section-label">Latest Posts</span>
            <Link href="/blog/" className="section-link">
              View all &rarr;
            </Link>
          </div>

          <div className="digest-list">
            {latestPosts.map((post) => (
              <Link
                key={post.slug}
                href={`/blog/${post.slug}`}
                className="digest-card"
              >
                <time dateTime={post.date}>{formatDateLong(post.date)}</time>
                <h3>{post.title}</h3>
                <p>{post.excerpt}</p>
                <span className="read-more">Read more &rarr;</span>
              </Link>
            ))}
          </div>
        </section>

        {/* Signature */}
        <div className="letter-signature">
          <div className="signature-name">Sadab Munshi</div>
          <div className="signature-title">Student</div>
        </div>

        {/* Quick links */}
        <div className="quick-links">
          <Link href="/about">About</Link>
          <Link href="/blog">Blog</Link>
          <Link href="/projects">Projects</Link>
          <Link href="/contact">Contact</Link>
        </div>
      </div>
    </>
  );
}
