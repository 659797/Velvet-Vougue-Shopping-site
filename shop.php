<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop — Velvet Vogue</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body data-page="shop">
<script src="js/layout.js"></script>

<div class="page-header">
  <h1>Shop <em style="font-style:italic;color:var(--velvet);">All</em></h1>
  <div class="page-breadcrumb"><a href="index.php">Home</a> / Shop</div>
</div>

<section class="section">
  <div class="container">
    <!-- Filters -->
    <div class="filters-bar">
      <input class="search-input" id="f-search" placeholder="🔍  Search products...">
      <select class="filter-select" id="f-gender">
        <option value="">All Genders</option>
        <option value="men">Men</option>
        <option value="women">Women</option>
        <option value="unisex">Unisex</option>
      </select>
      <select class="filter-select" id="f-category">
        <option value="">All Categories</option>
        <option value="tshirts">T-Shirts</option>
        <option value="formal">Formal Wear</option>
        <option value="dresses">Dresses</option>
        <option value="pants">Pants</option>
        <option value="hoodies">Hoodies & Knits</option>
        <option value="skirts">Skirts</option>
        <option value="jackets">Jackets</option>
        <option value="tops">Tops</option>
      </select>
      <select class="filter-select" id="f-min">
        <option value="">Min Price</option>
        <option value="0">$0</option>
        <option value="30">$30</option>
        <option value="60">$60</option>
        <option value="100">$100</option>
      </select>
      <select class="filter-select" id="f-max">
        <option value="">Max Price</option>
        <option value="50">$50</option>
        <option value="100">$100</option>
        <option value="150">$150</option>
        <option value="200">$200</option>
      </select>
      <span id="results-count" style="font-size:0.82rem;color:var(--smoke);margin-left:auto;"></span>
    </div>

    <!-- Products Grid -->
    <div class="products-grid" id="shop-grid">
      <div class="loader"><div class="spinner"></div></div>
    </div>
  </div>
</section>

<script src="js/app.js"></script>
</body>
</html>
