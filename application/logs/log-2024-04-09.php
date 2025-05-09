<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-09 00:00:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 00:03:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:03:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:04:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-09 00:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:04:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:04:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:04:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:05:10 --> Could not find the language line "products"
ERROR - 2024-04-09 00:06:42 --> Could not find the language line "products"
ERROR - 2024-04-09 00:06:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:06:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:07:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:07:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:07:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:12:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:12:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:12:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:12:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:12:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:12:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:14:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:14:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:14:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:15:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 00:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:16:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:17:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:17:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:17:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:18:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:19:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:19:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:21:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:21:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:21:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:21:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:22:06 --> Could not find the language line "products"
ERROR - 2024-04-09 00:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:22:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:22:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:23:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:23:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:23:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:23:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:23:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:24:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:24:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:24:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:24:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:25:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:25:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:26:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:26:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:27:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:28:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:28:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:28:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:28:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:29:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:29:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:29:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:30:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:30:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 00:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:30:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:31:35 --> Could not find the language line "products"
ERROR - 2024-04-09 00:32:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:32:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:32:47 --> Could not find the language line "Other"
ERROR - 2024-04-09 00:34:08 --> Could not find the language line "Crocs"
ERROR - 2024-04-09 00:36:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 00:36:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:36:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:38:04 --> Could not find the language line "users"
ERROR - 2024-04-09 00:39:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:39:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:39:22 --> Could not find the language line "Other"
ERROR - 2024-04-09 00:43:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:43:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:43:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:43:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:43:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:43:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:45:11 --> Could not find the language line "products"
ERROR - 2024-04-09 00:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:46:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:46:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:46:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:49:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:49:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:49:45 --> Could not find the language line "Other"
ERROR - 2024-04-09 00:50:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 00:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:50:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:50:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:51:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:51:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:51:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:51:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:52:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:52:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:52:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:52:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:52:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:53:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:53:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:53:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:53:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:53:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:54:09 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-09 00:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:54:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:54:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:54:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:54:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-09 00:54:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 00:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:55:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:56:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:56:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:57:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:57:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:57:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 00:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 00:59:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 00:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 00:59:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:00:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:00:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:00:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:00:23 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:00:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 01:01:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:01:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:01:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:02:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:02:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:02:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:02:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:02:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:05:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:05:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:05:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:06:06 --> Could not find the language line "Other"
ERROR - 2024-04-09 01:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:07:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:07:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:07:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:07:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 01:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:08:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 01:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:08:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 01:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:08:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 01:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:09:56 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:11:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:11:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:11:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:11:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:11:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:14:31 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:14:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:14:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:14:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:16:59 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:17:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:17:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:17:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:21:19 --> Could not find the language line "products"
ERROR - 2024-04-09 01:21:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:21:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:22:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:22:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:22:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:29:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:29:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:29:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:29:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:29:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 01:31:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:31:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:33:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:34:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:35:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:35:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:35:53 --> Could not find the language line "products"
ERROR - 2024-04-09 01:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:39:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:39:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:40:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:40:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:40:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:40:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:40:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:40:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:41:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:42:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:42:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:42:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:43:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:43:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 01:47:03 --> Could not find the language line "products"
ERROR - 2024-04-09 01:47:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:47:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:47:56 --> Could not find the language line "Other"
ERROR - 2024-04-09 01:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:49:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:49:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:49:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:49:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:50:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:50:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:50:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:51:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:51:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:54:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:54:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:56:01 --> Could not find the language line "Other"
ERROR - 2024-04-09 01:56:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:56:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 01:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 01:56:57 --> Could not find the language line "products"
ERROR - 2024-04-09 01:58:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 01:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 01:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 01:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:00:25 --> Could not find the language line "Home"
ERROR - 2024-04-09 02:07:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:07:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:07:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:07:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:07:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:08:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:08:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:09:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:09:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:09:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:12:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:12:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:12:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:12:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:13:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:13:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:13:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:13:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-09 02:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:14:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:14:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:15:23 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:22:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:22:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 02:22:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:22:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:27:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:27:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:27:25 --> Could not find the language line "Home"
ERROR - 2024-04-09 02:27:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 02:27:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:27:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:27:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 02:31:05 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:31:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:31:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:32:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:32:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:32:44 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:32:46 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:32:56 --> Could not find the language line "products"
ERROR - 2024-04-09 02:33:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:33:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:33:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:33:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:33:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:33:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:33:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:33:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:35:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 02:37:19 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:37:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:37:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:37:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:37:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:37:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:37:45 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:37:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:37:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:38:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:38:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:38:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:38:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:38:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:40:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 02:40:30 --> Could not find the language line "Home"
ERROR - 2024-04-09 02:40:37 --> Could not find the language line "products"
ERROR - 2024-04-09 02:40:38 --> Could not find the language line "products"
ERROR - 2024-04-09 02:40:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:40:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:40:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:43:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:43:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:44:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:44:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:45:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:45:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:45:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:45:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:49:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:50:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:50:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:50:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:50:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:50:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:51:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:51:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:52:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:52:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:52:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:52:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:52:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:52:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:52:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:52:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:53:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:53:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 02:53:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:53:56 --> Could not find the language line "Other"
ERROR - 2024-04-09 02:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:54:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:54:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:54:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:54:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:54:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:55:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:55:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:55:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:55:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:55:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:55:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 02:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:55:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:55:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:56:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:56:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:56:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:56:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 02:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:56:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 02:56:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 02:56:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 02:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 02:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:00:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 03:01:27 --> Could not find the language line "products"
ERROR - 2024-04-09 03:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:04:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:05:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:05:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:05:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:05:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:05:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:06:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:07:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:07:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:07:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:07:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:08:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:09:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:09:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:09:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:10:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:10:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:11:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:11:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:11:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:11:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:12:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:12:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:12:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:14:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:14:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:14:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:14:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:15:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:15:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:15:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:16:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:16:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:17:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:17:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:17:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:18:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:19:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:19:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:19:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:19:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:19:48 --> Could not find the language line "Home"
ERROR - 2024-04-09 03:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:19:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:19:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:19:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:20:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:20:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:22:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:22:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:22:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:22:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:22:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:29:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:29:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:29:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:29:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:29:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:29:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:29:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 03:30:44 --> Could not find the language line "Home"
ERROR - 2024-04-09 03:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:32:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:32:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:32:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:33:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:33:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:39:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:39:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:39:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:39:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:39:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:41:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:41:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:42:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 03:42:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 03:44:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 03:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 03:47:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:47:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:48:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:48:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:48:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:48:17 --> Could not find the language line "accounts"
ERROR - 2024-04-09 03:50:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:50:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:51:28 --> Could not find the language line "products"
ERROR - 2024-04-09 03:51:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:51:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:51:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:52:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:52:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:52:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:52:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:52:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:52:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:52:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:52:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:52:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:54:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:54:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:54:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:54:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:54:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:55:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 03:59:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:59:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:59:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 03:59:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 03:59:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 03:59:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:00:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:00:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:01:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:01:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:01:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:03:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:04:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:04:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:05:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:05:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:07:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:07:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:07:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:07:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:09:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 04:12:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:12:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:12:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:15:30 --> Could not find the language line "products"
ERROR - 2024-04-09 04:16:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:16:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:16:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:16:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:16:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:16:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:19:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:19:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:20:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:20:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:20:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:21:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:21:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:21:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:22:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:22:48 --> Could not find the language line "products"
ERROR - 2024-04-09 04:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:23:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:23:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 04:23:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:24:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:24:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 04:27:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:27:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:27:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:28:30 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:28:53 --> Could not find the language line "products"
ERROR - 2024-04-09 04:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:29:23 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:30:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:31:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:31:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:31:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:31:28 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:31:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 04:32:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:32:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:32:01 --> Could not find the language line "Other"
ERROR - 2024-04-09 04:33:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:33:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 04:37:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:39:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:39:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:39:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:39:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:39:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:39:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:40:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:41:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:41:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:41:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:44:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:44:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:44:41 --> Could not find the language line "products"
ERROR - 2024-04-09 04:44:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:44:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:44:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:47:02 --> Could not find the language line "Home"
ERROR - 2024-04-09 04:48:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:48:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:48:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:49:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:49:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:51:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:51:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:51:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:51:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:51:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:51:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:52:32 --> Could not find the language line "products"
ERROR - 2024-04-09 04:55:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:55:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:56:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:56:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:57:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:57:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:57:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:57:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:57:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 04:58:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 04:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 04:58:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:00:08 --> Could not find the language line "products"
ERROR - 2024-04-09 05:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:03:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:03:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:03:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:04:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:04:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:04:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:04:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:04:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:05:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:05:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:05:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 05:06:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:06:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:06:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 05:07:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:07:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:07:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:07:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:07:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:08:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:08:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:09:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:10:14 --> Could not find the language line "Other"
ERROR - 2024-04-09 05:10:15 --> Could not find the language line "users"
ERROR - 2024-04-09 05:13:01 --> Could not find the language line "Other"
ERROR - 2024-04-09 05:13:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:13:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:13:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:14:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:14:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:14:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:17:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:17:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:18:49 --> Could not find the language line "products"
ERROR - 2024-04-09 05:19:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:19:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:21:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 05:21:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:22:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:22:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:24:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:24:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:25:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:25:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:25:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:26:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:27:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:27:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:27:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:28:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:28:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:28:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:28:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:28:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:28:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:29:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:29:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:29:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:30:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:31:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:32:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:32:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:32:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:32:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:32:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:33:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:33:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:33:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:33:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:33:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:33:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:34:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:34:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:34:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:34:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:34:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:34:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:35:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:35:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:35:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:35:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:35:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:36:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:36:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:38:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:38:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:38:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:38:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:39:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:40:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:40:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:41:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:41:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 05:42:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:42:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:42:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:43:25 --> Could not find the language line "products"
ERROR - 2024-04-09 05:43:49 --> Could not find the language line "products"
ERROR - 2024-04-09 05:44:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:44:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:44:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:44:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 05:44:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 05:44:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 05:46:38 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:46:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:47:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:47:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:47:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:48:28 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:50:40 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:50:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 05:51:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:51:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 05:51:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 05:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:53:03 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:53:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:53:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:53:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:54:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:54:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:54:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:55:23 --> Could not find the language line "Other"
ERROR - 2024-04-09 05:56:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 05:56:42 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 05:57:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:57:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 05:59:35 --> Could not find the language line "products"
ERROR - 2024-04-09 06:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:00:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:02:47 --> Could not find the language line "products"
ERROR - 2024-04-09 06:03:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:03:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:03:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:03:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:04:38 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:05:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:05:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:05:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 06:05:28 --> Could not find the language line "Other"
ERROR - 2024-04-09 06:08:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:08:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:09:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:09:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:09:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:09:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:10:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:10:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:10:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:12:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:12:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:12:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:13:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 06:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:15:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:15:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:15:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:15:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 06:15:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 06:15:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:15:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:15:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:15:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:15:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:17:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:17:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:17:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:18:17 --> Could not find the language line "Other"
ERROR - 2024-04-09 06:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:23:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:23:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:23:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:24:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:25:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:25:57 --> Could not find the language line "Other"
ERROR - 2024-04-09 06:26:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:26:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:26:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:26:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:26:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:26:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:26:57 --> Could not find the language line "Other"
ERROR - 2024-04-09 06:27:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:27:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:27:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:27:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:27:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:27:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:27:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:27:56 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:28:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:28:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:28:02 --> Could not find the language line "products"
ERROR - 2024-04-09 06:28:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:28:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:29:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:29:48 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:32:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:32:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:32:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:33:00 --> Could not find the language line "products"
ERROR - 2024-04-09 06:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:34:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:34:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:34:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:34:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:34:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:34:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:34:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:34:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:35:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:35:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:35:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:38:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:38:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:38:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:38:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 06:40:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:40:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:44:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:44:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:44:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:48:23 --> Could not find the language line "Other"
ERROR - 2024-04-09 06:50:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 06:50:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 06:52:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:52:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:52:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:53:08 --> Could not find the language line "Home"
ERROR - 2024-04-09 06:53:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:53:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:53:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:54:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:54:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:54:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:59:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 06:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 06:59:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 06:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 06:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:00:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 07:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:00:33 --> Could not find the language line "products"
ERROR - 2024-04-09 07:01:24 --> Could not find the language line "products"
ERROR - 2024-04-09 07:01:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:01:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:03:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:03:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:03:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:03:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:03:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:05:04 --> Could not find the language line "products"
ERROR - 2024-04-09 07:05:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 07:07:18 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-09 07:07:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:10:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:10:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:10:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:10:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:11:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:11:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:11:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:11:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 07:11:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:11:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:12:10 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:13:58 --> Could not find the language line "Other"
ERROR - 2024-04-09 07:17:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:17:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:17:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:17:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:18:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:18:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:18:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:19:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:20:00 --> Could not find the language line "products"
ERROR - 2024-04-09 07:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:20:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:20:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:20:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:20:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:20:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:21:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:21:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:22:01 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:22:02 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-09 07:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:22:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:23:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:23:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:26:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:26:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:27:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:27:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:27:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:27:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:28:20 --> Could not find the language line "products"
ERROR - 2024-04-09 07:28:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:28:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:28:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:29:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:29:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:29:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:30:08 --> Could not find the language line "Other"
ERROR - 2024-04-09 07:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:31:56 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:32:44 --> Could not find the language line "products"
ERROR - 2024-04-09 07:32:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:35:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:35:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:35:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:35:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:35:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:36:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:36:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:37:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:38:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:39:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:39:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:41:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-09 07:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:45:07 --> Could not find the language line "Home"
ERROR - 2024-04-09 07:45:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 07:45:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 07:45:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 07:45:11 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-09 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:46:02 --> Could not find the language line "Bracelets"
ERROR - 2024-04-09 07:48:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:48:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:48:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:48:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:48:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:49:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:49:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:51:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:51:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:51:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:51:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:51:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 07:52:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:54:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:54:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:54:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:55:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:55:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 07:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 07:56:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:56:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:56:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 07:57:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 07:57:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 07:57:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:01:48 --> Could not find the language line "Other"
ERROR - 2024-04-09 08:04:15 --> Could not find the language line "products"
ERROR - 2024-04-09 08:05:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:05:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:05:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:05:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:05:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:05:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:05:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:05:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 08:06:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 08:08:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:08:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:08:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:08:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:08:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:13:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:13:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:14:04 --> Could not find the language line "Other"
ERROR - 2024-04-09 08:14:26 --> Could not find the language line "products"
ERROR - 2024-04-09 08:16:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:16:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:16:41 --> Could not find the language line "products"
ERROR - 2024-04-09 08:16:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:16:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:16:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:20:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:20:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:20:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:21:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:21:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 08:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:28:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:28:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:28:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:30:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:30:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:30:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:30:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:30:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:32:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:32:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:32:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:35:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:35:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:35:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:36:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:36:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:36:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:37:29 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:37:51 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:38:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:38:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:38:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:42:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:43:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 08:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:45:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 08:45:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:46:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:46:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 08:46:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 08:47:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:47:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:47:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:47:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:48:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:48:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:48:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:48:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:48:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:48:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 08:49:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:49:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:49:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:49:06 --> Could not find the language line "products"
ERROR - 2024-04-09 08:49:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:49:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:51:19 --> Could not find the language line "products"
ERROR - 2024-04-09 08:52:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 08:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 08:53:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:53:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:53:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:55:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:55:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:57:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 08:57:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 08:57:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 08:58:27 --> Could not find the language line "products"
ERROR - 2024-04-09 08:58:39 --> Could not find the language line "Home"
ERROR - 2024-04-09 08:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:01:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:01:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:04:21 --> Could not find the language line "products"
ERROR - 2024-04-09 09:04:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:04:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:04:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:07:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:07:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:07:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:07:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:07:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:08:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:08:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:09:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:09:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:09:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:09:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:09:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:09:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:13:29 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:14:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:14:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:14:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:14:08 --> Could not find the language line "products"
ERROR - 2024-04-09 09:15:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:15:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:15:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:16:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:16:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:16:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:16:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 09:16:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:16:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:16:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:17:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:17:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:17:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:18:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:18:44 --> Could not find the language line "Other"
ERROR - 2024-04-09 09:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:20:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:20:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:20:58 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:21:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:21:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:21:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:21:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:22:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:22:37 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:23:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:23:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:23:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:23:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:24:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 09:24:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:24:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:25:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:25:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:25:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:25:35 --> Could not find the language line "products"
ERROR - 2024-04-09 09:25:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:26:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:26:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:26:45 --> Could not find the language line "products"
ERROR - 2024-04-09 09:27:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:27:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:27:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:27:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:27:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:27:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:27:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:28:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 09:28:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:28:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:29:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:29:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:29:39 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:29:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:30:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:30:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:30:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:31:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:31:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:32:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 09:32:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:32:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:32:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:33:23 --> Could not find the language line "products"
ERROR - 2024-04-09 09:33:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:33:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:33:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:34:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:34:43 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:37:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 09:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:38:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 09:39:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:39:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:39:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 09:40:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:41:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:41:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:42:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:42:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:42:14 --> Could not find the language line "products"
ERROR - 2024-04-09 09:44:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:44:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:44:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:44:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:44:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:44:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:48:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:48:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:49:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:49:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:52:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:52:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:52:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 09:53:23 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:56:22 --> Could not find the language line "users"
ERROR - 2024-04-09 09:56:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 09:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 09:56:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 09:57:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 09:57:38 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:57:46 --> Could not find the language line "Home"
ERROR - 2024-04-09 09:57:47 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:00:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:00:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:02:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:02:28 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:02:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:02:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:02:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:02:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:02:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:02:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:04:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:05:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:05:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:07:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 10:08:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:08:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:08:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:08:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:08:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:08:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:13:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:13:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:13:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:13:47 --> Could not find the language line "Other"
ERROR - 2024-04-09 10:14:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:17:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:17:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:17:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:19:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:20:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:21:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:21:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:23:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:23:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:23:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:23:53 --> Could not find the language line "products"
ERROR - 2024-04-09 10:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:25:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:25:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:28:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:28:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:33:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:33:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:35:37 --> Could not find the language line "products"
ERROR - 2024-04-09 10:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:38:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:38:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:38:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:39:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:39:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:43:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 10:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:45:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:46:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:47:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:47:21 --> Could not find the language line "products"
ERROR - 2024-04-09 10:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:48:00 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:49:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:49:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:49:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:51:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 10:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:52:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 10:53:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 10:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 10:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 10:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:53:30 --> Could not find the language line "Other"
ERROR - 2024-04-09 10:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 10:57:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:58:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:58:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:59:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 10:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:00:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:00:44 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:01:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:02:08 --> Could not find the language line "Socks"
ERROR - 2024-04-09 11:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:05:01 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:05:04 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:10:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 11:12:47 --> 404 Page Not Found: Products/products
ERROR - 2024-04-09 11:13:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:16:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:16:32 --> 404 Page Not Found: Products/products
ERROR - 2024-04-09 11:16:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:21:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 11:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:28:40 --> Could not find the language line "products"
ERROR - 2024-04-09 11:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:31:02 --> Could not find the language line "Home"
ERROR - 2024-04-09 11:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:42:53 --> Could not find the language line "products"
ERROR - 2024-04-09 11:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 11:50:00 --> Could not find the language line "products"
ERROR - 2024-04-09 11:51:03 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:15:23 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:17:27 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:26:23 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:26:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 12:30:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 12:30:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 12:31:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 12:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 12:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:39:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 12:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:46:55 --> Could not find the language line "products"
ERROR - 2024-04-09 12:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 12:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 12:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 12:57:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 12:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 12:57:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 12:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 12:57:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 12:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 12:57:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 12:57:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 12:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 12:57:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 12:59:15 --> Could not find the language line "products"
ERROR - 2024-04-09 12:59:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 13:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:01:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:01:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:01:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:04:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:04:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:04:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:04:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:04:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:04:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:05:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:05:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:06:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:06:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:06:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:06:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:06:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:06:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:06:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 13:07:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:07:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:07:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:08:59 --> Could not find the language line "products"
ERROR - 2024-04-09 13:13:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 13:15:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:15:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:15:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 13:16:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 13:16:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:16:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:17:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:17:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:19:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:19:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:19:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:20:00 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:08 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:20:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 13:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:23:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:23:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:23:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:24:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:24:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:24:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:25:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:25:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:26:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-09 13:26:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:26:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:26:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:28:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:28:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:28:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:32:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:33:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:33:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:33:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:34:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:34:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:34:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:35:05 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:36:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:36:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:36:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:36:06 --> Could not find the language line "Socks"
ERROR - 2024-04-09 13:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:36:30 --> Could not find the language line "Socks"
ERROR - 2024-04-09 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:36:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:36:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:36:46 --> Could not find the language line "Socks"
ERROR - 2024-04-09 13:37:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 13:37:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:37:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:37:19 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:37:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 13:37:42 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:37:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:38:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-09 13:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:38:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:40:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:40:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:42:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:42:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:43:43 --> Could not find the language line "products"
ERROR - 2024-04-09 13:43:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:45:35 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:46:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:48:01 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:49:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:49:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:49:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:50:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:51:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:51:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:51:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:52:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:52:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:52:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:52:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:52:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:53:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:53:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:53:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:53:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:53:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:54:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 13:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:55:12 --> Could not find the language line "Other"
ERROR - 2024-04-09 13:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:55:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:55:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 13:55:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:56:36 --> Could not find the language line "Home"
ERROR - 2024-04-09 13:56:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:57:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:57:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:57:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:57:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:57:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:57:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:58:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 13:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 13:58:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 13:58:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:59:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:59:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 13:59:45 --> 404 Page Not Found: Cart/products
ERROR - 2024-04-09 13:59:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:00:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:00:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:00:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:00:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:00:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:01:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:02:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:02:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:02:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:02:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:02:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:03:09 --> Could not find the language line "Other"
ERROR - 2024-04-09 14:03:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:03:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:03:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:03:30 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:05:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:05:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:05:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:06:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:06:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:06:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:09:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 14:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:10:50 --> Could not find the language line "Other"
ERROR - 2024-04-09 14:11:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:11:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:11:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:11:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:11:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:11:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:12:11 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:13:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:15:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:15:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:15:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:18:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:18:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:18:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:19:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:19:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:19:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:20:56 --> Could not find the language line "products"
ERROR - 2024-04-09 14:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:23:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:23:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:23:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:24:04 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:26:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:31:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:31:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:31:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:31:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:31:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:32:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:32:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:32:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:32:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 14:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:32:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:33:47 --> Could not find the language line "products"
ERROR - 2024-04-09 14:34:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:34:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:34:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:34:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:34:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:34:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:34:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:36:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:36:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:36:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:37:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 14:37:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:37:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:37:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:40:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:40:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:40:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:40:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:40:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:41:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:41:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:41:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:41:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:41:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:41:58 --> Could not find the language line "products"
ERROR - 2024-04-09 14:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:42:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:45:11 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:45:17 --> Could not find the language line "Bracelets"
ERROR - 2024-04-09 14:45:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:45:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:45:46 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:45:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 14:46:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 14:46:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 14:46:47 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:47:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:47:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:47:49 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:48:02 --> Could not find the language line "Perfume"
ERROR - 2024-04-09 14:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:48:19 --> Could not find the language line "Perfume"
ERROR - 2024-04-09 14:48:20 --> Could not find the language line "Home"
ERROR - 2024-04-09 14:48:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 14:48:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 14:48:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 14:51:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:51:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:53:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 14:53:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 14:53:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 14:53:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 14:54:53 --> Could not find the language line "products"
ERROR - 2024-04-09 15:00:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:00:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:00:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:00:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:00:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:00:55 --> Could not find the language line "products"
ERROR - 2024-04-09 15:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:03:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:03:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:03:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:03:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:04:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 15:04:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:05:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:05:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:06:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:06:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:06:35 --> Could not find the language line "products"
ERROR - 2024-04-09 15:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:09:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:09:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:09:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:10:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:11:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:11:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:12:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:13:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:13:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:13:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:13:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:13:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:13:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:14:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 15:15:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:15:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:16:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:16:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:16:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:17:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:17:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:17:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:18:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:18:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:21:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:21:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:21:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:21:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:21:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:23:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:23:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:23:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:24:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:26:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 15:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:28:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 15:29:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:29:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:29:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:31:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:31:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:31:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:34:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:34:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:41:23 --> Could not find the language line "products"
ERROR - 2024-04-09 15:42:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:46:28 --> Could not find the language line "Other"
ERROR - 2024-04-09 15:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:48:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:48:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:48:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:48:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:50:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 15:52:57 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:53:34 --> Could not find the language line "Bracelets"
ERROR - 2024-04-09 15:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:54:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 15:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 15:57:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 15:57:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 15:57:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 16:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:00:16 --> Could not find the language line "Other"
ERROR - 2024-04-09 16:03:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:04:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:04:26 --> Could not find the language line "Other"
ERROR - 2024-04-09 16:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:05:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:05:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:14:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 16:16:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 16:16:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 16:16:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 16:24:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-09 16:24:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:28:18 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 16:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:34:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 16:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:42:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:44:04 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:53:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 16:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 16:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 16:54:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 16:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 16:54:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 16:54:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 16:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:54:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:55:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 16:55:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 16:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 16:55:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 16:56:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:57:51 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:57:56 --> Could not find the language line "Home"
ERROR - 2024-04-09 16:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 16:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:00:11 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:01:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:01:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:11:21 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:13:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:13:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:13:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:15:55 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:15:55 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:16:50 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:16:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-09 17:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:17:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:17:20 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:18:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:19:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-09 17:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:20:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-09 17:20:29 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:20:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:20:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:20:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:28:20 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:28:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:28:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:29:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:29:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:29:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:30:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:30:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:31:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 17:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:32:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:34:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:34:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:34:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 17:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:34:43 --> Could not find the language line "Socks"
ERROR - 2024-04-09 17:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:35:03 --> Could not find the language line "Socks"
ERROR - 2024-04-09 17:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:35:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:35:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:35:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:35:27 --> Could not find the language line "Socks"
ERROR - 2024-04-09 17:35:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:35:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:35:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:35:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:35:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:36:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:36:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 17:36:05 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:36:41 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:39:18 --> Could not find the language line "Home"
ERROR - 2024-04-09 17:39:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:39:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:40:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:43:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:43:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:47:32 --> Could not find the language line "Other"
ERROR - 2024-04-09 17:49:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:49:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:49:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 17:52:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 17:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 17:52:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 17:53:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:05:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:05:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:06:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:07:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:10:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:11:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:12:00 --> Could not find the language line "products"
ERROR - 2024-04-09 18:16:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:16:34 --> Could not find the language line "products"
ERROR - 2024-04-09 18:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:20:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:26:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:26:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:26:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:27:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:27:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:27:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:28:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:28:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:28:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:32:29 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:32:40 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:34:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:34:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:35:26 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:38:00 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:40:42 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:40:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:41:05 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:41:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:41:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:41:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:42:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:42:27 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:43:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:43:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:46:03 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:48:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:48:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:48:23 --> 404 Page Not Found: Products/products
ERROR - 2024-04-09 18:49:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:49:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 18:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:49:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 18:50:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:50:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:51:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:51:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:52:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:52:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:52:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:52:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:52:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:52:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:53:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:53:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 18:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 18:53:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:56:04 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:56:50 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:58:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:58:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:58:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:58:44 --> Could not find the language line "Home"
ERROR - 2024-04-09 18:58:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:58:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:58:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 18:59:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 18:59:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 18:59:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:01:13 --> Could not find the language line "Socks"
ERROR - 2024-04-09 19:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:03:17 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:06:51 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:07:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:07:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:07:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:11:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:11:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:12:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:14:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:14:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:14:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:14:51 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:16:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 19:16:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 19:17:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:17:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:18:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 19:18:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:18:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:18:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:20:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:26:09 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:29:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 19:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:32:35 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:33:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 19:33:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:33:55 --> Could not find the language line "Home"
ERROR - 2024-04-09 19:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:45:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:45:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 19:46:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:46:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:51:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:55:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:55:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:57:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 19:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 19:57:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 19:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 19:59:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 19:59:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 19:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:00:11 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:05:32 --> Could not find the language line "products"
ERROR - 2024-04-09 20:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:18:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:18:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:19:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:20:48 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:21:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:21:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:22:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:22:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:22:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:24:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:24:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:24:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:26:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:26:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:26:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:26:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:26:54 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:29:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:29:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:30:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:31:12 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:31:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:31:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:31:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:31:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:31:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 20:32:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:32:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 20:32:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 20:32:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:32:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:32:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 20:33:00 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:33:33 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:34:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:34:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:34:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:34:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:35:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:36:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:36:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:36:30 --> Could not find the language line "products"
ERROR - 2024-04-09 20:37:51 --> Could not find the language line "products"
ERROR - 2024-04-09 20:39:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:39:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:42:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:42:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:42:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:44:03 --> Could not find the language line "products"
ERROR - 2024-04-09 20:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:48:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:48:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 20:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:49:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:49:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:49:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:49:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:49:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 20:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:50:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:50:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:50:53 --> Could not find the language line "Other"
ERROR - 2024-04-09 20:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:51:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:51:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:51:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:51:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:52:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:53:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:53:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 20:53:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 20:53:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 20:53:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:53:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:53:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:55:51 --> Could not find the language line "Home"
ERROR - 2024-04-09 20:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:56:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:56:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 20:56:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:58:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:58:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:59:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:59:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 20:59:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 20:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-09 21:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:03:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:03:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:03:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:43 --> Could not find the language line "Home"
ERROR - 2024-04-09 21:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:03:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:03:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:04:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:04:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:04:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:04:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:06:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:12:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:17:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:19:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:19:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:19:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:19:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:19:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:20:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:20:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:21:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:21:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:22:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:23:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 21:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:23:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:23:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:24:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:24:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:29:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:29:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-09 21:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:34:36 --> Could not find the language line "Home"
ERROR - 2024-04-09 21:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:37:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:37:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:38:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:40:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:40:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:40:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:40:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:41:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:41:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:42:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:42:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:47:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 21:47:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 21:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:52:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:53:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 21:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 21:53:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 21:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:57:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:57:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:58:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:59:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:59:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:59:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:59:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 21:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 21:59:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:00:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-09 22:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:04:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:05:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:05:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:10:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 22:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 22:10:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 22:11:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 22:11:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-09 22:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:28:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 22:28:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 22:28:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 22:28:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 22:28:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 22:29:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 22:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 22:29:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 22:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:30:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:30:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:30:19 --> Could not find the language line "Home"
ERROR - 2024-04-09 22:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:37:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 22:37:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 22:37:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 22:38:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 22:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 22:38:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 22:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:47:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-09 22:48:10 --> Could not find the language line "Other"
ERROR - 2024-04-09 22:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-09 22:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:57:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 22:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 22:57:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 22:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 22:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 22:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:00:24 --> Could not find the language line "Home"
ERROR - 2024-04-09 23:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:03:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:03:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:03:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:03:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:04:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:04:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:04:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:04:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:04:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:05:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:05:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:05:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:05:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:05:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:06:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:06:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:06:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:07:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:07:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:07:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:07:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:07:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:07:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:07:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:07:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:07:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:07:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:08:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:08:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:10:45 --> Could not find the language line "Home"
ERROR - 2024-04-09 23:10:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:10:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:10:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:10:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-09 23:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:16:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:17:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:17:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:17:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:20:57 --> Could not find the language line "products"
ERROR - 2024-04-09 23:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:26:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:27:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:27:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-09 23:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:31:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:31:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:32:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:32:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:33:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:33:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:41:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:41:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:43:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:43:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:44:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:44:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:44:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:45:30 --> Could not find the language line "Home"
ERROR - 2024-04-09 23:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:45:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:45:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:47:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:47:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:49:16 --> Could not find the language line "users"
ERROR - 2024-04-09 23:49:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-09 23:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:54:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:56:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:56:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:57:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:57:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-09 23:57:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:57:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:57:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:59:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:59:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:59:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-09 23:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-09 23:59:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-09 23:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-09 23:59:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
