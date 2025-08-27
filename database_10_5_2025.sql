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

-- UPDATE `transactions` SET `payment_method_gateway`='C.O.D' WHERE payment_method_gateway IS null;
-- UPDATE `transactions` SET `payment_method_gateway_status` = null WHERE payment_method_gateway = 'C.O.D' ;

-- UPDATE `orders` SET `payment_method`='C.O.D' WHERE payment_method  IS null;
-- UPDATE `orders` SET `payment_status` = null WHERE payment_method = 'C.O.D' ;


-- INSERT INTO configurations (name, type, valueStr)
-- VALUES (
--   'whatsapp_order_confirmation_msg',
--   1,
--   ''
-- );

-- ALTER TABLE configurations 
-- MODIFY valueStr TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


-- ALTER TABLE `orders` CHANGE `order_date` `order_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;

-- ALTER TABLE `items` ADD `size_guidance` VARCHAR(255) NULL AFTER `fragile`;
-- INSERT INTO `configurations` (`id`, `name`, `type`, `valueInt`, `valueStr`) VALUES (NULL, 'size_guidances', '1', NULL, '✅ True to Size,⬆️ Runs Small (Recommend upsizing),⬇️ Runs Large (Recommend Downsizing)');


-- ALTER TABLE `transactions` CHANGE `op_nb` `op_nb` DOUBLE UNSIGNED NULL DEFAULT NULL;



-- ALTER TABLE `items` ADD `main_item_id` INT UNSIGNED NULL DEFAULT NULL AFTER `size_guidance`;
-- ALTER TABLE `items` ADD CONSTRAINT `item_id_main_item_id` FOREIGN KEY (`main_item_id`) REFERENCES `items`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;
-- ALTER TABLE `items` ADD `arrangement` TINYINT UNSIGNED NULL DEFAULT NULL AFTER `main_item_id`;

SELECT * FROM `items` WHERE barcode REGEXP '.*-[0-9]+$' ORDER BY barcode ASC;

UPDATE items AS child
JOIN items AS parent
  ON parent.barcode = CONCAT(SUBSTRING_INDEX(child.barcode, '-', 1), '-1')
SET child.main_item_id = parent.id,
    child.arrangement = CAST(SUBSTRING_INDEX(child.barcode, '-', -1) AS UNSIGNED)
WHERE child.barcode REGEXP '.*-[0-9]+$';




--get duplicate barcodes
-- SELECT p.* FROM items p JOIN ( SELECT barcode FROM items GROUP BY barcode HAVING COUNT(*) > 1 ) dup ON p.barcode = dup.barcode ORDER BY p.barcode;


