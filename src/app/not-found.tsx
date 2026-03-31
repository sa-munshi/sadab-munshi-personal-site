import Link from "next/link";

export default function NotFound() {
  return (
    <div className="container page-content" style={{ textAlign: "center", padding: "var(--space-3xl) 0" }}>
      <div style={{ fontSize: "6rem", marginBottom: "var(--space-sm)", color: "var(--color-surface)" }}>
        ¯\_(ツ)_/¯
      </div>
      <h1 style={{ fontSize: "var(--text-2xl)", marginBottom: "var(--space-sm)" }}>Page Not Found</h1>
      <p style={{ color: "var(--color-text-secondary)", marginBottom: "var(--space-xl)" }}>
        The page you are looking for does not exist.<br />
        Maybe it moved. Maybe it never existed. Maybe you mistyped.
      </p>
      <Link href="/" className="btn" style={{ display: "inline-flex", alignItems: "center", gap: "0.5rem" }}>
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><line x1="19" y1="12" x2="5" y2="12" /><polyline points="12 19 5 12 12 5" /></svg>
        Go Home
      </Link>
    </div>
  );
}
