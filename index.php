<?php require_once('php/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue — Fashion For Every Identity</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="home">
<script src="js/layout.js"></script>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <p class="hero-tag">New Season · Spring/Summer 2024</p>
    <h1 class="hero-title">Express Your<br><em>True Identity</em><br>Through Style</h1>
    <p class="hero-subtitle">Premium casualwear and formal wear for the modern young adult. Find pieces that speak your language.</p>
    <div class="hero-ctas">
      <a href="shop.php" class="btn btn-primary">Shop Now</a>
      <a href="shop.php?category=formal" class="btn btn-outline">Explore Formal</a>
    </div>
  </div>
  <div class="hero-image-side">
    <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#e8c4bb,#c9a84c22,#6b2d5e22);font-size:12rem;">👗</div>
    <div class="hero-badge">
      <div class="hero-badge-label">New Arrivals</div>
      <div class="hero-badge-value">24+</div>
    </div>
  </div>
  <div class="hero-scroll">Scroll</div>
</section>

<!-- MARQUEE -->
<div class="marquee-wrap">
  <div class="marquee-track">
    <span>Free Shipping Over $100</span> · New Arrivals Weekly · <span>Trendy Casualwear</span> · Formal Elegance · <span>Express Your Identity</span> · Premium Quality ·
    <span>Free Shipping Over $100</span> · New Arrivals Weekly · <span>Trendy Casualwear</span> · Formal Elegance · <span>Express Your Identity</span> · Premium Quality ·
  </div>
</div>

<!-- CATEGORIES -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Browse By</span>
      <h2 class="section-title">Shop <em>Categories</em></h2>
      <p class="section-sub">Find exactly what you're looking for</p>
    </div>
    <div class="categories-grid">
      <div class="cat-card" onclick="location.href='shop.php?category=tshirts'">
        <div class="cat-icon">👕</div>
        <div class="cat-name">T-Shirts</div>
        <div class="cat-count">Casual Essentials</div>
      </div>
      <div class="cat-card" onclick="location.href='shop.php?category=formal'">
        <div class="cat-icon">🤵</div>
        <div class="cat-name">Formal Wear</div>
        <div class="cat-count">Polished Looks</div>
      </div>
      <div class="cat-card" onclick="location.href='shop.php?category=dresses'">
        <div class="cat-icon">👗</div>
        <div class="cat-name">Dresses</div>
        <div class="cat-count">Feminine Styles</div>
      </div>
      <div class="cat-card" onclick="location.href='shop.php?category=pants'">
        <div class="cat-icon">👖</div>
        <div class="cat-name">Pants</div>
        <div class="cat-count">Bottoms For All</div>
      </div>
      <div class="cat-card" onclick="location.href='shop.php?category=hoodies'">
        <div class="cat-icon">🧥</div>
        <div class="cat-name">Hoodies & Knits</div>
        <div class="cat-count">Cozy Layers</div>
      </div>
      <div class="cat-card" onclick="location.href='shop.php?category=jackets'">
        <div class="cat-icon">🥼</div>
        <div class="cat-name">Jackets</div>
        <div class="cat-count">Outerwear Edits</div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Curated Selection</span>
      <h2 class="section-title">Featured <em>Pieces</em></h2>
      <p class="section-sub">Handpicked styles that define the Velvet Vogue aesthetic</p>
    </div>
    <div class="products-grid" id="featured-grid">
      <div class="loader"><div class="spinner"></div></div>
    </div>
    <div class="text-center mt-3">
      <a href="shop.php" class="btn btn-outline">View All Products</a>
    </div>
  </div>
</section>

<!-- PROMO BANNER -->
<div class="promo-banner">
  <h2>Get <em>20% Off</em> Your First Order</h2>
  <p style="color:rgba(255,255,255,0.7);margin-bottom:0.5rem;">Use code at checkout</p>
  <div class="promo-code">VOGUE20</div>
  <br>
  <a href="register.php" class="btn btn-gold">Create Account & Save</a>
</div>

<!-- NEW ARRIVALS -->
<section class="section" style="background:var(--white);">
  <div class="container">
    <div class="section-header">
      <span class="section-tag">Just Landed</span>
      <h2 class="section-title">New <em>Arrivals</em></h2>
    </div>
    <div class="products-grid" id="new-grid">
      <div class="loader"><div class="spinner"></div></div>
    </div>
  </div>
</section>

<!-- WHY US -->
<section class="section-sm" style="background:var(--charcoal);color:var(--cream);">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:2rem;text-align:center;">
      <div><div style="font-size:2rem;margin-bottom:0.75rem;">🚚</div><h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:0.3rem;">Free Shipping</h4><p style="font-size:0.82rem;color:rgba(255,255,255,0.5);">On orders over $100</p></div>
      <div><div style="font-size:2rem;margin-bottom:0.75rem;">↩️</div><h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:0.3rem;">Easy Returns</h4><p style="font-size:0.82rem;color:rgba(255,255,255,0.5);">30-day return policy</p></div>
      <div><div style="font-size:2rem;margin-bottom:0.75rem;">🔒</div><h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:0.3rem;">Secure Payment</h4><p style="font-size:0.82rem;color:rgba(255,255,255,0.5);">100% secure checkout</p></div>
      <div><div style="font-size:2rem;margin-bottom:0.75rem;">💬</div><h4 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:0.3rem;">24/7 Support</h4><p style="font-size:0.82rem;color:rgba(255,255,255,0.5);">Always here to help</p></div>
    </div>
  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
