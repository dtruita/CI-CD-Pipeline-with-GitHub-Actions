CREATE DATABASE IF NOT EXISTS gdrhkwmq_test;
USE gdrhkwmq_test;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO products (name, price) VALUES
('Sample Product A', 19.99),
('Sample Product B', 29.99);
