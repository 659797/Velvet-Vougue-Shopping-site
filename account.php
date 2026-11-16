<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="account">
<script src="js/layout.js"></script>

<div class="page-header">
  <h1>My <em style="font-style:italic;color:var(--velvet);">Account</em></h1>
  <div class="page-breadcrumb"><a href="index.php">Home</a> / Account</div>
</div>

<section class="section">
  <div class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:2rem;flex-wrap:wrap;gap:1rem;">
      <div>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;">Hello, <em style="font-style:italic;color:var(--velvet);" id="acc-name">...</em></h2>
        <p style="color:var(--smoke);font-size:0.88rem;margin-top:0.25rem;">Welcome to your Velvet Vogue account dashboard.</p>
      </div>
      <button id="logout-btn" class="btn btn-outline btn-sm">Sign Out</button>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:1rem;margin-bottom:3rem;">
      <a href="shop.php" style="background:var(--velvet);color:var(--cream);padding:1.5rem;text-align:center;text-decoration:none;transition:var(--transition);" onmouseover="this.style.background='#5a2550'" onmouseout="this.style.background='var(--velvet)'">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🛍️</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:1rem;">Shop Now</div>
      </a>
      <a href="cart.php" style="background:var(--white);color:var(--charcoal);padding:1.5rem;text-align:center;text-decoration:none;border:1px solid var(--light);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">🛒</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:1rem;">View Cart</div>
      </a>
      <a href="contact.php" style="background:var(--white);color:var(--charcoal);padding:1.5rem;text-align:center;text-decoration:none;border:1px solid var(--light);">
        <div style="font-size:1.8rem;margin-bottom:0.5rem;">💬</div>
        <div style="font-family:'Cormorant Garamond',serif;font-size:1rem;">Support</div>
      </a>
    </div>

    <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;margin-bottom:1rem;">Order <em style="font-style:italic;color:var(--velvet);">History</em></h3>
    <div id="orders-list">
      <div class="loader"><div class="spinner"></div></div>
    </div>
  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
