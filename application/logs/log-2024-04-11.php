<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-11 00:00:28 --> Could not find the language line "Home"
ERROR - 2024-04-11 00:01:05 --> Could not find the language line "Home"
ERROR - 2024-04-11 00:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:01:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 00:01:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:02:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 00:02:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:02:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 00:02:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:05:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 00:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:10:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:10:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 00:10:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:13:15 --> Could not find the language line "products"
ERROR - 2024-04-11 00:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:19:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:22:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 00:22:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:26:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:26:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 00:26:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:28:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 00:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 00:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 00:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 00:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 00:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:36:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 00:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:43:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:43:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:51:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:51:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:56:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 00:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 00:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 00:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:00:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:00:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:00:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:00:28 --> Could not find the language line "Home"
ERROR - 2024-04-11 01:01:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:01:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 01:01:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:05:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:05:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:06:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 01:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:07:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:07:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:07:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:07:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:07:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:08:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:08:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:08:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:09:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:09:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:09:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:11:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:11:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:27:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:27:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 01:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:28:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:29:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 01:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 01:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:37:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:37:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:37:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:42:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 01:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:52:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 01:52:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 01:52:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 01:52:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 01:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 01:55:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 01:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 02:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:05:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:05:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:06:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:07:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:07:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:15:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:15:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:17:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 02:17:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:25:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:25:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:25:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:27:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:27:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:27:07 --> Could not find the language line "Home"
ERROR - 2024-04-11 02:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 02:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:31:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:31:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:36:32 --> Could not find the language line "Home"
ERROR - 2024-04-11 02:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:42:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:42:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:44:02 --> Could not find the language line "Home"
ERROR - 2024-04-11 02:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:47:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:47:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:49:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 02:50:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:50:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:51:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:51:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:56:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:56:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:56:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:57:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 02:57:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 02:57:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 02:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 02:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 02:59:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 02:59:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:00:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 03:00:51 --> Could not find the language line "products"
ERROR - 2024-04-11 03:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:03:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:03:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:07:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:08:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 03:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 03:10:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:11:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:11:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:11:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:12:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-11 03:12:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-11 03:13:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:13:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:13:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:15:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:15:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:23:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:23:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:27:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:27:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:27:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 03:31:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:31:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:31:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:31:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:31:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:31:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:31:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:31:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:35:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:39:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:39:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:43:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 03:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:47:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 03:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:50:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:50:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:50:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:50:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 03:51:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 03:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 03:51:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 03:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 03:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:06:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:06:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:10:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 04:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:17:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:17:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:17:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:23:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:23:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:23:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 04:26:26 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:31:07 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:35:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:35:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:35:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:40:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:45:10 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:46:57 --> Could not find the language line "Home"
ERROR - 2024-04-11 04:47:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:50:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:50:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:50:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:51:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:51:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:55:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:55:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:58:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:58:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:58:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 04:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 04:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 04:59:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 04:59:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 04:59:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:05:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 05:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:11:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 05:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:15:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:15:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:18:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:18:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:20:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:20:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:20:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:23:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 05:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:27:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:30:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:30:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:30:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:30:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:30:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:31:08 --> Could not find the language line "products"
ERROR - 2024-04-11 05:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 05:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 05:38:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:40:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:40:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:40:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:40:46 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:40:48 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:43:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 05:47:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 05:47:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:49:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:49:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:49:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:51:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:54:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 05:54:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 05:54:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 05:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:59:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 05:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 05:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 05:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 06:00:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:00:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:00:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:00:51 --> Could not find the language line "Home"
ERROR - 2024-04-11 06:01:39 --> Could not find the language line "Home"
ERROR - 2024-04-11 06:03:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-11 06:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:10:02 --> Could not find the language line "products"
ERROR - 2024-04-11 06:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:11:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:11:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:14:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:14:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:14:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:15:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:19:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:19:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:20:21 --> Could not find the language line "products"
ERROR - 2024-04-11 06:23:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 06:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:23:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:27:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 06:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 06:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:32:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:32:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:32:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:33:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:33:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:33:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:33:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:35:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:35:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:35:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:35:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:35:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:35:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:39:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:40:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:40:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 06:40:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:45:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 06:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 06:45:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:52:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:52:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 06:55:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 06:59:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 06:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 06:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:03:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:03:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:03:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:05:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 07:05:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:07:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:08:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:08:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:14:01 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:14:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 07:14:21 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:14:41 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:15:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-11 07:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:19:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:20:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:20:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:20:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 07:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:24:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 07:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:30:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:35:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 07:36:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 07:36:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 07:38:30 --> Could not find the language line "Home"
ERROR - 2024-04-11 07:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:40:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:40:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:40:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:43:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 07:43:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:43:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:44:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:44:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:47:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:47:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:49:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:49:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:49:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:51:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 07:51:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 07:51:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 07:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:51:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 07:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 07:59:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:59:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 07:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:01:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:01:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:01:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:01:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 08:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:07:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:07:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:07:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 08:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:17:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:17:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:17:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:18:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:18:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:18:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:22:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:22:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:22:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:24:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:24:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:27:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:29:58 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:29:58 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:30:16 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:33:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 08:33:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:35:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:38:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 08:38:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:39:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:43:41 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:43:41 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:43:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:47:28 --> Could not find the language line "Home"
ERROR - 2024-04-11 08:47:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:47:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:47:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:47:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 08:47:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:47:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 08:47:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:47:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:47:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:51:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:51:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 08:54:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 08:54:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 08:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 08:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 08:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:00:16 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:00:43 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:00:43 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:02:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-11 09:02:20 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-11 09:02:21 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:02:22 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:02:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-04-11 09:02:23 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:02:24 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:02:28 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:02:30 --> 404 Page Not Found: Users/wp-login.php
ERROR - 2024-04-11 09:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:06:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 09:06:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:06:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 09:06:47 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:07:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:07:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:09:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 09:09:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 09:09:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 09:10:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 09:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 09:10:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 09:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:11:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:19:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:19:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:24:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 09:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 09:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 09:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:27:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:27:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 09:31:51 --> Could not find the language line "Bracelets"
ERROR - 2024-04-11 09:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:32:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 09:32:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 09:32:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 09:38:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 09:42:08 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 09:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:42:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:42:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 09:42:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 09:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:43:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 09:43:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 09:47:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 09:47:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 09:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:53:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 09:54:05 --> Could not find the language line "products"
ERROR - 2024-04-11 09:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 09:59:12 --> Could not find the language line "products"
ERROR - 2024-04-11 10:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:00:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:00:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:00:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:00:45 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:10:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:10:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:12:17 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:15:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 10:15:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:15:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:16:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 10:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:17:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:19:23 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:19:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 10:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:27:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:27:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:27:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:35:00 --> Could not find the language line "products"
ERROR - 2024-04-11 10:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:35:29 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:37:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:37:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:41:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 10:41:05 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:41:30 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:50:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:50:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:53:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:53:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 10:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:57:17 --> Could not find the language line "Home"
ERROR - 2024-04-11 10:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 10:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 10:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 10:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 11:02:17 --> Could not find the language line "products"
ERROR - 2024-04-11 11:02:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 11:02:29 --> Could not find the language line "Home"
ERROR - 2024-04-11 11:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:05:42 --> Could not find the language line "products"
ERROR - 2024-04-11 11:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:13:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:13:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 11:13:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:17:33 --> Could not find the language line "Home"
ERROR - 2024-04-11 11:18:02 --> Could not find the language line "products"
ERROR - 2024-04-11 11:19:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:19:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 11:19:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:19:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:19:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:19:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:20:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:20:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:20:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:21:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:21:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 11:21:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 11:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:32:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:32:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:36:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:36:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:36:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:43:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 11:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 11:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:53:14 --> Could not find the language line "Socks"
ERROR - 2024-04-11 11:54:01 --> Could not find the language line "Perfume"
ERROR - 2024-04-11 11:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:57:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:57:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:58:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 11:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 11:58:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 11:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 11:59:46 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:00:24 --> Could not find the language line "products"
ERROR - 2024-04-11 12:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:01:07 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:01:11 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:01:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:01:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:02:06 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:02:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:02:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:02:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:03:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 12:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:07:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 12:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:13:03 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:16:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:16:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:20:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:20:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 12:20:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:25:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 12:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:28:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:28:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:37:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:37:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:41:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 12:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:44:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:44:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:46:49 --> Could not find the language line "products"
ERROR - 2024-04-11 12:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:49:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 12:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 12:49:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 12:49:32 --> Could not find the language line "products"
ERROR - 2024-04-11 12:51:08 --> Could not find the language line "Home"
ERROR - 2024-04-11 12:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 12:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 13:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:07:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 13:07:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 13:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:14:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 13:14:53 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 13:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 13:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:37:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 13:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:47:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 13:49:30 --> Could not find the language line "Home"
ERROR - 2024-04-11 13:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:51:06 --> Could not find the language line "Other"
ERROR - 2024-04-11 13:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:51:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 13:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 13:51:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 13:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:53:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 13:53:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 13:53:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 13:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 13:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 13:53:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 13:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:55:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 13:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:57:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 13:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 13:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 14:01:05 --> Could not find the language line "Home"
ERROR - 2024-04-11 14:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:06:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:06:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 14:06:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:07:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 14:07:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:12:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:12:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 14:12:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:15:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 14:15:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:24:58 --> Could not find the language line "Home"
ERROR - 2024-04-11 14:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 14:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:31:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 14:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 14:33:21 --> Could not find the language line "products"
ERROR - 2024-04-11 14:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 14:35:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:38:21 --> Could not find the language line "Home"
ERROR - 2024-04-11 14:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:39:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 14:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 14:39:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 14:43:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 14:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:47:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 14:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:51:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 14:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:55:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 14:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 14:59:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 15:01:45 --> Could not find the language line "Home"
ERROR - 2024-04-11 15:03:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:03:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 15:04:34 --> Could not find the language line "products"
ERROR - 2024-04-11 15:07:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 15:11:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:15:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:16:26 --> 404 Page Not Found: Products/products
ERROR - 2024-04-11 15:19:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:23:43 --> Could not find the language line "magic_boxes"
ERROR - 2024-04-11 15:27:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:29:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 15:29:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 15:29:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 15:29:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 15:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 15:31:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:31:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 15:31:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 15:32:21 --> Could not find the language line "Home"
ERROR - 2024-04-11 15:34:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 15:34:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 15:34:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 15:35:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:37:22 --> Could not find the language line "Other"
ERROR - 2024-04-11 15:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:39:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:39:22 --> Could not find the language line "Home"
ERROR - 2024-04-11 15:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 15:43:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:47:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:48:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 15:48:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 15:48:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 15:49:28 --> Could not find the language line "products"
ERROR - 2024-04-11 15:51:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:54:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 15:54:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 15:54:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 15:55:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 15:55:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 15:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 15:55:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 15:59:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:01:41 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:03:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:03:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 16:03:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:04:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:07:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:09:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:09:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:11:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:15:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:15:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 16:15:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 16:15:30 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:18:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:18:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:19:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:22:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:22:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:23:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:26:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 16:27:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:27:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 16:28:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:28:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:28:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:30:17 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:31:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:32:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:32:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:32:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:33:20 --> Could not find the language line "products"
ERROR - 2024-04-11 16:33:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:33:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 16:33:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:35:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:39:29 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:40:28 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-11 16:40:28 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-04-11 16:40:28 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-04-11 16:40:28 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-11 16:40:28 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-11 16:40:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-04-11 16:40:31 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-04-11 16:41:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:41:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:41:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:42:54 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:43:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:43:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 16:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:43:45 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:47:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:47:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 16:47:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 16:47:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 16:49:47 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:51:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:55:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 16:58:22 --> Could not find the language line "Home"
ERROR - 2024-04-11 16:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 17:01:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:01:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:01:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:01:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:01:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:02:07 --> Could not find the language line "Home"
ERROR - 2024-04-11 17:03:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:03:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:03:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:03:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:07:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:10:02 --> Could not find the language line "Home"
ERROR - 2024-04-11 17:11:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:11:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:11:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:15:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:15:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:15:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:15:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:15:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:15:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:15:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:19:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:23:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:27:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:27:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 17:31:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:31:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 17:32:07 --> Could not find the language line "Home"
ERROR - 2024-04-11 17:35:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:39:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:42:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:42:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:42:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:45:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 17:45:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 17:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 17:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:49:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 17:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 17:49:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 17:51:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 17:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 17:59:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:01:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-11 18:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:07:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-11 18:11:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:15:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:16:45 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:19:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:20:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 18:20:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 18:23:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:23:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:27:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:27:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 18:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:29:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:30:35 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:30:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:30:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:31:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:31:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:31:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:31:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:33:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 18:33:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:37:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:37:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:37:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:38:00 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:38:02 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:38:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 18:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:39:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:39:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:39:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:39:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 18:39:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 18:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:41:11 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:41:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:41:35 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:41:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:41:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:41:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:42:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:23 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:42:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:43:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:43:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 18:43:04 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:43:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:43:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:43:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:43:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:44:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:44:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:45:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:45:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:45:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:45:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 18:45:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 18:45:29 --> Could not find the language line "Home"
ERROR - 2024-04-11 18:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:47:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:48:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:48:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:48:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:49:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 18:49:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 18:49:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 18:51:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:54:01 --> Could not find the language line "products"
ERROR - 2024-04-11 18:54:34 --> Could not find the language line "products"
ERROR - 2024-04-11 18:55:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 18:59:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 18:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 18:59:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:00:13 --> Could not find the language line "Home"
ERROR - 2024-04-11 19:02:12 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-11 19:03:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:07:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:11:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:13:08 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-04-11 19:15:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:15:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 19:15:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 19:15:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:19:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 19:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:23:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:26:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-11 19:27:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:28:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 19:28:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 19:28:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:29:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 19:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 19:29:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:30:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 19:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:32:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 19:32:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 19:32:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:43:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:44:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 19:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 19:44:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:44:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:45:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 19:46:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 19:46:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 19:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:48:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-11 19:48:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-11 19:48:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 19:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:53:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:54:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:55:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:56:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 19:59:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 19:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 20:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:01:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:02:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:02:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 20:02:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:03:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 20:03:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:03:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 20:03:28 --> Could not find the language line "Home"
ERROR - 2024-04-11 20:03:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 20:03:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:04:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:04:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 20:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:06:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:08:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:09:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 20:09:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 20:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:11:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 20:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:13:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:13:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:14:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:14:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-04-11 20:14:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:14:53 --> 404 Page Not Found: Chosenphp/index
ERROR - 2024-04-11 20:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:15:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:17:07 --> Could not find the language line "products"
ERROR - 2024-04-11 20:17:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:18:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:19:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 20:19:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:21:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:23:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:24:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:25:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:25:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 20:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:27:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 20:27:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 20:27:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 20:27:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:28:52 --> Could not find the language line "Home"
ERROR - 2024-04-11 20:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 20:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:34:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:35:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:36:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:37:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:38:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:39:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:41:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:42:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:44:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:44:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:49:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 20:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:51:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:52:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:55:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:58:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 20:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 20:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:01:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 21:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 21:01:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 21:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:02:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:02:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:02:57 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:05:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:06:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:08:16 --> Could not find the language line "products"
ERROR - 2024-04-11 21:09:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:09:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 21:09:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 21:09:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 21:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:10:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:12:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:13:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:14:22 --> Could not find the language line "Perfume"
ERROR - 2024-04-11 21:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:15:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:18:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:18:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:18:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 21:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:20:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:20:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 21:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:21:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:22:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:22:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 21:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:23:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:26:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:28:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:29:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 21:29:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 21:29:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 21:30:15 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:31:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-11 21:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:31:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:31:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 21:32:28 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:32:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:34:16 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:35:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:37:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:40:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:41:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:41:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:41:23 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:41:27 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:41:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:42:23 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:42:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:42:42 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:42:52 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-04-11 21:42:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:42:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:42:56 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:42:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-11 21:42:57 --> Could not find the language line "Home"
ERROR - 2024-04-11 21:43:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-11 21:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-11 21:43:05 --> Could not find the language line "Socks"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Perfume"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Bracelets"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:43:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:15 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:16 --> Could not find the language line "Other"
ERROR - 2024-04-11 21:43:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:43:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 21:43:53 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-11 21:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:45:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:47:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:48:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 21:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 21:48:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 21:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:49:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:50:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:53:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:55:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:56:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:56:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 21:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:57:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:58:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 21:59:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 21:59:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:00:14 --> Could not find the language line "Home"
ERROR - 2024-04-11 22:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:03:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:03:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 22:03:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 22:03:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 22:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:06:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:06:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:07:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:08:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:08:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:09:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 22:09:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-11 22:09:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-11 22:09:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-11 22:09:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-11 22:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:10:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:10:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:11:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:11:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:13:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:13:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:15:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 22:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 22:15:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 22:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:15:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:19:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 22:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:23:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:25:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:26:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:26:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:26:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-04-11 22:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:30:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 22:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:31:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:32:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:33:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 22:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:34:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:35:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:35:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:36:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:36:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:36:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:39:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:40:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:40:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:41:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:42:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:42:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:43:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 22:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:47:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:49:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:51:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:51:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:52:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:53:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:54:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:55:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:56:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:56:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:56:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 22:57:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:57:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:57:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-11 22:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 22:59:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 22:59:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 23:00:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:00:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-11 23:01:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:01:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:04:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:06:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:07:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:07:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:09:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:11:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:12:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:13:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:14:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 23:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:14:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:15:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:16:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 23:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:17:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:18:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-11 23:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:21:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:22:35 --> Could not find the language line "Home"
ERROR - 2024-04-11 23:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:22:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:23:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:23:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:24:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:24:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:26:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:27:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:27:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:29:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:30:20 --> Could not find the language line "Home"
ERROR - 2024-04-11 23:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:30:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:33:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:33:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:33:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:35:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:36:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:36:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:38:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:40:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:41:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:41:38 --> Could not find the language line "Home"
ERROR - 2024-04-11 23:41:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 23:41:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 23:41:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 23:42:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:42:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:43:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:43:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-11 23:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:44:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:44:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:45:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 23:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 23:45:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 23:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:45:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:46:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:47:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 23:47:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 23:47:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 23:48:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:48:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:49:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:50:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-11 23:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:51:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-11 23:51:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-11 23:51:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-11 23:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:57:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:58:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:59:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-11 23:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-11 23:59:11 --> 404 Page Not Found: Assets/css
