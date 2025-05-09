<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-28 00:05:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 00:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 00:14:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 00:18:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 00:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 00:22:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 00:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 00:22:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 00:22:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 00:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 00:24:08 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:26:47 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:28:14 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:29:26 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:33:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 00:36:59 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:38:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 00:42:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 00:42:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 00:42:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 00:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 00:42:51 --> Could not find the language line "Home"
ERROR - 2024-05-28 00:55:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 00:57:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 00:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 00:57:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 00:59:20 --> Could not find the language line "Home"
ERROR - 2024-05-28 01:01:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 01:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 01:01:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 01:03:43 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 01:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 01:07:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:10:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 01:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 01:10:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 01:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 01:12:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:14:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 01:16:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:23:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 01:25:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 01:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 01:29:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:29:24 --> Could not find the language line "Home"
ERROR - 2024-05-28 01:34:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 01:45:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 01:45:13 --> Could not find the language line "Home"
ERROR - 2024-05-28 01:45:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 01:45:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 01:45:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 01:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 01:47:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 01:47:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-28 01:48:43 --> Could not find the language line "Other"
ERROR - 2024-05-28 01:51:09 --> Could not find the language line "Socks"
ERROR - 2024-05-28 01:59:22 --> Could not find the language line "Home"
ERROR - 2024-05-28 02:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:06:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 02:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:11:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-28 02:20:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 02:20:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 02:20:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 02:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:22:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 02:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:29:36 --> Could not find the language line "Home"
ERROR - 2024-05-28 02:32:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 02:32:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 02:32:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 02:34:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 02:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:39:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 02:47:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 02:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 02:47:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 02:49:16 --> Could not find the language line "products"
ERROR - 2024-05-28 02:52:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 02:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:56:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 02:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 02:59:25 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 03:02:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 03:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 03:02:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 03:03:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:07:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:07:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 03:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 03:12:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 03:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 03:12:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 03:12:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 03:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 03:16:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 03:16:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:17:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 03:17:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 03:17:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 03:20:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:20:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 03:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 03:20:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 03:20:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 03:26:34 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:29:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:29:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:36:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:36:57 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:38:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:41:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:42:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 03:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 03:56:37 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:56:46 --> Could not find the language line "Bracelets"
ERROR - 2024-05-28 03:56:50 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:59:01 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 03:59:10 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:59:36 --> Could not find the language line "Socks"
ERROR - 2024-05-28 03:59:37 --> Could not find the language line "Home"
ERROR - 2024-05-28 03:59:49 --> Could not find the language line "Socks"
ERROR - 2024-05-28 04:00:05 --> Could not find the language line "Socks"
ERROR - 2024-05-28 04:00:12 --> Could not find the language line "Socks"
ERROR - 2024-05-28 04:00:12 --> Could not find the language line "Socks"
ERROR - 2024-05-28 04:00:14 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:00:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 04:00:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 04:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:00:27 --> Could not find the language line "Perfume"
ERROR - 2024-05-28 04:00:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:00:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 04:00:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 04:01:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 04:01:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 04:01:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 04:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 04:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:06:12 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-28 04:06:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 04:07:49 --> 404 Page Not Found: Axis2-admin/index
ERROR - 2024-05-28 04:07:50 --> 404 Page Not Found: Axis2/index
ERROR - 2024-05-28 04:07:51 --> 404 Page Not Found: Axis2/axis2-admin
ERROR - 2024-05-28 04:16:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:23:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 04:23:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 04:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:29:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:31:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:31:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 04:31:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:35:07 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-28 04:35:07 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:39:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 04:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 04:41:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:41:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 04:43:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 04:45:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:45:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 04:45:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 04:45:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 04:47:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 04:47:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:49:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-28 04:49:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-28 04:49:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:52:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 04:52:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:53:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 04:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 04:53:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 04:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 04:56:59 --> Could not find the language line "Home"
ERROR - 2024-05-28 04:57:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-28 04:59:24 --> Could not find the language line "Home"
ERROR - 2024-05-28 05:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:09:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:17:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 05:17:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 05:17:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 05:25:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-28 05:29:24 --> Could not find the language line "Home"
ERROR - 2024-05-28 05:32:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:32:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 05:32:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 05:32:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 05:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:36:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:38:03 --> Could not find the language line "Other"
ERROR - 2024-05-28 05:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 05:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 05:39:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 05:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:40:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:43:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 05:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 05:43:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 05:44:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:48:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 05:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:49:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 05:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 05:59:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:00:02 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:00:44 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:04:47 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:06:02 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:06:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-28 06:09:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 06:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:14:36 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:15:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 06:15:35 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:20:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 06:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:29:25 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:31:39 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:31:44 --> 404 Page Not Found: Home/accounts
ERROR - 2024-05-28 06:31:44 --> 404 Page Not Found: Home/assets
ERROR - 2024-05-28 06:31:44 --> 404 Page Not Found: Home/home
ERROR - 2024-05-28 06:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:33:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 06:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 06:33:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 06:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:47:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 06:47:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 06:47:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 06:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:51:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 06:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 06:51:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 06:51:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 06:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 06:59:14 --> Could not find the language line "Home"
ERROR - 2024-05-28 06:59:25 --> Could not find the language line "Home"
ERROR - 2024-05-28 07:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:06:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 07:06:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 07:06:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 07:06:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:10:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 07:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 07:10:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 07:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:19:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 07:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:27:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 07:29:26 --> Could not find the language line "Home"
ERROR - 2024-05-28 07:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:36:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 07:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:45:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 07:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 07:45:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 07:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:50:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 07:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 07:50:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 07:53:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 07:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 07:59:27 --> Could not find the language line "Home"
ERROR - 2024-05-28 07:59:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 07:59:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 07:59:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 08:00:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 08:00:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 08:00:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 08:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:04:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 08:04:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 08:04:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 08:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:15:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 08:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:21:52 --> Could not find the language line "Other"
ERROR - 2024-05-28 08:24:20 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:26:17 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:26:25 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:29:26 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:33:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:39:42 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:39:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:42:53 --> Could not find the language line "Other"
ERROR - 2024-05-28 08:46:27 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 08:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:47:10 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:53:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 08:53:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 08:53:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 08:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:55:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 08:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:56:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 08:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:57:32 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-28 08:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:57:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 08:57:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 08:57:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 08:59:27 --> Could not find the language line "Home"
ERROR - 2024-05-28 08:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:00:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:00:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 09:00:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 09:00:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 09:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:01:01 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:01:34 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:05:03 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:05:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:12:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:20:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:27:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 09:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:29:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:42:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:47:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-28 09:48:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 09:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 09:48:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 09:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:48:42 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:49:40 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:49:40 --> Could not find the language line "Home"
ERROR - 2024-05-28 09:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:51:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 09:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 09:59:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 10:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:06:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 10:06:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 10:06:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 10:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:08:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 10:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:10:23 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 10:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:16:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 10:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 10:16:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 10:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:23:47 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:29:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 10:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 10:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 10:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:39:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:39:52 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:43:59 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:45:19 --> Could not find the language line "products"
ERROR - 2024-05-28 10:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:54:41 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:56:42 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:57:03 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:57:24 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:57:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-28 10:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 10:59:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 10:59:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 11:00:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:01:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 11:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:15:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 11:15:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 11:15:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 11:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:23:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 11:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:29:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:36:43 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:37:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 11:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 11:37:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 11:37:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:45:20 --> Could not find the language line "Other"
ERROR - 2024-05-28 11:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:49:36 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:50:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 11:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:50:38 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:52:52 --> Could not find the language line "Home"
ERROR - 2024-05-28 11:55:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 11:55:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 11:55:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 11:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 11:59:28 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:03:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:05:03 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:12:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 12:12:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 12:16:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:18:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 12:18:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:20:50 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:22:47 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:23:34 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:26:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-28 12:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:29:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:34:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:34:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 12:34:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:36:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:36:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 12:36:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:38:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:42:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:43:24 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:43:26 --> Could not find the language line "Other"
ERROR - 2024-05-28 12:43:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:43:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 12:43:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:47:13 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:48:41 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 12:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 12:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 12:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 12:51:17 --> Could not find the language line "Other"
ERROR - 2024-05-28 12:53:04 --> Could not find the language line "Other"
ERROR - 2024-05-28 12:54:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:56:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:56:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 12:56:01 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:56:01 --> Could not find the language line "Home"
ERROR - 2024-05-28 12:59:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 13:09:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 13:09:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 13:09:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 13:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:18:36 --> Could not find the language line "Home"
ERROR - 2024-05-28 13:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:21:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 13:21:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 13:21:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 13:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:28:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 13:29:31 --> Could not find the language line "Home"
ERROR - 2024-05-28 13:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:49:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 13:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 13:59:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 13:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:03:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-28 14:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:07:56 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:08:05 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:08:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-05-28 14:08:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-05-28 14:09:17 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:09:17 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:09:17 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:09:22 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:09:22 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:09:22 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:17:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 14:17:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 14:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 14:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 14:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 14:22:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 14:22:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 14:22:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 14:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:29:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:33:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 14:33:53 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:36:12 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:37:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 14:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 14:37:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 14:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 14:50:02 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:56:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-28 14:56:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 14:56:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-28 14:56:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 14:59:31 --> Could not find the language line "Home"
ERROR - 2024-05-28 14:59:43 --> Could not find the language line "Home"
ERROR - 2024-05-28 15:07:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 15:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:18:29 --> Could not find the language line "products"
ERROR - 2024-05-28 15:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:28:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:28:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:28:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:28:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:28:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:29:32 --> Could not find the language line "Home"
ERROR - 2024-05-28 15:34:00 --> Could not find the language line "Socks"
ERROR - 2024-05-28 15:34:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-28 15:35:00 --> Could not find the language line "Other"
ERROR - 2024-05-28 15:36:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:36:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:36:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:48:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 15:48:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 15:48:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 15:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 15:59:32 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:00:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 16:00:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 16:08:40 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:11:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:12:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 16:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:19:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 16:19:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 16:19:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 16:19:07 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:28:32 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:29:32 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:30:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 16:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 16:30:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 16:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:49:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 16:49:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 16:49:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 16:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:53:18 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:53:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 16:53:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 16:53:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 16:54:45 --> Could not find the language line "Home"
ERROR - 2024-05-28 16:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:55:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 16:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 16:59:31 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:03:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:05:00 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:05:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-28 17:07:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:12:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:12:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 17:12:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:15:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 17:19:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:21:00 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:25:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 17:25:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:25:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:26:12 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:27:11 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:27:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:27:54 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:29:31 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 17:31:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-28 17:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:31:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:35:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:35:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 17:35:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:36:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:38:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:38:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 17:38:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:44:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:44:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 17:44:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:45:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-28 17:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-28 17:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:47:33 --> Could not find the language line "products"
ERROR - 2024-05-28 17:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:49:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:50:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:50:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 17:50:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:51:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 17:51:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 17:51:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 17:52:18 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:53:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 17:54:18 --> Could not find the language line "Home"
ERROR - 2024-05-28 17:55:51 --> Could not find the language line "products"
ERROR - 2024-05-28 17:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 17:59:34 --> Could not find the language line "Home"
ERROR - 2024-05-28 18:11:35 --> Could not find the language line "products"
ERROR - 2024-05-28 18:13:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 18:13:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 18:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 18:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 18:29:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-28 18:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 18:29:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:29:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:29:35 --> Could not find the language line "Home"
ERROR - 2024-05-28 18:31:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 18:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 18:31:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 18:32:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 18:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 18:32:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 18:33:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:36:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 18:36:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 18:36:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 18:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 18:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 18:52:52 --> Could not find the language line "Home"
ERROR - 2024-05-28 18:58:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-28 18:58:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 18:59:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:02:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:05:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:06:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:10:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:23:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:27:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:27:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:29:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:29:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 19:29:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 19:29:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 19:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:35:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:39:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:39:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 19:41:00 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:41:50 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:48:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:51:17 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 19:52:53 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:52:58 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:53:08 --> Could not find the language line "Home"
ERROR - 2024-05-28 19:57:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 19:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 19:57:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 19:57:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 19:59:35 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:00:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 20:02:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-28 20:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:29:34 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:31:49 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:31:49 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:31:53 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:31:53 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:36:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:39:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 20:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 20:39:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 20:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:40:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:40:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:40:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:40:08 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:41:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 20:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 20:41:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 20:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 20:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:44:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 20:47:30 --> Could not find the language line "Home"
ERROR - 2024-05-28 20:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:58:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:58:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 20:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 20:59:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 21:01:12 --> Could not find the language line "Home"
ERROR - 2024-05-28 21:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:02:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:02:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:05:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 21:05:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 21:05:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 21:06:33 --> Could not find the language line "Home"
ERROR - 2024-05-28 21:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:10:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 21:10:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 21:10:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 21:10:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 21:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 21:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 21:12:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:14:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:16:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 21:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 21:16:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 21:18:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:20:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:20:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 21:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:22:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:26:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 21:26:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 21:29:36 --> Could not find the language line "Home"
ERROR - 2024-05-28 21:56:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 21:56:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 21:56:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 21:59:39 --> Could not find the language line "Home"
ERROR - 2024-05-28 22:02:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:02:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:02:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:03:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:03:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 22:03:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:10:54 --> Could not find the language line "Socks"
ERROR - 2024-05-28 22:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:11:21 --> Could not find the language line "Home"
ERROR - 2024-05-28 22:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:11:48 --> Could not find the language line "Home"
ERROR - 2024-05-28 22:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:13:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:13:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:13:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:13:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:13:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:18:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:18:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:18:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:18:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 22:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:21:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:21:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:21:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:25:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 22:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 22:26:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:26:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:26:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:28:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:28:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 22:28:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:29:39 --> Could not find the language line "Home"
ERROR - 2024-05-28 22:34:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-28 22:37:16 --> Could not find the language line "Home"
ERROR - 2024-05-28 22:41:33 --> Could not find the language line "products"
ERROR - 2024-05-28 22:42:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:42:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:42:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:42:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:42:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:42:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:42:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:42:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:45:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:45:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:50:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:50:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:50:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:53:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:53:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:53:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:58:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 22:58:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 22:58:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 22:59:44 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:02:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:06:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 23:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:07:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 23:07:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-28 23:07:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 23:08:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 23:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 23:09:40 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:10:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:10:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:13:01 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:17:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 23:17:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 23:17:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 23:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:18:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-28 23:22:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-28 23:28:41 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:29:42 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:30:27 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:32:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-28 23:32:23 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:33:57 --> Could not find the language line "Home"
ERROR - 2024-05-28 23:40:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-28 23:40:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-28 23:40:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-28 23:59:37 --> Could not find the language line "Home"
