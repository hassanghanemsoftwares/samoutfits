<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-22 00:00:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 00:00:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 00:00:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 00:07:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-22 00:13:24 --> Could not find the language line "Home"
ERROR - 2025-02-22 00:43:25 --> Could not find the language line "Home"
ERROR - 2025-02-22 00:53:58 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 00:59:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-22 00:59:35 --> Could not find the language line "Other"
ERROR - 2025-02-22 01:02:47 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 01:04:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 01:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 01:04:27 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 01:08:52 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:10:28 --> Could not find the language line "Other"
ERROR - 2025-02-22 01:11:34 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 01:11:35 --> Could not find the language line "Other"
ERROR - 2025-02-22 01:13:15 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:13:25 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:14:59 --> Could not find the language line "Other"
ERROR - 2025-02-22 01:16:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:17:24 --> Could not find the language line "Other"
ERROR - 2025-02-22 01:18:41 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 01:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 01:37:21 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:43:24 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:44:07 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:52:56 --> Could not find the language line "Home"
ERROR - 2025-02-22 01:54:15 --> 404 Page Not Found: Media/system
ERROR - 2025-02-22 01:54:19 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-22 01:56:41 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:02:32 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 02:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 02:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 02:09:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:12:01 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:13:26 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:15:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-22 02:15:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:16:24 --> Could not find the language line "Home"
ERROR - 2025-02-22 02:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 03:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 03:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:03:09 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 03:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:10:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-22 03:13:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 03:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 03:39:46 --> Could not find the language line "Home"
ERROR - 2025-02-22 03:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 03:48:14 --> Could not find the language line "Home"
ERROR - 2025-02-22 03:49:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-22 03:59:07 --> Could not find the language line "Other"
ERROR - 2025-02-22 04:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 04:12:26 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-22 04:12:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 04:12:28 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-22 04:12:28 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-22 04:12:29 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-22 04:12:29 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-22 04:12:31 --> 404 Page Not Found: New/index
ERROR - 2025-02-22 04:12:31 --> 404 Page Not Found: Main/index
ERROR - 2025-02-22 04:12:32 --> Could not find the language line "Home"
ERROR - 2025-02-22 04:13:26 --> Could not find the language line "Home"
ERROR - 2025-02-22 04:14:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-22 04:43:28 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 05:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:33:57 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:33:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:33:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:37:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 05:52:11 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-22 06:02:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-22 06:03:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 06:12:43 --> Could not find the language line "Home"
ERROR - 2025-02-22 06:13:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 06:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 06:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:01:51 --> Could not find the language line "Perfume"
ERROR - 2025-02-22 07:05:24 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:13:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:17:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 07:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 07:17:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 07:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:32:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-22 07:32:13 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:32:13 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:32:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-22 07:32:26 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:32:54 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:32:54 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:33:02 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:33:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-22 07:34:04 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:34:04 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:34:05 --> 404 Page Not Found: Assets/img
ERROR - 2025-02-22 07:34:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-22 07:35:14 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:35:14 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-22 07:36:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-22 07:36:59 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:43:28 --> Could not find the language line "Home"
ERROR - 2025-02-22 07:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 07:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:05:25 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-02-22 08:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:07:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-22 08:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:16:17 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:25:20 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:36:21 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:43:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:49:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:51:25 --> Could not find the language line "Other"
ERROR - 2025-02-22 08:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:51:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:51:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:51:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:51:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:52:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:52:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-22 08:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 08:55:21 --> Could not find the language line "Home"
ERROR - 2025-02-22 08:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:04:14 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:05:42 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:08:25 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:13:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:24:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-22 09:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:43:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:48:54 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:55:01 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:55:06 --> Could not find the language line "Home"
ERROR - 2025-02-22 09:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 09:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:06:42 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:11:47 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:11:47 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:13:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:15:39 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:24:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-22 10:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:31:03 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:43:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:46:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-22 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:51:58 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-22 10:51:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:51:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 10:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 10:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:13:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 11:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:21:05 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 11:21:10 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 11:21:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 11:21:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 11:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:29:49 --> Could not find the language line "Home"
ERROR - 2025-02-22 11:29:50 --> Could not find the language line "Home"
ERROR - 2025-02-22 11:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:43:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 11:43:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 11:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 11:59:48 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:05:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:13:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:27:19 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:27:20 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 12:41:10 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:43:31 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:46:39 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:47:54 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-22 12:47:55 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:47:55 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-22 12:47:56 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-22 12:47:56 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-22 12:47:57 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-22 12:47:58 --> 404 Page Not Found: New/index
ERROR - 2025-02-22 12:47:59 --> 404 Page Not Found: Main/index
ERROR - 2025-02-22 12:47:59 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:51:19 --> Could not find the language line "Home"
ERROR - 2025-02-22 12:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:08:17 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:08:17 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:10:55 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:10:55 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:13:31 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:13:34 --> Could not find the language line "Other"
ERROR - 2025-02-22 13:41:20 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:43:31 --> Could not find the language line "Home"
ERROR - 2025-02-22 13:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 13:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 13:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 13:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 13:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 13:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 13:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-22 13:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-22 13:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-22 13:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:13:31 --> Could not find the language line "Home"
ERROR - 2025-02-22 14:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:16:02 --> Could not find the language line "Home"
ERROR - 2025-02-22 14:17:04 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-22 14:22:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-22 14:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-22 14:43:32 --> Could not find the language line "Home"
ERROR - 2025-02-22 14:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 14:47:05 --> Could not find the language line "Home"
ERROR - 2025-02-22 14:48:08 --> Could not find the language line "Home"
ERROR - 2025-02-22 15:04:01 --> Could not find the language line "Home"
ERROR - 2025-02-22 15:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:13:32 --> Could not find the language line "Home"
ERROR - 2025-02-22 15:25:11 --> Could not find the language line "Home"
ERROR - 2025-02-22 15:40:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-22 15:43:32 --> Could not find the language line "Home"
ERROR - 2025-02-22 15:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 15:54:22 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 16:06:09 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:11:35 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:13:32 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 16:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 16:22:04 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:29:11 --> Could not find the language line "Home"
ERROR - 2025-02-22 16:43:33 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:04:35 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:12:15 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:13:33 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:17:31 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:18:46 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:43:33 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:54:44 --> Could not find the language line "Home"
ERROR - 2025-02-22 17:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 17:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-22 18:13:33 --> Could not find the language line "Home"
ERROR - 2025-02-22 18:19:22 --> Could not find the language line "Home"
ERROR - 2025-02-22 18:22:20 --> Could not find the language line "Home"
ERROR - 2025-02-22 18:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:39:27 --> Could not find the language line "Home"
ERROR - 2025-02-22 18:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:43:34 --> Could not find the language line "Home"
ERROR - 2025-02-22 18:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 18:49:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-22 18:49:30 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:13:34 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:43:34 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 19:46:12 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:46:12 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:51:47 --> Could not find the language line "Home"
ERROR - 2025-02-22 19:58:58 --> Could not find the language line "Home"
ERROR - 2025-02-22 20:13:34 --> Could not find the language line "Home"
ERROR - 2025-02-22 20:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 20:42:01 --> Could not find the language line "Other"
ERROR - 2025-02-22 20:43:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 21:13:35 --> Could not find the language line "Home"
ERROR - 2025-02-22 21:16:03 --> Could not find the language line "Home"
ERROR - 2025-02-22 21:17:03 --> Could not find the language line "Clothing"
ERROR - 2025-02-22 21:43:35 --> Could not find the language line "Home"
ERROR - 2025-02-22 21:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 22:09:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-22 22:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 22:13:36 --> Could not find the language line "Home"
ERROR - 2025-02-22 22:18:29 --> Could not find the language line "Home"
ERROR - 2025-02-22 22:22:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 22:43:37 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:04:33 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-22 23:08:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-22 23:09:36 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:13:37 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:20:48 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:22:11 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:25:43 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:30:39 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:43:38 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:48:54 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:49:36 --> Could not find the language line "Home"
ERROR - 2025-02-22 23:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-22 23:52:37 --> 404 Page Not Found: Assets/css
