/** Blog post metadata type */
export interface BlogPost {
  title: string;
  slug: string;
  excerpt: string;
  date: string;
  readingTime: string;
  modified?: string;
}

/** All blog posts sorted newest-first */
export const blogPosts: BlogPost[] = [
  {
    title: "Spend Less Time Counting, More Time Living",
    slug: "spend-less-time-counting",
    excerpt:
      "Why I built a personal finance app that uses AI to handle the boring parts of tracking money.",
    date: "2026-03-22",
    readingTime: "4 min read",
    modified: "2026-03-22",
  },
  {
    title: "What I Think About AI",
    slug: "what-i-think-about-ai",
    excerpt:
      "Artificial intelligence explained humanistically. A simple, honest take on what AI actually is.",
    date: "2026-02-23",
    readingTime: "3 min read",
    modified: "2026-02-23",
  },
  {
    title: "Slow Growth",
    slug: "slow-growth",
    excerpt:
      "Embracing the long, unglamorous path of gradual improvement.",
    date: "2025-11-08",
    readingTime: "5 min read",
    modified: "2025-11-08",
  },
  {
    title: "Why I Started Making Things",
    slug: "why-i-started-building-things",
    excerpt: "On curiosity, starting small, and creating for yourself.",
    date: "2025-12-15",
    readingTime: "4 min read",
    modified: "2025-12-15",
  },
  {
    title: "Debugging My Brain",
    slug: "debugging-my-brain",
    excerpt: "What coding taught me about my own thought patterns.",
    date: "2025-08-03",
    readingTime: "6 min read",
    modified: "2025-08-03",
  },
  {
    title: "The Art of Finishing",
    slug: "the-art-of-finishing",
    excerpt: "Why starting is easy and finishing is everything.",
    date: "2025-06-14",
    readingTime: "5 min read",
    modified: "2025-06-14",
  },
  {
    title: "Notes on Simplicity",
    slug: "notes-on-simplicity",
    excerpt:
      "Less is usually better. Some thoughts on keeping things simple.",
    date: "2025-05-20",
    readingTime: "3 min read",
    modified: "2025-05-20",
  },
  {
    title: "Learning in Public",
    slug: "learning-in-public",
    excerpt:
      "The fear, the vulnerability, and the unexpected benefits of sharing while you learn.",
    date: "2025-03-28",
    readingTime: "4 min read",
    modified: "2025-03-28",
  },
];

/** Look up a single post by slug */
export function getPostBySlug(slug: string): BlogPost | undefined {
  return blogPosts.find((p) => p.slug === slug);
}

/** Format a date string like "Mar 22, 2026" */
export function formatDate(dateStr: string): string {
  return new Date(dateStr + "T00:00:00").toLocaleDateString("en-US", {
    month: "short",
    day: "numeric",
    year: "numeric",
  });
}

/** Format a date string like "March 22, 2026" */
export function formatDateLong(dateStr: string): string {
  return new Date(dateStr + "T00:00:00").toLocaleDateString("en-US", {
    month: "long",
    day: "numeric",
    year: "numeric",
  });
}
