<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-30 00:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:00:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:09:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-30 00:10:17 --> 404 Page Not Found: Products/index
ERROR - 2024-05-30 00:16:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:21:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:21:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:23:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 00:24:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:28:57 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 00:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:29:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 00:29:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 00:29:58 --> Could not find the language line "Home"
ERROR - 2024-05-30 00:33:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:33:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 00:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 00:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 00:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 00:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 00:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 00:45:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 00:49:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 00:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 00:59:56 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 01:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 01:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 01:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 01:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 01:21:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 01:21:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-30 01:24:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 01:24:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 01:24:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-30 01:24:51 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:27:30 --> Could not find the language line "accounts"
ERROR - 2024-05-30 01:28:40 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 01:29:55 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:30:01 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:30:10 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:31:51 --> Could not find the language line "Home"
ERROR - 2024-05-30 01:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 01:34:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 01:43:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-30 01:54:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 01:57:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 02:00:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 02:13:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 02:17:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 02:20:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 02:29:12 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-30 02:30:16 --> Could not find the language line "Home"
ERROR - 2024-05-30 02:39:45 --> Could not find the language line "accounts"
ERROR - 2024-05-30 02:42:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-30 02:55:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 03:00:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 03:00:49 --> Could not find the language line "Bracelets"
ERROR - 2024-05-30 03:00:52 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 03:01:12 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-30 03:01:49 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-30 03:02:00 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-30 03:03:23 --> Could not find the language line "Socks"
ERROR - 2024-05-30 03:08:49 --> Could not find the language line "products"
ERROR - 2024-05-30 03:09:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 03:20:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 03:26:33 --> Could not find the language line "Home"
ERROR - 2024-05-30 03:30:01 --> Could not find the language line "Home"
ERROR - 2024-05-30 03:35:49 --> Could not find the language line "Home"
ERROR - 2024-05-30 03:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 03:39:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 03:55:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 03:55:59 --> Could not find the language line "accounts"
ERROR - 2024-05-30 04:00:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:03:21 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:04:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 04:09:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 04:15:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 04:21:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 04:22:37 --> Could not find the language line "products"
ERROR - 2024-05-30 04:25:22 --> 404 Page Not Found: Products/index
ERROR - 2024-05-30 04:25:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 04:25:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 04:25:45 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:25:46 --> Could not find the language line "Other"
ERROR - 2024-05-30 04:29:54 --> Could not find the language line "Socks"
ERROR - 2024-05-30 04:30:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:30:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:35:53 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:39:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 04:41:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 04:45:38 --> Could not find the language line "Other"
ERROR - 2024-05-30 04:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:49:37 --> Could not find the language line "Other"
ERROR - 2024-05-30 04:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:53:36 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-30 04:53:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 04:53:50 --> Could not find the language line "Home"
ERROR - 2024-05-30 04:56:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-30 04:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 04:57:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 04:59:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:01:38 --> Could not find the language line "Other"
ERROR - 2024-05-30 05:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 05:01:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 05:01:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 05:13:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 05:15:39 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:15:39 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:15:39 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:17:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 05:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 05:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 05:21:41 --> Could not find the language line "Other"
ERROR - 2024-05-30 05:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 05:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 05:29:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 05:30:05 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:33:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 05:37:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 05:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 05:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 05:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:00:05 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:03:08 --> Could not find the language line "Socks"
ERROR - 2024-05-30 06:04:25 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:08:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:08:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 06:09:28 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:09:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 06:09:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 06:09:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 06:09:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 06:10:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:10:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:11:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 06:11:49 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:12:06 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:12:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 06:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 06:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 06:13:46 --> Could not find the language line "Bracelets"
ERROR - 2024-05-30 06:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:14:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:15:08 --> Could not find the language line "Other"
ERROR - 2024-05-30 06:15:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 06:15:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 06:15:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 06:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:17:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:18:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 06:18:38 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:18:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:25:37 --> Could not find the language line "accounts"
ERROR - 2024-05-30 06:27:55 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:30:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 06:37:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 06:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:46:55 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:52:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:53:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 06:56:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 06:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:57:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 06:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:00:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 07:02:08 --> Could not find the language line "accounts"
ERROR - 2024-05-30 07:03:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 07:03:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-30 07:03:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 07:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:07:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 07:12:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 07:12:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:18:23 --> Could not find the language line "products"
ERROR - 2024-05-30 07:19:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 07:19:37 --> Could not find the language line "products"
ERROR - 2024-05-30 07:23:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:23:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 07:23:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:24:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 07:24:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:24:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 07:24:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:30:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 07:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 07:38:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:38:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 07:38:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:41:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 07:41:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 07:41:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 07:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:00:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 08:21:28 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:24:44 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:29:47 --> Could not find the language line "accounts"
ERROR - 2024-05-30 08:30:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:38:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 08:42:19 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:50:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 08:50:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 08:53:19 --> Could not find the language line "Home"
ERROR - 2024-05-30 08:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:58:02 --> Could not find the language line "Other"
ERROR - 2024-05-30 08:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 08:58:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 08:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 08:58:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 09:00:02 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:01:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 09:02:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 09:06:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 09:10:19 --> 404 Page Not Found: Products/index
ERROR - 2024-05-30 09:12:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 09:12:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 09:14:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 09:15:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 09:15:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 09:15:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 09:15:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-30 09:18:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 09:28:24 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:30:02 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:30:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:35:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:42:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:49:01 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:49:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 09:49:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 09:49:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 09:52:08 --> Could not find the language line "products"
ERROR - 2024-05-30 09:54:10 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:54:29 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:57:31 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:57:32 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:57:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:57:36 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:57:37 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:58:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 09:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 09:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:58:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:58:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:59:00 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:59:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 09:59:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 09:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:00:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:03:21 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:11:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 10:11:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 10:11:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 10:14:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 10:14:01 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:14:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 10:14:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 10:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:15:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 10:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 10:15:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 10:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:17:50 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:27:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 10:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:28:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:30:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:30:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 10:40:29 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:44:47 --> Could not find the language line "Other"
ERROR - 2024-05-30 10:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:51:35 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:56:21 --> Could not find the language line "Home"
ERROR - 2024-05-30 10:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 10:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:00:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:01:20 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:02:29 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:12:23 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:12:23 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:12:23 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:18:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 11:18:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 11:18:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 11:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:25:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 11:25:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 11:26:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 11:29:54 --> Could not find the language line "products"
ERROR - 2024-05-30 11:30:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:30:12 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:33:16 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:36:18 --> Could not find the language line "products"
ERROR - 2024-05-30 11:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:42:32 --> Could not find the language line "Home"
ERROR - 2024-05-30 11:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 11:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:00:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 12:01:55 --> Could not find the language line "Home"
ERROR - 2024-05-30 12:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 12:10:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 12:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:15:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 12:18:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:22:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:26:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:28:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 12:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 12:28:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 12:30:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 12:30:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 12:30:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:34:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:38:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 12:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:44:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 12:44:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 12:44:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 12:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 12:53:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 12:58:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:00:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:02:27 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 13:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 13:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 13:04:05 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:04:40 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:09:06 --> Could not find the language line "products"
ERROR - 2024-05-30 13:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:14:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:18:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:22:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 13:24:13 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-30 13:24:31 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-30 13:26:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:30:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:30:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:32:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 13:32:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 13:38:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 13:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:42:02 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:42:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 13:42:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:42:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:45:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 13:45:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 13:45:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 13:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:47:37 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:47:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 13:48:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 13:48:45 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-30 13:50:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:50:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:55:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 13:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 13:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 13:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:00:06 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:05:50 --> Could not find the language line "hats"
ERROR - 2024-05-30 14:06:01 --> Could not find the language line "socks"
ERROR - 2024-05-30 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:06:56 --> Could not find the language line "other"
ERROR - 2024-05-30 14:07:03 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:10:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:14:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:18:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:22:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:23:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:26:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:30:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 14:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:34:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 14:38:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 14:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:42:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 14:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 14:54:18 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:54:18 --> Could not find the language line "Home"
ERROR - 2024-05-30 14:56:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 14:56:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 14:56:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 14:58:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 14:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 14:58:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 14:58:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 15:00:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:13:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:14:54 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:21:01 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:25:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:29:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:30:06 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:32:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 15:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:33:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:34:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 15:34:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 15:36:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 15:36:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 15:36:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 15:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:37:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 15:41:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:42:42 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:43:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 15:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:46:38 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:49:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:49:34 --> Could not find the language line "Home"
ERROR - 2024-05-30 15:53:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 15:53:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 15:54:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 15:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 15:57:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:00:13 --> Could not find the language line "Home"
ERROR - 2024-05-30 16:01:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:02:52 --> Could not find the language line "products"
ERROR - 2024-05-30 16:03:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 16:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 16:03:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 16:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:06:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-30 16:06:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 16:06:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 16:06:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 16:07:30 --> Could not find the language line "products"
ERROR - 2024-05-30 16:12:31 --> Could not find the language line "products"
ERROR - 2024-05-30 16:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 16:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 16:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 16:16:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:20:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:20:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 16:20:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 16:30:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 16:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 16:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 16:33:10 --> Could not find the language line "Home"
ERROR - 2024-05-30 16:36:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 16:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:41:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 16:43:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:51:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 16:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:55:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 16:58:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 16:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 16:58:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 16:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 16:59:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:00:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 17:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:07:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:09:23 --> Could not find the language line "Other"
ERROR - 2024-05-30 17:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:11:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:14:48 --> Could not find the language line "Home"
ERROR - 2024-05-30 17:14:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 17:14:50 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-05-30 17:14:51 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-05-30 17:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:15:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:17:36 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:18:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:19:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:19:53 --> Could not find the language line "Home"
ERROR - 2024-05-30 17:19:55 --> Could not find the language line "Home"
ERROR - 2024-05-30 17:20:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:20:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:20:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:20:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:21:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:21:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:21:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:22:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 17:22:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:22:29 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:22:40 --> Could not find the language line "socks"
ERROR - 2024-05-30 17:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%sport%' OR a.description LIKE '%sport%' OR a.color LIKE '%sport%' OR a.barcode LIKE '%sport%' OR a.category LIKE '%sport%' OR a.sub_category LIKE '%sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 17:23:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:23:52 --> Could not find the language line "other"
ERROR - 2024-05-30 17:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 17:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:31:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 17:35:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 17:35:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 17:35:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 17:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:35:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:36:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 17:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:43:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 17:47:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:47:38 --> Could not find the language line "products"
ERROR - 2024-05-30 17:50:37 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-30 17:51:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 17:51:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:55:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 17:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:00:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:00:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 18:03:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:07:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:13:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 18:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:15:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:16:58 --> Could not find the language line "products"
ERROR - 2024-05-30 18:19:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:22:17 --> Could not find the language line "products"
ERROR - 2024-05-30 18:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:25:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 18:25:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 18:27:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:30:24 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:35:33 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:39:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 18:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:43:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 18:47:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 18:47:44 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:47:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-05-30 18:47:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-05-30 18:47:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-05-30 18:47:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-05-30 18:51:57 --> Could not find the language line "Home"
ERROR - 2024-05-30 18:54:46 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:00:04 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:00:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:01:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 19:01:38 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:01:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 19:03:46 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:04:26 --> Could not find the language line "Bracelets"
ERROR - 2024-05-30 19:07:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 19:07:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 19:07:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 19:07:12 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:07:23 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:07:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:07:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:07:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:07:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:08:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:08:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:08:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:08:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:08:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:09:31 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:09:47 --> Could not find the language line "products"
ERROR - 2024-05-30 19:10:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:10:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:10:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:10:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:11:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:14:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:14:27 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:14:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:14:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:14:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:15:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:15:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:15:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 19:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:15:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:16:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:16:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:16:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:16:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:17:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:17:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 19:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 19:17:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 19:17:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:17:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:17:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:18:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:19:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:19:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 19:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:20:07 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:21:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 19:21:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:21:47 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:22:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:23:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:23:37 --> Could not find the language line "products"
ERROR - 2024-05-30 19:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:23:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 19:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:25:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:25:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:25:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:25:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:26:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:26:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:26:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-30 19:27:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 19:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:28:28 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:30:09 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 19:32:02 --> Could not find the language line "products"
ERROR - 2024-05-30 19:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:35:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 19:37:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 19:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 19:37:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 19:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:39:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 19:42:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 19:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:46:59 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:49:42 --> Could not find the language line "Home"
ERROR - 2024-05-30 19:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:56:19 --> Could not find the language line "products"
ERROR - 2024-05-30 19:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 19:59:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-30 19:59:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 19:59:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:00:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 20:03:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 20:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 20:03:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:03:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 20:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:07:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 20:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:09:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-30 20:11:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 20:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:12:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 20:12:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 20:12:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:15:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-30 20:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 20:15:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:16:53 --> Could not find the language line "Home"
ERROR - 2024-05-30 20:19:08 --> Could not find the language line "Home"
ERROR - 2024-05-30 20:19:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 20:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:30:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 20:30:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 20:31:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 20:32:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 20:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 20:32:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 20:43:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 20:43:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 20:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 20:44:47 --> Could not find the language line "Home"
ERROR - 2024-05-30 20:47:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 20:48:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 20:48:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 20:48:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 20:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:54:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 20:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 20:56:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 20:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:00:11 --> Could not find the language line "Home"
ERROR - 2024-05-30 21:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-30 21:11:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 21:11:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 21:11:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 21:11:40 --> Could not find the language line "products"
ERROR - 2024-05-30 21:12:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 21:12:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 21:12:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 21:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:16:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:24:50 --> Could not find the language line "products"
ERROR - 2024-05-30 21:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:24:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 21:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 21:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 21:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:26:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:26:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 21:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 21:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 21:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:30:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 21:30:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 21:30:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 21:30:15 --> Could not find the language line "Home"
ERROR - 2024-05-30 21:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:32:05 --> Could not find the language line "Home"
ERROR - 2024-05-30 21:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:35:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 21:35:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-30 21:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:39:40 --> Could not find the language line "Home"
ERROR - 2024-05-30 21:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:45:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:49:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 21:51:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 21:55:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-30 21:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 21:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:00:13 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:00:36 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:03:53 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:04:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-30 22:05:36 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:06:19 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:12:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 22:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-30 22:12:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 22:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:25:43 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 22:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 22:27:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 22:27:40 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:30:17 --> Could not find the language line "Home"
ERROR - 2024-05-30 22:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:46:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 22:50:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 22:50:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:51:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:51:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:51:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:51:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:52:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:52:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-30 22:52:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-30 22:52:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:53:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:53:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:53:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:53:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:54:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-05-30 22:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 22:56:49 --> Could not find the language line "products"
ERROR - 2024-05-30 23:00:15 --> Could not find the language line "Home"
ERROR - 2024-05-30 23:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:05:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 23:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 23:05:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 23:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:30:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 23:30:22 --> Could not find the language line "Home"
ERROR - 2024-05-30 23:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:40:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 23:40:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 23:40:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 23:42:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 23:42:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 23:42:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 23:42:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 23:42:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 23:42:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 23:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-30 23:46:53 --> Could not find the language line "hats"
ERROR - 2024-05-30 23:48:49 --> Could not find the language line "socks"
ERROR - 2024-05-30 23:48:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-30 23:48:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-30 23:48:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-30 23:51:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 23:52:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 23:55:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-30 23:55:18 --> 404 Page Not Found: Robotstxt/index
