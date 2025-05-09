<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-05 00:17:16 --> Could not find the language line "Home"
ERROR - 2025-01-05 00:17:28 --> Could not find the language line "Home"
ERROR - 2025-01-05 00:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 00:34:09 --> Could not find the language line "Home"
ERROR - 2025-01-05 00:34:10 --> Could not find the language line "Home"
ERROR - 2025-01-05 00:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 00:47:17 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:00:27 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:04:49 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:17:16 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:18:10 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:21:34 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:26:55 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 01:41:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-05 01:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-05 01:41:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-05 01:47:16 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:50:09 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:50:32 --> Could not find the language line "Home"
ERROR - 2025-01-05 01:50:37 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-05 02:13:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 02:17:17 --> Could not find the language line "Home"
ERROR - 2025-01-05 02:25:06 --> Could not find the language line "Home"
ERROR - 2025-01-05 02:47:17 --> Could not find the language line "Home"
ERROR - 2025-01-05 03:17:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-05 03:17:18 --> Could not find the language line "Home"
ERROR - 2025-01-05 03:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 03:29:55 --> Could not find the language line "Other"
ERROR - 2025-01-05 03:42:13 --> Could not find the language line "Home"
ERROR - 2025-01-05 03:47:18 --> Could not find the language line "Home"
ERROR - 2025-01-05 04:17:17 --> Could not find the language line "Home"
ERROR - 2025-01-05 04:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 04:29:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-05 04:29:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-05 04:29:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-05 04:47:20 --> Could not find the language line "Home"
ERROR - 2025-01-05 04:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-05 05:17:19 --> Could not find the language line "Home"
ERROR - 2025-01-05 05:47:19 --> Could not find the language line "Home"
ERROR - 2025-01-05 06:17:21 --> Could not find the language line "Home"
ERROR - 2025-01-05 06:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 06:47:20 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:17:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:17:43 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:29:42 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:30:15 --> 404 Page Not Found: Assets/mail
ERROR - 2025-01-05 07:33:39 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:42:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-05 07:47:20 --> Could not find the language line "Home"
ERROR - 2025-01-05 07:53:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-05 07:53:10 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 08:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 08:13:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-05 08:13:56 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 08:17:21 --> Could not find the language line "Home"
ERROR - 2025-01-05 08:27:39 --> Could not find the language line "Home"
ERROR - 2025-01-05 08:27:42 --> 404 Page Not Found: Assets/img
ERROR - 2025-01-05 08:29:58 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-05 08:31:07 --> Could not find the language line "Home"
ERROR - 2025-01-05 08:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 08:31:41 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-01-05 08:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 08:47:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:04:13 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:06:07 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-05 09:17:21 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:21:10 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 09:25:09 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:29:01 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:40:35 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:47:21 --> Could not find the language line "Home"
ERROR - 2025-01-05 09:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 09:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 09:49:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-05 09:53:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-05 09:58:44 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:00:52 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-05 10:00:53 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:05:03 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:17:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:24:21 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:34:31 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:36:11 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 10:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 10:47:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 10:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 11:17:24 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:21:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-05 11:21:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-05 11:28:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 11:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 11:35:46 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:36:42 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 11:37:52 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:38:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 11:38:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 11:38:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 11:38:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 11:38:45 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:38:50 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 11:39:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 11:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 11:39:31 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 11:39:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 11:39:52 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 11:39:56 --> Could not find the language line "Home"
ERROR - 2025-01-05 11:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 11:42:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-05 11:47:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 12:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 12:17:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 12:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 12:32:35 --> Could not find the language line "Socks"
ERROR - 2025-01-05 12:47:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 12:57:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 12:57:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-05 12:57:32 --> Could not find the language line "Other"
ERROR - 2025-01-05 12:58:22 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-05 12:59:06 --> Could not find the language line "Other"
ERROR - 2025-01-05 12:59:51 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 13:16:03 --> Could not find the language line "Home"
ERROR - 2025-01-05 13:17:22 --> Could not find the language line "Home"
ERROR - 2025-01-05 13:20:31 --> Could not find the language line "Home"
ERROR - 2025-01-05 13:42:34 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2025-01-05 13:47:24 --> Could not find the language line "Home"
ERROR - 2025-01-05 13:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 13:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 14:04:20 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 14:10:48 --> Could not find the language line "Other"
ERROR - 2025-01-05 14:10:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 14:17:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 14:17:50 --> Could not find the language line "Other"
ERROR - 2025-01-05 14:21:40 --> Could not find the language line "Perfume"
ERROR - 2025-01-05 14:32:25 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-05 14:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 14:47:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 14:47:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-05 15:10:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-05 15:17:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 15:35:55 --> Could not find the language line "Home"
ERROR - 2025-01-05 15:47:24 --> Could not find the language line "Home"
ERROR - 2025-01-05 16:13:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 16:17:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 16:17:25 --> Could not find the language line "Home"
ERROR - 2025-01-05 16:23:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-05 16:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-05 16:23:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-05 16:28:13 --> Could not find the language line "Home"
ERROR - 2025-01-05 16:30:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 16:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 16:45:34 --> Could not find the language line "Socks"
ERROR - 2025-01-05 16:47:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 16:52:36 --> Could not find the language line "Home"
ERROR - 2025-01-05 17:17:27 --> Could not find the language line "Home"
ERROR - 2025-01-05 17:21:53 --> 404 Page Not Found: Admin/plugins
ERROR - 2025-01-05 17:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 17:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 17:47:25 --> Could not find the language line "Home"
ERROR - 2025-01-05 17:55:35 --> Could not find the language line "Home"
ERROR - 2025-01-05 17:59:25 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:01:55 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:05:35 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:08:08 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:08:51 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:10:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 18:11:27 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:16:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 18:17:25 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:47:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:54:08 --> Could not find the language line "Home"
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:49 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2025-01-05 18:55:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-05 18:55:52 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:05:23 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:12:01 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:16:32 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:17:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 19:37:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 19:47:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 19:49:25 --> 404 Page Not Found: _profiler/phpinfo
ERROR - 2025-01-05 20:17:27 --> Could not find the language line "Home"
ERROR - 2025-01-05 20:41:07 --> Could not find the language line "Home"
ERROR - 2025-01-05 20:47:29 --> Could not find the language line "Home"
ERROR - 2025-01-05 20:57:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 21:08:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-05 21:08:26 --> Could not find the language line "Home"
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Web/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Website/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: News/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2025-01-05 21:08:26 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2025-01-05 21:17:27 --> Could not find the language line "Home"
ERROR - 2025-01-05 21:21:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 21:26:55 --> Could not find the language line "Home"
ERROR - 2025-01-05 21:26:58 --> 404 Page Not Found: Home/accounts
ERROR - 2025-01-05 21:26:58 --> 404 Page Not Found: Home/home
ERROR - 2025-01-05 21:26:58 --> 404 Page Not Found: Home/assets
ERROR - 2025-01-05 21:32:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 21:32:34 --> Could not find the language line "Other"
ERROR - 2025-01-05 21:32:34 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 21:32:37 --> Could not find the language line "Other"
ERROR - 2025-01-05 21:32:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-05 21:40:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-05 21:41:02 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 21:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 21:47:28 --> Could not find the language line "Home"
ERROR - 2025-01-05 21:58:19 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 22:03:37 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 22:13:47 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-05 22:17:28 --> Could not find the language line "Home"
ERROR - 2025-01-05 22:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 22:22:07 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 22:31:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-05 22:36:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-05 22:47:43 --> Could not find the language line "Home"
ERROR - 2025-01-05 23:17:31 --> Could not find the language line "Home"
ERROR - 2025-01-05 23:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-05 23:47:25 --> Could not find the language line "Home"
ERROR - 2025-01-05 23:47:31 --> Could not find the language line "Home"
