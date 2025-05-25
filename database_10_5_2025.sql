-- CREATE TABLE newsletter_subscribers (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     email VARCHAR(255) NOT NULL UNIQUE,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- ) CHARACTER SET utf8 COLLATE utf8_general_ci;


-- ALTER TABLE `orders` ADD `payment_method` VARCHAR(50) NULL AFTER `gest`;
-- ALTER TABLE `orders` ADD `payment_status` VARCHAR(100) NULL AFTER `payment_method`;
-- ALTER TABLE `items` ADD `cool_storage` TINYINT UNSIGNED NOT NULL DEFAULT '0' AFTER `link`, ADD `flammable_handling` TINYINT UNSIGNED NOT NULL DEFAULT '0' AFTER `cool_storage`;
-- ALTER TABLE `items` ADD `fragile` TINYINT UNSIGNED NOT NULL DEFAULT '0' AFTER `flammable_handling`;


-- ALTER TABLE `transactions` ADD `payment_method_gateway` VARCHAR(100) NULL DEFAULT NULL AFTER `payment_method`;
-- ALTER TABLE `transactions` ADD `payment_method_gateway_status` VARCHAR(100) NULL DEFAULT NULL AFTER `payment_method_gateway`;

