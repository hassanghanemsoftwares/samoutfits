ALTER TABLE `product_images` ADD `order_nb` TINYINT UNSIGNED NULL AFTER `item_id`;

ALTER TABLE `transactions` ADD `hide` TINYINT UNSIGNED NULL AFTER `updated_on`;