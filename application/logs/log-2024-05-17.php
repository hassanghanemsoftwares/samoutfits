<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-17 00:07:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:07:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 00:07:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:11:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 00:11:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:13:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 00:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 00:26:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:26:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 00:26:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:27:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:27:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 00:27:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:32:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 00:32:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:32:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 00:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:36:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 00:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 00:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 00:49:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 00:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 00:49:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 00:51:08 --> Could not find the language line "Home"
ERROR - 2024-05-17 00:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:03:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 01:03:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 01:03:54 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 01:06:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 01:06:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 01:06:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 01:07:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 01:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 01:07:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 01:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:14:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:14:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:19:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 01:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 01:19:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 01:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 01:21:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 01:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 01:21:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 01:23:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:23:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:25:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:30:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:30:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:30:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:32:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:32:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:32:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:35:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:35:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:35:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:38:22 --> 404 Page Not Found: Products/index
ERROR - 2024-05-17 01:45:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:51:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 01:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:57:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:57:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 01:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 01:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:02:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:02:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:02:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:05:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:05:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 02:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 02:05:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 02:06:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 02:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:09:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:09:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 02:24:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 02:24:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 02:24:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 02:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:40:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 02:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 02:40:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 02:47:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 02:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 02:47:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 02:51:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 02:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 02:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:58:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 02:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 03:04:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 03:04:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 03:13:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 03:13:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 03:20:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 03:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 03:20:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 03:20:24 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:27:36 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:35:45 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 03:39:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:50:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 03:51:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 03:54:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 03:54:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 03:54:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 03:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 03:54:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 03:54:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 03:55:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 03:55:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 03:55:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 03:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 03:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 03:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 03:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 03:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:00:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:00:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:02:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 04:02:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 04:02:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 04:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:04:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:04:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:07:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:07:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:09:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 04:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:12:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:14:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:14:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:14:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 04:16:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:16:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:16:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:16:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:19:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 04:20:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 04:21:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 04:21:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-17 04:23:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:24:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:24:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:26:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 04:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:28:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:28:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:31:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:31:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:33:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:35:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:35:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 04:35:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:48:29 --> Could not find the language line "products"
ERROR - 2024-05-17 04:50:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:50:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:51:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 04:51:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:51:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:51:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 04:51:31 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-05-17 04:51:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:51:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 04:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 04:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 04:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:54:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:54:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:56:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:58:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 04:58:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 04:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:02:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:02:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 05:02:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:07:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:07:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 05:07:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:14:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 05:14:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:16:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 05:18:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 05:21:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 05:26:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 05:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 05:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:37:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 05:37:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:37:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 05:37:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:43:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 05:43:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:43:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 05:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 05:43:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 05:46:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 05:46:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 05:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:46:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 05:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:49:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-17 05:51:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 05:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:51:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 05:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:51:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 05:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 05:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 06:05:38 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:06:02 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:14:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 06:14:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 06:14:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 06:21:06 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:22:00 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:22:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 06:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:23:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 06:23:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 06:26:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:26:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:29:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-17 06:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:31:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:31:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-17 06:33:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:36:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:36:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:36:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 06:36:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 06:36:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 06:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:39:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 06:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 06:39:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 06:41:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 06:41:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 06:41:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 06:46:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 06:46:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 06:46:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 06:49:21 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:21 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:31 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:49 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 06:49:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:54 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:55 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:55 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:55 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:55 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:49:56 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:51:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:52:44 --> Could not find the language line "Home"
ERROR - 2024-05-17 06:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:57:25 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-17 06:57:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:57:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 06:59:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:59:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 06:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:01:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 07:01:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 07:01:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 07:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 07:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:02:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:02:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:04:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:04:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:07:36 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:07:36 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:15:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:15:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:15:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 07:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 07:15:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 07:18:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 07:18:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 07:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:21:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:28:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 07:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:29:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:29:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:33:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 07:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 07:33:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 07:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:34:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:34:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 07:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:34:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 07:35:40 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:35:40 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:41:23 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 07:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:51:08 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:55:18 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:56:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-17 07:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:57:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 07:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 07:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 07:59:08 --> Could not find the language line "Home"
ERROR - 2024-05-17 07:59:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 07:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:00:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:00:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:01:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:01:43 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:02:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:02:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 08:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:10:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:10:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:10:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:14:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 08:14:46 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:15:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 08:21:08 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:23:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:23:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:23:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:24:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:28:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:28:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:28:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:30:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:30:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:30:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:36:22 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:36:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-17 08:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:39:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:39:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:39:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:41:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:42:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:44:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:44:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:46:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:46:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 08:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:47:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 08:47:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 08:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:51:08 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 08:57:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 08:59:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 08:59:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 08:59:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:04:34 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:08:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 09:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 09:08:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:09:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:09:09 --> Could not find the language line "Perfume"
ERROR - 2024-05-17 09:09:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:12:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-17 09:12:34 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:14:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 09:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 09:14:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:16:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:21:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:30:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 09:31:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 09:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 09:31:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:33:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 09:35:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:37:12 --> Could not find the language line "Socks"
ERROR - 2024-05-17 09:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:38:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:38:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:40:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-17 09:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-17 09:40:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:40:46 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:40:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:41:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 09:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 09:41:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 09:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:43:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 09:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:43:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 09:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:45:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 09:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:45:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 09:46:13 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:48:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-17 09:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:51:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:53:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:57:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 09:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:57:58 --> Could not find the language line "Home"
ERROR - 2024-05-17 09:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 09:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:02:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 10:07:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:13:39 --> Could not find the language line "Home"
ERROR - 2024-05-17 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:21:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 10:23:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 10:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 10:23:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 10:25:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 10:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 10:25:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 10:26:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-17 10:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:28:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:30:34 --> Could not find the language line "Home"
ERROR - 2024-05-17 10:30:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 10:30:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:30:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:30:46 --> Could not find the language line "Home"
ERROR - 2024-05-17 10:30:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:30:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:31:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:52 --> Could not find the language line "Home"
ERROR - 2024-05-17 10:31:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:31:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:32:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:32:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:32:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:32:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 10:34:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:41:01 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 10:41:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 10:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 10:50:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 10:51:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:01:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:07:27 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:07:45 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:08:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:11:03 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:15:43 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:16:24 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:17:03 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:17:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 11:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 11:17:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 11:18:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 11:18:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 11:18:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 11:21:10 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:26:21 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:28:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:28:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:31:00 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:31:45 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:33:56 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:34:56 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:35:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 11:35:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 11:35:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 11:36:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:36:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:36:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:36:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:38:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:38:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:40:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:41:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:41:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:42:18 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:44:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:45:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:45:20 --> 404 Page Not Found: Feed/index
ERROR - 2024-05-17 11:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 11:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:49:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:49:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 11:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 11:49:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:49:50 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 11:51:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:51:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 11:51:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 11:58:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 11:58:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 11:58:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:03:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 12:03:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:07:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:09:07 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-17 12:09:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:10:03 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:10:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:17:53 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:18:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:18:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:21:12 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:25:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:25:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:27:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 12:28:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 12:28:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 12:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:32:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 12:33:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:33:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:35:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 12:36:33 --> Could not find the language line "Socks"
ERROR - 2024-05-17 12:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:37:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:37:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:38:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:38:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:38:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:39:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:39:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:39:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 12:40:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 12:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:46:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 12:47:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 12:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 12:50:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:50:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 12:51:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:53:28 --> Could not find the language line "Home"
ERROR - 2024-05-17 12:53:36 --> Could not find the language line "products"
ERROR - 2024-05-17 12:53:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 12:53:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 12:53:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:00:10 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:00:10 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:02:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:02:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:02:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:04:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 13:04:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:04:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:05:38 --> Could not find the language line "Other"
ERROR - 2024-05-17 13:08:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:08:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-17 13:08:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:08:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:08:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:11:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:21:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:23:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:26:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:26:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:28:46 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:29:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:29:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:31:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 13:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:33:25 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:33:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 13:33:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:37:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:38:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:40:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:40:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:42:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:42:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 13:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:43:36 --> Could not find the language line "Perfume"
ERROR - 2024-05-17 13:44:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 13:44:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 13:47:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:47:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:47:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:48:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:48:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:51:11 --> Could not find the language line "Home"
ERROR - 2024-05-17 13:55:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:55:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:56:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 13:56:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 13:56:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 13:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 13:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:04:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 14:12:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 14:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 14:12:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 14:13:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:14:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 14:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 14:21:14 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 14:22:12 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:23:15 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:23:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:40:12 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:40:17 --> Could not find the language line "Other"
ERROR - 2024-05-17 14:41:41 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:44:43 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:45:24 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 14:47:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 14:51:12 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:56:25 --> Could not find the language line "Home"
ERROR - 2024-05-17 14:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 14:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 14:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 14:58:49 --> Could not find the language line "Home"
ERROR - 2024-05-17 15:05:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 15:06:15 --> Could not find the language line "Home"
ERROR - 2024-05-17 15:10:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 15:13:32 --> Could not find the language line "Home"
ERROR - 2024-05-17 15:21:12 --> Could not find the language line "Home"
ERROR - 2024-05-17 15:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:30:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 15:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:32:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 15:32:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 15:32:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 15:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:33:59 --> Could not find the language line "products"
ERROR - 2024-05-17 15:34:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-17 15:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:36:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:38:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:41:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:43:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 15:43:49 --> Could not find the language line "Home"
ERROR - 2024-05-17 15:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:46:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 15:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 15:48:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 15:51:14 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:03:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 16:03:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 16:03:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 16:04:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-17 16:04:30 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:04:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:05:40 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:07:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 16:10:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 16:12:03 --> Could not find the language line "Socks"
ERROR - 2024-05-17 16:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:17:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:20:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 16:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:21:13 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:23:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:25:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:28:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:30:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:33:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 16:34:25 --> Could not find the language line "products"
ERROR - 2024-05-17 16:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:39:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:42:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:51:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:52:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 16:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 16:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 16:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:53:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:53:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:53:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:54:30 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:55:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 16:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 16:57:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 16:58:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 16:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:00:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:01:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 17:01:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 17:01:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 17:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:04:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:06:19 --> Could not find the language line "products"
ERROR - 2024-05-17 17:07:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:10:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:10:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:13:35 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:13:35 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:17:14 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:17:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 17:17:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 17:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:17:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 17:17:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 17:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:18:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 17:21:15 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:24:13 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:29:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:30:22 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:31:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:31:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-17 17:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:32:05 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-05-17 17:32:05 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-17 17:32:05 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-05-17 17:32:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-17 17:32:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-17 17:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:32:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:32:22 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-05-17 17:32:23 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-05-17 17:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:32:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-17 17:32:37 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:33:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:33:52 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:34:29 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:34:35 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:34:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:35:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:35:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:36:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:36:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:36:19 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:36:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:36:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:37:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:37:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 17:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:38:24 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:38:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 17:38:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-17 17:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:39:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 17:39:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 17:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:44:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:49:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:49:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:50:52 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:51:14 --> Could not find the language line "Home"
ERROR - 2024-05-17 17:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:54:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 17:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 17:56:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 17:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:01:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:03:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:09:00 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 18:09:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:10:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 18:15:22 --> Could not find the language line "Home"
ERROR - 2024-05-17 18:21:04 --> Could not find the language line "Home"
ERROR - 2024-05-17 18:21:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 18:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:30:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:31:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 18:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:33:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 18:34:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-17 18:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:40:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 18:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 18:47:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-17 18:49:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 18:51:15 --> Could not find the language line "Home"
ERROR - 2024-05-17 18:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 18:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 18:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 19:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:06:22 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:07:38 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:09:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 19:11:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 19:12:51 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:20:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 19:20:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 19:21:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:23:05 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:23:09 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:31:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 19:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:33:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-17 19:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:35:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 19:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:38:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 19:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:38:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 19:38:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 19:40:40 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-05-17 19:40:40 --> Unable to connect to the database
ERROR - 2024-05-17 19:40:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 19:41:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-05-17 19:41:41 --> Unable to connect to the database
ERROR - 2024-05-17 19:41:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 19:41:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-05-17 19:41:52 --> Unable to connect to the database
ERROR - 2024-05-17 19:41:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 19:44:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-17 19:44:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-17 19:44:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-17 19:45:36 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 19:51:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 19:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:01:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 20:01:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 20:01:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 20:11:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 20:11:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 20:11:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 20:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:14:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 20:16:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 20:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:17:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 20:18:10 --> Could not find the language line "Perfume"
ERROR - 2024-05-17 20:18:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 20:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:20:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 20:20:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 20:21:03 --> Could not find the language line "Other"
ERROR - 2024-05-17 20:21:18 --> Could not find the language line "Home"
ERROR - 2024-05-17 20:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 20:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:21:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 20:23:54 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-17 20:24:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 20:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:41:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 20:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:49:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 20:51:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 20:51:31 --> Could not find the language line "Socks"
ERROR - 2024-05-17 20:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 20:57:22 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:01:38 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:02:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:08:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 21:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:11:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 21:11:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:11:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 21:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 21:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 21:16:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 21:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 21:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:19:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:19:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:21:17 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:21:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:22:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-17 21:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:23:14 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:23:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:23:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:24:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:24:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:24:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 21:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:26:25 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:27:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 21:27:24 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 21:27:44 --> Could not find the language line "Socks"
ERROR - 2024-05-17 21:28:05 --> Could not find the language line "Socks"
ERROR - 2024-05-17 21:28:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:28:24 --> Could not find the language line "Socks"
ERROR - 2024-05-17 21:35:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:36:03 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:41:07 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 21:51:19 --> Could not find the language line "Home"
ERROR - 2024-05-17 21:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 21:56:45 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:00:48 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:03:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 22:10:24 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 22:10:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 22:10:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 22:10:27 --> Could not find the language line "Other"
ERROR - 2024-05-17 22:10:28 --> Could not find the language line "Other"
ERROR - 2024-05-17 22:10:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 22:10:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 22:11:16 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:13:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 22:13:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 22:13:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 22:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:17:23 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:17:59 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:19:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 22:19:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-17 22:21:19 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:26:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 22:27:33 --> Could not find the language line "Socks"
ERROR - 2024-05-17 22:28:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 22:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:30:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 22:33:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 22:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:38:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 22:38:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 22:40:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 22:45:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 22:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 22:51:20 --> Could not find the language line "Home"
ERROR - 2024-05-17 22:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:12:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-17 23:12:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-17 23:12:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-17 23:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:19:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 23:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:21:24 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:26:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 23:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:29:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 23:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-17 23:34:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 23:34:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-17 23:45:38 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:45:46 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:46:04 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:46:23 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:46:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-17 23:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:46:40 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:51:21 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-17 23:52:17 --> Could not find the language line "Home"
ERROR - 2024-05-17 23:57:14 --> 404 Page Not Found: Robotstxt/index
