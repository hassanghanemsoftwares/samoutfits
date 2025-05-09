<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-03 00:14:41 --> Could not find the language line "Home"
ERROR - 2025-03-03 00:15:30 --> Could not find the language line "Home"
ERROR - 2025-03-03 00:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 00:24:28 --> Could not find the language line "Home"
ERROR - 2025-03-03 00:25:23 --> Could not find the language line "Home"
ERROR - 2025-03-03 00:25:24 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-03-03 00:25:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-03-03 00:25:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-03-03 00:25:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-03-03 00:44:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-03 00:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 00:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 00:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 00:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 00:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 00:45:30 --> Could not find the language line "Home"
ERROR - 2025-03-03 00:58:07 --> Could not find the language line "Home"
ERROR - 2025-03-03 01:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 01:15:30 --> Could not find the language line "Home"
ERROR - 2025-03-03 01:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 01:45:30 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 02:10:24 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:15:30 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:16:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-03 02:16:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-03 02:16:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-03 02:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 02:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 02:38:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 02:45:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:47:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:48:59 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:49:21 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:56:21 --> Could not find the language line "Home"
ERROR - 2025-03-03 02:56:23 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 03:03:53 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 03:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 03:11:22 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 03:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 03:11:22 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 03:11:23 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-03 03:11:23 --> 404 Page Not Found: Assets/img
ERROR - 2025-03-03 03:15:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:32:56 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:37:09 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:47:57 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:50:45 --> Could not find the language line "Home"
ERROR - 2025-03-03 03:56:26 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 04:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 04:15:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:19:52 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:19:59 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:22:05 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:36:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 04:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:15:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:45:31 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 05:47:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:48:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 05:48:23 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 05:48:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:48:43 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:53:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 05:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 05:59:25 --> Could not find the language line "Home"
ERROR - 2025-03-03 05:59:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 06:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:04:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 06:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:15:31 --> Could not find the language line "Home"
ERROR - 2025-03-03 06:26:21 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 06:29:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-03 06:29:25 --> Could not find the language line "Home"
ERROR - 2025-03-03 06:30:15 --> Could not find the language line "Home"
ERROR - 2025-03-03 06:40:12 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 06:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:40:12 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 06:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 06:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:07:18 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:15:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:15:37 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:15:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:20:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 07:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:25 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 07:21:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 07:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:24:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 07:29:02 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 07:29:08 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 07:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 07:30:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:55:56 --> Could not find the language line "Home"
ERROR - 2025-03-03 07:55:57 --> Could not find the language line "Home"
ERROR - 2025-03-03 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:14:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-03 08:15:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 08:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 08:45:32 --> Could not find the language line "Home"
ERROR - 2025-03-03 08:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:01:15 --> 404 Page Not Found: Media/system
ERROR - 2025-03-03 09:01:20 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-03-03 09:01:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:15:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:20:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:29:27 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:29:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:40:22 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:45:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 09:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 09:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:01:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 10:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:07:41 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 10:10:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-03-03 10:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:15:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 10:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:30:06 --> Could not find the language line "Home"
ERROR - 2025-03-03 10:33:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-03 10:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:45:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 10:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 10:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:02:10 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:03:42 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:04:27 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:08:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:11:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:13:12 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:15:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:16:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 11:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:28:28 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:29:42 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:35:33 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-03 11:35:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:35:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 11:40:54 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:45:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:46:16 --> Could not find the language line "Home"
ERROR - 2025-03-03 11:52:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-03 11:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-03 11:56:07 --> Could not find the language line "Other"
ERROR - 2025-03-03 12:00:28 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:06:31 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:15:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:19:00 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 12:30:54 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:45:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 12:51:34 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:15:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-03 13:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:38:43 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:43:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 13:45:35 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:53:01 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 13:57:53 --> Could not find the language line "Home"
ERROR - 2025-03-03 13:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 14:05:09 --> Could not find the language line "Home"
ERROR - 2025-03-03 14:05:10 --> Could not find the language line "Home"
ERROR - 2025-03-03 14:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 14:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 14:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-03 14:14:50 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 14:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 14:15:17 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 14:15:29 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 14:15:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 14:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 14:29:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 14:45:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:04:17 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-03 15:04:17 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:04:17 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 15:15:37 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:41:55 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:45:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 15:47:57 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:00:43 --> Could not find the language line "Perfume"
ERROR - 2025-03-03 16:02:15 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:06:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-03-03 16:06:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m123%' OR a.description LIKE '%m123%' OR a.color LIKE '%m123%' OR a.barcode LIKE '%m123%' OR a.category LIKE '%m123%' OR a.sub_category LIKE '%m123%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-03 16:06:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-03 16:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 16:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 16:15:36 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:15:38 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:17:33 --> Could not find the language line "Other"
ERROR - 2025-03-03 16:25:53 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:28:57 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:45:37 --> Could not find the language line "Home"
ERROR - 2025-03-03 16:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:15:38 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:15:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-03 17:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:32:11 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:33:19 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-03 17:35:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 17:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:38:23 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:45:38 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:51:22 --> Could not find the language line "Perfume"
ERROR - 2025-03-03 17:52:23 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 17:57:10 --> Could not find the language line "Home"
ERROR - 2025-03-03 17:59:06 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:07:46 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:15:38 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 18:29:15 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-03 18:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:34:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-03 18:35:02 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:36:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 18:43:56 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:45:38 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 18:54:22 --> Could not find the language line "Home"
ERROR - 2025-03-03 18:58:33 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:05:56 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:07:19 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:08:07 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:15:39 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 19:27:09 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:45:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 19:49:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 20:15:39 --> Could not find the language line "Home"
ERROR - 2025-03-03 20:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 20:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 20:22:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 20:25:12 --> Could not find the language line "Home"
ERROR - 2025-03-03 20:37:07 --> Could not find the language line "Home"
ERROR - 2025-03-03 20:45:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 20:53:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-03 21:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:08:49 --> Could not find the language line "Clothing"
ERROR - 2025-03-03 21:15:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 21:19:57 --> Could not find the language line "Home"
ERROR - 2025-03-03 21:45:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 21:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:54:26 --> Could not find the language line "Home"
ERROR - 2025-03-03 21:54:53 --> Could not find the language line "Home"
ERROR - 2025-03-03 21:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 21:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:04:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-03 22:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:08:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-03 22:15:40 --> Could not find the language line "Home"
ERROR - 2025-03-03 22:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:28:09 --> Could not find the language line "Home"
ERROR - 2025-03-03 22:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 22:45:41 --> Could not find the language line "Home"
ERROR - 2025-03-03 22:49:08 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-03-03 22:59:54 --> Could not find the language line "Perfume"
ERROR - 2025-03-03 23:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:11:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-03-03 23:11:25 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-03-03 23:11:26 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-03-03 23:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:15:51 --> Could not find the language line "Home"
ERROR - 2025-03-03 23:31:25 --> Could not find the language line "Home"
ERROR - 2025-03-03 23:34:44 --> Could not find the language line "Home"
ERROR - 2025-03-03 23:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:45:45 --> Could not find the language line "Home"
ERROR - 2025-03-03 23:53:09 --> Could not find the language line "Home"
ERROR - 2025-03-03 23:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-03 23:59:38 --> 404 Page Not Found: Assets/css
