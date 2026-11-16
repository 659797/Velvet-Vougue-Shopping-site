<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="admin">
<script src="js/layout.js"></script>

<div class="admin-layout">
  <!-- Sidebar -->
  <aside class="admin-sidebar">
    <h3>Admin Panel</h3>
    <nav class="admin-nav">
      <a href="#" data-tab="products" class="active">📦 Products</a>
      <a href="#" data-tab="add">➕ Add Product</a>
      <a href="#" data-tab="orders">🛒 Orders</a>
      <a href="#" data-tab="inquiries">💬 Inquiries</a>
    </nav>
    <div style="padding:1.5rem;margin-top:2rem;border-top:1px solid rgba(255,255,255,0.1);">
      <div style="font-size:0.8rem;color:rgba(255,255,255,0.5);margin-bottom:0.5rem;">Signed in as</div>
      <div id="admin-user" style="font-size:0.88rem;color:var(--gold);"></div>
      <button id="logout-btn" class="btn btn-outline btn-sm" style="margin-top:1rem;color:var(--cream);border-color:rgba(255,255,255,0.3);font-size:0.75rem;">Sign Out</button>
    </div>
  </aside>

  <!-- Content -->
  <main class="admin-content">
    <!-- Products Tab -->
    <div class="admin-tab active" id="tab-products">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem;">
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;">All <em style="font-style:italic;color:var(--velvet);">Products</em></h2>
        <a href="#" onclick="document.querySelector('[data-tab=add]').click();return false;" class="btn btn-velvet btn-sm">+ Add Product</a>
      </div>
      <div id="admin-products-table"><div class="loader"><div class="spinner"></div></div></div>
    </div>

    <!-- Add Product Tab -->
    <div class="admin-tab" id="tab-add">
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;margin-bottom:1.5rem;">Add New <em style="font-style:italic;color:var(--velvet);">Product</em></h2>
      <div style="background:var(--white);border:1px solid var(--light);padding:2rem;max-width:700px;">
        <form id="add-product-form">
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label">Product Name</label>
              <input class="form-input" id="ap-name" required placeholder="e.g. Urban Flex Tee">
            </div>
            <div class="form-group">
              <label class="form-label">Price ($)</label>
              <input class="form-input" id="ap-price" type="number" step="0.01" required placeholder="49.99">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Description</label>
            <textarea class="form-textarea" id="ap-desc" required placeholder="Product description..." style="min-height:80px;"></textarea>
          </div>
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label">Category</label>
              <select class="form-select" id="ap-cat">
                <option value="tshirts">T-Shirts</option>
                <option value="formal">Formal Wear</option>
                <option value="dresses">Dresses</option>
                <option value="pants">Pants</option>
                <option value="hoodies">Hoodies & Knits</option>
                <option value="skirts">Skirts</option>
                <option value="jackets">Jackets</option>
                <option value="tops">Tops</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Gender</label>
              <select class="form-select" id="ap-gender">
                <option value="unisex">Unisex</option>
                <option value="men">Men</option>
                <option value="women">Women</option>
              </select>
            </div>
          </div>
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label">Sizes (comma-separated)</label>
              <input class="form-input" id="ap-sizes" placeholder="XS, S, M, L, XL">
            </div>
            <div class="form-group">
              <label class="form-label">Colors (comma-separated)</label>
              <input class="form-input" id="ap-colors" placeholder="Black, White, Navy">
            </div>
          </div>
          <div class="grid-2">
            <div class="form-group">
              <label class="form-label">Stock Quantity</label>
              <input class="form-input" id="ap-stock" type="number" value="10" required>
            </div>
            <div class="form-group">
              <label class="form-label">Image Filename</label>
              <input class="form-input" id="ap-image" placeholder="product.jpg">
            </div>
          </div>
          <div style="display:flex;gap:2rem;margin-bottom:1rem;">
            <label style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;cursor:pointer;">
              <input type="checkbox" id="ap-new"> Mark as New Arrival
            </label>
            <label style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;cursor:pointer;">
              <input type="checkbox" id="ap-featured"> Mark as Featured
            </label>
          </div>
          <button type="submit" class="btn btn-velvet">Add Product</button>
        </form>
      </div>
    </div>

    <!-- Orders Tab -->
    <div class="admin-tab" id="tab-orders">
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;margin-bottom:1.5rem;">All <em style="font-style:italic;color:var(--velvet);">Orders</em></h2>
      <div id="admin-orders-table"><div class="loader"><div class="spinner"></div></div></div>
    </div>

    <!-- Inquiries Tab -->
    <div class="admin-tab" id="tab-inquiries">
      <h2 style="font-family:'Cormorant Garamond',serif;font-size:1.8rem;font-weight:300;margin-bottom:1.5rem;">Customer <em style="font-style:italic;color:var(--velvet);">Inquiries</em></h2>
      <div id="admin-inquiries-table"><div class="loader"><div class="spinner"></div></div></div>
    </div>
  </main>
</div>

<script src="js/app.js"></script>
</body>
</html>
