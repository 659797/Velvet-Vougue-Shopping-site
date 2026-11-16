<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="product">
<script src="js/layout.js"></script>

<section class="section" style="margin-top:70px;">
  <div class="container">
    <div class="page-breadcrumb mb-2" style="font-size:0.8rem;color:var(--smoke);">
      <a href="index.php" style="color:var(--velvet);">Home</a> / <a href="shop.php" style="color:var(--velvet);">Shop</a> / Product
    </div>
    <div class="product-detail">
      <div id="p-image" class="detail-img-wrap">
        <div class="loader"><div class="spinner"></div></div>
      </div>
      <div class="detail-info">
        <div id="p-cat" class="detail-cat"></div>
        <h1 id="p-name" class="detail-name"></h1>
        <div id="p-price" class="detail-price"></div>
        <p id="p-desc" class="detail-desc"></p>

        <span class="option-label">Select Size</span>
        <div id="p-sizes" class="size-options"></div>

        <span class="option-label">Select Color</span>
        <div id="p-colors" class="color-options"></div>

        <span class="option-label">Quantity</span>
        <div class="qty-control">
          <button class="qty-btn" id="qty-minus">−</button>
          <input class="qty-val" id="qty-val" value="1" readonly>
          <button class="qty-btn" id="qty-plus">+</button>
        </div>

        <button class="btn btn-velvet btn-full" id="add-to-cart-btn">Add to Cart</button>
        <div class="divider"></div>
        <div style="display:flex;gap:2rem;font-size:0.8rem;color:var(--smoke);">
          <span>🚚 Free shipping over $100</span>
          <span>↩️ Easy 30-day returns</span>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
