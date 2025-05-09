<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-15 00:00:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:01:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:02:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 00:02:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 00:02:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 00:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:09:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:09:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:13:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:18:34 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:21:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:22:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 00:22:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 00:22:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 00:25:41 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:28:51 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:30:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:30:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:30:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 00:30:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 00:30:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 00:31:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 00:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 00:31:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 00:34:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:36:27 --> Could not find the language line "Home"
ERROR - 2024-04-15 00:37:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 00:38:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 00:38:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 00:38:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 00:38:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:42:19 --> Could not find the language line "users"
ERROR - 2024-04-15 00:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:46:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:51:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:55:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 00:55:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 00:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 00:59:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 01:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 01:03:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:03:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:06:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:06:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:06:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:07:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:07:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:07:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:07:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:07:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:11:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:12:52 --> Could not find the language line "Home"
ERROR - 2024-04-15 01:13:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:13:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:15:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:20:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:21:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:21:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:21:48 --> Could not find the language line "Home"
ERROR - 2024-04-15 01:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:22:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:22:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:24:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:26:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 01:28:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 01:28:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 01:32:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:35:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:35:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:35:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:37:57 --> Could not find the language line "users"
ERROR - 2024-04-15 01:39:45 --> Could not find the language line "Socks"
ERROR - 2024-04-15 01:39:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:39:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:41:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:45:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:45:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:46:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:46:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:46:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:48:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:48:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 01:48:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:53:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:53:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:53:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:53:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:53:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 01:53:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 01:53:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 01:56:08 --> Could not find the language line "Home"
ERROR - 2024-04-15 01:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:57:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:57:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 01:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 01:59:48 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:01:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:04:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:04:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:06:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:06:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:06:33 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:09:38 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:10:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:14:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:15:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:16:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:16:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:16:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:18:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:18:49 --> Could not find the language line "products"
ERROR - 2024-04-15 02:19:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:19:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:19:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:26:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:30:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 02:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:35:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:35:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:35:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 02:36:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 02:39:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:39:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:39:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:44:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 02:44:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 02:44:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 02:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:47:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:51:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:56:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:56:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 02:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 02:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 03:00:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 03:04:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:04:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:08:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:08:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:09:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:09:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:12:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:12:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:17:24 --> Could not find the language line "products"
ERROR - 2024-04-15 03:21:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:23:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:23:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:23:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:25:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:25:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:29:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:30:24 --> Could not find the language line "Home"
ERROR - 2024-04-15 03:31:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:31:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:31:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:32:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:32:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:32:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:33:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:33:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:35:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:37:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:37:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 03:39:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:39:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:39:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:41:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:43:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:43:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 03:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 03:46:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:46:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:47:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:47:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:50:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:54:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 03:54:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 03:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 03:54:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 03:58:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-15 04:01:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-15 04:02:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 04:02:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:04:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:04:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:04:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:06:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:11:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:12:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:12:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:12:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:19:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:23:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:23:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 04:23:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:23:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 04:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:30:25 --> Could not find the language line "Home"
ERROR - 2024-04-15 04:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:31:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:31:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:32:51 --> Could not find the language line "Home"
ERROR - 2024-04-15 04:34:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:34:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:34:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:37:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:37:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:37:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:40:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:40:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 04:42:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:42:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:44:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 04:44:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:45:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:45:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:45:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:47:07 --> Could not find the language line "Home"
ERROR - 2024-04-15 04:48:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:52:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 04:52:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:56:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 04:56:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 04:56:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 04:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 04:59:38 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:01:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:05:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:08:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 05:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:11:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 05:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 05:11:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 05:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:12:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 05:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:13:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:13:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:17:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:19:47 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:21:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 05:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 05:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 05:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:25:45 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:28:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 05:28:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 05:28:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 05:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:30:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:31:11 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:31:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 05:31:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 05:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:31:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 05:32:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 05:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:32:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 05:32:58 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:33:02 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 05:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:33:12 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:33:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:33:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:33:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 05:33:56 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:34:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 05:34:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 05:34:09 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:34:11 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 05:34:17 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:34:20 --> Could not find the language line "Socks"
ERROR - 2024-04-15 05:34:23 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:34:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:34:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:35:00 --> Could not find the language line "Home"
ERROR - 2024-04-15 05:38:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:46:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:47:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 05:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 05:47:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 05:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:50:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:54:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 05:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 05:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 06:02:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:06:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:06:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:09:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 06:09:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 06:10:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:14:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:22:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:26:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-15 06:30:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:32:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:32:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 06:32:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 06:32:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:32:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 06:32:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 06:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:34:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:34:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 06:38:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:42:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:46:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:47:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-15 06:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 06:50:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:54:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 06:54:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 06:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:55:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 06:55:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 06:58:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 06:59:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 06:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 06:59:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:00:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 07:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:02:03 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:02:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:02:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:06:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:06:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:06:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:10:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:14:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:15:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:15:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:15:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:18:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:22:25 --> Could not find the language line "products"
ERROR - 2024-04-15 07:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:24:10 --> Could not find the language line "products"
ERROR - 2024-04-15 07:24:46 --> Could not find the language line "Other"
ERROR - 2024-04-15 07:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:28:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:28:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:28:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:33:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 07:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:38:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:42:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:44:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 07:44:24 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:45:32 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 07:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:46:56 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:47:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 07:49:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:49:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:50:26 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:50:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:50:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:51:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:51:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:51:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 07:51:45 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:52:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:52:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:52:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:52:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:54:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:54:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 07:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 07:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 07:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 07:56:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 07:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 07:59:53 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:02:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:08:46 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:10:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:13:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:13:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:13:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:14:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:17:23 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:19:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:19:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:19:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:26:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:27:47 --> Could not find the language line "products"
ERROR - 2024-04-15 08:28:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:28:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:29:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:29:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:29:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:29:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:30:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:30:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:30:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:30:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:31:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 08:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:31:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:32:47 --> Could not find the language line "Other"
ERROR - 2024-04-15 08:32:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 08:32:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 08:33:08 --> Could not find the language line "Other"
ERROR - 2024-04-15 08:33:12 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 08:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:33:28 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 08:34:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:37:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:37:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:41:01 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:42:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:44:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:46:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 08:50:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:50:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:50:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:50:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:52:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:53:45 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:54:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:54:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:54:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:55:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:55:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:55:34 --> Could not find the language line "Home"
ERROR - 2024-04-15 08:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:56:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 08:56:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 08:56:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 08:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 08:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:02:43 --> Could not find the language line "Other"
ERROR - 2024-04-15 09:02:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:06:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:08:35 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:10:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:11:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:11:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:11:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:12:40 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:14:22 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:14:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:18:58 --> Could not find the language line "Other"
ERROR - 2024-04-15 09:18:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:21:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:21:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:22:58 --> Could not find the language line "Socks"
ERROR - 2024-04-15 09:22:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:24:06 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:25:01 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:25:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:25:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:27:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:32:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:32:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:32:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:35:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 09:35:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:35:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:37:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:38:55 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 09:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:39:06 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:39:39 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:40:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:40:44 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:40:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 09:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:41:02 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:41:29 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:41:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:42:11 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:42:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 09:42:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 09:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:42:34 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:42:41 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 09:42:46 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:42:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-15 09:42:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 09:42:55 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:43:07 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:43:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 09:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:45:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:45:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:45:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:46:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 09:46:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:46:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:46:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:47:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:48:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 09:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:49:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:49:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:49:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:49:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:49:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:49:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:50:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:51:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:51:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:52:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:52:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 09:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:54:36 --> Could not find the language line "Other"
ERROR - 2024-04-15 09:55:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 09:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 09:57:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 09:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 09:57:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 09:59:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 10:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:03:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:07:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:07:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:07:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:07:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:11:03 --> Could not find the language line "Other"
ERROR - 2024-04-15 10:11:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:11:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:11:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:11:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:14:02 --> Could not find the language line "Other"
ERROR - 2024-04-15 10:15:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:15:25 --> Could not find the language line "Other"
ERROR - 2024-04-15 10:16:50 --> Could not find the language line "Other"
ERROR - 2024-04-15 10:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:19:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:19:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:19:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:19:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:19:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:23:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:23:56 --> Could not find the language line "Home"
ERROR - 2024-04-15 10:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:26:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:26:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:26:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:27:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-15 10:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 10:27:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:27:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:27:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:27:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:29:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 10:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 10:29:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 10:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:31:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 10:41:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 10:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:43:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-15 10:43:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 10:43:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 10:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:43:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 10:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:47:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:47:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:51:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:55:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:55:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 10:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 10:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:00:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 11:00:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 11:00:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 11:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:03:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:04:44 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:09:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:15:11 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-15 11:15:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:19:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:23:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:24:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:27:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:27:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:27:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:28:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:29:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:29:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:29:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 11:29:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 11:29:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 11:29:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:30:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:30:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:31:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 11:31:07 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:31:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 11:31:12 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:31:20 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:31:21 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:31:23 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:31:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:31:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:31:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:31:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:32:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:21 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:32:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:32:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:32:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:33:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:33:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:33:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:33:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:33:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:33:28 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:33:42 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:33:43 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:33:43 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:33:43 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:34:12 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:34:15 --> Could not find the language line "Socks"
ERROR - 2024-04-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:37:52 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:38:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:38:27 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:38:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:38:53 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:38:56 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:15 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:18 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:19 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:19 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:19 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:20 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:23 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:24 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 11:39:26 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:39:47 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:39:54 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:39:56 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:40:04 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:40:29 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:40:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 11:40:46 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:40:50 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:41:12 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 11:41:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:41:20 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:41:48 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:42:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:42:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:42:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:43:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:43:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:43:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:43:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:43:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:44:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:44:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 11:44:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 11:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 11:44:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 11:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:47:54 --> Could not find the language line "products"
ERROR - 2024-04-15 11:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:52:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 11:52:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 11:52:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 11:54:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 11:54:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 11:54:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 11:55:16 --> Could not find the language line "Other"
ERROR - 2024-04-15 11:55:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 11:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:56:48 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 11:58:52 --> Could not find the language line "Home"
ERROR - 2024-04-15 11:59:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:03:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:08:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:09:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:09:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 12:09:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:11:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:15:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:19:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:21:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:22:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 12:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:26:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 12:26:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:27:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:27:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 12:27:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:29:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:29:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 12:29:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:31:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:34:07 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:34:42 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:35:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:36:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 12:36:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 12:38:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 12:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:39:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:39:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:42:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 12:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:44:38 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:45:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 12:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:47:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:51:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:52:47 --> Could not find the language line "accounts"
ERROR - 2024-04-15 12:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:55:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:55:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 12:55:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:56:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 12:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 12:56:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 12:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:57:40 --> Could not find the language line "Home"
ERROR - 2024-04-15 12:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 12:59:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:02:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:02:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:03:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:03:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:03:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:03:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:04:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:04:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:07:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:09:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:11:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:11:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:11:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:11:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:12:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 13:12:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 13:14:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:18:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:18:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:18:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:18:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:18:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:19:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:19:33 --> Could not find the language line "Other"
ERROR - 2024-04-15 13:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:20:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:20:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:22:10 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:23:20 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:23:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:23:30 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 13:23:37 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:29:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 13:29:41 --> 404 Page Not Found: Humanstxt/index
ERROR - 2024-04-15 13:29:41 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-15 13:29:41 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:31:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 13:31:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:35:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:39:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:40:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 13:42:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:42:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:43:58 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:43:58 --> Could not find the language line "Home"
ERROR - 2024-04-15 13:46:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 13:47:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:47:31 --> Could not find the language line "products"
ERROR - 2024-04-15 13:48:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 13:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 13:48:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 13:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 13:51:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:51:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:55:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 13:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:03:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:03:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:11:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:11:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 14:11:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:15:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:19:24 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:19:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:21:21 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:21:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:22:05 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:27:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:27:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 14:27:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:27:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 14:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:30:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:30:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 14:30:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:30:30 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:38:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 14:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:40:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:40:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 14:40:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:41:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 14:42:12 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:42:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:42:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 14:43:07 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 14:43:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 14:43:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:43:38 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 14:44:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-15 14:46:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 14:47:11 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 14:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:47:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:49:03 --> Could not find the language line "Home"
ERROR - 2024-04-15 14:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:51:31 --> Could not find the language line "users"
ERROR - 2024-04-15 14:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:53:15 --> Could not find the language line "products"
ERROR - 2024-04-15 14:54:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 14:54:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:55:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:55:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:55:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 14:55:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:55:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 14:55:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:56:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 14:56:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 14:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 14:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 14:59:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:00:12 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:03:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:05:51 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:05:51 --> 404 Page Not Found: Feed/index
ERROR - 2024-04-15 15:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:08:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:08:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:15:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:16:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:17:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:17:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:17:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:17:39 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:17:49 --> Could not find the language line "products"
ERROR - 2024-04-15 15:19:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:21:25 --> Could not find the language line "products"
ERROR - 2024-04-15 15:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:23:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:23:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:27:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:27:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:35:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:40:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:40:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:43:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 15:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:47:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 15:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:47:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:51:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 15:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:53:02 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:54:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:56:43 --> Could not find the language line "Other"
ERROR - 2024-04-15 15:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:56:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 15:56:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 15:56:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 15:58:23 --> Could not find the language line "Home"
ERROR - 2024-04-15 15:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 15:59:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 15:59:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 16:00:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 16:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:03:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:08:11 --> Could not find the language line "products"
ERROR - 2024-04-15 16:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:11:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:11:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:11:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:11:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 16:13:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 16:13:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 16:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:14:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 16:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:15:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:16:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 16:17:37 --> Could not find the language line "products"
ERROR - 2024-04-15 16:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:19:08 --> Could not find the language line "Home"
ERROR - 2024-04-15 16:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:23:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:26:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 16:27:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:27:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 16:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:41:06 --> Could not find the language line "Other"
ERROR - 2024-04-15 16:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:44:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 16:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:47:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 16:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:51:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:51:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:55:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 16:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 16:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:00:46 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:00:48 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 17:01:09 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:01:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 17:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 17:01:25 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:01:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 17:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:01:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 17:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:01:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 17:02:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 17:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:03:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:09:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 17:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:11:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 17:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:15:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:15:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 17:16:33 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:16:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 17:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:18:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 17:18:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 17:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:20:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-15 17:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 17:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:27:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:30:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:33:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 17:33:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 17:33:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 17:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:35:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 17:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:39:12 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 17:39:40 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 17:40:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:43:09 --> Could not find the language line "Home"
ERROR - 2024-04-15 17:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:46:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 17:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:47:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:48:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 17:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:51:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 17:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 17:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:54:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-15 17:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 17:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:03:34 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 18:04:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 18:04:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:04:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:04:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:09:27 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:09:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:09:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:10:09 --> Could not find the language line "assets"
ERROR - 2024-04-15 18:10:09 --> Could not find the language line "assets"
ERROR - 2024-04-15 18:10:09 --> Could not find the language line "assets"
ERROR - 2024-04-15 18:10:09 --> Could not find the language line "assets"
ERROR - 2024-04-15 18:10:09 --> Could not find the language line "assets"
ERROR - 2024-04-15 18:10:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:10:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:10:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:12:11 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:13:09 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:13:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:13:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:17:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:19:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 18:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 18:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:21:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 18:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:24:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 18:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:26:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 18:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:27:52 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:28:38 --> Could not find the language line "Other"
ERROR - 2024-04-15 18:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:32:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 18:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 18:32:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 18:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:41:58 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:42:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:42:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 18:42:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:46:33 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:46:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:47:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:47:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 18:48:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:48:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:48:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:49:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 18:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:50:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 18:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:52:35 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:52:44 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:52:45 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:52:46 --> Could not find the language line "Home"
ERROR - 2024-04-15 18:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 18:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:02:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 19:02:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 19:02:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 19:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:04:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:06:22 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:08:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:08:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 19:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:16 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-15 19:14:16 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-15 19:14:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:20:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:24:28 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:25:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 19:25:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 19:25:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 19:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:28:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:32:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 19:32:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 19:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:36:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 19:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:41 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:11 --> Could not find the language line "Perfume"
ERROR - 2024-04-15 19:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 19:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:52:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 19:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:52:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 19:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:57:10 --> Could not find the language line "Home"
ERROR - 2024-04-15 19:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 19:58:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 19:58:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 19:59:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 19:59:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 19:59:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 19:59:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:00:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:00:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:06:04 --> Could not find the language line "Other"
ERROR - 2024-04-15 20:06:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:06:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:06:59 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:08:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 20:08:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 20:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:12:13 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:15:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 20:15:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:16:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:24:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 20:24:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 20:24:22 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:25:52 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:27:33 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:28:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 20:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 20:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:32:15 --> Could not find the language line "Other"
ERROR - 2024-04-15 20:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:32:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 20:32:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 20:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:36:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 20:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:36:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 20:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:44:05 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:44:39 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:46:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 20:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:50:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 20:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:54:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 20:56:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 20:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 20:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:00:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:00:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:00:30 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:03:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:04:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-15 21:04:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:04:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 21:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 21:04:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 21:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:08:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:09:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 21:09:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 21:09:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 21:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:16:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:16:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:16:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 21:17:41 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-04-15 21:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:21:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 21:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-15 21:21:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 21:21:38 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:21:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:21:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:21:49 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:22:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 21:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:22:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 21:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:23:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 21:23:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 21:23:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:25:02 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:25:19 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:28:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-15 21:28:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-15 21:28:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 21:30:26 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:43:05 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:49:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:50:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:51:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:31 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 21:51:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:52:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 21:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 21:55:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:56:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 21:56:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 21:56:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 21:56:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 21:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:00:24 --> Could not find the language line "Other"
ERROR - 2024-04-15 22:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:00:27 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:04:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 22:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 22:04:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 22:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:12:26 --> Could not find the language line "Bracelets"
ERROR - 2024-04-15 22:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:14:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-15 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-15 22:14:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-15 22:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:26:34 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:28:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:28:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:28:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 22:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:32:10 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:33:32 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:34:03 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:34:56 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:35:21 --> Could not find the language line "Home"
ERROR - 2024-04-15 22:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:50:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 22:50:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 22:52:30 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-04-15 22:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 22:56:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:00:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:04:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-15 23:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:06:26 --> Could not find the language line "products"
ERROR - 2024-04-15 23:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:16:21 --> Could not find the language line "Home"
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:21:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 23:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:28:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-15 23:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:30:22 --> Could not find the language line "Home"
ERROR - 2024-04-15 23:32:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:40:26 --> Could not find the language line "Home"
ERROR - 2024-04-15 23:40:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 23:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-15 23:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:45:58 --> Could not find the language line "Home"
ERROR - 2024-04-15 23:47:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:48:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-15 23:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:52:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-15 23:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-15 23:58:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:59:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:59:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-15 23:59:16 --> 404 Page Not Found: Assets/css
