<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-11 00:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 00:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 00:18:38 --> Could not find the language line "Home"
ERROR - 2025-01-11 00:19:09 --> Could not find the language line "Home"
ERROR - 2025-01-11 00:19:09 --> Could not find the language line "Home"
ERROR - 2025-01-11 00:19:09 --> Could not find the language line "Home"
ERROR - 2025-01-11 00:29:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-11 00:29:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-11 00:29:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-11 00:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 00:48:42 --> Could not find the language line "Home"
ERROR - 2025-01-11 00:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 01:18:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 01:45:39 --> Could not find the language line "Home"
ERROR - 2025-01-11 01:48:57 --> Could not find the language line "Home"
ERROR - 2025-01-11 01:49:15 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:08:44 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:12:25 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:18:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:22:18 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:48:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 02:57:21 --> Could not find the language line "Home"
ERROR - 2025-01-11 03:18:44 --> Could not find the language line "Home"
ERROR - 2025-01-11 03:36:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-11 03:46:49 --> Could not find the language line "0"
ERROR - 2025-01-11 03:48:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 03:49:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 03:49:57 --> Could not find the language line "Home"
ERROR - 2025-01-11 03:50:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:17:29 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:17:30 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:17:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:17:37 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:18:44 --> Could not find the language line "Home"
ERROR - 2025-01-11 04:21:51 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-11 04:48:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 05:18:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 05:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-11 05:21:39 --> Could not find the language line "Home"
ERROR - 2025-01-11 05:48:42 --> Could not find the language line "Home"
ERROR - 2025-01-11 06:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 06:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 06:18:44 --> Could not find the language line "Home"
ERROR - 2025-01-11 06:42:19 --> Could not find the language line "Home"
ERROR - 2025-01-11 06:48:42 --> Could not find the language line "Home"
ERROR - 2025-01-11 07:01:24 --> Could not find the language line "Home"
ERROR - 2025-01-11 07:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:18:42 --> Could not find the language line "Home"
ERROR - 2025-01-11 07:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:25:30 --> Could not find the language line "Home"
ERROR - 2025-01-11 07:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:48:43 --> Could not find the language line "Home"
ERROR - 2025-01-11 07:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 07:49:53 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:12:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:18:44 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:22:02 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:22:03 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:22:29 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:24:40 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:41:58 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:47:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:47:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 08:47:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:47:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 08:48:43 --> Could not find the language line "Home"
ERROR - 2025-01-11 08:59:38 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:12:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:13:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 09:13:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 09:13:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 09:13:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:18:43 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:22:32 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:41:29 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:45:28 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:48:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 09:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 09:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:00:08 --> Could not find the language line "Home"
ERROR - 2025-01-11 10:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 10:09:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-11 10:10:35 --> Could not find the language line "Home"
ERROR - 2025-01-11 10:11:34 --> Could not find the language line "Home"
ERROR - 2025-01-11 10:12:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-11 10:18:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 10:24:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-11 10:48:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 10:59:54 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 11:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:00:47 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 11:01:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 11:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:17:28 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:17:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:17:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:18:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:18:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:18:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:19:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:19:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:22:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:22:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:29:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:30:17 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:31:56 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-11 11:33:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:33:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:33:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:33:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:34:07 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:34:08 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-11 11:35:51 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-11 11:39:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:39:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:39:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:39:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:40:12 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-11 11:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:45:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:45:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:45:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:45:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:45:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:45:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:46:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 11:48:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:49:20 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:49:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:49:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:49:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:49:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:49:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 11:52:47 --> Could not find the language line "Home"
ERROR - 2025-01-11 11:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:09:18 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:10:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:10:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:10:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:18:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:21:16 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:22:51 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:37:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:37:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:37:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:37:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:38:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:10 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:39:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:40:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:40:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:40:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:40:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:41:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:48:45 --> Could not find the language line "Home"
ERROR - 2025-01-11 12:53:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:53:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:53:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:53:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:54:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:54:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:54:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:55:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:55:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:55:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:55:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:55:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:57:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:57:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:57:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:57:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 12:57:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:57:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 12:58:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:01:36 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:01:38 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:01:40 --> 404 Page Not Found: Payment/index.php
ERROR - 2025-01-11 13:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:18:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:39:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:48:46 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:52:02 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 13:56:12 --> Could not find the language line "Home"
ERROR - 2025-01-11 13:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 13:59:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:59:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:59:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:59:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:59:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 13:59:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 14:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 14:07:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 14:18:50 --> Could not find the language line "Home"
ERROR - 2025-01-11 14:42:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 14:47:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-11 14:47:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-11 14:48:47 --> Could not find the language line "Home"
ERROR - 2025-01-11 14:50:03 --> Could not find the language line "Home"
ERROR - 2025-01-11 14:50:20 --> Could not find the language line "Home"
ERROR - 2025-01-11 14:52:56 --> Could not find the language line "Home"
ERROR - 2025-01-11 14:53:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 14:53:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 14:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 14:58:40 --> Could not find the language line "Home"
ERROR - 2025-01-11 15:17:12 --> Could not find the language line "Home"
ERROR - 2025-01-11 15:18:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 15:44:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 15:48:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 15:55:56 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-11 16:18:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:26:38 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:26:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:32:18 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:42:24 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:47:21 --> Could not find the language line "Bracelets"
ERROR - 2025-01-11 16:47:21 --> Could not find the language line "Bracelets"
ERROR - 2025-01-11 16:47:22 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-01-11 16:47:22 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-01-11 16:48:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:50:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:50:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:51:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:51:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:52:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:38 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:38 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:38 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:38 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:38 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:39 --> 404 Page Not Found: Products/assets
ERROR - 2025-01-11 16:52:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:52:52 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:54:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:54:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:54:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:54:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:55:07 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:55:16 --> Could not find the language line "Clothing"
ERROR - 2025-01-11 16:55:26 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:55:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-11 16:55:52 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:55:58 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 16:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:56:09 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 16:56:11 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:56:19 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-11 16:56:26 --> Could not find the language line "Home"
ERROR - 2025-01-11 16:56:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:56:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:56:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:56:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 16:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 16:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:00:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:00:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:00:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:00:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:01:52 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:01:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:01:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:04:16 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:04:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:05:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:05:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:05:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:05:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:05:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:05:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:06:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:06:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:06:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:06:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:06:59 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:07:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:07:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:07:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:07:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:07:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:07:37 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:18:48 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:22:57 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:23:26 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:29:26 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:29:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 17:29:58 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 17:37:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-11 17:37:12 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:48:49 --> Could not find the language line "Home"
ERROR - 2025-01-11 17:50:55 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:02:56 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:18:49 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:19:52 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:28:19 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:36:05 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-11 18:48:49 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:49:06 --> Could not find the language line "Home"
ERROR - 2025-01-11 18:50:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-11 18:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-11 18:59:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-11 19:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 19:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 19:17:30 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-11 19:17:30 --> Could not find the language line "Home"
ERROR - 2025-01-11 19:18:49 --> Could not find the language line "Home"
ERROR - 2025-01-11 19:26:03 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-11 19:26:03 --> Could not find the language line "Home"
ERROR - 2025-01-11 19:26:03 --> Could not find the language line "Home"
ERROR - 2025-01-11 19:48:50 --> Could not find the language line "Home"
ERROR - 2025-01-11 20:04:05 --> Could not find the language line "Home"
ERROR - 2025-01-11 20:18:50 --> Could not find the language line "Home"
ERROR - 2025-01-11 20:38:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-11 20:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 20:48:50 --> Could not find the language line "Home"
ERROR - 2025-01-11 20:58:07 --> Could not find the language line "Home"
ERROR - 2025-01-11 21:18:51 --> Could not find the language line "Home"
ERROR - 2025-01-11 21:48:51 --> Could not find the language line "Home"
ERROR - 2025-01-11 21:56:25 --> Could not find the language line "Home"
ERROR - 2025-01-11 21:59:53 --> Could not find the language line "Home"
ERROR - 2025-01-11 22:02:13 --> Could not find the language line "Other"
ERROR - 2025-01-11 22:15:12 --> Could not find the language line "Home"
ERROR - 2025-01-11 22:18:52 --> Could not find the language line "Home"
ERROR - 2025-01-11 22:48:53 --> Could not find the language line "Home"
ERROR - 2025-01-11 22:53:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:53:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 22:53:54 --> Could not find the language line "Home"
ERROR - 2025-01-11 22:54:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 22:54:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:54:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 22:55:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:18:55 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:44:41 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:48:58 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:52:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:52:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:53:20 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:53:49 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:54:16 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:54:35 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:54:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-11 23:54:58 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:55:04 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 23:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:55:31 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 23:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:55:44 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 23:55:47 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:55:50 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:55:54 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 23:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:56:28 --> Could not find the language line "Perfume"
ERROR - 2025-01-11 23:56:31 --> Could not find the language line "Home"
ERROR - 2025-01-11 23:56:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:56:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:57:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:57:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:58:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:59:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-11 23:59:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-11 23:59:59 --> 404 Page Not Found: Assets/css
