<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="contact">
<script src="js/layout.js"></script>

<div class="page-header">
  <h1>Get In <em style="font-style:italic;color:var(--velvet);">Touch</em></h1>
  <div class="page-breadcrumb"><a href="index.php">Home</a> / Contact</div>
</div>

<section class="section">
  <div class="container">
    <div class="contact-grid">
      <!-- Contact Info -->
      <div>
        <span class="section-tag">We're Here To Help</span>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:300;margin:0.75rem 0 1.5rem;">Customer <em style="font-style:italic;color:var(--velvet);">Support</em></h2>
        <p style="color:var(--smoke);margin-bottom:2rem;line-height:1.8;">Have a question about sizing, an order, or just want to say hello? We'd love to hear from you. Our team responds within 24 hours.</p>

        <div class="contact-info-item">
          <div class="contact-icon">📍</div>
          <div class="contact-text">
            <h4>Visit Our Store</h4>
            <p>123 Fashion Avenue, Style District<br>Colombo 03, Sri Lanka</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon">✉️</div>
          <div class="contact-text">
            <h4>Email Us</h4>
            <p>hello@velvetvogue.com<br>support@velvetvogue.com</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon">📞</div>
          <div class="contact-text">
            <h4>Call Us</h4>
            <p>+94 11 234 5678<br>Mon–Sat, 9am – 6pm</p>
          </div>
        </div>
        <div class="contact-info-item">
          <div class="contact-icon">⏰</div>
          <div class="contact-text">
            <h4>Store Hours</h4>
            <p>Monday – Friday: 9am – 8pm<br>Saturday: 10am – 6pm</p>
          </div>
        </div>
      </div>

      <!-- Inquiry Form -->
      <div style="background:var(--white);border:1px solid var(--light);padding:2.5rem;">
        <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.5rem;margin-bottom:1.5rem;">Send a <em style="font-style:italic;color:var(--velvet);">Message</em></h3>
        <form id="inquiry-form">
          <div class="form-group">
            <label class="form-label">Your Name</label>
            <input class="form-input" id="c-name" required placeholder="Jane Doe">
          </div>
          <div class="form-group">
            <label class="form-label">Email Address</label>
            <input class="form-input" id="c-email" type="email" required placeholder="your@email.com">
          </div>
          <div class="form-group">
            <label class="form-label">Subject</label>
            <select class="form-select" id="c-subject">
              <option>Order Inquiry</option>
              <option>Sizing Help</option>
              <option>Return / Exchange</option>
              <option>Product Question</option>
              <option>Shipping Info</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Your Message</label>
            <textarea class="form-textarea" id="c-message" required placeholder="Tell us how we can help..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
