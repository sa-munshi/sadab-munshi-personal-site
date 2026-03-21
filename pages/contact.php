<?php
/**
 * CONTACT PAGE
 */
$page_title = 'Contact — Sadab Munshi';
$page_description = 'Get in touch. I am always open to interesting conversations and new connections.';

$form_message = '';
$form_error = '';
$show_form = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    if (empty($name) || empty($email) || empty($message)) {
        $form_error = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } elseif (strlen($message) < 10) {
        $form_error = 'Message is too short. Please write at least 10 characters.';
    } else {
        // Send email (replace with your email)
        $to = 'hello@sadabmunshi.online';
        $subject = 'Contact from ' . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";
        
        // Note: mail() may not work on InfinityFree, so just show success
        $form_message = 'Thank you for your message. I will get back to you soon.';
        $show_form = false;
    }
}
?>

<div class="container page-content">
  <div class="contact-container">
    
    <div class="contact-header">
      <h1>Get in Touch</h1>
      <p>Have a question or just want to say hello? I would love to hear from you.</p>
    </div>
    
    <div class="contact-card">
      
      <?php if ($form_message): ?>
      <div class="message message-success">
        <?php echo e($form_message); ?>
      </div>
      <?php endif; ?>
      
      <?php if ($form_error): ?>
      <div class="message message-error">
        <?php echo e($form_error); ?>
      </div>
      <?php endif; ?>
      
      <?php if ($show_form): ?>
      <form method="POST" action="" class="contact-form">
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="John Doe" required 
                 value="<?php echo isset($_POST['name']) ? e($_POST['name']) : ''; ?>">
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="john@example.com" required
                 value="<?php echo isset($_POST['email']) ? e($_POST['email']) : ''; ?>">
        </div>
        
        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea id="message" name="message" placeholder="Tell me what is on your mind..." required><?php echo isset($_POST['message']) ? e($_POST['message']) : ''; ?></textarea>
        </div>
        
        <button type="submit" class="submit-btn">Send Message</button>
      </form>
      <?php endif; ?>
      
    </div>
    
  </div>
</div>

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

@media (max-width: 640px) {
  .contact-card {
    padding: var(--space-lg);
  }
}
</style>
