<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-02 00:00:19 --> Could not find the language line "Home"
ERROR - 2024-04-02 00:00:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:00:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:00:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:00:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:02:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:02:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:02:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:03:19 --> Could not find the language line "products"
ERROR - 2024-04-02 00:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:03:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:03:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:03:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:04:48 --> Could not find the language line "products"
ERROR - 2024-04-02 00:05:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:05:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:06:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 00:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:07:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:07:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:11:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:11:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 00:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:14:51 --> Could not find the language line "products"
ERROR - 2024-04-02 00:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:15:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:16:47 --> Could not find the language line "Home"
ERROR - 2024-04-02 00:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:18:21 --> Could not find the language line "products"
ERROR - 2024-04-02 00:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:19:02 --> Could not find the language line "Home"
ERROR - 2024-04-02 00:19:03 --> Could not find the language line "Home"
ERROR - 2024-04-02 00:20:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:20:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:20:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 00:20:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:22:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:22:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:24:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:24:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:25:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:25:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 00:25:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:26:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:26:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:28:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:28:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:29:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:29:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:29:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 00:32:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:32:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:32:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:35:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:35:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:35:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:35:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:35:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:35:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:36:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:37:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:37:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:37:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:37:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:37:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:39:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:39:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:40:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:40:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:42:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:42:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:42:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:42:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:42:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:42:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:45:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:46:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:46:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:48:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:48:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:48:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:49:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 00:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:49:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 00:50:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:50:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:51:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:51:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:51:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 00:58:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 00:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 00:58:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 00:59:44 --> Could not find the language line "Other"
ERROR - 2024-04-02 01:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 01:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:01:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:01:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:02:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:02:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:02:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:02:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:02:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:02:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:04:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:04:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:04:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:04:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:05:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:05:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:05:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:05:39 --> 404 Page Not Found: Item/811986
ERROR - 2024-04-02 01:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:06:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 01:07:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 01:08:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 01:09:02 --> Could not find the language line "products"
ERROR - 2024-04-02 01:09:41 --> Could not find the language line "products"
ERROR - 2024-04-02 01:09:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:09:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:09:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:10:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:13:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:13:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:13:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:13:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:13:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:13:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:14:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:16:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 01:16:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:16:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:18:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:20:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:20:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:20:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:20:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:20:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:20:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:21:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:21:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:21:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:21:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:22:33 --> Could not find the language line "products"
ERROR - 2024-04-02 01:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:22:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:22:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:23:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:23:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:23:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:23:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:24:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 01:26:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:26:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:28:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:28:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:29:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:29:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:29:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 01:30:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:30:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:30:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:32:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:32:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:32:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:34:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:34:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:35:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:35:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:35:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:35:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:35:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:35:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:37:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:37:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:37:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:38:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:38:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:38:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:39:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:39:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:41:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 01:41:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:41:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:41:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:42:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:42:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:42:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:46:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:46:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:46:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:46:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:46:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:47:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:47:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:48:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:49:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:49:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 01:49:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:51:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:51:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 01:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 01:52:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:52:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:54:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:54:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 01:55:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 01:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 01:55:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:00:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:00:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:00:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 02:01:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:01:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 02:01:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:01:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:01:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:03:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 02:03:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:03:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:03:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:03:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:04:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:04:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:05:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:05:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:05:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:08:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:10:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:10:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:10:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:15:27 --> Could not find the language line "Other"
ERROR - 2024-04-02 02:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:16:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:16:46 --> Could not find the language line "Home"
ERROR - 2024-04-02 02:17:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 02:17:23 --> Could not find the language line "Home"
ERROR - 2024-04-02 02:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:17:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:17:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:17:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:18:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:18:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:18:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:20:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:20:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:20:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:20:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:20:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 02:22:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:22:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:22:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:25:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:25:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:28:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:28:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 02:28:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:28:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:28:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:28:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:29:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 02:30:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:30:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:30:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:30:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:30:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 02:30:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:30:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:30:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:31:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:31:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:31:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 02:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:32:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:32:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:32:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 02:33:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:33:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:33:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:34:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:34:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:34:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:34:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:34:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:35:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:35:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:35:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:36:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:36:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:36:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:36:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:36:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:36:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:37:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:37:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:37:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:37:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:38:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:38:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:38:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:38:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:38:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:38:50 --> Could not find the language line "Other"
ERROR - 2024-04-02 02:39:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:39:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:40:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:43:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:43:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:43:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:43:58 --> Could not find the language line "Other"
ERROR - 2024-04-02 02:44:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 02:44:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:44:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:44:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:46:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:46:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:46:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:48:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:48:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:49:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:49:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:50:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:50:29 --> Could not find the language line "products"
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:50:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:50:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:51:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:51:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:51:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:51:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:51:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:51:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:52:06 --> Could not find the language line "users"
ERROR - 2024-04-02 02:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:52:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:52:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:52:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:52:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:53:38 --> Could not find the language line "products"
ERROR - 2024-04-02 02:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 02:55:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:55:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:56:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:56:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:56:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:56:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 02:56:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 02:56:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 02:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:57:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:57:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:57:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:58:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:58:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:59:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 02:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 02:59:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:00:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:00:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:00:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:00:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:00:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:00:36 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:00:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:00:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:01:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:01:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:01:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:01:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:02:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:02:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:02:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:03:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:03:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:03:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:03:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:04:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:04:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:04:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:05:08 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:05:10 --> Could not find the language line "products"
ERROR - 2024-04-02 03:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:05:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:05:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:05:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:05:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:05:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:05:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:05:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:06:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:07:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:07:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:07:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:07:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:07:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:08:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:08:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:08:32 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:08:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:08:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:09:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:09:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:09:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:09:30 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:09:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:09:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:09:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:10:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:10:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:10:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:10:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:28 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:10:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:10:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:10:45 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:11:07 --> Could not find the language line "products"
ERROR - 2024-04-02 03:11:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:11:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:11:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:11:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:12:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:12:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:12:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:12:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:13:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:13:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:13:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:13:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:13:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:13:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:13:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:13:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:14:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:14:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:14:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:14:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:15:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:15:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:15:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:16:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:16:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:16:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:16:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:16:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:16:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:17:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:17:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:17:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:18:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:18:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:18:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:18:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:18:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:18:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:18:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:18:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:18:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:18:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:19:26 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:19:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:19:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:20:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:20:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:20:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:21:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:21:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:21:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:21:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:22:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:22:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:22:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:22:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:22:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:23:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:24:16 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:24:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:25:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:25:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:25:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:26:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:26:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:26:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:27:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 03:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 03:31:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:31:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:31:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:33:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:33:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:33:19 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:34:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:34:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:35:51 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:36:48 --> Could not find the language line "products"
ERROR - 2024-04-02 03:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:37:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:37:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:37:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:38:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:38:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:38:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:39:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:39:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:41:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:41:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:41:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:43:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:43:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:43:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:43:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:43:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:44:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:44:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:44:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:45:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:45:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:45:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 03:46:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:46:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:47:01 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 03:49:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:49:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:49:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:53:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:55:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:55:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 03:55:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 03:58:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 03:58:45 --> Could not find the language line "Other"
ERROR - 2024-04-02 03:59:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 03:59:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 03:59:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 04:01:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 04:01:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:02:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:10:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:10:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:10:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:11:27 --> Could not find the language line "Socks"
ERROR - 2024-04-02 04:12:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 04:12:18 --> Could not find the language line "Socks"
ERROR - 2024-04-02 04:14:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:14:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:14:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:23:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:23:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:23:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:25:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:25:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:26:35 --> Could not find the language line "Other"
ERROR - 2024-04-02 04:27:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 04:27:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:29:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:29:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:29:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 04:30:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:30:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:30:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:32:44 --> Could not find the language line "products"
ERROR - 2024-04-02 04:33:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:33:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:33:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:36:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 04:36:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:37:21 --> Could not find the language line "products"
ERROR - 2024-04-02 04:38:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:38:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:39:36 --> Could not find the language line "Other"
ERROR - 2024-04-02 04:39:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:40:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:40:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:42:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:42:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:43:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:43:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:43:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:43:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:44:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:44:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:44:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:44:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:44:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:45:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:46:51 --> Could not find the language line "products"
ERROR - 2024-04-02 04:47:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 04:47:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:48:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:48:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:48:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:52:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 04:53:26 --> Could not find the language line "Other"
ERROR - 2024-04-02 04:54:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:54:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:54:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:54:48 --> Could not find the language line "products"
ERROR - 2024-04-02 04:56:08 --> Could not find the language line "Home"
ERROR - 2024-04-02 04:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 04:56:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:56:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:57:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:57:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:57:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 04:59:36 --> Could not find the language line "Home"
ERROR - 2024-04-02 04:59:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 04:59:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 04:59:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 04:59:39 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-02 04:59:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 04:59:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 04:59:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:00:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 05:00:42 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:01:35 --> Could not find the language line "products"
ERROR - 2024-04-02 05:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 05:03:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:03:52 --> Could not find the language line "Other"
ERROR - 2024-04-02 05:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:04:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:04:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:05:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:07:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:07:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:07:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:08:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 05:08:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:11:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:11:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:11:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:11:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:13:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:14:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:14:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:14:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:14:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:14:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:15:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:15:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:16:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:16:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:18:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 05:18:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:18:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:18:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:18:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:19:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:19:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 05:19:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:21:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:21:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:21:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:23:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:23:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:24:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:24:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:28:50 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:28:53 --> Could not find the language line "products"
ERROR - 2024-04-02 05:28:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:29:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:29:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:29:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:31:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:31:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:32:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:32:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:32:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:32:48 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:32:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:33:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:33:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:33:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:33:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:33:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:33:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:34:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 05:36:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:36:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:36:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:36:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:36:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:36:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:42:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:42:22 --> Could not find the language line "products"
ERROR - 2024-04-02 05:43:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:43:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:43:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:46:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:46:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:46:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:46:40 --> Could not find the language line "users"
ERROR - 2024-04-02 05:48:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:48:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:48:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:48:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:48:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:48:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:50:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:50:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:50:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:50:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:50:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:51:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:51:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:51:54 --> Could not find the language line "products"
ERROR - 2024-04-02 05:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:54:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:54:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:55:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:55:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:56:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:56:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:56:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:57:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:57:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:57:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:57:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:57:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:58:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:58:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:58:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:58:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:58:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 05:58:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:58:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 05:59:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 05:59:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 05:59:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 05:59:56 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:59:57 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:59:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:59:59 --> Could not find the language line "Home"
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 05:59:59 --> 404 Page Not Found: Cart/assets
ERROR - 2024-04-02 06:00:01 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:00:01 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:00:01 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:00:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 06:00:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 06:00:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 06:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:00:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:00:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:00:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:01:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:01:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:02:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:02:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:02:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:04:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:04:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:04:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:04:30 --> Could not find the language line "products"
ERROR - 2024-04-02 06:05:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 06:05:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:07:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:11:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:11:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:11:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:11:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:11:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:12:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:12:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:12:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:15:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:18:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:18:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:18:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:19:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 06:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:21:48 --> Could not find the language line "products"
ERROR - 2024-04-02 06:22:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:22:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:22:46 --> Could not find the language line "Socks"
ERROR - 2024-04-02 06:23:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:23:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:23:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:23:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:23:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:23:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:23:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:23:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:24:34 --> Could not find the language line "products"
ERROR - 2024-04-02 06:26:06 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:27:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:27:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:28:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:28:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:28:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:29:09 --> Could not find the language line "products"
ERROR - 2024-04-02 06:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:32:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:32:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:32:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:32:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:33:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:33:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:34:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:35:12 --> Could not find the language line "products"
ERROR - 2024-04-02 06:36:03 --> Could not find the language line "Home"
ERROR - 2024-04-02 06:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:37:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 06:37:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:38:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:38:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:38:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:39:16 --> Could not find the language line "Other"
ERROR - 2024-04-02 06:40:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:41:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:41:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:42:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 06:42:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:42:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:42:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:44:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 06:44:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:44:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:44:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:44:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:44:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:45:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:45:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:45:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:46:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:46:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:46:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:49:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:49:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:49:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:49:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:49:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:50:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:50:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:50:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:51:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:51:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:51:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:51:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:51:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:51:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:53:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-02 06:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 06:53:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 06:55:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:55:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 06:58:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 06:58:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 06:58:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 07:00:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:00:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:00:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:01:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:01:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:01:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:01:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:02:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:02:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:02:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:02:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-02 07:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:03:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:03:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:03:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:03:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:03:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:03:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:05:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:05:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:05:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:05:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:06:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:06:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:06:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:06:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:06:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:06:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:08:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:08:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:08:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:08:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:08:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:08:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:08:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:08:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:09:40 --> Could not find the language line "Home"
ERROR - 2024-04-02 07:09:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:11:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:11:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:11:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:11:53 --> Could not find the language line "products"
ERROR - 2024-04-02 07:11:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:12:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:12:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:12:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:14:06 --> Could not find the language line "products"
ERROR - 2024-04-02 07:15:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 07:15:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:16:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:16:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:18:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:22:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:22:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 07:22:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:25:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:25:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:25:36 --> Could not find the language line "products"
ERROR - 2024-04-02 07:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:29:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-02 07:30:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:30:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:30:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:31:03 --> Could not find the language line "Other"
ERROR - 2024-04-02 07:33:12 --> Could not find the language line "Other"
ERROR - 2024-04-02 07:33:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:33:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:34:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 07:34:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:35:34 --> Could not find the language line "Other"
ERROR - 2024-04-02 07:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:37:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:37:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:38:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:38:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:39:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:39:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:40:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:40:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:41:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:41:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:42:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:42:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:43:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:43:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:47:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 07:47:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:47:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:47:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:48:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:48:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:54:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 07:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:55:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:55:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 07:56:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:56:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-02 07:58:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 07:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 07:58:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 07:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 07:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:00:01 --> Could not find the language line "Other"
ERROR - 2024-04-02 08:00:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:00:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:01:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:01:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:01:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:01:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:01:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:01:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:01:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:01:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:02:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:03:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:03:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:04:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:04:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:05:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:05:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:05:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:06:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:06:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:06:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:06:33 --> Could not find the language line "Other"
ERROR - 2024-04-02 08:06:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:06:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:07:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:07:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:07:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:07:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 08:07:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:08:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:08:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:08:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:10:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-02 08:10:29 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:12:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:12:49 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-02 08:14:04 --> Could not find the language line "Perfume"
ERROR - 2024-04-02 08:14:21 --> Could not find the language line "Other"
ERROR - 2024-04-02 08:14:50 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 08:15:15 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 08:15:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:15:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:15:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:16:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:16:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:16:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:19:05 --> Could not find the language line "products"
ERROR - 2024-04-02 08:19:41 --> Could not find the language line "products"
ERROR - 2024-04-02 08:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:20:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:21:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:21:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 08:21:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:21:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:21:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:22:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:22:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:22:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:22:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:22:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:23:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:23:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:23:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:24:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:24:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:26:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:26:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:26:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:26:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:26:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:28:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:33:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:33:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:33:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:36:00 --> Could not find the language line "products"
ERROR - 2024-04-02 08:36:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:36:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:36:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:38:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:38:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:38:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:38:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:38:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:38:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:39:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:39:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:39:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:40:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 08:40:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:40:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:41:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:42:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:42:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:42:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:42:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:42:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:42:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:42:49 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:42:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 08:43:00 --> Could not find the language line "products"
ERROR - 2024-04-02 08:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:43:16 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:47:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:47:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:47:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:47:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:47:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:48:49 --> Could not find the language line "products"
ERROR - 2024-04-02 08:49:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:49:19 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:49:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:49:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:49:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:49:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:51:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:51:30 --> Could not find the language line "Home"
ERROR - 2024-04-02 08:51:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:51:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:51:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:52:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:52:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:52:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:53:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:53:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:53:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:53:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:54:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:55:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 08:57:58 --> Could not find the language line "Other"
ERROR - 2024-04-02 08:58:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 08:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 08:58:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 08:58:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 08:58:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:00:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:00:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:00:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:01:56 --> Could not find the language line "products"
ERROR - 2024-04-02 09:02:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:02:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:02:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:02:21 --> Could not find the language line "Other"
ERROR - 2024-04-02 09:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:02:24 --> Could not find the language line "products"
ERROR - 2024-04-02 09:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:02:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:02:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:02:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:03:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 09:04:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:04:23 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 09:04:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:04:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:04:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:04:32 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:04:50 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:06:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:07:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:07:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:07:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:11:35 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-04-02 09:12:28 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:13:03 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:13:09 --> Could not find the language line "Other"
ERROR - 2024-04-02 09:14:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:14:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:15:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:15:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:15:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:19:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:20:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:21:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:21:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:21:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:21:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:21:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:21:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:22:17 --> Could not find the language line "products"
ERROR - 2024-04-02 09:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:23:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 09:23:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:23:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:23:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:23:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:23:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:24:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:24:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:25:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:25:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:26:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:26:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:26:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:27:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:29:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:29:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:29:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:29:32 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:31:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:34:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:34:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:34:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:34:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:34:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:34:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:35:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:35:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:35:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:37:33 --> Could not find the language line "Other"
ERROR - 2024-04-02 09:38:06 --> Could not find the language line "Other"
ERROR - 2024-04-02 09:38:12 --> Could not find the language line "products"
ERROR - 2024-04-02 09:39:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:39:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:40:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:40:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:41:30 --> Could not find the language line "products"
ERROR - 2024-04-02 09:41:54 --> Could not find the language line "Other"
ERROR - 2024-04-02 09:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 09:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:47:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:47:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:47:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:47:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:49:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:50:44 --> Could not find the language line "Home"
ERROR - 2024-04-02 09:52:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:52:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:52:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:52:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:54:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:54:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:54:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:54:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:55:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:55:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:56:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:56:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 09:56:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 09:56:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:56:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:56:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 09:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 09:57:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 09:58:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 09:58:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 09:58:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:00:17 --> Could not find the language line "Other"
ERROR - 2024-04-02 10:00:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:00:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:00:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:00:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:02:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:05:03 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:06:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:06:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:06:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:06:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:06:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:06:38 --> Could not find the language line "products"
ERROR - 2024-04-02 10:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:08:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:08:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:08:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:08:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:08:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:09:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:09:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:10:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:10:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:11:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:11:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:11:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:12:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:12:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:12:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:13:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:13:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-02 10:13:57 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:14:26 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:14:41 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:15:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 10:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:15:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 10:15:49 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:15:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:16:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:16:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:16:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:16:24 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:16:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:16:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:17:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:17:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:17:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:17:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:17:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:17:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:18:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:18:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:18:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:18:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:18:32 --> Could not find the language line "products"
ERROR - 2024-04-02 10:18:37 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-02 10:18:37 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-02 10:18:37 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-02 10:18:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-02 10:19:42 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:19:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:20:02 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:20:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:20:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:20:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:21:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:21:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:21:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:22:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:22:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:24:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:25:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:25:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-02 10:27:32 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:28:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 10:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:29:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:29:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:29:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:30:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:30:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:31:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:33:12 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:33:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:34:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:34:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:35:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:35:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:35:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:37:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 10:38:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:38:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:40:21 --> Could not find the language line "products"
ERROR - 2024-04-02 10:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:42:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:42:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:43:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 10:44:00 --> Could not find the language line "products"
ERROR - 2024-04-02 10:44:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:44:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:44:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:47:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:47:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:47:30 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:47:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:47:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:47:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:48:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:48:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:49:35 --> Could not find the language line "Home"
ERROR - 2024-04-02 10:49:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:49:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:49:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:50:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:50:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 10:53:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 10:53:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:54:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 10:55:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 10:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 10:55:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 10:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:00:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:00:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:00:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:00:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:03:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:03:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:03:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:03:44 --> Could not find the language line "Socks"
ERROR - 2024-04-02 11:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:05:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:05:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:05:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:06:36 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-02 11:07:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:07:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:07:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:07:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:09:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:09:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:09:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:09:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:09:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:09:55 --> Could not find the language line "products"
ERROR - 2024-04-02 11:11:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 11:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:11:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:15:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:16:51 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:19:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:19:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:21:35 --> Could not find the language line "users"
ERROR - 2024-04-02 11:21:47 --> Could not find the language line "products"
ERROR - 2024-04-02 11:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:28:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:28:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:28:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:29:46 --> Could not find the language line "products"
ERROR - 2024-04-02 11:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:31:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 11:31:43 --> Could not find the language line "products"
ERROR - 2024-04-02 11:32:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:32:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:32:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:32:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:33:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:33:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:33:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:33:49 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:33:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:34:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:34:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:34:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:34:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:35:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 11:35:19 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:35:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:36:24 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:36:35 --> Could not find the language line "Socks"
ERROR - 2024-04-02 11:37:06 --> Could not find the language line "products"
ERROR - 2024-04-02 11:37:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 11:38:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:38:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:38:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:40:27 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:41:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:41:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:41:52 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:42:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 11:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:43:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 11:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:43:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:44:39 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:45:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:45:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:45:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:48:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:48:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:48:29 --> Could not find the language line "Home"
ERROR - 2024-04-02 11:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:52:05 --> Could not find the language line "Other"
ERROR - 2024-04-02 11:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:53:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 11:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:55:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 11:55:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:55:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:55:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:55:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:56:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:56:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 11:56:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:56:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:56:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 11:56:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 11:58:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-02 11:59:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:59:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:59:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:59:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:59:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:59:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 11:59:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 11:59:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 11:59:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:01:24 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:01:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:01:47 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:01:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:01:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:01:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:03:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:03:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:03:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:03:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:03:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:03:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:03:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:05:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:05:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:05:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:05:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:08:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 12:08:42 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-04-02 12:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:11:46 --> Could not find the language line "Other"
ERROR - 2024-04-02 12:11:46 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:12:51 --> Could not find the language line "products"
ERROR - 2024-04-02 12:13:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 12:13:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:13:38 --> Could not find the language line "products"
ERROR - 2024-04-02 12:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:14:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:15:39 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:17:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:17:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:17:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:18:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:18:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:18:31 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:18:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 12:19:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:19:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:20:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:20:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:20:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:21:36 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:22:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:22:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:22:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:22:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:24:29 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:26:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:28:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:31:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:31:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:31:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:34:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 12:34:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:34:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:35:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 12:38:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:38:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:38:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:38:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:38:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:38:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:39:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:39:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:41:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:41:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:41:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:41:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:42:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:42:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:42:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:43:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:43:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:44:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:44:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:44:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:46:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:46:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:46:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:47:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-02 12:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:48:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:49:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:49:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:51:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:51:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:51:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:51:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 12:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:51:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:51:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:53:07 --> Could not find the language line "products"
ERROR - 2024-04-02 12:53:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 12:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:55:04 --> Could not find the language line "Home"
ERROR - 2024-04-02 12:55:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:55:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 12:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 12:58:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 12:58:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 12:58:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:04:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:04:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:04:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:05:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:07:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:07:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:07:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:08:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:08:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:09:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:09:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:09:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:09:56 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:11:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:11:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:12:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:12:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:13:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:13:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 13:13:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:13:56 --> Could not find the language line "products"
ERROR - 2024-04-02 13:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:16:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:16:12 --> Could not find the language line "products"
ERROR - 2024-04-02 13:16:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:16:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:16:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:16:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:16:45 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:17:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:18:27 --> Could not find the language line "products"
ERROR - 2024-04-02 13:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:21:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:21:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:21:09 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:24:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:25:51 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:27:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:28:44 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:28:46 --> Could not find the language line "Socks"
ERROR - 2024-04-02 13:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:29:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:29:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:29:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:29:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:29:15 --> Could not find the language line "Socks"
ERROR - 2024-04-02 13:29:39 --> Could not find the language line "Socks"
ERROR - 2024-04-02 13:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-02 13:30:57 --> Could not find the language line "Other"
ERROR - 2024-04-02 13:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:37:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:37:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:38:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:38:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 13:38:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 13:38:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:38:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:40:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:40:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:41:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:41:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:41:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:43:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:43:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:44:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:44:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:44:09 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:44:16 --> Could not find the language line "products"
ERROR - 2024-04-02 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:46:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:48:38 --> Could not find the language line "products"
ERROR - 2024-04-02 13:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:50:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:50:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:50:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:51:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:51:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:51:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:51:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:51:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:51:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:52:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:52:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:52:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 13:52:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 13:52:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 13:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:54:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 13:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:55:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 13:56:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 13:56:16 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:56:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 13:56:38 --> Could not find the language line "Perfume"
ERROR - 2024-04-02 13:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:57:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 13:57:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:57:33 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:57:36 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:57:41 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:57:43 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:57:56 --> Could not find the language line "products"
ERROR - 2024-04-02 13:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 13:57:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 13:58:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:58:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 13:58:40 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:58:52 --> Could not find the language line "products"
ERROR - 2024-04-02 13:58:59 --> Could not find the language line "Home"
ERROR - 2024-04-02 13:59:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 13:59:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 13:59:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:00:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:00:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:39 --> Could not find the language line "products"
ERROR - 2024-04-02 14:00:46 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:00:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:00:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:00:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:00:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:00:52 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:52 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:00:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:00:56 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:01:02 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:01:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:01:16 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:01:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:02:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:03:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:03:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:03:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 14:04:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:04:39 --> Could not find the language line "products"
ERROR - 2024-04-02 14:05:00 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:05:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:06:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:07:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:07:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 14:07:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:08:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:08:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:09:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:09:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:09:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:09:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:09:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:11:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:11:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:11:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:11:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:12:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:12:36 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:12:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:12:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:13:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:13:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:13:31 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:13:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:13:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:14:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:14:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:14:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:14:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:14:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:14:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:14:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:15:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:15:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:16:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:16:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:16:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:16:43 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:17:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-02 14:18:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-02 14:18:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:18:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:18:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:18:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-02 14:19:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-02 14:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:19:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-02 14:19:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:19:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:06 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:06 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:20:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:20:09 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:21:17 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:21:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:22:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:22:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:23:41 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:24:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:24:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:24:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:25:14 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:25:29 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:25:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:25:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:25:58 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:26:14 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:26:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:26:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:26:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:26:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:26:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:26:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:27:18 --> Could not find the language line "Perfume"
ERROR - 2024-04-02 14:28:01 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 14:28:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:28:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:29:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:29:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:30:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:31:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:32:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:32:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:32:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:32:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:32:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:32:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:33:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:33:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:34:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 14:34:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:35:30 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:35:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:35:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:35:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:35:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:35:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:36:25 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:36:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:36:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:36:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:36:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:36:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:37:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:37:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:37:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:37:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:37:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:38:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:38:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:38:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:38:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:38:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:38:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:38:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:38:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:38:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:39:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 14:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:40:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:41:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:41:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:41:56 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:42:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 14:42:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 14:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:43:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:43:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:45:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 14:45:35 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:46:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:46:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:46:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:47:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:47:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:48:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:49:23 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:49:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:49:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:49:47 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:50:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:50:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:50:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:50:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:51:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:51:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:51:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:52:03 --> Could not find the language line "Home"
ERROR - 2024-04-02 14:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:53:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:53:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:54:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:54:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:54:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:54:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:54:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:54:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:54:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:54:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:54:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:54:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:54:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 14:54:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:55:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:55:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:55:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:55:10 --> Could not find the language line "Other"
ERROR - 2024-04-02 14:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:55:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:55:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:56:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:56:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:56:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:56:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:56:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:56:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:56:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 14:56:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:57:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:57:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:57:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:57:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:57:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:57:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:58:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:58:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:58:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:58:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 14:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:59:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 14:59:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 14:59:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 14:59:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 14:59:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:00:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:00:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:01:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:02:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:02:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:04:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:04:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:04:36 --> Could not find the language line "products"
ERROR - 2024-04-02 15:04:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:04:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:05:12 --> Could not find the language line "products"
ERROR - 2024-04-02 15:05:29 --> Could not find the language line "Socks"
ERROR - 2024-04-02 15:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:05:46 --> Could not find the language line "products"
ERROR - 2024-04-02 15:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:06:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:07:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:07:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:07:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:08:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:08:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:08:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:09:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:09:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:10:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:10:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:11:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:11:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:11:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:12:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:13:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:13:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:13:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:13:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:13:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:14:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:14:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:14:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:14:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:14:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:14:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 15:14:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 15:14:44 --> Could not find the language line "Other"
ERROR - 2024-04-02 15:14:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:14:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:14:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:15:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:15:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:15:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:16:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:16:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:16:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:16:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:19:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:19:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:20:06 --> Could not find the language line "Other"
ERROR - 2024-04-02 15:20:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:20:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:20:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:20:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:22:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:22:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 15:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:23:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-02 15:23:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:23:12 --> Could not find the language line "Other"
ERROR - 2024-04-02 15:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:24:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:24:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:25:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:25:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:25:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:25:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:26:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:26:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:26:29 --> Could not find the language line "products"
ERROR - 2024-04-02 15:27:01 --> Could not find the language line "Other"
ERROR - 2024-04-02 15:27:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:28:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:28:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:29:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:29:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:30:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:30:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:30:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:32:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:32:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:33:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:33:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:35:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:35:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:35:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:35:49 --> Could not find the language line "products"
ERROR - 2024-04-02 15:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:36:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:36:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:36:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 15:36:39 --> Could not find the language line "products"
ERROR - 2024-04-02 15:37:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:37:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:37:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:38:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:38:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:38:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:38:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:38:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:39:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:39:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:40:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:40:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:40:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 15:40:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:40:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:41:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:41:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:42:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:42:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 15:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:42:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:44:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:44:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:44:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 15:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:45:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:45:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:46:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:47:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:47:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:47:37 --> Could not find the language line "products"
ERROR - 2024-04-02 15:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:48:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:48:24 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:49:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:49:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:49:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:50:33 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:50:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:50:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:51:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:51:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:51:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:51:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:51:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:51:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:52:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:52:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:52:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:52:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:52:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:53:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:53:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:53:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:53:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:54:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:54:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:54:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:54:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:54:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:54:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:54:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:54:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:54:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:55:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:55:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:55:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:55:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:56:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:56:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:56:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:57:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:57:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 15:58:09 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:58:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 15:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:58:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:58:23 --> Could not find the language line "Perfume"
ERROR - 2024-04-02 15:58:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:58:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:59:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 15:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 15:59:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 15:59:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 15:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 15:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 16:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:00:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:00:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:00:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:01:11 --> Could not find the language line "Home"
ERROR - 2024-04-02 16:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:01:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:01:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:04:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:04:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:04:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:04:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:05:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:06:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:06:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:07:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:07:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:07:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:07:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:08:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:09:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:09:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:09:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:11:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:11:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:12:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:12:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:13:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:13:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:13:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:14:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 16:14:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:14:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:14:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:15:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:15:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:15:33 --> Could not find the language line "Home"
ERROR - 2024-04-02 16:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:15:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:16:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:17:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:17:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:17:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 16:18:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:18:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:18:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:19:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:19:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:20:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:21:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:21:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:22:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:22:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:24:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:24:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:25:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:25:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:26:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:27:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:27:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:27:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:27:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:28:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:28:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:29:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:29:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 16:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:31:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:31:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:32:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:32:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:33:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:33:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:33:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:33:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:33:55 --> Could not find the language line "products"
ERROR - 2024-04-02 16:34:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:35:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:35:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:36:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:37:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:37:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:38:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:38:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:38:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:38:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:39:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:39:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:41:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:41:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:42:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:42:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 16:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:44:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:44:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:44:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:44:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:44:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 16:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:45:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:45:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:45:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:45:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:46:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:46:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:48:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:48:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:49:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:49:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:51:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:51:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:54:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:55:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:57:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-02 16:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:59:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 16:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 16:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:02:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:03:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-02 17:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:05:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:06:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-02 17:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:09:29 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:09:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:10:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:11:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 17:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:12:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-02 17:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-02 17:12:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-02 17:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:14:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:14:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:15:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:15:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 17:15:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 17:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:19:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:19:11 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2024-04-02 17:19:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:20:19 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:21:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:21:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:22:08 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:22:29 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:22:37 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 17:22:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:23:00 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:23:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:24:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 17:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:25:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:25:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:27:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:27:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:27:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:27:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:28:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 17:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:31:17 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:31:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:32:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:32:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:35:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:35:28 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:35:51 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:36:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 17:36:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 17:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:36:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:36:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 17:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:36:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 17:36:50 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:36:52 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:37:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:37:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:37:45 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:37:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:37:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:38:35 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:38:37 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:38:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:39:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:39:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 17:39:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:39:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:39:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:40:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:40:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:41:26 --> Could not find the language line "Home"
ERROR - 2024-04-02 17:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:41:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:42:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:42:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:43:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 17:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:43:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:43:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:44:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:46:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 17:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:46:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:47:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:49:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:49:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:49:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:49:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:50:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:50:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:50:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:51:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:52:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:52:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:53:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:53:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:53:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:53:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:54:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:54:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:54:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:54:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:55:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:56:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:56:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:56:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:56:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:57:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:57:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:58:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:58:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 17:59:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 17:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:00:15 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:01:04 --> Could not find the language line "Other"
ERROR - 2024-04-02 18:01:15 --> Could not find the language line "products"
ERROR - 2024-04-02 18:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:01:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:02:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:03:05 --> Could not find the language line "Other"
ERROR - 2024-04-02 18:03:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:03:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:04:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:04:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:04:59 --> Could not find the language line "products"
ERROR - 2024-04-02 18:05:02 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:05:04 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:05:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:05:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:05:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:06:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:06:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:08:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:08:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:09:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:10:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:11:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:11:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:11:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:12:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:12:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:12:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:12:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:14:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:16:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:16:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:16:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:17:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:17:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:18:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:18:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:18:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:19:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:19:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:20:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:21:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:21:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:21:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:22:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:22:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:23:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:23:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:24:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:24:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:25:04 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:25:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:25:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:25:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:26:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:26:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:26:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:26:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:27:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:27:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:27:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:27:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:28:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:28:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:28:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:28:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:29:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:29:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:29:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:30:12 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:30:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:30:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:31:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:31:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:31:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:34:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:34:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:35:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:35:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:35:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:35:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:36:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:36:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:37:01 --> Could not find the language line "Other"
ERROR - 2024-04-02 18:38:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:38:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:38:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:39:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:39:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:39:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:42:12 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:42:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:42:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:42:40 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:43:05 --> Could not find the language line "Home"
ERROR - 2024-04-02 18:43:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:43:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:43:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 18:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:44:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:45:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:45:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:47:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:47:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:47:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 18:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:47:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:47:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:48:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:49:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:49:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:50:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:50:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:51:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:51:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:51:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:51:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:52:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:52:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:53:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 18:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:54:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:55:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:55:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:56:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:58:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 18:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:58:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:58:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:58:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:58:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:59:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:59:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 18:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 18:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:00:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:00:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:02:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:02:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:03:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:04:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:04:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:04:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:04:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:05:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:05:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:05:50 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-02 19:06:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:06:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:07:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:07:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:08:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:09:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:10:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:10:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:11:45 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:12:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 19:12:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 19:12:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 19:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:13:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:13:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:15:07 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:16:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:16:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:17:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:18:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 19:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:19:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:19:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:19:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:19:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:20:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:20:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:20:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:21:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:21:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:22:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:23:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:23:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:24:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:24:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:25:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:27:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:27:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:27:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:27:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:29:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:29:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:29:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:29:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 19:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:30:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:30:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:31:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:31:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:32:35 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:33:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:33:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:35:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:36:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:36:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:36:36 --> Could not find the language line "Other"
ERROR - 2024-04-02 19:37:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:37:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:37:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:37:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:39:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:39:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:39:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:39:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:39:53 --> Could not find the language line "products"
ERROR - 2024-04-02 19:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:40:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:40:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:41:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:41:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:42:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:42:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:43:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:43:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:43:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:44:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:44:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:44:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:44:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 19:44:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 19:45:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 19:45:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:45:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:45:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:45:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:46:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 19:46:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 19:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:47:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:47:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:47:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:47:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:49:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:49:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:49:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:49:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:50:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:50:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:50:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:50:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:51:27 --> Could not find the language line "Perfume"
ERROR - 2024-04-02 19:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:51:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:51:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 19:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:55:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:55:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:55:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:55:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:55:52 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:55:57 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:56:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:57:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:57:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 19:58:04 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:58:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-02 19:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:58:54 --> Could not find the language line "Home"
ERROR - 2024-04-02 19:59:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:59:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:59:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 19:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 19:59:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:00:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:00:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 20:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:01:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:01:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-02 20:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:02:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:02:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:03:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:04:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:05:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:05:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:06:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:06:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:07:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:07:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:07:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:07:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:08:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:08:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:09:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:09:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:10:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:10:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:11:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:11:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:12:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:12:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:13:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:13:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:13:42 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:13:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 20:14:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:14:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:14:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:14:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:15:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:15:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:15:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:15:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:16:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:16:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:16:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:17:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:17:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:18:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:18:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:18:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:20:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:20:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:20:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 20:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:22:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 20:22:08 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:22:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:22:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:24:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:24:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:27:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:27:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:28:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:28:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:28:56 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:29:12 --> Could not find the language line "Other"
ERROR - 2024-04-02 20:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:29:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:29:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:30:23 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:30:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:31:39 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2024-04-02 20:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:31:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:31:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:33:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:33:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:37:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:42:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:42:49 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:45:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 20:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:50:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:54:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:54:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 20:55:11 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:55:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:57:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 20:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:58:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:58:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 20:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 20:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:00:22 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:01:53 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:03:27 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:03:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 21:04:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 21:04:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 21:04:38 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:06:00 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:10:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 21:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:11:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:11:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:11:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:12:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 21:14:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-02 21:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:15:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:16:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 21:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:28:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:28:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:30:23 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:31:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 21:32:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:32:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:36:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:36:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:36:48 --> Could not find the language line "products"
ERROR - 2024-04-02 21:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:40:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:40:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:44:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:44:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:47:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 21:48:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:48:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:53:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:53:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:57:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:57:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 21:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:57:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 21:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 21:59:38 --> Could not find the language line "Home"
ERROR - 2024-04-02 21:59:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 21:59:58 --> Could not find the language line "Home"
ERROR - 2024-04-02 22:00:32 --> Could not find the language line "Home"
ERROR - 2024-04-02 22:01:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:01:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:05:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:09:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:09:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:18:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:18:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:22:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:22:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:25:02 --> Could not find the language line "Home"
ERROR - 2024-04-02 22:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:26:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:26:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 22:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:30:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:30:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:34:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:34:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:38:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:38:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:43:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:43:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:43:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-04-02 22:47:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:47:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:49:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 22:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:55:12 --> Could not find the language line "Home"
ERROR - 2024-04-02 22:55:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:55:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:56:00 --> Could not find the language line "Bracelets"
ERROR - 2024-04-02 22:59:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 22:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 22:59:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:59:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 22:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-02 23:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:03:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:03:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:06:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 23:06:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-02 23:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:09:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-02 23:11:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-02 23:12:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:12:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:13:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 23:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:16:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:16:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:20:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:24:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:24:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:28:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:28:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:30:21 --> Could not find the language line "Home"
ERROR - 2024-04-02 23:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:37:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:37:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:40:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-02 23:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:41:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:41:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:45:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:49:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:49:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:51:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 23:53:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:53:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:55:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-02 23:58:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-02 23:58:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-02 23:58:02 --> 404 Page Not Found: Assets/css
