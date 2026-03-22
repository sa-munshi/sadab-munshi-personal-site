<?php
/**
 * CONTACT PAGE
 */
$page_title = 'Contact — Sadab Munshi';
$page_description = 'Get in touch. I am always open to interesting conversations and new connections.';
?>

<div class="container page-content">
  <div class="contact-container">
    
    <div class="contact-header">
      <h1>Get in Touch</h1>
      <p>Have a question or just want to say hello? I would love to hear from you.</p>
    </div>
    
    <div class="contact-card">
      
      <div id="form-feedback" class="message" style="display:none;"></div>
      
      <form id="contact-form" class="contact-form" novalidate>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe" required>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required>
        </div>
        
        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea id="message" name="message" placeholder="Tell me what is on your mind..." required></textarea>
        </div>
        
        <button type="submit" class="submit-btn" id="submit-btn">Send Message</button>
      </form>

      <!-- Divider -->
      <div class="contact-divider">
        <span>or</span>
      </div>

      <!-- Direct email option (no visible email address) -->
      <div class="contact-email-direct">
        <a href="mailto:contact@sadabmunshi.online" class="email-direct-link" aria-label="Email me directly">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
               aria-hidden="true">
            <rect x="2" y="4" width="20" height="16" rx="2"/>
            <polyline points="2,4 12,13 22,4"/>
          </svg>
          <span>Email me directly</span>
        </a>
      </div>
      
    </div>
    
  </div>
</div>

<script>
(function () {
  var form     = document.getElementById('contact-form');
  var feedback = document.getElementById('form-feedback');
  var btn      = document.getElementById('submit-btn');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    var name    = form.querySelector('[name="name"]').value.trim();
    var email   = form.querySelector('[name="email"]').value.trim();
    var message = form.querySelector('[name="message"]').value.trim();

    // Basic client-side validation
    if (!name || !email || !message) {
      showFeedback('Please fill in all fields.', false);
      return;
    }

    // Disable button while submitting
    btn.disabled = true;
    btn.textContent = 'Sending…';

    var data = new FormData();
    data.append('name', name);
    data.append('email', email);
    data.append('message', message);

    fetch('/submit.php', { method: 'POST', body: data })
      .then(function (res) { return res.json(); })
      .then(function (json) {
        if (json.success) {
          showFeedback(json.message, true);
          form.reset();
          form.style.display = 'none';
        } else {
          showFeedback(json.message, false);
          btn.disabled = false;
          btn.textContent = 'Send Message';
        }
      })
      .catch(function () {
        showFeedback('Something went wrong. Please try again.', false);
        btn.disabled = false;
        btn.textContent = 'Send Message';
      });
  });

  function showFeedback(msg, success) {
    feedback.textContent = msg;
    feedback.className = 'message ' + (success ? 'message-success' : 'message-error');
    feedback.style.display = 'block';
  }
}());
</script>

<style>
.contact-container {
  max-width: var(--max-width);
  margin: 0 auto;
  padding: var(--space-lg) 0;
}

.contact-header {
  margin-bottom: var(--space-xl);
}

.contact-header h1 {
  font-family: var(--font-heading);
  font-size: var(--text-3xl);
  margin-bottom: var(--space-sm);
  letter-spacing: -0.02em;
}

.contact-header p {
  color: var(--color-text-secondary);
}

.contact-card {
  background: var(--color-white);
  border-radius: var(--border-radius-lg);
  padding: var(--space-xl);
}

.message {
  padding: var(--space-sm);
  border-radius: var(--border-radius-sm);
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

.form-group {
  margin-bottom: var(--space-md);
}

.form-group label {
  display: block;
  margin-bottom: var(--space-xs);
  font-weight: var(--weight-medium);
  font-size: var(--text-sm);
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 0.875rem 1rem;
  background: var(--color-surface-low);
  border: none;
  border-radius: var(--border-radius-sm);
  font-family: var(--font-body);
  font-size: var(--text-base);
  color: var(--color-text);
  transition: background var(--transition-fast);
}

.form-group input:focus,
.form-group textarea:focus {
  outline: none;
  background: var(--color-surface);
}

.form-group textarea {
  min-height: 150px;
  resize: vertical;
}

.submit-btn {
  width: 100%;
  padding: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
  border: none;
  border-radius: var(--border-radius-sm);
  font-size: var(--text-base);
  font-weight: var(--weight-medium);
  cursor: pointer;
  transition: transform var(--transition-fast), background var(--transition-fast);
  font-family: var(--font-body);
}

.submit-btn:hover {
  transform: translateY(-1px);
  background: var(--color-primary-hover);
}

.submit-btn:disabled {
  opacity: 0.65;
  cursor: not-allowed;
  transform: none;
}

/* ── "or" divider ─────────────────────────────────────── */
.contact-divider {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin: var(--space-lg) 0 var(--space-md);
  color: var(--color-text-secondary);
  font-size: var(--text-sm);
}

.contact-divider::before,
.contact-divider::after {
  content: '';
  flex: 1;
  height: 1px;
  background: var(--color-surface);
}

/* ── Direct email link ────────────────────────────────── */
.contact-email-direct {
  display: flex;
  justify-content: center;
}

.email-direct-link {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: var(--color-text-secondary);
  text-decoration: none;
  font-size: var(--text-sm);
  font-weight: var(--weight-medium);
  font-family: var(--font-body);
  padding: 0.5rem 0;
  transition: color var(--transition-fast);
}

.email-direct-link:hover {
  color: var(--color-primary);
}

@media (max-width: 640px) {
  .contact-card {
    padding: var(--space-lg);
  }
}
</style>
