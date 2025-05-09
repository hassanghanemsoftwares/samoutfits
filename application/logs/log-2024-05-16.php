<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-16 00:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:08:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 00:08:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 00:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:11:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 00:11:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 00:11:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:11:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 00:11:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:15:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 00:16:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:16:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 00:16:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:19:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 00:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:20:53 --> Could not find the language line "Home"
ERROR - 2024-05-16 00:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:23:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 00:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 00:32:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 00:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:35:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:35:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 00:35:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:37:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 00:37:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:41:03 --> Could not find the language line "Home"
ERROR - 2024-05-16 00:50:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 00:50:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 00:50:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 00:50:49 --> Could not find the language line "Home"
ERROR - 2024-05-16 01:14:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 01:14:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 01:14:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 01:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:15:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:15:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:15:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 01:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 01:15:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 01:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:19:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 01:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:20:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 01:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:23:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:30:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 01:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 01:30:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 01:33:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 01:33:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 01:33:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 01:36:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 01:36:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 01:50:46 --> Could not find the language line "Home"
ERROR - 2024-05-16 01:53:39 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 02:06:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:08:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 02:08:36 --> Could not find the language line "Home"
ERROR - 2024-05-16 02:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:09:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:09:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:11:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 02:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:14:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:20:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 02:30:32 --> Could not find the language line "Bracelets"
ERROR - 2024-05-16 02:37:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 02:37:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 02:37:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 02:42:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 02:42:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 02:42:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 02:42:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 02:42:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 02:42:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 02:45:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 02:45:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 02:45:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 02:45:55 --> Could not find the language line "Socks"
ERROR - 2024-05-16 02:50:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 02:53:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 02:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 02:55:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 02:55:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:02:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 03:16:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-16 03:20:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 03:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:23:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:23:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:25:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:25:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:26:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 03:26:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 03:27:44 --> Could not find the language line "Home"
ERROR - 2024-05-16 03:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:28:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 03:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 03:37:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 03:39:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 03:46:00 --> Could not find the language line "Home"
ERROR - 2024-05-16 03:50:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:05:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 04:05:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:08:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:08:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 04:08:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 04:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:20:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:21:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 04:21:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 04:24:40 --> Could not find the language line "products"
ERROR - 2024-05-16 04:27:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:27:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:27:46 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:27:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 04:27:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 04:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:35:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:36:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 04:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:37:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:37:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:38:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:38:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 04:38:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:39:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:42:56 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:43:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 04:43:17 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:43:20 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:43:35 --> Could not find the language line "Perfume"
ERROR - 2024-05-16 04:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:44:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 04:44:05 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:44:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 04:44:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 04:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:44:49 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:50:47 --> Could not find the language line "Home"
ERROR - 2024-05-16 04:53:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:53:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 04:53:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 04:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 04:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 04:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 04:58:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 04:58:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 05:01:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 05:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:09:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 05:09:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 05:09:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 05:13:25 --> Could not find the language line "products"
ERROR - 2024-05-16 05:16:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 05:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 05:16:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 05:17:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 05:20:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:23:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 05:26:34 --> Could not find the language line "Home"
ERROR - 2024-05-16 05:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 05:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 05:31:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:33:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 05:33:54 --> Could not find the language line "products"
ERROR - 2024-05-16 05:42:01 --> Could not find the language line "Home"
ERROR - 2024-05-16 05:42:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 05:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 05:42:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 05:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:50:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 05:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:51:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 05:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 05:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:00:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:01:51 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 06:04:18 --> Could not find the language line "Home"
ERROR - 2024-05-16 06:04:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 06:04:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 06:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:06:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:06:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:06:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:09:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:09:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:09:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 06:09:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 06:09:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 06:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:11:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:11:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:14:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:16:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:18:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:18:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:19:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:19:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:19:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:19:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:19:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:20:49 --> Could not find the language line "Home"
ERROR - 2024-05-16 06:21:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:21:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 06:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:23:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:23:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:24:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:26:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:27:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:27:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:28:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 06:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:35:36 --> Could not find the language line "Socks"
ERROR - 2024-05-16 06:35:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:35:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:35:58 --> Could not find the language line "Socks"
ERROR - 2024-05-16 06:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:36:14 --> Could not find the language line "Socks"
ERROR - 2024-05-16 06:36:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:36:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:40:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:41:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:41:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:44:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:44:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:50:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 06:50:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:50:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 06:51:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:53:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:53:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 06:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 06:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 07:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:03:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:03:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:07:05 --> Could not find the language line "products"
ERROR - 2024-05-16 07:11:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 07:11:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 07:11:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 07:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:17:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:19:04 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:20:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:25:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:25:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:27:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 07:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:28:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 07:28:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 07:28:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 07:28:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 07:29:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 07:30:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 07:30:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 07:30:49 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:49 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:49 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:49 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:49 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:50 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:50 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:50 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:50 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:30:50 --> Could not find the language line "accounting"
ERROR - 2024-05-16 07:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:34:15 --> Could not find the language line "products"
ERROR - 2024-05-16 07:35:17 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:37:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 07:37:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 07:37:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 07:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:49:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:49:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:49:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:49:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:50:53 --> Could not find the language line "Home"
ERROR - 2024-05-16 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:51:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 07:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 07:58:59 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-05-16 08:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:06:14 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:09:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:09:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:09:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:09:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:15:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:15:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:19:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 08:19:24 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-05-16 08:20:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 08:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 08:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:24:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 08:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 08:24:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 08:28:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:28:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:31:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:31:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:31:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 08:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 08:31:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 08:32:00 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:33:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:33:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:33:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:33:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:35:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:35:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:35:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 08:36:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 08:36:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 08:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:36:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:46:43 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:46:49 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:46:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:46:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:48:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 08:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:48:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:50:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 08:52:23 --> Could not find the language line "Bracelets"
ERROR - 2024-05-16 08:55:52 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-05-16 08:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:59:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 08:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 08:59:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:01:30 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:03:00 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:09:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:13:29 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:14:21 --> Could not find the language line "products"
ERROR - 2024-05-16 09:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:16:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 09:19:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:19:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:19:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:20:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:21:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:21:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 09:21:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 09:21:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 09:22:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:23:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:23:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:26:21 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:26:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:26:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:27:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:27:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:28:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:28:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:33:03 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:35:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 09:35:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 09:35:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 09:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:35:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:38:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:38:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:39:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 09:39:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 09:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:42:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 09:42:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 09:42:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 09:42:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:42:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:44:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:45:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:47:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:49:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:49:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:50:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:51:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:53:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:53:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:53:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:55:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:55:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 09:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:56:45 --> Could not find the language line "Home"
ERROR - 2024-05-16 09:57:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:57:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 09:57:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 09:57:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:02:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 10:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:06:32 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:13:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:15:19 --> Could not find the language line "Socks"
ERROR - 2024-05-16 10:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:19:18 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:20:10 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:20:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 10:20:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:20:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:22:36 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:27:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 10:27:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 10:27:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 10:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:28:07 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:29:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:31:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:32:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 10:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:36:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:39:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:39:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:39:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-16 10:41:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:41:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:42:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 10:42:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 10:43:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 10:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:45:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 10:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 10:45:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 10:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:46:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 10:47:07 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 10:49:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 10:50:53 --> Could not find the language line "Home"
ERROR - 2024-05-16 10:51:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 10:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 10:51:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 10:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:02:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 11:02:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 11:02:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 11:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:04:31 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:07:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 11:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:10:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:10:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:15:27 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:18:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 11:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 11:18:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 11:20:53 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:23:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:23:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:25:13 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:42:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:44:47 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:45:27 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:46:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:49:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 11:50:55 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:57:05 --> Could not find the language line "Home"
ERROR - 2024-05-16 11:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 11:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:03:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 12:03:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 12:03:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 12:05:42 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:07:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 12:09:30 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:10:22 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:10:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:10:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:10:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:10:28 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:11:29 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 12:13:42 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:13:42 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:13:42 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:14:34 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:15:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:15:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:20:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:22:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:22:41 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:25:32 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:28:39 --> Could not find the language line "Other"
ERROR - 2024-05-16 12:32:14 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:37:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-16 12:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:47:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 12:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:50:53 --> Could not find the language line "Home"
ERROR - 2024-05-16 12:51:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 12:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 12:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:04:32 --> Could not find the language line "products"
ERROR - 2024-05-16 13:06:08 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:07:07 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-16 13:07:07 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-05-16 13:07:07 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-05-16 13:07:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-16 13:07:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-16 13:07:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 13:07:10 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-05-16 13:07:10 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-05-16 13:07:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-16 13:07:11 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-05-16 13:07:11 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-05-16 13:07:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 13:07:11 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-05-16 13:08:39 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:09:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 13:09:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 13:09:31 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:14:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:20:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:21:56 --> Could not find the language line "Other"
ERROR - 2024-05-16 13:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:27:45 --> Could not find the language line "Socks"
ERROR - 2024-05-16 13:28:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:32:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 13:32:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:36:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:36:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 13:36:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:39:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:39:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 13:39:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:41:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:41:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 13:42:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:42:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 13:42:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:44:24 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:44:46 --> Could not find the language line "Socks"
ERROR - 2024-05-16 13:44:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:45:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:45:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 13:45:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:47:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 13:47:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 13:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:50:54 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:51:44 --> Could not find the language line "Socks"
ERROR - 2024-05-16 13:51:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:52:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 13:52:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 13:52:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 13:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:54:10 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:54:32 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 13:55:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 13:55:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 13:55:36 --> Could not find the language line "Home"
ERROR - 2024-05-16 13:55:37 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-16 13:55:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 13:55:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 13:55:51 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-16 13:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-16 13:58:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 14:00:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-16 14:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:00:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-16 14:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 14:05:51 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-16 14:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:09:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:10:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:10:09 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:10:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:10:40 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:10:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:12:37 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:13:37 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:13:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:13:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:13:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:14:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:14:30 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:14:38 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:15:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:15:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:15:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:15:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:16:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 14:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-16 14:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:18:01 --> Could not find the language line "Bracelets"
ERROR - 2024-05-16 14:18:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 14:18:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 14:18:18 --> Could not find the language line "Perfume"
ERROR - 2024-05-16 14:18:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-16 14:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:20:55 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 14:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 14:22:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 14:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:31:43 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-16 14:38:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 14:38:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 14:38:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 14:39:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 14:39:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 14:40:25 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 14:48:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:49:56 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:51:00 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:51:09 --> Could not find the language line "Home"
ERROR - 2024-05-16 14:51:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 14:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 14:51:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 14:56:56 --> Could not find the language line "Other"
ERROR - 2024-05-16 14:57:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:01:25 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:04:37 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:11:27 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:12:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 15:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:16:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 15:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:20:55 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:26:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:30:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 15:30:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 15:30:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 15:33:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 15:33:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 15:33:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 15:35:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 15:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 15:40:22 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:44:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 15:44:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 15:44:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 15:50:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:50:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 15:58:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 15:58:40 --> Could not find the language line "Home"
ERROR - 2024-05-16 15:59:39 --> Could not find the language line "Home"
ERROR - 2024-05-16 16:03:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-16 16:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 16:05:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:11:55 --> Could not find the language line "products"
ERROR - 2024-05-16 16:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:18:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 16:18:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:20:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 16:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:26:42 --> Could not find the language line "Clothes"
ERROR - 2024-05-16 16:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:28:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:28:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 16:28:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:29:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:29:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 16:29:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:36:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:36:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 16:36:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 16:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:37:39 --> Could not find the language line "Home"
ERROR - 2024-05-16 16:41:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 16:44:26 --> Could not find the language line "products"
ERROR - 2024-05-16 16:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:50:21 --> Could not find the language line "Home"
ERROR - 2024-05-16 16:50:56 --> Could not find the language line "Home"
ERROR - 2024-05-16 16:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:53:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 16:53:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 16:53:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 16:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 16:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:01:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 17:01:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 17:01:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 17:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:01:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 17:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:03:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 17:04:38 --> Could not find the language line "Home"
ERROR - 2024-05-16 17:11:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 17:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 17:11:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 17:12:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-16 17:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 17:12:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 17:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:20:57 --> Could not find the language line "Home"
ERROR - 2024-05-16 17:22:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-16 17:22:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 17:22:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 17:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-16 17:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-16 17:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:40:20 --> Could not find the language line "products"
ERROR - 2024-05-16 17:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:42:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 17:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 17:50:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-16 17:50:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 17:51:00 --> Could not find the language line "Bracelets"
ERROR - 2024-05-16 17:51:00 --> Could not find the language line "Perfume"
ERROR - 2024-05-16 17:51:01 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 17:51:01 --> Could not find the language line "Home"
ERROR - 2024-05-16 17:51:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 17:51:02 --> Could not find the language line "Other"
ERROR - 2024-05-16 17:51:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 17:51:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 17:51:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-16 17:51:20 --> Could not find the language line "Other"
ERROR - 2024-05-16 17:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 17:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:00:52 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:03:07 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:04:42 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:07:15 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:15:04 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:17:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 18:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:18:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 18:18:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 18:18:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 18:18:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 18:19:57 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-16 18:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:20:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:25:51 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:26:41 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:33:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 18:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 18:35:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-16 18:38:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 18:38:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-16 18:42:21 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:42:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 18:43:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 18:44:11 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 18:45:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 18:46:16 --> Could not find the language line "Other"
ERROR - 2024-05-16 18:49:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 18:49:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 18:50:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 18:56:13 --> Could not find the language line "Home"
ERROR - 2024-05-16 19:05:19 --> Could not find the language line "products"
ERROR - 2024-05-16 19:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:10:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 19:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:11:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:11:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:11:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:11:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:12:02 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:12:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:12:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:13:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:13:59 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:14:35 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:15:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-16 19:15:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 19:15:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:16:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:16:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:17:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:17:28 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:17:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-16 19:20:58 --> Could not find the language line "Home"
ERROR - 2024-05-16 19:23:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:23:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:27:27 --> Could not find the language line "Home"
ERROR - 2024-05-16 19:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:29:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:29:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:29:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:34:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 19:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 19:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:44:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:44:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 19:50:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 19:52:09 --> Could not find the language line "Home"
ERROR - 2024-05-16 19:54:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 19:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 19:54:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 19:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-16 20:01:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 20:01:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 20:01:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 20:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:10:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 20:11:47 --> Could not find the language line "Home"
ERROR - 2024-05-16 20:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:19:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 20:20:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 20:20:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 20:20:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 20:20:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 20:29:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 20:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 20:29:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 20:30:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 20:30:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 20:30:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 20:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 20:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 20:42:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 20:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:43:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 20:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:48:06 --> Could not find the language line "Home"
ERROR - 2024-05-16 20:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 20:50:59 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:03:52 --> Could not find the language line "products"
ERROR - 2024-05-16 21:07:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 21:07:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 21:18:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 21:18:31 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:19:48 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:20:27 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:20:58 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-16 21:21:00 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:22:31 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:22:33 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:24:36 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:24:43 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:26:01 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:26:12 --> Could not find the language line "Socks"
ERROR - 2024-05-16 21:26:56 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:27:11 --> Could not find the language line "Socks"
ERROR - 2024-05-16 21:28:05 --> Could not find the language line "Socks"
ERROR - 2024-05-16 21:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 21:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 21:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 21:31:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 21:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 21:31:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 21:33:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 21:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 21:33:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 21:37:56 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-05-16 21:37:57 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2024-05-16 21:37:57 --> 404 Page Not Found: Website/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: News/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: Test/wp-includes
ERROR - 2024-05-16 21:37:58 --> 404 Page Not Found: Media/wp-includes
ERROR - 2024-05-16 21:37:59 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2024-05-16 21:37:59 --> 404 Page Not Found: Site/wp-includes
ERROR - 2024-05-16 21:37:59 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2024-05-16 21:37:59 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2024-05-16 21:40:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 21:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 21:40:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 21:46:11 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:51:04 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:52:05 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:53:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-16 21:53:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 21:54:31 --> Could not find the language line "Home"
ERROR - 2024-05-16 21:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 21:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:10:26 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:14:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 22:14:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 22:14:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 22:15:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 22:15:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 22:15:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 22:21:04 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:24:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 22:24:08 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:25:13 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:26:39 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 22:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 22:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 22:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:48:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 22:51:02 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:53:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 22:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 22:53:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 22:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:55:50 --> Could not find the language line "Home"
ERROR - 2024-05-16 22:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 22:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 22:58:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 22:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 22:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:00:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:02:47 --> Could not find the language line "Clothing"
ERROR - 2024-05-16 23:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:07:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-16 23:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:11:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-16 23:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:15:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:17:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:19:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 23:19:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:20:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:20:23 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-16 23:21:02 --> Could not find the language line "Home"
ERROR - 2024-05-16 23:22:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:25:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 23:25:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:28:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 23:28:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:28:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 23:28:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:39:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:39:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-16 23:39:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:40:24 --> Could not find the language line "Home"
ERROR - 2024-05-16 23:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:43:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-16 23:49:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-16 23:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-16 23:49:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-16 23:51:04 --> Could not find the language line "Home"
ERROR - 2024-05-16 23:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-16 23:59:09 --> 404 Page Not Found: Assets/css
