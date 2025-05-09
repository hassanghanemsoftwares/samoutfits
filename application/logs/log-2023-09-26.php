<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-26 00:09:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:27:16 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:28:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:28:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 00:29:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 00:29:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:29:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 00:29:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 00:29:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 00:29:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:30:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 00:30:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:11 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:39:17 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:40:08 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 00:43:07 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:57:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:57:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:57:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 00:58:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 01:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 01:20:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:20:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:21:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:21:02 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:21:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:21:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:21:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 01:23:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 01:25:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 01:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 01:27:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 02:05:06 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-26 02:05:08 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-26 02:05:26 --> 404 Page Not Found: Wp-includes/images
ERROR - 2023-09-26 02:05:32 --> 404 Page Not Found: Wp-includes/widgets
ERROR - 2023-09-26 02:13:39 --> Could not find the language line "Home"
ERROR - 2023-09-26 02:45:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 02:50:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:12:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:18:18 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:18:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:29:14 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:32:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-26 03:35:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:35:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 03:38:18 --> Could not find the language line "Other"
ERROR - 2023-09-26 03:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-26 04:02:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:28:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:28:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:28:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:28:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:28:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 04:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 04:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-26 04:48:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-26 04:50:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:01:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:18:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 05:35:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:36:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:36:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 05:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 05:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 05:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 05:41:31 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:41:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:41:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 05:43:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:51:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 05:56:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:06:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:07:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:09:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:09:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:10:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:12:22 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:13:47 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:14:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:14:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:15:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:15:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:16:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 06:32:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:34:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:35:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:37:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:40:24 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:42:16 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:47:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 06:47:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-26 06:48:35 --> Could not find the language line "Home"
ERROR - 2023-09-26 06:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 06:59:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 06:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:07:27 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:13:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 07:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 07:14:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:15:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:20:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:21:48 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:23:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 07:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-26 07:47:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:50:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-26 07:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:53:51 --> Could not find the language line "Home"
ERROR - 2023-09-26 07:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 07:57:40 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-26 08:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 08:23:30 --> Could not find the language line "Socks"
ERROR - 2023-09-26 08:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 08:30:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 08:30:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 08:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-26 08:35:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 08:43:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-26 08:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-26 08:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-26 08:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 08:46:48 --> Could not find the language line "Home"
ERROR - 2023-09-26 08:46:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 08:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 08:56:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-26 08:56:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '7'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-26 08:56:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-26 09:01:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:04:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:09:19 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-26 09:09:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:12:40 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:20:22 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:20:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:23:37 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:33:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:34:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 09:34:44 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:37:47 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:44:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:44:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 09:51:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:52:07 --> Could not find the language line "Home"
ERROR - 2023-09-26 09:52:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:52:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:53:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 09:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:02:56 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:03:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 10:04:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:06:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:06:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 10:07:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:07:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:30 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:30 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:09:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:11:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:11:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:14:51 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:17:51 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:18:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:19:11 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:20:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:20:44 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:31:31 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-26 10:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:35:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:35:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 10:35:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:36:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 10:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:36:18 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:36:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 10:36:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:36:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 10:36:44 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:36:51 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 10:37:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:39:18 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-26 10:39:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:39:20 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-09-26 10:39:28 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-26 10:39:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:39:30 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-09-26 10:41:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:45:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:47:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:50:21 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 10:51:36 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:07 --> Could not find the language line "Other"
ERROR - 2023-09-26 10:53:10 --> Could not find the language line "Other"
ERROR - 2023-09-26 10:53:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:53:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 10:53:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 10:53:16 --> Could not find the language line "Other"
ERROR - 2023-09-26 10:53:17 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-26 10:54:51 --> Could not find the language line "Home"
ERROR - 2023-09-26 10:57:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 11:00:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-26 11:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-26 11:00:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-26 11:03:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 11:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 11:06:07 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:06:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:06:43 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:06:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:08:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 11:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:09:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 11:09:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 11:10:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 11:10:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 11:12:18 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:13:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:17:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:17:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:17:34 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 11:18:00 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-26 11:30:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:33:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 11:37:08 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:38:37 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:40:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:40:37 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:42:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:42:44 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:47:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:48:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 11:49:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 11:54:56 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 11:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:55:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 11:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:56:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 11:56:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 11:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 11:59:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 11:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:01:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:02:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:02:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 12:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:03:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:03:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:03:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:03:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:05:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:05:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:06:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:07:09 --> Could not find the language line "Other"
ERROR - 2023-09-26 12:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:07:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:08:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:08:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:10:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 12:10:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 12:10:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 12:10:39 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 12:10:49 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 12:10:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:11:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:11:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:11:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:11:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:11:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:31 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:17:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 12:17:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:17:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 12:18:10 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 12:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:19:06 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 12:19:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 12:19:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:20:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:21:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:21:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:21:42 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-09-26 12:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:28:18 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:29:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:30:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:30:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:30:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:33:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:34:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:35:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:35:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:35:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 12:35:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 12:35:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 12:35:43 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-26 12:35:44 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-09-26 12:35:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:36:17 --> Could not find the language line "Home"
ERROR - 2023-09-26 12:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:37:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:37:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 12:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 12:50:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-26 12:52:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 13:01:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 13:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:05:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 13:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 13:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 13:09:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:13:39 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:17:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:19:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:22:11 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:22:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:23:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:40:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:44:20 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:45:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 13:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:46:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-26 13:46:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:51:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 13:57:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 13:57:05 --> Could not find the language line "Other"
ERROR - 2023-09-26 13:57:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:06:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:06:39 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:06:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:12:30 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:12:46 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:13:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:13:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:13:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:13:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-26 14:13:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-26 14:13:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-26 14:13:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:13:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:13:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:14:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 14:14:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 14:14:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:19:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:36:13 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-26 14:40:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:42:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:43:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:43:24 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:43:43 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:43:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:43:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 14:43:49 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-26 14:43:50 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-26 14:43:50 --> 404 Page Not Found: Home/home
ERROR - 2023-09-26 14:43:50 --> 404 Page Not Found: Home/home
ERROR - 2023-09-26 14:43:50 --> 404 Page Not Found: Home/home
ERROR - 2023-09-26 14:43:56 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-09-26 14:43:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-26 14:43:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-26 14:43:56 --> 404 Page Not Found: Cart/home
ERROR - 2023-09-26 14:43:56 --> Could not find the language line "accounts"
ERROR - 2023-09-26 14:43:58 --> 404 Page Not Found: Users/accounts
ERROR - 2023-09-26 14:43:58 --> 404 Page Not Found: Users/home
ERROR - 2023-09-26 14:43:58 --> 404 Page Not Found: Users/home
ERROR - 2023-09-26 14:43:58 --> 404 Page Not Found: Users/home
ERROR - 2023-09-26 14:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 14:48:43 --> Could not find the language line "Home"
ERROR - 2023-09-26 14:53:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:54:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 14:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 15:01:30 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:03:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:03:49 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:03:55 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:04:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:04:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:04:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:05:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:05:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:05:47 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:05:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:06:17 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:06:18 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:06:27 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:06:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:06:33 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:07:00 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:07:33 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:07:40 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 15:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:10:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:14:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:14:40 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:15:29 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:20:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:24:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:25:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:26:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 15:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 15:33:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 15:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:38:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:39:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:40:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:41:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:41:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:44:48 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:50:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:51:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 15:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 15:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:00:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 16:01:07 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:01:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 16:01:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:01:09 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-09-26 16:01:19 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-09-26 16:01:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:01:19 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-09-26 16:01:20 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-09-26 16:01:20 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-09-26 16:01:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 16:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 16:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 16:03:07 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 16:05:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:10:08 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:10:35 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:10:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 16:10:44 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:21:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:23:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-09-26 16:23:08 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:23:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:23:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:23:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:24:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:24:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:24:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:24:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 16:24:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:24:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:26:17 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:29:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:29:20 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:29:43 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:31:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:31:23 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:33:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-26 16:33:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-26 16:33:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-26 16:33:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-26 16:33:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:43:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:50:24 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:50:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:51:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:51:24 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:51:29 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:51:50 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:51:51 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:52:31 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:52:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:53:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:53:08 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:53:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:53:54 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 16:53:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 16:56:46 --> Could not find the language line "Home"
ERROR - 2023-09-26 16:59:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:01:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:08 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:06:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:06:40 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:07:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:07:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-26 17:07:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-26 17:07:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-26 17:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:07:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:07:38 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:08:21 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:08:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:09:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:09:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:10:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:10:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:11:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:11:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:12:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:12:48 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:12:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:14:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:14:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:15:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:16:22 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:16:24 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:23:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:30:04 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-26 17:30:04 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-26 17:30:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-26 17:30:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-26 17:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:31:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:31:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:33:00 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:36:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:36:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:46:57 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:56:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:56:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:56:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:57:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:57:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:57:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 17:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 17:58:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 17:59:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:00:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:00:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:01:00 --> Could not find the language line "Socks"
ERROR - 2023-09-26 18:01:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:04:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:04:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:05:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:05:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:08:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:09:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:11:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:11:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:11:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:12:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:12:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:13:32 --> Could not find the language line "products"
ERROR - 2023-09-26 18:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:14:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:15:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:17:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:23:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:24:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:26:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-26 18:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:29:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 18:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:31:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:31:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:32:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:38:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:42:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:45:09 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:46:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:46:59 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:47:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:47:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:48:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:49:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 18:50:36 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:52:18 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-09-26 18:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 18:54:24 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:56:33 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 18:58:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 19:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:11:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:15:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:15:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 19:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 19:15:34 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 19:18:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:21:03 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:21:41 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:22:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 19:22:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-26 19:22:53 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:23:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:23:15 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 19:23:39 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:27:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:27:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:27:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:30:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 19:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:33:49 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:35:01 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:35:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:36:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:38:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:39:02 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:44:47 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 19:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-26 19:55:27 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:00:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:05:19 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:09:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-26 20:11:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:12:36 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:13:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:15:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:16:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:17:56 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:18:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:18:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:24:10 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:25:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:26:05 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:26:46 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:33:36 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:34:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:35:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:35:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:35:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:37:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:44:46 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:45:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:46:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:47:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:47:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:47:12 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:48:42 --> Could not find the language line "Home"
ERROR - 2023-09-26 20:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 20:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 20:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:32:54 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:41:03 --> Could not find the language line "Other"
ERROR - 2023-09-26 21:45:43 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:46:43 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 21:46:55 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:47:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 21:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:49:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-26 21:49:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:49:33 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 21:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:51:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 21:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:52:58 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:53:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:53:07 --> Could not find the language line "Socks"
ERROR - 2023-09-26 21:53:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:53:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:54:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:54:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:54:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:54:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 21:54:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:55:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:55:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:57:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 21:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 21:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:01:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:02:06 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:04:44 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:06:08 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:07:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:07:57 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:08:30 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:10:16 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:11:26 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:11:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:11:51 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 22:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:15:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-26 22:17:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 22:20:17 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:23:15 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:23:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:28:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-26 22:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 22:29:45 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:30:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 22:30:04 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:30:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-26 22:30:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-26 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:30:27 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:30:31 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 22:30:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:30:35 --> Could not find the language line "Perfume"
ERROR - 2023-09-26 22:30:52 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:31:00 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:46:50 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:47:32 --> Could not find the language line "Home"
ERROR - 2023-09-26 22:47:39 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 22:47:58 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 22:48:15 --> Could not find the language line "Bracelets"
ERROR - 2023-09-26 22:48:23 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:03:25 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:08:28 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 23:09:22 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-26 23:36:39 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:37:18 --> Could not find the language line "Home"
ERROR - 2023-09-26 23:57:48 --> Could not find the language line "products"
ERROR - 2023-09-26 23:57:48 --> 404 Page Not Found: Robotstxt/index
