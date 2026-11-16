-- Velvet Vogue Database Setup
CREATE DATABASE IF NOT EXISTS velvet_vogue;
USE velvet_vogue;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('customer','admin') DEFAULT 'customer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    category VARCHAR(50) NOT NULL,
    gender ENUM('men','women','unisex') NOT NULL,
    sizes JSON,
    colors JSON,
    image VARCHAR(255),
    stock INT DEFAULT 0,
    is_new TINYINT(1) DEFAULT 0,
    is_featured TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    session_id VARCHAR(100),
    product_id INT NOT NULL,
    size VARCHAR(10),
    color VARCHAR(50),
    quantity INT DEFAULT 1,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(100),
    email VARCHAR(150),
    address TEXT,
    total DECIMAL(10,2),
    status ENUM('pending','processing','shipped','delivered') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    size VARCHAR(10),
    color VARCHAR(50),
    quantity INT,
    price DECIMAL(10,2),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(150),
    subject VARCHAR(200),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin user (password: admin123)
INSERT INTO users (name, email, password, role) VALUES 
('Admin', 'admin@velvetvogue.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

-- Sample Products
INSERT INTO products (name, description, price, category, gender, sizes, colors, image, stock, is_new, is_featured) VALUES
('Urban Flex Tee', 'Premium cotton tee with relaxed fit perfect for everyday wear.', 29.99, 'tshirts', 'unisex', '["XS","S","M","L","XL","XXL"]', '["White","Black","Gray","Navy"]', 'tee1.jpg', 50, 1, 1),
('Velvet Classic Blazer', 'Structured blazer in premium fabric for a sharp, polished look.', 149.99, 'formal', 'men', '["S","M","L","XL","XXL"]', '["Black","Navy","Charcoal"]', 'blazer1.jpg', 20, 0, 1),
('Flowy Summer Dress', 'Lightweight floral dress perfect for warm days and evenings out.', 79.99, 'dresses', 'women', '["XS","S","M","L","XL"]', '["Floral Blue","Floral Pink","White"]', 'dress1.jpg', 35, 1, 1),
('Slim Fit Chinos', 'Modern slim-cut chinos in stretch fabric for all-day comfort.', 69.99, 'pants', 'men', '["28","30","32","34","36"]', '["Beige","Olive","Navy","Black"]', 'chinos1.jpg', 40, 0, 1),
('Oversized Hoodie', 'Cozy oversized hoodie in premium fleece, perfect for layering.', 89.99, 'hoodies', 'unisex', '["XS","S","M","L","XL","XXL"]', '["Cream","Black","Dusty Pink","Sage"]', 'hoodie1.jpg', 60, 1, 0),
('Tailored Midi Skirt', 'Elegant midi skirt with subtle texture for a refined feminine look.', 89.99, 'skirts', 'women', '["XS","S","M","L","XL"]', '["Camel","Black","Burgundy"]', 'skirt1.jpg', 25, 0, 1),
('Cargo Street Pants', 'Utility-inspired cargo pants with modern streetwear edge.', 99.99, 'pants', 'unisex', '["XS","S","M","L","XL"]', '["Khaki","Black","Army Green"]', 'cargo1.jpg', 30, 1, 0),
('Silk Wrap Blouse', 'Luxurious silk-feel blouse with wrap silhouette for effortless elegance.', 119.99, 'tops', 'women', '["XS","S","M","L","XL"]', '["Ivory","Blush","Cobalt","Emerald"]', 'blouse1.jpg', 20, 0, 1),
('Denim Jacket Classic', 'Timeless denim jacket with a modern fit for casual cool.', 139.99, 'jackets', 'unisex', '["XS","S","M","L","XL","XXL"]', '["Light Wash","Dark Wash","Black"]', 'denim1.jpg', 25, 0, 1),
('Linen Formal Shirt', 'Breathable linen shirt for a relaxed yet polished look.', 79.99, 'formal', 'men', '["S","M","L","XL","XXL"]', '["White","Sky Blue","Blush"]', 'shirt1.jpg', 45, 1, 0),
('Mini Pleated Skirt', 'Trendy pleated mini skirt that pairs perfectly with everything.', 59.99, 'skirts', 'women', '["XS","S","M","L"]', '["Black","Plaid","White","Pink"]', 'miniskirt1.jpg', 40, 1, 0),
('Knit Cardigan', 'Soft ribbed cardigan for a cozy, put-together look.', 99.99, 'hoodies', 'women', '["XS","S","M","L","XL"]', '["Oatmeal","Cocoa","Dusty Blue"]', 'cardigan1.jpg', 30, 0, 1);
