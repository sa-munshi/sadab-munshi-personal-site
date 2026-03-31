import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Projects",
  description:
    "Projects and web apps built by Sadab Munshi. Personal finance tools, experiments with modern web technologies, and more.",
};

export default function ProjectsPage() {
  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Projects page ─────────────────────────────────── */
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

.featured-section {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-xl) var(--space-md);
}

.featured-header {
  margin-bottom: var(--space-2xl);
  animation: fadeInUp 0.6s ease both;
}

.featured-title {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  line-height: var(--leading-tight);
}

.projects-grid {
  display: grid;
  gap: var(--space-md);
}

/* ── Card ──────────────────────────────────────────── */
.featured-card {
  background: var(--color-surface-low);
  border-radius: var(--border-radius-lg);
  padding: var(--space-lg);
  transition: box-shadow var(--transition-normal), transform var(--transition-normal);
  animation: fadeInUp 0.6s ease both;
  animation-delay: 0.15s;
}

.featured-card:hover {
  box-shadow: var(--shadow-md);
  transform: translateY(-2px);
}

.featured-card--muted {
  background: var(--color-surface-low);
  opacity: 0.7;
  animation-delay: 0.3s;
}

.featured-card--muted:hover {
  box-shadow: none;
  transform: none;
}

.featured-card__content {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.featured-card__header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-sm);
}

.featured-card__name {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  margin: 0;
}

.featured-card__status {
  font-family: var(--font-mono);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  text-transform: uppercase;
  letter-spacing: 0.06em;
}

.featured-card__status--live {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  color: var(--color-primary);
}

.featured-card__status--live::before {
  content: "";
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--color-primary);
  animation: pulse 2s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.4; }
}

.featured-card .desc {
  font-size: var(--text-base);
  color: var(--color-text-secondary);
  line-height: var(--leading-normal);
  margin: 0;
}

.featured-card .tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.4rem;
}

.featured-card .tag {
  font-family: var(--font-mono);
  font-size: var(--text-xs);
  color: var(--color-text-secondary);
  background: var(--color-surface);
  padding: 0.2rem 0.6rem;
  border-radius: var(--border-radius-pill);
  letter-spacing: 0.02em;
}

.featured-card .actions {
  margin-top: var(--space-xs);
}

.featured-card .btn {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-primary);
  background: none;
  border: 1px solid var(--color-primary);
  border-radius: var(--border-radius-pill);
  padding: 0.45rem 1.1rem;
  text-decoration: none;
  cursor: pointer;
  transition: background var(--transition-fast), color var(--transition-fast);
}

.featured-card .btn:hover {
  background: var(--color-primary);
  color: var(--color-white);
}

/* ── Responsive ────────────────────────────────────── */
@media (max-width: 768px) {
  .featured-section {
    padding: var(--space-lg) var(--space-sm);
  }

  .featured-title {
    font-size: var(--text-2xl);
  }

  .featured-card {
    padding: var(--space-md);
  }

  .featured-card__header {
    flex-direction: column;
    align-items: flex-start;
    gap: 0.35rem;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .featured-section {
    padding: var(--space-xl) var(--space-md);
  }
}

@media (min-width: 1440px) {
  .featured-section {
    max-width: 860px;
  }
}
`,
        }}
      />

      <div className="featured-section">
        {/* Header */}
        <div className="featured-header">
          <h1 className="featured-title">Projects</h1>
        </div>

        {/* Projects grid */}
        <div className="projects-grid">
          {/* FinFlow */}
          <div className="featured-card">
            <div className="featured-card__content">
              <div className="featured-card__header">
                <h2 className="featured-card__name">FinFlow</h2>
                <span className="featured-card__status featured-card__status--live">
                  live
                </span>
              </div>
              <p className="desc">
                Personal finance tracker with automated categorization and
                spending forecasts.
              </p>
              <div className="tags">
                <span className="tag">Next.js</span>
                <span className="tag">TypeScript</span>
              </div>
              <div className="actions">
                <a
                  href="https://app.sadabmunshi.online"
                  className="btn"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Live ↗
                </a>
              </div>
            </div>
          </div>

          {/* Next Project */}
          <div
            className="featured-card featured-card--muted"
            role="status"
            aria-label="Next project — currently in progress"
          >
            <div className="featured-card__content">
              <div className="featured-card__header">
                <h2 className="featured-card__name">Next Project</h2>
                <span className="featured-card__status">In Progress</span>
              </div>
              <p className="desc">Currently building. Details soon.</p>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
