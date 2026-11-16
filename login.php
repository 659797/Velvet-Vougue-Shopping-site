<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="login">
<script src="js/layout.js"></script>

<div class="auth-wrap">
  <div class="auth-box">
    <h1 class="auth-title">Welcome <em style="font-style:italic;color:var(--velvet);">Back</em></h1>
    <p class="auth-sub">Sign in to your Velvet Vogue account</p>

    <form id="login-form">
      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input class="form-input" id="email" type="email" required placeholder="your@email.com">
      </div>
      <div class="form-group">
        <label class="form-label">Password</label>
        <input class="form-input" id="password" type="password" required placeholder="Your password">
      </div>
      <button type="submit" class="btn btn-primary btn-full mt-2">Sign In</button>
    </form>

    <div class="divider"></div>
    <div style="background:var(--light);padding:1rem;font-size:0.82rem;color:var(--smoke);">
      <strong>Demo Admin:</strong> admin@velvetvogue.com / admin123
    </div>

    <div class="auth-switch">
      Don't have an account? <a href="register.php">Create one →</a>
    </div>
  </div>
</div>

<script src="js/app.js"></script>
</body>
</html>
