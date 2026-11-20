CREATE DATABASE IF NOT EXISTS tp_php
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE tp_php;

DROP TABLE IF EXISTS products;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL
);

INSERT INTO products (name, price, quantity) VALUES
('Clavier', 150.00, 12),
('Souris', 80.00, 25),
('Écran', 1200.00, 5),
('Casque', 350.00, 8),
('Clé USB', 60.00, 30);