"use client";

import { useState, FormEvent } from "react";

export default function ContactForm() {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [message, setMessage] = useState("");
  const [sending, setSending] = useState(false);
  const [feedback, setFeedback] = useState<{
    type: "success" | "error";
    text: string;
  } | null>(null);
  const [formHidden, setFormHidden] = useState(false);

  async function handleSubmit(e: FormEvent) {
    e.preventDefault();

    if (!name.trim() || !email.trim() || !message.trim()) {
      setFeedback({ type: "error", text: "Please fill in all fields." });
      return;
    }

    setSending(true);
    setFeedback(null);

    try {
      const res = await fetch("/api/contact", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name: name.trim(), email: email.trim(), message: message.trim() }),
      });

      const data = await res.json();

      if (data.success) {
        setFeedback({ type: "success", text: data.message });
        setFormHidden(true);
      } else {
        setFeedback({ type: "error", text: data.message });
        setSending(false);
      }
    } catch {
      setFeedback({
        type: "error",
        text: "Something went wrong. Please try again.",
      });
      setSending(false);
    }
  }

  return (
    <>
      <style
        dangerouslySetInnerHTML={{
          __html: `
/* ── Contact page ─────────────────────────────────── */
.contact-container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-xl) var(--space-md);
}

.contact-header {
  margin-bottom: var(--space-2xl);
}

.contact-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  font-weight: var(--weight-semibold);
  color: var(--color-text);
  line-height: var(--leading-tight);
}

.contact-header p {
  margin-top: var(--space-xs);
  font-size: var(--text-base);
  line-height: var(--leading-relaxed);
  color: var(--color-text-secondary);
}

.contact-card {
  background: var(--color-white);
  border-radius: var(--border-radius-lg);
  padding: var(--space-xl);
  box-shadow: var(--shadow-sm);
}

/* ── Feedback messages ────────────────────────────── */
.message {
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--border-radius-sm);
  font-size: var(--text-sm);
  line-height: var(--leading-normal);
  margin-bottom: var(--space-md);
}

.message-success {
  background: #e8f5e9;
  color: #2e7d32;
}

.message-error {
  background: #fce4ec;
  color: #c62828;
}

/* ── Form ─────────────────────────────────────────── */
.form-group {
  margin-bottom: var(--space-md);
}

.form-group label {
  display: block;
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  color: var(--color-text);
  margin-bottom: var(--space-xs);
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: var(--space-sm) var(--space-md);
  font-family: var(--font-body);
  font-size: var(--text-base);
  color: var(--color-text);
  background: var(--color-surface-low);
  border: none;
  border-radius: var(--border-radius-sm);
  outline: none;
  transition: box-shadow var(--transition-fast);
}

.form-group input:focus,
.form-group textarea:focus {
  box-shadow: 0 0 0 2px var(--color-primary);
}

.form-group textarea {
  min-height: 160px;
  resize: vertical;
}

.submit-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: var(--space-sm) var(--space-lg);
  font-family: var(--font-body);
  font-size: var(--text-base);
  font-weight: var(--weight-medium);
  color: var(--color-white);
  background: var(--color-primary);
  border: none;
  border-radius: var(--border-radius-sm);
  cursor: pointer;
  transition: background var(--transition-fast);
  width: 100%;
}

.submit-btn:hover:not(:disabled) {
  background: var(--color-primary-hover);
}

.submit-btn:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

/* ── Divider ──────────────────────────────────────── */
.contact-divider {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  margin: var(--space-xl) 0;
  color: var(--color-text-secondary);
  font-size: var(--text-sm);
}

.contact-divider::before,
.contact-divider::after {
  content: "";
  flex: 1;
  height: 1px;
  background: var(--color-surface);
}

/* ── Direct email link ────────────────────────────── */
.email-direct-link {
  text-align: center;
  font-size: var(--text-base);
  color: var(--color-text-secondary);
  line-height: var(--leading-relaxed);
}

.email-direct-link a {
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-thickness: 1px;
  transition: color var(--transition-fast);
}

.email-direct-link a:hover {
  color: var(--color-primary-hover);
}

/* ── Responsive ───────────────────────────────────── */
@media (max-width: 768px) {
  .contact-container {
    padding: var(--space-lg) var(--space-md);
  }

  .contact-card {
    padding: var(--space-lg);
  }

  .contact-header h1 {
    font-size: var(--text-2xl);
  }
}
`,
        }}
      />

      <div className="contact-container">
        <div className="contact-header">
          <h1>Contact</h1>
          <p>
            I am always open to interesting conversations and new connections.
          </p>
        </div>

        <div className="contact-card">
          {feedback && (
            <div
              className={`message ${
                feedback.type === "success" ? "message-success" : "message-error"
              }`}
            >
              {feedback.text}
            </div>
          )}

          {!formHidden && (
            <form onSubmit={handleSubmit} noValidate>
              <div className="form-group">
                <label htmlFor="name">Name</label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="Your name"
                  value={name}
                  onChange={(e) => setName(e.target.value)}
                />
              </div>

              <div className="form-group">
                <label htmlFor="email">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="you@example.com"
                  value={email}
                  onChange={(e) => setEmail(e.target.value)}
                />
              </div>

              <div className="form-group">
                <label htmlFor="message">Message</label>
                <textarea
                  id="message"
                  name="message"
                  placeholder="What's on your mind?"
                  value={message}
                  onChange={(e) => setMessage(e.target.value)}
                />
              </div>

              <button type="submit" className="submit-btn" disabled={sending}>
                {sending ? "Sending\u2026" : "Send Message"}
              </button>
            </form>
          )}

          <div className="contact-divider">or</div>

          <p className="email-direct-link">
            Email me directly at{" "}
            <a href="mailto:hello@sadabmunshi.com">hello@sadabmunshi.com</a>
          </p>
        </div>
      </div>
    </>
  );
}
