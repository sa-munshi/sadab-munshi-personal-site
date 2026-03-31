import type { Metadata } from "next";

export const metadata: Metadata = {
  title: "Colophon",
  description: "How this website was made. Typography, technology stack, design decisions, and inspiration.",
  robots: { index: false, follow: false },
};

const arrowStyle = { color: "var(--color-primary)" } as const;
const descStyle = { margin: "0.25rem 0 0 0", fontSize: "var(--text-sm)", color: "var(--color-text-secondary)" } as const;
const itemStyle = { marginBottom: "1rem", display: "flex", gap: "0.75rem" } as const;
const listStyle = { listStyle: "none", padding: 0 } as const;

export default function ColophonPage() {
  return (
    <div className="container page-content">
      {/* Page Header */}
      <header className="page-header">
        <h1 className="page-header__title">Colophon</h1>
        <p className="page-header__desc">How this site was made.</p>
      </header>

      {/* Content */}
      <article className="content">
        <p>This site is intentionally simple. No heavy frameworks, minimal build process, no unnecessary complexity. Just clean code that works.</p>

        <hr />

        {/* Typography */}
        <section className="list-section">
          <h2>Typography</h2>
          <ul style={listStyle}>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Headings:</strong>{" "}
                <a href="https://fonts.google.com/specimen/Newsreader" target="_blank" rel="noopener noreferrer">Newsreader</a>
                <p style={descStyle}>A soft-serif font with character. Editorial feel without being pretentious.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Body Text:</strong>{" "}
                <a href="https://fonts.google.com/specimen/Manrope" target="_blank" rel="noopener noreferrer">Manrope</a>
                <p style={descStyle}>Clean, readable, designed for screens. Gets out of the way.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Monospace:</strong>{" "}
                <a href="https://fonts.google.com/specimen/JetBrains+Mono" target="_blank" rel="noopener noreferrer">JetBrains Mono</a>
                <p style={descStyle}>For code snippets. Clear, legible, developer-friendly.</p>
              </div>
            </li>
          </ul>
        </section>

        {/* Technology */}
        <section className="list-section">
          <h2>Technology</h2>
          <ul style={listStyle}>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>HTML5:</strong> Semantic markup
                <p style={descStyle}>Accessibility-first structure.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>CSS3:</strong> Custom properties
                <p style={descStyle}>No preprocessors, no frameworks. Just clean CSS.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Next.js:</strong> React framework
                <p style={descStyle}>Server-rendered React with file-based routing and optimized performance.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Vanilla JS:</strong> Minimal interactions
                <p style={descStyle}>Just enough for the mobile menu, easter egg, and smooth interactions.</p>
              </div>
            </li>
          </ul>
        </section>

        {/* Design */}
        <section className="list-section">
          <h2>Design</h2>
          <ul style={listStyle}>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Colors:</strong> Warm neutrals
                <p style={descStyle}>Off-white background, soft black text, green-grey accents. Feels like paper and ink.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Color Scheme:</strong> Light only
                <p style={descStyle}>Warm off-white background with soft dark text. Clean and readable in any lighting.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Layout:</strong> Content-first
                <p style={descStyle}>Max width for readability. Generous whitespace. Mobile-responsive.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Animations:</strong> Subtle
                <p style={descStyle}>Gentle transitions. Nothing flashy or distracting.</p>
              </div>
            </li>
          </ul>
        </section>

        {/* Hosting */}
        <section className="list-section">
          <h2>Hosting</h2>
          <ul style={listStyle}>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Domain:</strong> <code>sadabmunshi.online</code>
                <p style={descStyle}>Personal domain. Easy to remember.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Hosting:</strong>{" "}
                <a href="https://vercel.com" target="_blank" rel="noopener noreferrer">Vercel</a>
                <p style={descStyle}>Edge-optimized hosting for Next.js. Fast and reliable.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Code Editor:</strong> VS Code
                <p style={descStyle}>Simple, reliable, extensible.</p>
              </div>
            </li>
            <li style={itemStyle}>
              <span style={arrowStyle}>→</span>
              <div>
                <strong>Icons:</strong>{" "}
                <a href="https://feathericons.com/" target="_blank" rel="noopener noreferrer">Feather Icons</a>
                <p style={descStyle}>Clean, minimal, open source SVG icons.</p>
              </div>
            </li>
          </ul>
        </section>

        {/* Performance */}
        <section className="list-section">
          <h2>Performance</h2>
          <ul>
            <li>No external dependencies (except Google Fonts)</li>
            <li>Minimal CSS (~20KB)</li>
            <li>Minimal JavaScript (~10KB)</li>
            <li>Fast page loads</li>
            <li>Lighthouse score: 95+</li>
          </ul>
        </section>

        {/* Inspiration */}
        <section className="list-section">
          <h2>Inspiration</h2>
          <p>This site was inspired by people who build calm, thoughtful corners of the internet. Those who prioritize content over flash, simplicity over complexity.</p>
          <p>Special appreciation to:</p>
          <ul>
            <li>The <a href="https://nownownow.com/about" target="_blank" rel="noopener noreferrer">/now page movement</a> by Derek Sivers</li>
            <li>Personal sites that feel personal</li>
            <li>Designers and developers who share their process</li>
            <li>Anyone building things and putting them online</li>
          </ul>
        </section>

        <hr />

        {/* Source Code */}
        <section className="list-section">
          <h2>Source Code</h2>
          <p>The code for this site is available on <a href="https://github.com/sa-munshi/sadabmunshi.online" target="_blank" rel="noopener noreferrer">GitHub</a>. Feel free to explore, learn from it, or use it as inspiration for your own site.</p>
          <p className="text-secondary">If you build something cool, I&apos;d love to see it.</p>
        </section>

        <hr />

        <p className="text-secondary"><em>Last updated: January 2026</em></p>
      </article>
    </div>
  );
}
