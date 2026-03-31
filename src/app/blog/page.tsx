import type { Metadata } from "next";
import Link from "next/link";
import { blogPosts, formatDate } from "@/lib/posts";

export const metadata: Metadata = {
  title: "Blog",
  description:
    "Writing about what I build, what I break, and what I learn along the way.",
};

export default function BlogPage() {
  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Blog index page ───────────────────────────────── */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.blog-back {
  display: inline-block;
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  text-decoration: none;
  margin-bottom: var(--space-lg);
  transition: color var(--transition-fast);
}

.blog-back:hover {
  color: var(--color-primary);
}

.blog-page {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-xl) var(--space-md);
}

.blog-page .page-header {
  margin-bottom: var(--space-lg);
  animation: fadeInUp 0.6s ease both;
}

.blog-page .page-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  line-height: var(--leading-tight);
  margin-bottom: var(--space-xs);
}

.blog-page .page-header p {
  font-size: var(--text-base);
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
  margin: 0;
}

.blog-intro {
  font-size: var(--text-base);
  color: var(--color-text-secondary);
  line-height: var(--leading-relaxed);
  margin-bottom: var(--space-2xl);
  animation: fadeInUp 0.6s ease both;
  animation-delay: 0.1s;
}

/* ── Blog grid — 2-col staggered ───────────────────── */
.blog-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-md);
}

.blog-grid .blog-card:nth-child(even) {
  transform: translateY(2rem);
}

/* ── Blog card ─────────────────────────────────────── */
.blog-card {
  display: flex;
  flex-direction: column;
  gap: 0.6rem;
  padding: var(--space-md);
  background: var(--color-surface-low);
  border-radius: var(--border-radius);
  text-decoration: none;
  color: inherit;
  transition: background var(--transition-fast), box-shadow var(--transition-fast), transform var(--transition-fast);
  opacity: 0;
  animation: fadeInUp 0.5s ease forwards;
}

.blog-card:hover {
  background: var(--color-surface);
  box-shadow: var(--shadow-sm);
  transform: translateY(-2px);
}

.blog-card:nth-child(even):hover {
  transform: translateY(calc(2rem - 2px));
}

.blog-card .meta {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.blog-card .date {
  font-family: var(--font-mono);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  letter-spacing: 0.02em;
  background: var(--color-surface);
  padding: 0.15rem 0.55rem;
  border-radius: var(--border-radius-pill);
}

.blog-card .title {
  font-family: var(--font-heading);
  font-size: var(--text-lg);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  line-height: var(--leading-tight);
  margin: 0;
}

.blog-card .excerpt {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
  margin: 0;
}

.blog-card .footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: auto;
  padding-top: 0.4rem;
}

.blog-card .read-time {
  font-family: var(--font-mono);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
}

.blog-card .read-time::before {
  content: "◷ ";
}

.blog-card .arrow {
  font-size: var(--text-sm);
  color: var(--color-primary);
  font-weight: var(--weight-medium);
  transition: transform var(--transition-fast);
}

.blog-card .arrow::after {
  content: " →";
}

.blog-card:hover .arrow {
  transform: translateX(3px);
}

/* ── Staggered animation for up to 8 cards ─────────── */
.blog-card:nth-child(1) { animation-delay: 0.1s; }
.blog-card:nth-child(2) { animation-delay: 0.15s; }
.blog-card:nth-child(3) { animation-delay: 0.2s; }
.blog-card:nth-child(4) { animation-delay: 0.25s; }
.blog-card:nth-child(5) { animation-delay: 0.3s; }
.blog-card:nth-child(6) { animation-delay: 0.35s; }
.blog-card:nth-child(7) { animation-delay: 0.4s; }
.blog-card:nth-child(8) { animation-delay: 0.45s; }

/* ── Responsive ────────────────────────────────────── */
@media (max-width: 768px) {
  .blog-page {
    padding: var(--space-lg) var(--space-sm);
  }

  .blog-page .page-header h1 {
    font-size: var(--text-2xl);
  }

  .blog-grid {
    grid-template-columns: 1fr;
  }

  .blog-grid .blog-card:nth-child(even) {
    transform: none;
  }

  .blog-card:nth-child(even):hover {
    transform: translateY(-2px);
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .blog-page {
    padding: var(--space-xl) var(--space-md);
  }

  .blog-grid {
    gap: var(--space-sm);
  }
}

@media (min-width: 1440px) {
  .blog-page {
    max-width: 860px;
  }
}
`,
        }}
      />

      <div className="container page-content blog-page">
        <Link href="/" className="blog-back">
          ← Home
        </Link>

        {/* Page header */}
        <div className="page-header">
          <h1>Blog — {blogPosts.length} posts</h1>
          <p>
            Writing about what I build, what I break, and what I learn along the
            way.
          </p>
        </div>

        {/* Blog intro */}
        <p className="blog-intro">
          Short essays, working notes, and the occasional deep-dive. Everything
          here is written as I go — honest, unpolished, and hopefully useful.
        </p>

        {/* Blog grid */}
        <div className="blog-grid">
          {blogPosts.map((post) => (
            <Link
              key={post.slug}
              href={`/blog/${post.slug}`}
              className="blog-card"
            >
              <div className="meta">
                <span className="date">{formatDate(post.date)}</span>
              </div>
              <h2 className="title">{post.title}</h2>
              <p className="excerpt">{post.excerpt}</p>
              <div className="footer">
                <span className="read-time">{post.readingTime}</span>
                <span className="arrow">Read</span>
              </div>
            </Link>
          ))}
        </div>
      </div>
    </>
  );
}
