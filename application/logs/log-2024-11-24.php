<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-24 00:12:44 --> Could not find the language line "Home"
ERROR - 2024-11-24 00:13:07 --> Could not find the language line "Home"
ERROR - 2024-11-24 00:34:14 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-24 00:34:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 00:43:08 --> Could not find the language line "Home"
ERROR - 2024-11-24 00:45:53 --> Could not find the language line "Home"
ERROR - 2024-11-24 00:45:56 --> Could not find the language line "Other"
ERROR - 2024-11-24 00:53:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-24 01:05:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 01:06:46 --> Could not find the language line "Perfume"
ERROR - 2024-11-24 01:07:56 --> Could not find the language line "Home"
ERROR - 2024-11-24 01:13:09 --> Could not find the language line "Home"
ERROR - 2024-11-24 01:16:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 01:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 01:43:11 --> Could not find the language line "Home"
ERROR - 2024-11-24 01:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 01:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 02:13:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 02:26:24 --> Could not find the language line "Home"
ERROR - 2024-11-24 02:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 02:31:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-24 02:31:26 --> Could not find the language line "Home"
ERROR - 2024-11-24 02:41:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 02:43:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 02:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 02:53:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 03:13:11 --> Could not find the language line "Home"
ERROR - 2024-11-24 03:30:09 --> Could not find the language line "Other"
ERROR - 2024-11-24 03:30:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 03:42:16 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 03:43:09 --> Could not find the language line "Home"
ERROR - 2024-11-24 03:48:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 03:50:09 --> Could not find the language line "products"
ERROR - 2024-11-24 03:53:30 --> Could not find the language line "Home"
ERROR - 2024-11-24 04:07:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 04:13:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 04:20:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-24 04:20:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-24 04:43:17 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 05:10:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-24 05:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-24 05:10:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-24 05:13:13 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:23:24 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:25:40 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:27:58 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:38:59 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:43:10 --> Could not find the language line "Home"
ERROR - 2024-11-24 05:44:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 05:45:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 05:45:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 05:46:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 05:58:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 06:12:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 06:13:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:22:30 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:25:50 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:29:11 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 06:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 06:42:28 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:43:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:45:40 --> Could not find the language line "Home"
ERROR - 2024-11-24 06:54:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 06:56:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 07:10:56 --> Could not find the language line "Home"
ERROR - 2024-11-24 07:13:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 07:43:13 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:06:56 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-24 08:07:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 08:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 08:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 08:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 08:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 08:13:14 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:17:44 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 08:17:47 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-24 08:19:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 08:20:17 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:20:19 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-24 08:20:19 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-24 08:20:19 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-24 08:20:19 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-24 08:20:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-24 08:21:08 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:21:10 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-24 08:21:10 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-24 08:21:10 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-24 08:21:10 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-24 08:38:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 08:43:17 --> Could not find the language line "Home"
ERROR - 2024-11-24 08:50:09 --> Could not find the language line "products"
ERROR - 2024-11-24 08:56:44 --> Could not find the language line "Home"
ERROR - 2024-11-24 09:13:11 --> Could not find the language line "Home"
ERROR - 2024-11-24 09:41:46 --> Could not find the language line "Home"
ERROR - 2024-11-24 09:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 09:47:29 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:06:10 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:10:10 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:13:11 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:28:53 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:29:45 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 10:35:47 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:36:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:36:58 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:41:28 --> Could not find the language line "products"
ERROR - 2024-11-24 10:43:13 --> Could not find the language line "Home"
ERROR - 2024-11-24 10:48:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 10:48:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 10:49:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 10:49:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 10:51:32 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 10:59:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 11:13:13 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 11:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-24 11:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 11:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 11:43:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:44:12 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:51:13 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:52:28 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:54:04 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:54:06 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:55:56 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:56:02 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-11-24 11:56:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:13 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 11:56:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 11:56:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 11:56:14 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-24 11:56:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:15 --> Could not find the language line "Socks"
ERROR - 2024-11-24 11:56:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 11:56:15 --> Could not find the language line "Perfume"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:34 --> Could not find the language line "Other"
ERROR - 2024-11-24 11:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 11:56:44 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 11:56:44 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 11:57:03 --> Could not find the language line "Disclaimer"
ERROR - 2024-11-24 12:01:54 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:03:33 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:05:14 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:13:12 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:18:28 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:43:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:49:21 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:52:45 --> Could not find the language line "Home"
ERROR - 2024-11-24 12:52:57 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:00:48 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:10:48 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:14:42 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-24 13:14:42 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:14:42 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:23:31 --> Could not find the language line "Home"
ERROR - 2024-11-24 13:28:07 --> Could not find the language line "Socks"
ERROR - 2024-11-24 13:32:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-24 13:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 14:05:37 --> Could not find the language line "Home"
ERROR - 2024-11-24 14:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 14:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 14:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 15:13:19 --> Could not find the language line "Home"
ERROR - 2024-11-24 15:13:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-24 15:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 15:43:17 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:13:14 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:27:54 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 16:28:36 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:29:10 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:29:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-24 16:29:48 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:29:55 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:30:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 16:30:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 16:30:55 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 16:54:42 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-24 16:54:42 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 17:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 17:43:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 17:48:36 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:50:38 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:52:38 --> Could not find the language line "Home"
ERROR - 2024-11-24 17:54:37 --> Could not find the language line "Home"
ERROR - 2024-11-24 18:13:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 18:14:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 18:15:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 18:16:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 18:18:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-24 18:25:38 --> Could not find the language line "Home"
ERROR - 2024-11-24 18:33:37 --> Could not find the language line "Home"
ERROR - 2024-11-24 18:36:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-24 18:43:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 18:45:19 --> Could not find the language line "Home"
ERROR - 2024-11-24 19:13:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 19:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 19:43:16 --> Could not find the language line "Home"
ERROR - 2024-11-24 20:13:18 --> Could not find the language line "Home"
ERROR - 2024-11-24 20:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 20:39:37 --> Could not find the language line "Home"
ERROR - 2024-11-24 20:43:20 --> Could not find the language line "Home"
ERROR - 2024-11-24 20:52:56 --> Could not find the language line "Home"
ERROR - 2024-11-24 20:53:04 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:11:50 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:13:19 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 21:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 21:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 21:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 21:23:44 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:26:19 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-11-24 21:26:19 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:26:19 --> 404 Page Not Found: Wp/index
ERROR - 2024-11-24 21:26:20 --> 404 Page Not Found: Bc/index
ERROR - 2024-11-24 21:26:20 --> 404 Page Not Found: Bk/index
ERROR - 2024-11-24 21:26:20 --> 404 Page Not Found: Backup/index
ERROR - 2024-11-24 21:26:21 --> 404 Page Not Found: New/index
ERROR - 2024-11-24 21:26:21 --> 404 Page Not Found: Main/index
ERROR - 2024-11-24 21:26:21 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:43:20 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 21:50:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:50:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:50:18 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:50:58 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:50:59 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:51:01 --> Could not find the language line "Home"
ERROR - 2024-11-24 21:51:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-24 21:51:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-24 21:51:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-24 21:52:29 --> Could not find the language line "Perfume"
ERROR - 2024-11-24 21:52:29 --> Could not find the language line "Perfume"
ERROR - 2024-11-24 21:52:31 --> Could not find the language line "Perfume"
ERROR - 2024-11-24 21:52:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 21:52:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 21:52:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 21:52:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:47 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:52:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:16 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 21:53:18 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:18 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:21 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:23 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:23 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:26 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:28 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:30 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:32 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:32 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:35 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:37 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:39 --> Could not find the language line "Other"
ERROR - 2024-11-24 21:53:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-24 21:53:54 --> Could not find the language line "Socks"
ERROR - 2024-11-24 21:53:54 --> Could not find the language line "Socks"
ERROR - 2024-11-24 21:53:57 --> Could not find the language line "Socks"
ERROR - 2024-11-24 21:53:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:54:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:54:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:54:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:54:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-24 21:56:48 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-24 21:56:50 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-24 21:57:05 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-24 21:59:37 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:10:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-24 22:12:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-24 22:13:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-24 22:13:22 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:14:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 22:15:32 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:15:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-24 22:16:30 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:17:21 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:17:49 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:17:53 --> Could not find the language line "Clothing"
ERROR - 2024-11-24 22:18:14 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:18:33 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 22:19:15 --> Could not find the language line "Home"
ERROR - 2024-11-24 22:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-24 22:43:20 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:06:47 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:06:51 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-24 23:13:24 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:24:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 23:25:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 23:26:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 23:26:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-24 23:43:22 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:46:23 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:48:02 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:49:44 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:51:23 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:53:03 --> Could not find the language line "Home"
ERROR - 2024-11-24 23:54:41 --> Could not find the language line "Home"
