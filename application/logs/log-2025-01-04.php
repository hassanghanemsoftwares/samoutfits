<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-04 00:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 00:17:03 --> Could not find the language line "Home"
ERROR - 2025-01-04 00:17:07 --> Could not find the language line "Home"
ERROR - 2025-01-04 00:26:28 --> Could not find the language line "Home"
ERROR - 2025-01-04 00:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 00:47:02 --> Could not find the language line "Home"
ERROR - 2025-01-04 00:47:40 --> Could not find the language line "Home"
ERROR - 2025-01-04 01:06:27 --> Could not find the language line "Home"
ERROR - 2025-01-04 01:17:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 01:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 01:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 01:23:52 --> Could not find the language line "Home"
ERROR - 2025-01-04 01:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 01:47:05 --> Could not find the language line "Home"
ERROR - 2025-01-04 02:17:04 --> Could not find the language line "Home"
ERROR - 2025-01-04 02:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 02:37:18 --> Could not find the language line "Home"
ERROR - 2025-01-04 02:47:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 03:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 03:17:05 --> Could not find the language line "Home"
ERROR - 2025-01-04 03:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 03:30:51 --> 404 Page Not Found: Assets/elfinder
ERROR - 2025-01-04 03:44:01 --> Could not find the language line "Home"
ERROR - 2025-01-04 03:47:08 --> Could not find the language line "Home"
ERROR - 2025-01-04 04:01:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-04 04:17:07 --> Could not find the language line "Home"
ERROR - 2025-01-04 04:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 04:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 04:47:05 --> Could not find the language line "Home"
ERROR - 2025-01-04 05:06:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 05:17:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 05:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 05:26:56 --> Could not find the language line "Home"
ERROR - 2025-01-04 05:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 05:47:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 06:17:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 06:33:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 06:34:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 06:36:59 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 06:41:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 06:47:08 --> Could not find the language line "Home"
ERROR - 2025-01-04 07:17:05 --> Could not find the language line "Home"
ERROR - 2025-01-04 07:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 07:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 07:39:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 07:47:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 07:55:03 --> Could not find the language line "Home"
ERROR - 2025-01-04 07:59:04 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:15:24 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 08:21:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:26:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 08:31:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 08:42:28 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:47:06 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:48:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 08:49:26 --> Could not find the language line "Home"
ERROR - 2025-01-04 08:49:28 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-04 08:49:53 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-01-04 09:17:08 --> Could not find the language line "Home"
ERROR - 2025-01-04 09:47:07 --> Could not find the language line "Home"
ERROR - 2025-01-04 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 10:13:44 --> Could not find the language line "Home"
ERROR - 2025-01-04 10:17:08 --> Could not find the language line "Home"
ERROR - 2025-01-04 10:22:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 10:22:55 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-04 10:23:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 10:24:19 --> Could not find the language line "Home"
ERROR - 2025-01-04 10:42:24 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-01-04 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 10:47:07 --> Could not find the language line "Home"
ERROR - 2025-01-04 10:55:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 10:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-04 10:59:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-04 11:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 11:17:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 11:17:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 11:18:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 11:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 11:45:39 --> Could not find the language line "Other"
ERROR - 2025-01-04 11:47:08 --> Could not find the language line "Home"
ERROR - 2025-01-04 11:51:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 12:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 12:22:37 --> Could not find the language line "Home"
ERROR - 2025-01-04 12:26:43 --> Could not find the language line "Other"
ERROR - 2025-01-04 12:45:44 --> Could not find the language line "Home"
ERROR - 2025-01-04 12:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 12:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 12:47:10 --> Could not find the language line "Home"
ERROR - 2025-01-04 12:52:29 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:02:45 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:16:01 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-04 13:16:02 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:16:02 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:30:38 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:47:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 13:58:52 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-04 13:58:52 --> Could not find the language line "Home"
ERROR - 2025-01-04 14:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 14:21:52 --> Could not find the language line "Home"
ERROR - 2025-01-04 14:47:10 --> Could not find the language line "Home"
ERROR - 2025-01-04 15:17:11 --> Could not find the language line "Home"
ERROR - 2025-01-04 15:30:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-04 15:47:10 --> Could not find the language line "Home"
ERROR - 2025-01-04 15:55:45 --> Could not find the language line "Home"
ERROR - 2025-01-04 15:56:15 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 15:56:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:56:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-04 15:57:51 --> Could not find the language line "Socks"
ERROR - 2025-01-04 15:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 15:58:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-04 15:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 16:02:16 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:06:27 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:14:51 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:17:10 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:23:01 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:36:52 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 16:41:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 16:47:11 --> Could not find the language line "Home"
ERROR - 2025-01-04 16:56:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-04 16:56:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-04 16:56:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-04 17:06:02 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:11:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-04 17:17:11 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:18:21 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:20:32 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:36:23 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:45:24 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:47:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 17:50:13 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-04 17:50:17 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-01-04 18:15:00 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:17:11 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 18:30:09 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:32:30 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:35:25 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:47:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 18:57:35 --> Could not find the language line "Home"
ERROR - 2025-01-04 19:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 19:14:20 --> Could not find the language line "Home"
ERROR - 2025-01-04 19:14:23 --> Could not find the language line "Home"
ERROR - 2025-01-04 19:15:37 --> Could not find the language line "Home"
ERROR - 2025-01-04 19:17:12 --> Could not find the language line "Home"
ERROR - 2025-01-04 19:47:13 --> Could not find the language line "Home"
ERROR - 2025-01-04 20:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 20:17:07 --> Could not find the language line "Other"
ERROR - 2025-01-04 20:17:13 --> Could not find the language line "Home"
ERROR - 2025-01-04 20:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 20:46:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 20:47:15 --> Could not find the language line "Home"
ERROR - 2025-01-04 21:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 21:17:13 --> Could not find the language line "Home"
ERROR - 2025-01-04 21:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-04 21:26:48 --> Could not find the language line "Home"
ERROR - 2025-01-04 21:26:53 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-04 21:37:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-04 21:47:14 --> Could not find the language line "Home"
ERROR - 2025-01-04 22:10:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 22:17:14 --> Could not find the language line "Home"
ERROR - 2025-01-04 22:47:16 --> Could not find the language line "Home"
ERROR - 2025-01-04 22:48:07 --> Could not find the language line "Other"
ERROR - 2025-01-04 22:50:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 22:51:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 22:52:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 22:53:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-04 22:56:06 --> Could not find the language line "Other"
ERROR - 2025-01-04 23:17:18 --> Could not find the language line "Home"
ERROR - 2025-01-04 23:19:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 23:20:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 23:20:28 --> Could not find the language line "Home"
ERROR - 2025-01-04 23:21:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 23:21:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-04 23:22:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-04 23:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-04 23:47:17 --> Could not find the language line "Home"
