<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-28 00:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 00:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 00:18:21 --> Could not find the language line "Home"
ERROR - 2025-04-28 00:18:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 00:21:21 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 00:32:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 00:48:22 --> Could not find the language line "Home"
ERROR - 2025-04-28 00:56:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 00:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 00:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 01:03:24 --> Could not find the language line "Other"
ERROR - 2025-04-28 01:18:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 01:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 01:40:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 01:44:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 01:48:20 --> Could not find the language line "Home"
ERROR - 2025-04-28 01:54:21 --> Could not find the language line "Home"
ERROR - 2025-04-28 01:54:36 --> Could not find the language line "Other"
ERROR - 2025-04-28 02:01:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 02:02:26 --> Could not find the language line "Other"
ERROR - 2025-04-28 02:18:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 02:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 02:48:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 02:52:20 --> Could not find the language line "Other"
ERROR - 2025-04-28 03:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:03:01 --> Could not find the language line "Other"
ERROR - 2025-04-28 03:18:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 03:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:35:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m130%' OR a.description LIKE '%m130%' OR a.color LIKE '%m130%' OR a.barcode LIKE '%m130%' OR a.category LIKE '%m130%' OR a.sub_category LIKE '%m130%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 03:37:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 03:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:48:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 03:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 03:58:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 04:02:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:11:06 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:19:37 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:27:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 04:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:38:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-28 04:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:42:19 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-04-28 04:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:48:45 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:49:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:53:10 --> Could not find the language line "Home"
ERROR - 2025-04-28 04:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 04:59:35 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:00:17 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:02:20 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:02:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 05:06:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 05:07:43 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:15:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 05:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 05:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:18:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:20:43 --> Could not find the language line "Socks"
ERROR - 2025-04-28 05:22:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 05:24:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:24:53 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 05:41:56 --> Could not find the language line "Home"
ERROR - 2025-04-28 05:48:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:01:07 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:02:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:05:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:16:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:18:22 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:18:43 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-28 06:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:40:36 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 06:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:48:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 06:53:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 06:53:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:57:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 06:59:08 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:03:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 07:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 07:18:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:20:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:23:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 07:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 07:24:05 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:29:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 07:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 07:45:45 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:48:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 07:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 07:51:02 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:03:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:10:01 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:18:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:23:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 08:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:33:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-28 08:33:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-28 08:33:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-28 08:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:38:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:46:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 08:48:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 08:48:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:48:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 08:49:55 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 08:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:08 --> Could not find the language line "Home"
ERROR - 2025-04-28 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 08:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:13 --> Could not find the language line "Socks"
ERROR - 2025-04-28 09:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:05:54 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 09:05:54 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 09:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:09:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:18:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:18:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:18:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:18:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:18:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:18:47 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:18:56 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:19:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:30 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:19:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:19:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:19:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:19:52 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:20:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:20:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:20:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:21:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:21:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:21:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:21:46 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:21:55 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:22:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:26:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:26:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:26:41 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 09:26:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:26:55 --> Could not find the language line "Perfume"
ERROR - 2025-04-28 09:27:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:27:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:27:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:27:35 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:27:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:27:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:28:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:28:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:28:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:28:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:36:39 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:37:53 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:38:37 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 09:43:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:43:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 09:48:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 09:55:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:03:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-28 10:04:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-28 10:05:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:11:46 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:15:59 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:16:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:18:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:20:46 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:26:32 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:26:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:26:55 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-28 10:26:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:26:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:45:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:48:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:54:37 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:54:37 --> Could not find the language line "Home"
ERROR - 2025-04-28 10:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 10:59:47 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:00:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:00:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:01:44 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:02:00 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 11:02:25 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 11:02:44 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 11:03:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 11:03:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 11:04:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:06:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:10:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:18:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:20:02 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:21:06 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:21:15 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:21:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-28 11:21:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-28 11:21:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-28 11:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:23:35 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:23:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:28:12 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:28:18 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:28:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:30:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:31:03 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:36:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:37:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:41:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 11:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:48:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:49:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:49:48 --> Could not find the language line "Other"
ERROR - 2025-04-28 11:52:30 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-28 11:54:53 --> Could not find the language line "Home"
ERROR - 2025-04-28 11:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 11:57:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 12:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:04:20 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 12:04:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-28 12:05:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-28 12:05:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-28 12:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:12:40 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:18:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:20:40 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:25:11 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:30:36 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:35:51 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-28 12:36:16 --> Could not find the language line "0"
ERROR - 2025-04-28 12:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:48:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 12:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 12:58:00 --> 404 Page Not Found: Storage/settings
ERROR - 2025-04-28 12:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:04:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:05:21 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:05:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:05:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:05:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:11:43 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:15:37 --> Could not find the language line "Socks"
ERROR - 2025-04-28 13:16:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:16:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-28 13:17:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:18:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 13:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:28:57 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:39:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 13:40:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:40:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:40:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:41:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 13:41:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 13:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:45:03 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-28 13:45:03 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:45:03 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:48:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:50:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 13:56:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 13:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:08:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:16:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 14:18:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:19:32 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:29:03 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:42:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:48:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 14:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 14:58:46 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:02:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 15:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:13:26 --> Could not find the language line "Socks"
ERROR - 2025-04-28 15:14:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-28 15:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:18:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:18:29 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-28 15:18:29 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-28 15:23:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 15:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:40:09 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:48:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:52:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-28 15:52:40 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:52:58 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 15:53:04 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:53:16 --> Could not find the language line "Home"
ERROR - 2025-04-28 15:53:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 15:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:00:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 16:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:02:21 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:02:36 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 16:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:09:03 --> Could not find the language line "users"
ERROR - 2025-04-28 16:09:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-28 16:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:19:16 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:25:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 16:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:27:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:41:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:41:47 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:43:49 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:44:15 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 16:46:04 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:46:10 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:46:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:46:36 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:46:38 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:48:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:49:37 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:52:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:54:57 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:56:09 --> Could not find the language line "Home"
ERROR - 2025-04-28 16:58:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 17:00:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:00:46 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:02:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 17:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:03:02 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:11:22 --> Could not find the language line "users"
ERROR - 2025-04-28 17:15:20 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:18:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:18:56 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:48:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 17:55:44 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:58:36 --> Could not find the language line "Home"
ERROR - 2025-04-28 17:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:04:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-28 18:07:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 18:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:18:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:36 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:18:36 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:24:55 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:31:51 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-28 18:31:52 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:31:52 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:32:06 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:39:52 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:39:58 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:45:04 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:45:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:48:08 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:48:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:48:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 18:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:49:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:50:12 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:52:02 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:52:56 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:53:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:55:33 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:58:26 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:58:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:58:38 --> Could not find the language line "Socks"
ERROR - 2025-04-28 18:58:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:58:53 --> Could not find the language line "Socks"
ERROR - 2025-04-28 18:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 18:59:05 --> Could not find the language line "Socks"
ERROR - 2025-04-28 18:59:21 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:59:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 18:59:49 --> Could not find the language line "Home"
ERROR - 2025-04-28 18:59:52 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:00:13 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:00:36 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:00:51 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:00:56 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:00:59 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 19:01:28 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:07:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c893%' OR a.description LIKE '%c893%' OR a.color LIKE '%c893%' OR a.barcode LIKE '%c893%' OR a.category LIKE '%c893%' OR a.sub_category LIKE '%c893%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 19:07:10 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:07:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:10:16 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:10:42 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 19:11:02 --> Could not find the language line "Perfume"
ERROR - 2025-04-28 19:11:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 19:11:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 19:12:10 --> Could not find the language line "Socks"
ERROR - 2025-04-28 19:12:24 --> Could not find the language line "Other"
ERROR - 2025-04-28 19:14:09 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 19:14:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 19:15:09 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 19:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:18:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:39:32 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:40:27 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:40:56 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:46:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 19:48:33 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:48:39 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:56:41 --> Could not find the language line "Home"
ERROR - 2025-04-28 19:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 19:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:00:25 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:00:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-28 20:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:02:06 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:14:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 20:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:14:20 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:16:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:18:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:22:46 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:32:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 20:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:41:11 --> Could not find the language line "Home"
ERROR - 2025-04-28 20:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 20:48:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:02:53 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:03:18 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:04:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 21:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 21:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:09:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 21:10:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 21:12:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:18:31 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:21:19 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:35:20 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:35:37 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 21:36:23 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:41:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 21:41:24 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:41:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 21:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:42:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-28 21:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:44:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 21:44:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 21:44:14 --> Could not find the language line "Other"
ERROR - 2025-04-28 21:44:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 21:44:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 21:44:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 21:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-28 21:47:30 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:48:33 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:54:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 21:54:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 21:55:04 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 21:56:51 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-28 21:56:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:56:51 --> Could not find the language line "Home"
ERROR - 2025-04-28 21:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:01:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 22:01:19 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:01:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:04:46 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-28 22:06:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:06:12 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:11:29 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:18:40 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:26:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 22:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-28 22:36:13 --> 404 Page Not Found: Users/users
ERROR - 2025-04-28 22:42:22 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:48:34 --> Could not find the language line "Home"
ERROR - 2025-04-28 22:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:51:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 22:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 22:55:08 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-28 22:57:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 22:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:02:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 23:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:02:09 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-28 23:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:02:40 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:08:35 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-28 23:12:40 --> Could not find the language line "Other"
ERROR - 2025-04-28 23:15:17 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:15:42 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:15:44 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:15:45 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:15:50 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:15:54 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:16:01 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:16:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 23:18:38 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:25:34 --> Could not find the language line "Socks"
ERROR - 2025-04-28 23:25:48 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:26:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-28 23:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:45:00 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:46:29 --> 404 Page Not Found: Users/products
ERROR - 2025-04-28 23:48:35 --> Could not find the language line "Home"
ERROR - 2025-04-28 23:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-28 23:54:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-28 23:54:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-28 23:54:56 --> 404 Page Not Found: Assets/uploads
