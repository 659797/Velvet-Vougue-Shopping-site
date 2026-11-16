<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart & Checkout — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="cart">
<script src="js/layout.js"></script>

<div class="page-header">
  <h1>Shopping <em style="font-style:italic;color:var(--velvet);">Cart</em></h1>
  <div class="page-breadcrumb"><a href="index.php">Home</a> / Cart</div>
</div>

<section class="section">
  <div class="container">

    <!-- Empty State -->
    <div id="empty-cart" class="empty-cart" style="display:none">
      <div class="empty-cart-icon">🛍️</div>
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:2rem;margin-bottom:0.75rem;">Your cart is empty</h2>
      <p style="color:var(--smoke);margin-bottom:2rem;">Looks like you haven't added anything yet.</p>
      <a href="shop.php" class="btn btn-primary">Start Shopping</a>
    </div>

    <!-- Cart Layout -->
    <div class="cart-layout" id="cart-wrap">
      <div>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.5rem;margin-bottom:1.5rem;">Your Items</h2>
        <div id="cart-items"></div>
        <a href="shop.php" style="font-size:0.82rem;color:var(--velvet);display:block;margin-top:1rem;">← Continue Shopping</a>
      </div>

      <div>
        <!-- Order Summary -->
        <div class="cart-summary">
          <div class="summary-title">Order Summary</div>
          <div class="summary-row"><span>Subtotal</span><span id="subtotal">$0.00</span></div>
          <div class="summary-row"><span>Shipping</span><span id="shipping">$9.99</span></div>
          <div class="summary-total"><span>Total</span><span id="cart-total">$0.00</span></div>
          <div class="divider"></div>

          <!-- Checkout Form -->
          <form id="checkout-form">
            <div style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:1rem;">Shipping Details</div>
            <div class="form-group">
              <label class="form-label">Full Name</label>
              <input class="form-input" id="co-name" required placeholder="Jane Doe">
            </div>
            <div class="form-group">
              <label class="form-label">Email</label>
              <input class="form-input" id="co-email" type="email" required placeholder="jane@email.com">
            </div>
            <div class="form-group">
              <label class="form-label">Delivery Address</label>
              <textarea class="form-textarea" id="co-address" required placeholder="123 Fashion St, City, Country" style="min-height:80px;"></textarea>
            </div>
            <div class="divider"></div>
            <div style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;margin-bottom:1rem;">Payment</div>
            <div class="form-group">
              <label class="form-label">Card Number</label>
              <input class="form-input" placeholder="4242 4242 4242 4242">
            </div>
            <div class="grid-2">
              <div class="form-group">
                <label class="form-label">Expiry</label>
                <input class="form-input" placeholder="MM/YY">
              </div>
              <div class="form-group">
                <label class="form-label">CVV</label>
                <input class="form-input" placeholder="123">
              </div>
            </div>
            <button type="submit" class="btn btn-velvet btn-full mt-2">Place Order</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
