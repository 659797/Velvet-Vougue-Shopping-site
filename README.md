# Velvet Vogue — E-Commerce Website

A full-stack e-commerce website for "Velvet Vogue" clothing store.

## Tech Stack
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP 7.4+
- **Database**: MySQL

## File Structure
```
velvet-vogue/
├── index.html          ← Homepage
├── shop.html           ← Product listing + filters
├── product.html        ← Single product detail
├── cart.html           ← Cart + Checkout
├── login.html          ← Customer login
├── register.html       ← Customer registration
├── account.html        ← Customer account/orders
├── contact.html        ← Contact/inquiry form
├── admin.html          ← Admin dashboard
├── css/
│   └── style.css       ← All styles
├── js/
│   ├── layout.js       ← Shared navbar + footer
│   └── app.js          ← All frontend logic
├── php/
│   ├── config.php      ← DB config + helpers
│   └── api.php         ← Unified REST API
└── database.sql        ← DB setup + sample data
```

## Setup Instructions

### 1. Database Setup
```sql
-- Run in MySQL or phpMyAdmin:
source /path/to/database.sql
```

### 2. Configure Database
Edit `php/config.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_mysql_user');
define('DB_PASS', 'your_mysql_password');
define('DB_NAME', 'velvet_vogue');
```

### 3. Deploy
- Place all files in your web server's document root (e.g., `htdocs/` or `www/`)
- Ensure PHP is enabled on your server (XAMPP, WAMP, LAMP, etc.)
- Open `http://localhost/velvet-vogue/` in your browser

## Demo Credentials
| Role | Email | Password |
|------|-------|----------|
| Admin | admin@velvetvogue.com | admin123 |
| Customer | Register on site | Your choice |

## Features
- ✅ Homepage with hero, categories, featured products, promotions
- ✅ Shop with filters (gender, category, price, search)
- ✅ Product detail page with size/color/qty selection
- ✅ Shopping cart (add, update, remove items)
- ✅ Checkout with order placement
- ✅ Customer registration & login
- ✅ Customer account with order history
- ✅ Admin dashboard (manage products, view orders & inquiries)
- ✅ Contact/inquiry form
- ✅ Responsive design (mobile, tablet, desktop)
- ✅ Session-based cart (works for guests too)

## API Endpoints (php/api.php?action=...)
| Action | Method | Description |
|--------|--------|-------------|
| `me` | GET | Current user session |
| `login` | POST | Authenticate user |
| `register` | POST | Create new account |
| `logout` | GET | End session |
| `products` | GET | List products (with filters) |
| `product` | GET | Single product details |
| `add_product` | POST | Admin: add product |
| `delete_product` | GET | Admin: delete product |
| `cart` | GET | Get cart items |
| `cart_add` | POST | Add item to cart |
| `cart_update` | POST | Update quantity |
| `cart_remove` | GET | Remove cart item |
| `cart_count` | GET | Cart item count |
| `checkout` | POST | Place order |
| `orders` | GET | Get orders |
| `inquiry` | POST | Submit inquiry |
| `inquiries` | GET | Admin: view inquiries |
