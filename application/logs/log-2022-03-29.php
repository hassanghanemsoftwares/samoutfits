<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-29 06:06:55 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:49:26 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:49:50 --> 404 Page Not Found: Checkout/test
ERROR - 2022-03-29 10:49:53 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:53:33 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:54:17 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:54:40 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:55:36 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:58:19 --> Could not find the language line "Home"
ERROR - 2022-03-29 10:58:43 --> Query error: Unknown column 'transaction_items.qty * transaction_items.mvt_type' in 'field list' - Invalid query: SELECT `items`.*, `product_images`.`image_name`, `transaction_items`.`qty * transaction_items`.`mvt_type` as `tot_qty`
FROM `items`
INNER JOIN `product_images` ON `product_images`.`item_id` = `items`.`id`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
ORDER BY `id` DESC
ERROR - 2022-03-29 10:59:05 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:06:33 --> Query error: Unknown column 'item.id' in 'group statement' - Invalid query: SELECT `items`.*, `product_images`.`image_name`, SUM(transaction_items.qty * transaction_items.mvt_type) as tot_qty
FROM `items`
INNER JOIN `product_images` ON `product_images`.`item_id` = `items`.`id`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
INNER JOIN `transactions` ON `transaction_items`.`transaction_id` = `transactions`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
GROUP BY `item`.`id`
ORDER BY `id` DESC
ERROR - 2022-03-29 11:07:20 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as tot
FROM `items`
INNER JOIN `product_images` ON `product_images`.`item_id` ' at line 1 - Invalid query: SELECT `items`.*, `product_images`.`image_name`, sum() as tot
FROM `items`
INNER JOIN `product_images` ON `product_images`.`item_id` = `items`.`id`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
GROUP BY `transaction_items`.`id`, `items`.`id`
ORDER BY `id` DESC
ERROR - 2022-03-29 11:43:47 --> Severity: error --> Exception: Call to undefined method Item::calculate_product_total_qty_in_primary_warehouse() C:\wamp64\www\ecomerce_ahmad\application\models\Item.php 66
ERROR - 2022-03-29 11:50:25 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 66
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: barcode C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 94
ERROR - 2022-03-29 11:50:25 --> Severity: Notice --> Undefined index: price C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 97
ERROR - 2022-03-29 11:50:45 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:55:37 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:37 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:43 --> Severity: Notice --> Undefined index: total_qty C:\wamp64\www\ecomerce_ahmad\application\views\home\index.php 69
ERROR - 2022-03-29 11:55:55 --> Query error: Unknown column 'tot' in 'order clause' - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
GROUP BY `items`.`id`
ORDER BY `tot` DESC
ERROR - 2022-03-29 11:56:05 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:56:25 --> Could not find the language line "Home"
ERROR - 2022-03-29 11:58:36 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:03:11 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:05:55 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:06:25 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:06:49 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:09:09 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:10:08 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:18:47 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:20:09 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:42:33 --> Could not find the language line "Home"
ERROR - 2022-03-29 12:44:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC, `items`.`price` ASC
 LIMIT 30' at line 9 - Invalid query: SELECT `items`.*, SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes')
GROUP BY `items`.`id`
ORDER BY `total_qty`,  DESC, `items`.`price` ASC
 LIMIT 30
ERROR - 2022-03-29 12:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 12:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2022-03-29 13:00:09 --> 404 Page Not Found: Assets/css
