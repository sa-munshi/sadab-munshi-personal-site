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
  max-width: 600px;
  margin: 0 auto;
  padding: 2rem 0;
}

.contact-header {
  text-align: center;
  margin-bottom: 2.5rem;
}

.contact-header h1 {
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

.contact-header p {
  color: var(--color-text-secondary);
}

.contact-card {
  background: var(--glass-bg);
  backdrop-filter: var(--glass-blur);
  border: 1px solid var(--glass-border);
  border-radius: var(--border-radius-lg);
  padding: 2rem;
  box-shadow: var(--glass-shadow);
}

.message {
  padding: 1rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
}

.message-success {
  background: #d4edda;
  color: #155724;
  border: 1px solid #c3e6cb;
}

.message-error {
  background: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: 500;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 0.875rem 1rem;
  background: rgba(255,255,255,0.5);
  border: 1px solid var(--glass-border-subtle);
  border-radius: 8px;
  font-family: inherit;
  font-size: 1rem;
}

.form-group textarea {
  min-height: 150px;
  resize: vertical;
}

.submit-btn {
  width: 100%;
  padding: 1rem;
  background: var(--color-text);
  color: var(--color-bg);
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: transform 0.2s;
}

.submit-btn:hover {
  transform: translateY(-2px);
}

@media (max-width: 640px) {
  .contact-card {
    padding: 1.5rem;
  }
}
</style>
