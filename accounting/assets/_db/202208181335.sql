ALTER TABLE `items` ADD `sub_category` VARCHAR(255) NULL AFTER `category`;
ALTER TABLE `items` ADD `stock_clearance` TINYINT(1) UNSIGNED NULL AFTER `publish`;