import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Now",
  description:
    "What Sadab Munshi is currently doing, thinking about, and working on.",
};

export default function NowPage() {
  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Now page ─────────────────────────────────────── */
.now-header {
  margin-bottom: var(--space-2xl);
}

.now-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  line-height: var(--leading-tight);
}

.now-header p {
  margin-top: var(--space-xs);
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text-secondary);
}

.now-content {
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text);
}

.now-content p {
  margin-bottom: var(--space-md);
}

.now-content a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
  transition: color var(--transition-fast);
}

.now-content a:hover {
  color: var(--color-primary-hover);
}

.now-content h2 {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  margin-bottom: var(--space-md);
}

.now-content ul {
  list-style: disc;
  padding-left: var(--space-lg);
  margin-bottom: var(--space-md);
}

.now-content li {
  margin-bottom: var(--space-xs);
}

.now-content hr {
  border: none;
  border-top: 1px solid var(--color-surface);
  margin: var(--space-xl) 0;
}

.now-meta {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin-top: var(--space-xl);
}

.now-meta p {
  margin-bottom: var(--space-xs);
}

@media (max-width: 768px) {
  .now-header h1 {
    font-size: var(--text-2xl);
  }
}
`,
        }}
      />

      <div className="container page-content">
        <div className="now-header">
          <h1>Now</h1>
          <p>What I&apos;m doing right now</p>
        </div>

        <article className="now-content">
          <p>Based in my corner of the world.</p>

          <p>
            This is a{" "}
            <a
              href="https://nownownow.com/about"
              target="_blank"
              rel="noopener noreferrer"
            >
              /now page
            </a>
            . If you have your own site, you should make one too.
          </p>

          <hr />

          <h2>Currently</h2>
          <ul>
            <li>
              Building and refining{" "}
              <a
                href="https://app.sadabmunshi.online"
                target="_blank"
                rel="noopener noreferrer"
              >
                a personal finance app
              </a>{" "}
              — expense tracking, budgets, and financial clarity
            </li>
            <li>Learning more about systems design and backend architecture</li>
            <li>Reading — always reading</li>
            <li>Writing occasionally, thinking constantly</li>
          </ul>

          <hr />

          <h2>Not Doing</h2>
          <ul>
            <li>Not on social media (mostly)</li>
            <li>Not chasing trends or hype cycles</li>
            <li>Not saying yes to everything</li>
          </ul>

          <hr />

          <div className="now-meta">
            <p>
              <strong>Last updated:</strong> February 2026
            </p>
            <p>Check back sometime — this page changes as life does.</p>
          </div>
        </article>
      </div>
    </>
  );
}
