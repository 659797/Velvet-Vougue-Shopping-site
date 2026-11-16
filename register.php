<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="register">
<script src="js/layout.js"></script>

<div class="auth-wrap">
  <div class="auth-box">
    <h1 class="auth-title">Join <em style="font-style:italic;color:var(--velvet);">Velvet Vogue</em></h1>
    <p class="auth-sub">Create your account and get 20% off your first order</p>

    <form id="register-form">
      <div class="form-group">
        <label class="form-label">Full Name</label>
        <input class="form-input" id="name" required placeholder="Jane Doe">
      </div>
      <div class="form-group">
        <label class="form-label">Email Address</label>
        <input class="form-input" id="email" type="email" required placeholder="your@email.com">
      </div>
      <div class="form-group">
        <label class="form-label">Password</label>
        <input class="form-input" id="password" type="password" required placeholder="Min. 6 characters" minlength="6">
      </div>
      <div class="form-group">
        <label class="form-label">Confirm Password</label>
        <input class="form-input" id="password2" type="password" required placeholder="Repeat password">
      </div>
      <button type="submit" class="btn btn-velvet btn-full mt-2">Create Account</button>
    </form>

    <div class="auth-switch">
      Already have an account? <a href="login.php">Sign In →</a>
    </div>
  </div>
</div>

<script src="js/app.js"></script>
</body>
</html>
