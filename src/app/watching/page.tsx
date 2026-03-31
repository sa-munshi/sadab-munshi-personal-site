import type { Metadata } from "next";
import Link from "next/link";

export const metadata: Metadata = {
  title: "Watching",
  description:
    "Movies and shows I have watched or am watching. Personal recommendations and watch list.",
  robots: { index: false, follow: false },
};

interface WatchItem {
  title: string;
  year: string;
  note: string;
}

const recentlyWatched: WatchItem[] = [
  {
    title: "The Social Network",
    year: "2010",
    note: "A classic. Makes you want to build something.",
  },
];

const currentlyWatching: WatchItem[] = [
  {
    title: "Severance",
    year: "2022-",
    note: "Work-life balance taken to the extreme.",
  },
];

const wantToWatch: WatchItem[] = [
  { title: "Dune Part Two", year: "2024", note: "" },
  { title: "The Bear", year: "2022-", note: "" },
];

const allTimeFavorites: WatchItem[] = [
  { title: "Good Will Hunting", year: "1997", note: "" },
  { title: "The Prestige", year: "2006", note: "" },
  { title: "Whiplash", year: "2014", note: "" },
];

function WatchSection({
  title,
  items,
}: {
  title: string;
  items: WatchItem[];
}) {
  return (
    <section>
      <h2>{title}</h2>
      <div className="watch-list">
        {items.map((item) => (
          <div key={item.title} className="watch-card">
            <span className="watch-title">
              {item.title}{" "}
              <span className="watch-year">({item.year})</span>
            </span>
            {item.note && (
              <span className="watch-note">&mdash; {item.note}</span>
            )}
          </div>
        ))}
      </div>
    </section>
  );
}

export default function WatchingPage() {
  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Watching page ────────────────────────────────── */
.watching-header {
  margin-bottom: var(--space-2xl);
}

.watching-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  line-height: var(--leading-tight);
}

.watching-header p {
  margin-top: var(--space-xs);
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text-secondary);
}

.watching-content {
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text);
}

.watching-content > p {
  margin-bottom: var(--space-md);
}

.watching-content a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
  transition: color var(--transition-fast);
}

.watching-content a:hover {
  color: var(--color-primary-hover);
}

.watching-content h2 {
  font-family: var(--font-heading);
  font-size: var(--text-xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  margin-bottom: var(--space-md);
}

.watching-content section {
  margin-bottom: var(--space-xl);
}

.watching-content hr {
  border: none;
  border-top: 1px solid var(--color-surface);
  margin: var(--space-xl) 0;
}

/* ── Watch cards ──────────────────────────────────── */
.watch-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.watch-card {
  background: var(--color-surface-low);
  border-radius: var(--border-radius-sm);
  padding: var(--space-md);
}

.watch-title {
  font-weight: var(--weight-medium);
  color: var(--color-text);
}

.watch-year {
  color: var(--color-text-secondary);
  font-weight: var(--weight-normal);
}

.watch-note {
  display: block;
  margin-top: var(--space-xs);
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  font-style: italic;
}

.watching-meta {
  font-size: var(--text-sm);
  color: var(--color-text-secondary);
  margin-top: var(--space-xl);
}

.watching-meta p {
  margin-bottom: var(--space-xs);
}

@media (max-width: 768px) {
  .watching-header h1 {
    font-size: var(--text-2xl);
  }
}
`,
        }}
      />

      <div className="container page-content">
        <div className="watching-header">
          <h1>Watching</h1>
          <p>Movies and shows.</p>
        </div>

        <article className="watching-content">
          <p>
            I lean toward films and shows that make you think — or at least feel
            something. Not big on binge-watching; I prefer to sit with what I
            watch.
          </p>

          <hr />

          <WatchSection title="Recently Watched" items={recentlyWatched} />
          <WatchSection title="Currently Watching" items={currentlyWatching} />
          <WatchSection title="Want to Watch" items={wantToWatch} />
          <WatchSection title="All-Time Favorites" items={allTimeFavorites} />

          <hr />

          <div className="watching-meta">
            <p>
              <strong>Last updated:</strong> February 2026
            </p>
            <p>
              Have a recommendation?{" "}
              <Link href="/contact/">Let me know</Link>.
            </p>
          </div>
        </article>
      </div>
    </>
  );
}
