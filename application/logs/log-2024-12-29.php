<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-29 00:15:39 --> Could not find the language line "Home"
ERROR - 2024-12-29 00:41:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-29 00:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 00:53:07 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-29 00:53:07 --> Could not find the language line "Home"
ERROR - 2024-12-29 00:53:07 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-29 00:53:08 --> 404 Page Not Found: Bc/index
ERROR - 2024-12-29 00:53:08 --> 404 Page Not Found: Bk/index
ERROR - 2024-12-29 00:53:08 --> 404 Page Not Found: Backup/index
ERROR - 2024-12-29 00:53:09 --> 404 Page Not Found: New/index
ERROR - 2024-12-29 00:53:09 --> 404 Page Not Found: Main/index
ERROR - 2024-12-29 00:53:10 --> Could not find the language line "Home"
ERROR - 2024-12-29 01:15:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 01:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 01:51:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-29 02:10:02 --> Could not find the language line "Home"
ERROR - 2024-12-29 02:15:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 02:45:42 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:06:18 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 03:15:42 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:19:09 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 03:34:21 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:37:26 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:40:34 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:45:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:46:43 --> Could not find the language line "Home"
ERROR - 2024-12-29 03:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 03:59:06 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:02:17 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:15:42 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:18:55 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-29 04:18:55 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:37:22 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:37:22 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:37:32 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:37:33 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:45:44 --> Could not find the language line "Home"
ERROR - 2024-12-29 04:58:07 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-12-29 04:58:31 --> Could not find the language line "Home"
ERROR - 2024-12-29 05:15:44 --> Could not find the language line "Home"
ERROR - 2024-12-29 05:18:21 --> Could not find the language line "Home"
ERROR - 2024-12-29 05:28:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-29 05:45:43 --> Could not find the language line "Home"
ERROR - 2024-12-29 05:52:48 --> Could not find the language line "Socks"
ERROR - 2024-12-29 05:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-29 06:15:39 --> Could not find the language line "Home"
ERROR - 2024-12-29 06:15:44 --> Could not find the language line "Home"
ERROR - 2024-12-29 06:45:44 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:12:27 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 07:30:17 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-29 07:42:49 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:42:50 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 07:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:59:24 --> Could not find the language line "Home"
ERROR - 2024-12-29 07:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:15:45 --> Could not find the language line "Home"
ERROR - 2024-12-29 08:28:19 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-29 08:28:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-29 08:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:35:34 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-29 08:35:34 --> Could not find the language line "Home"
ERROR - 2024-12-29 08:35:34 --> Could not find the language line "Home"
ERROR - 2024-12-29 08:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:36:26 --> Could not find the language line "Home"
ERROR - 2024-12-29 08:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-29 08:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 09:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 09:26:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 09:28:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 09:38:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 09:39:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 09:42:04 --> Could not find the language line "Home"
ERROR - 2024-12-29 09:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-29 09:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:00:30 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-29 10:00:31 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:00:31 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-29 10:00:31 --> 404 Page Not Found: Bc/index
ERROR - 2024-12-29 10:00:31 --> 404 Page Not Found: Bk/index
ERROR - 2024-12-29 10:00:31 --> 404 Page Not Found: Backup/index
ERROR - 2024-12-29 10:00:32 --> 404 Page Not Found: New/index
ERROR - 2024-12-29 10:00:32 --> 404 Page Not Found: Main/index
ERROR - 2024-12-29 10:00:33 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:21:09 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-29 10:21:09 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:23:23 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:33:49 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-12-29 10:35:38 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:44:27 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:45:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 10:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 10:54:11 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:00:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:00:57 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:02:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:18:32 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 11:21:30 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 11:22:37 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 11:28:45 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-12-29 11:34:38 --> Could not find the language line "Home"
ERROR - 2024-12-29 11:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-29 12:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 12:08:40 --> Could not find the language line "Home"
ERROR - 2024-12-29 12:15:46 --> Could not find the language line "Home"
ERROR - 2024-12-29 12:42:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-29 12:45:46 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:06:24 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:06:56 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:11:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 13:12:23 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:14:41 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:17:38 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:17:56 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:19:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-29 13:23:00 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:23:43 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:24:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:24:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:25:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-29 13:26:01 --> Could not find the language line "Home"
ERROR - 2024-12-29 13:26:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-29 13:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 13:27:27 --> Could not find the language line "Clothing"
ERROR - 2024-12-29 13:27:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-29 13:45:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 14:06:11 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-29 14:15:47 --> Could not find the language line "Home"
ERROR - 2024-12-29 14:43:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-29 14:44:47 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-12-29 14:45:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 14:50:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-29 15:03:08 --> Could not find the language line "Home"
ERROR - 2024-12-29 15:07:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-29 15:15:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 15:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 15:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 15:30:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-29 15:40:31 --> 404 Page Not Found: Ajs/index
ERROR - 2024-12-29 15:45:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 15:53:55 --> Could not find the language line "Home"
ERROR - 2024-12-29 15:58:29 --> Could not find the language line "Home"
ERROR - 2024-12-29 15:59:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 16:11:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-29 16:15:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 16:25:20 --> Could not find the language line "Home"
ERROR - 2024-12-29 16:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 16:26:48 --> Could not find the language line "Home"
ERROR - 2024-12-29 16:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 16:30:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-29 16:30:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-29 16:30:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-29 16:45:49 --> Could not find the language line "Home"
ERROR - 2024-12-29 16:52:43 --> 404 Page Not Found: Ajs/index
ERROR - 2024-12-29 17:15:49 --> Could not find the language line "Home"
ERROR - 2024-12-29 17:23:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-29 17:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 17:45:49 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 18:15:49 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:18:31 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:25:20 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:31:32 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:35:21 --> Could not find the language line "Home"
ERROR - 2024-12-29 18:45:50 --> Could not find the language line "Home"
ERROR - 2024-12-29 19:15:52 --> Could not find the language line "Home"
ERROR - 2024-12-29 19:45:50 --> Could not find the language line "Home"
ERROR - 2024-12-29 20:15:30 --> Could not find the language line "Home"
ERROR - 2024-12-29 20:15:51 --> Could not find the language line "Home"
ERROR - 2024-12-29 20:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 20:45:51 --> Could not find the language line "Home"
ERROR - 2024-12-29 21:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 21:15:51 --> Could not find the language line "Home"
ERROR - 2024-12-29 21:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 21:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 21:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-29 21:39:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 21:40:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 21:41:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 21:41:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-29 21:45:51 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:13:08 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:15:54 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:20:06 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:21:27 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:22:20 --> Could not find the language line "Home"
ERROR - 2024-12-29 22:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 22:45:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-29 22:45:56 --> Could not find the language line "Home"
ERROR - 2024-12-29 23:15:59 --> Could not find the language line "Home"
ERROR - 2024-12-29 23:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-29 23:45:54 --> Could not find the language line "Home"
