<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-29 00:04:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 00:06:02 --> Could not find the language line "Other"
ERROR - 2024-05-29 00:06:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 00:06:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 00:06:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 00:06:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 00:06:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 00:06:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 00:06:08 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 00:06:30 --> Could not find the language line "Other"
ERROR - 2024-05-29 00:07:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 00:11:55 --> Could not find the language line "Socks"
ERROR - 2024-05-29 00:12:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 00:12:31 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-29 00:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 00:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 00:14:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 00:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 00:29:43 --> Could not find the language line "Home"
ERROR - 2024-05-29 00:56:52 --> Could not find the language line "Home"
ERROR - 2024-05-29 00:59:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 01:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:02:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:02:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 01:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 01:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 01:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:06:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:10:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:14:13 --> Could not find the language line "1"
ERROR - 2024-05-29 01:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:29:39 --> Could not find the language line "Home"
ERROR - 2024-05-29 01:39:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:43:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-29 01:43:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:43:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 01:43:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 01:43:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 01:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:47:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:47:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:50:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 01:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 01:50:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 01:51:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:51:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 01:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 01:51:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 01:51:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 01:51:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 01:59:39 --> Could not find the language line "Home"
ERROR - 2024-05-29 02:04:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 02:04:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:04:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 02:04:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:05:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:05:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 02:05:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:05:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-29 02:05:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 02:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 02:09:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 02:09:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 02:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 02:13:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 02:29:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:29:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 02:29:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:29:41 --> Could not find the language line "Home"
ERROR - 2024-05-29 02:47:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 02:47:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:50:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 02:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 02:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 02:59:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:08:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 03:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:09:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 03:09:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 03:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:17:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 03:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:17:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 03:18:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 03:18:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 03:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:25:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 03:27:43 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:29:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:29:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 03:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:31:07 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:31:13 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:39:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-29 03:41:00 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:41:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:41:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:41:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:42:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:42:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:42:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 03:42:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 03:42:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 03:42:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:44:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 03:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 03:46:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:47:09 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:49:31 --> Could not find the language line "Other"
ERROR - 2024-05-29 03:50:29 --> Could not find the language line "Socks"
ERROR - 2024-05-29 03:51:25 --> Could not find the language line "Home"
ERROR - 2024-05-29 03:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-29 03:59:44 --> Could not find the language line "Home"
ERROR - 2024-05-29 04:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 04:05:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 04:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 04:05:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 04:05:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:09:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:09:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:13:01 --> Could not find the language line "Other"
ERROR - 2024-05-29 04:13:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 04:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 04:13:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 04:13:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 04:14:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 04:14:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 04:14:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 04:21:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:21:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:21:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 04:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 04:21:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-29 04:21:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 04:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 04:29:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 04:38:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 04:38:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 04:38:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 04:48:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 04:48:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 04:53:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 04:56:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-29 04:57:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 04:59:41 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:01:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 05:05:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:05:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:09:07 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:10:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 05:11:37 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:15:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 05:15:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:17:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:18:36 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:20:25 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:20:45 --> 404 Page Not Found: Products/products
ERROR - 2024-05-29 05:21:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:21:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 05:23:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 05:23:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:23:38 --> Could not find the language line "Other"
ERROR - 2024-05-29 05:27:28 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:27:29 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:27:37 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:27:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:28:09 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:28:44 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:28:55 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:28:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:29:22 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:29:25 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:29:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 05:32:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:32:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 05:32:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:32:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 05:32:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 05:40:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:40:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 05:40:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:42:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 05:42:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:43:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 05:54:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 05:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 05:54:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 05:59:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 06:01:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:01:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:04:24 --> Could not find the language line "products"
ERROR - 2024-05-29 06:05:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:05:54 --> Could not find the language line "Home"
ERROR - 2024-05-29 06:08:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 06:08:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:09:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:09:40 --> Could not find the language line "Home"
ERROR - 2024-05-29 06:13:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:13:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 06:14:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:14:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 06:14:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:18:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:18:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 06:18:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:29:06 --> Could not find the language line "Home"
ERROR - 2024-05-29 06:29:41 --> Could not find the language line "Home"
ERROR - 2024-05-29 06:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:37:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 06:37:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 06:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:48:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:48:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 06:48:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 06:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:56:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 06:56:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 06:56:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 06:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 06:59:41 --> Could not find the language line "Home"
ERROR - 2024-05-29 07:02:35 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-29 07:05:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 07:05:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 07:05:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 07:05:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 07:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 07:05:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 07:06:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 07:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 07:06:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 07:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:15:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 07:15:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 07:15:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 07:15:47 --> Could not find the language line "Home"
ERROR - 2024-05-29 07:15:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 07:15:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 07:15:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 07:23:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:27:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:29:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 07:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:37:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 07:42:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:42:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:44:43 --> Could not find the language line "Home"
ERROR - 2024-05-29 07:46:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:50:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:52:02 --> Could not find the language line "Socks"
ERROR - 2024-05-29 07:54:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 07:54:58 --> Could not find the language line "Other"
ERROR - 2024-05-29 07:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 07:59:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 08:00:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:00:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:01:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 08:02:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:02:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 08:02:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:03:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 08:03:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:05:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 08:06:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 08:06:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:06:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:10:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:10:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:12:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:12:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:12:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 08:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:16:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 08:19:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:19:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 08:19:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:22:05 --> Could not find the language line "Home"
ERROR - 2024-05-29 08:22:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:22:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:22:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:22:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 08:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:24:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:24:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 08:24:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:26:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 08:26:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:29:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 08:34:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:34:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 08:34:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:35:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 08:35:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 08:35:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 08:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:47:51 --> Could not find the language line "Home"
ERROR - 2024-05-29 08:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 08:58:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 08:58:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 08:59:44 --> Could not find the language line "Home"
ERROR - 2024-05-29 09:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:04:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 09:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 09:04:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 09:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:20:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 09:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 09:20:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:29:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 09:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:45:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 09:45:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 09:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 09:49:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 09:53:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 09:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 09:59:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:01:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:05:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:07:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:08:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:08:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:08:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:09:21 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:09:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:09:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:12:57 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:12:58 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:13:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:14:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:16:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:16:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:21:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:22:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:24:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:24:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 10:24:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:25:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 10:28:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:28:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:28:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:29:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:29:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:30:12 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:33:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:41:04 --> Could not find the language line "Socks"
ERROR - 2024-05-29 10:43:14 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:46:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:46:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:46:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:48:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 10:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 10:48:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 10:51:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 10:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 10:52:45 --> Could not find the language line "Other"
ERROR - 2024-05-29 10:52:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 10:55:54 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 10:56:18 --> Could not find the language line "Socks"
ERROR - 2024-05-29 10:59:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 11:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 11:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 11:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 11:09:50 --> Could not find the language line "Home"
ERROR - 2024-05-29 11:10:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 11:10:36 --> Could not find the language line "Home"
ERROR - 2024-05-29 11:12:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 11:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 11:12:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 11:17:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 11:17:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 11:17:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 11:21:24 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 11:23:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 11:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 11:23:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 11:29:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 11:32:00 --> Could not find the language line "Home"
ERROR - 2024-05-29 11:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 11:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 11:32:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 11:36:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:36:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:42:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 11:47:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:48:11 --> 404 Page Not Found: Storage/settings
ERROR - 2024-05-29 11:49:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 11:51:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:55:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:57:54 --> Could not find the language line "Other"
ERROR - 2024-05-29 11:58:33 --> Could not find the language line "Socks"
ERROR - 2024-05-29 11:59:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 11:59:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-29 11:59:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:03:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 12:03:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-29 12:09:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 12:10:23 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:14:24 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:29:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 12:29:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 12:29:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 12:29:49 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:34:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 12:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:35:03 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:35:54 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 12:36:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-29 12:36:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:38:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 12:38:36 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:39:07 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:39:17 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:39:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-29 12:42:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 12:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:46:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 12:47:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 12:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:53:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 12:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 12:53:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 12:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 12:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-29 12:56:09 --> Could not find the language line "Home"
ERROR - 2024-05-29 12:56:17 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-29 12:59:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:03:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 13:03:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 13:03:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 13:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:07:22 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:15:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 13:15:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 13:15:24 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:15:24 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:26:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 13:29:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 13:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 13:29:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 13:29:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:30:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 13:30:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 13:30:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 13:30:33 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:30:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 13:32:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 13:32:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 13:32:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 13:33:44 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:34:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 13:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:38:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 13:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:48:58 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:51:03 --> Could not find the language line "Home"
ERROR - 2024-05-29 13:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 13:59:46 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:01:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 14:01:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 14:01:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 14:03:11 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:03:15 --> Could not find the language line "Socks"
ERROR - 2024-05-29 14:03:57 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:04:31 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:04:36 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:05:28 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:05:30 --> Could not find the language line "Other"
ERROR - 2024-05-29 14:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:05:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:06:19 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:06:52 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:07:04 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:07:34 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:07:57 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:08:38 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:08:55 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:09:11 --> Could not find the language line "Socks"
ERROR - 2024-05-29 14:09:17 --> Could not find the language line "Socks"
ERROR - 2024-05-29 14:09:20 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:09:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:10:17 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:15:29 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:18:59 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:21:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 14:21:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 14:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:29:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 14:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 14:47:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 14:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 14:48:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 14:52:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 14:56:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 14:59:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 15:00:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:04:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:12:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:16:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:16:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 15:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 15:16:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 15:19:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 15:19:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 15:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:24:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:28:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:29:50 --> Could not find the language line "Home"
ERROR - 2024-05-29 15:30:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 15:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 15:30:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 15:32:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 15:43:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 15:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 15:43:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 15:45:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 15:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 15:45:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 15:59:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:04:40 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:06:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:10:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:10:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 16:10:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 16:10:55 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:13:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 16:14:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:14:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:15:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 16:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:29:49 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:35:18 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:37:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:37:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:39:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:43:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:46:57 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:49:51 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 16:49:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:50:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 16:50:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:50:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:51:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:53:31 --> Could not find the language line "Home"
ERROR - 2024-05-29 16:53:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:54:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:54:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:55:00 --> Could not find the language line "products"
ERROR - 2024-05-29 16:55:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:55:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:55:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:56:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:56:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-29 16:56:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 16:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 16:59:49 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:00:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:01:24 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:01:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 17:01:37 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:01:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:02:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:02:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:02:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:02:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:02:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:03:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:03:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:03:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 17:03:04 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:03:08 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 17:03:13 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:08:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:11:54 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:12:21 --> Could not find the language line "products"
ERROR - 2024-05-29 17:12:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-29 17:12:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-29 17:12:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 17:13:09 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:16:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:20:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:21:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 17:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 17:21:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 17:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:24:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:28:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:29:51 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:32:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 17:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:46:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 17:47:17 --> Could not find the language line "products"
ERROR - 2024-05-29 17:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:55:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 17:55:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 17:55:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 17:55:58 --> Could not find the language line "Home"
ERROR - 2024-05-29 17:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 17:59:49 --> Could not find the language line "Home"
ERROR - 2024-05-29 18:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:08:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 18:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:14:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-29 18:16:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 18:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 18:26:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 18:26:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 18:26:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 18:27:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 18:27:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 18:27:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 18:28:49 --> Could not find the language line "Home"
ERROR - 2024-05-29 18:29:51 --> Could not find the language line "Home"
ERROR - 2024-05-29 18:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 18:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 18:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 18:38:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 18:38:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 18:38:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 18:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 18:45:47 --> Could not find the language line "products"
ERROR - 2024-05-29 18:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:55:18 --> Could not find the language line "Home"
ERROR - 2024-05-29 18:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 18:59:50 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:00:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 19:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:09:47 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:16:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 19:27:45 --> Could not find the language line "accounts"
ERROR - 2024-05-29 19:28:06 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:28:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:28:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:28:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:28:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:29:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:29:43 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:29:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 19:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:37:03 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:39:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 19:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:45:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-29 19:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 19:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:51:06 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:51:16 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:51:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 19:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:53:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-29 19:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:54:39 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:54:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 19:54:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 19:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:55:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 19:55:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 19:55:32 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:55:37 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:58:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 19:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 19:59:25 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:59:42 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:59:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 19:59:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 19:59:51 --> Could not find the language line "Home"
ERROR - 2024-05-29 19:59:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:00:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:00:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:00:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:01:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:01:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:02:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:02:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:03:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:03:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:03:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:04:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-29 20:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:14:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:16:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:22:28 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:27:20 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:28:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 20:29:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:40:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 20:44:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 20:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:45:06 --> Could not find the language line "Home"
ERROR - 2024-05-29 20:45:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:45:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:46:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:46:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 20:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 20:46:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 20:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:46:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:46:57 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:47:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:49:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 20:49:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 20:52:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 20:52:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 20:53:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 20:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 20:59:53 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:01:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:05:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:05:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 21:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:13:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:15:33 --> Could not find the language line "accounts"
ERROR - 2024-05-29 21:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:17:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 21:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 21:19:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 21:19:34 --> Could not find the language line "Socks"
ERROR - 2024-05-29 21:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:21:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:23:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 21:23:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 21:23:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 21:24:13 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:28:19 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-29 21:29:54 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:30:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-29 21:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:31:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 21:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:35:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 21:35:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 21:35:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 21:39:02 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:42:10 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 21:50:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-29 21:54:35 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:55:12 --> Could not find the language line "Home"
ERROR - 2024-05-29 21:56:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 21:59:54 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:01:39 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:04:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 22:06:30 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:06:30 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-29 22:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:09:39 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:10:08 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:10:24 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:10:33 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:10:56 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:10:58 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:11:00 --> Could not find the language line "Perfume"
ERROR - 2024-05-29 22:11:02 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:11:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 22:11:48 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:11:51 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:12:29 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:14:16 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:20:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:29:31 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:29:55 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:30:45 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:31:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 22:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-29 22:31:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 22:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:36:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 22:38:16 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:38:54 --> Could not find the language line "accounts"
ERROR - 2024-05-29 22:42:11 --> Could not find the language line "Home"
ERROR - 2024-05-29 22:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:44:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:48:52 --> Could not find the language line "products"
ERROR - 2024-05-29 22:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:48:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:52:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-29 22:52:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-29 22:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:52:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:56:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 22:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 22:59:56 --> Could not find the language line "Home"
ERROR - 2024-05-29 23:00:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-29 23:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:00:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:04:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 23:04:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-29 23:04:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:12:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 23:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:20:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 23:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:28:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-29 23:30:05 --> Could not find the language line "Home"
ERROR - 2024-05-29 23:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:36:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-29 23:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-29 23:44:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-29 23:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:48:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:56:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-29 23:56:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-29 23:57:14 --> Could not find the language line "Home"
ERROR - 2024-05-29 23:59:24 --> Could not find the language line "Home"
ERROR - 2024-05-29 23:59:56 --> Could not find the language line "Home"
