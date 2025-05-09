<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-29 00:05:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 00:15:28 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 00:16:54 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 00:17:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 00:17:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 00:17:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 00:17:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 00:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 00:18:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 00:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 00:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 00:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 00:46:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 00:46:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 00:48:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 01:06:43 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-04-29 01:07:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 01:09:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 01:19:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 01:19:17 --> Could not find the language line "Home"
ERROR - 2025-04-29 01:20:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 01:48:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 01:50:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 02:04:08 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:18:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 02:18:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:24:28 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:39:15 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:41:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:48:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 02:50:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 02:51:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 02:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 02:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:00:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 03:01:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 03:02:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 03:04:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:05:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:11:57 --> Could not find the language line "Socks"
ERROR - 2025-04-29 03:13:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 03:16:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 03:18:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:29:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 03:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 03:47:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:48:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:55:05 --> Could not find the language line "Home"
ERROR - 2025-04-29 03:55:09 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-29 04:07:41 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 04:11:26 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:15:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:18:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:19:27 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:27:14 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:42:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 04:44:01 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 04:48:50 --> Could not find the language line "Home"
ERROR - 2025-04-29 04:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:05:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 05:09:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 05:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:18:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 05:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:21:21 --> Could not find the language line "Home"
ERROR - 2025-04-29 05:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:29:20 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 05:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:40:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 05:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 05:45:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 05:48:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 05:55:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 05:55:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 05:57:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 05:57:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 05:57:57 --> 404 Page Not Found: Users/cart
ERROR - 2025-04-29 06:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:08:16 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 06:14:28 --> Could not find the language line "Socks"
ERROR - 2025-04-29 06:14:58 --> Could not find the language line "Home"
ERROR - 2025-04-29 06:18:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 06:23:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 06:30:19 --> Could not find the language line "accounts"
ERROR - 2025-04-29 06:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:48:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 06:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:57:47 --> Could not find the language line "Home"
ERROR - 2025-04-29 06:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 06:59:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 07:03:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 07:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 07:18:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 07:21:52 --> Could not find the language line "Home"
ERROR - 2025-04-29 07:28:23 --> Could not find the language line "Home"
ERROR - 2025-04-29 07:29:14 --> Could not find the language line "accounts"
ERROR - 2025-04-29 07:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 07:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 07:47:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 07:48:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 07:49:25 --> Could not find the language line "Home"
ERROR - 2025-04-29 07:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 07:58:55 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 08:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:15:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 08:18:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 08:23:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 08:29:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 08:29:52 --> Could not find the language line "Socks"
ERROR - 2025-04-29 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 08:48:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 08:48:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 08:52:54 --> Could not find the language line "Home"
ERROR - 2025-04-29 08:55:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:00:45 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:04:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:05:10 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:13:04 --> Could not find the language line "Other"
ERROR - 2025-04-29 09:18:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:27:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:31:41 --> Could not find the language line "Socks"
ERROR - 2025-04-29 09:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:42:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:44:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 09:44:30 --> Could not find the language line "Perfume"
ERROR - 2025-04-29 09:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:47:54 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:48:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:51:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 09:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:52:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 09:53:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 09:53:57 --> Could not find the language line "Home"
ERROR - 2025-04-29 09:54:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 09:57:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:02:14 --> Could not find the language line "Other"
ERROR - 2025-04-29 10:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:03:53 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:04:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 10:06:18 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:06:55 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:07:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:07:23 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:08:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 10:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:14:13 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:14:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 10:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:18:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:20:30 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:23 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:32 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:23:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:25:49 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:25:50 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:06 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:07 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:23 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:25 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:26:51 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:28:18 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:30:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 10:30:29 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 10:30:59 --> Could not find the language line "Perfume"
ERROR - 2025-04-29 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:31:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 10:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:32:11 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:32:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 10:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:32:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:33:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:33:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:33:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:33:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:34:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:35:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:35:08 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:35:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:35:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:35:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:36:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:37:32 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:35 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:37:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:37:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:38:01 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:38:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:39:48 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-29 10:39:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:39:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-04-29 10:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 10:43:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-29 10:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:48:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:56:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 10:57:29 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:57:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 10:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 10:58:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 10:58:03 --> Could not find the language line "Home"
ERROR - 2025-04-29 10:58:06 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 10:58:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 10:59:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:59:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 10:59:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 11:00:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 11:01:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 11:01:06 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:05:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:10:58 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:12:34 --> Could not find the language line "users"
ERROR - 2025-04-29 11:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:13:57 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-04-29 11:18:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:21:50 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:30:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 11:32:31 --> Could not find the language line "Other"
ERROR - 2025-04-29 11:44:59 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 11:48:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:55:30 --> Could not find the language line "Home"
ERROR - 2025-04-29 11:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:05:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:09:01 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:11:18 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:14:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:18:40 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:23:28 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:24:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 12:24:47 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:25:32 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:26:02 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:26:24 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:26:55 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:26:57 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:26:59 --> Could not find the language line "Socks"
ERROR - 2025-04-29 12:27:02 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:27:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-29 12:27:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-29 12:27:56 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-29 12:28:01 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:34:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 12:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:39:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 12:41:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 12:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:42:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 12:42:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 12:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:48:26 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:48:47 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:51 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:48:59 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:49:02 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:49:03 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:49:06 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:49:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:50:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:51:11 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:51:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:51:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:53:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 12:53:28 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:35 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:37 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:39 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:51 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:52 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:55 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:54:32 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:55:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:58:32 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:34 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:58:35 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:58:38 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:11 --> Could not find the language line "Home"
ERROR - 2025-04-29 12:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 12:59:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 12:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:13:07 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:14:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:15:18 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:15:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 13:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:16:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-29 13:18:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:25:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 13:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:35:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:38:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:47:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:47:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 13:47:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 13:47:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 13:48:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 13:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 13:58:39 --> Could not find the language line "Other"
ERROR - 2025-04-29 14:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:07:16 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 14:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:18:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:33:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:33:49 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:33:51 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:33:53 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:46:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:47:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 14:47:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 14:47:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 14:47:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 14:47:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:47:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:48:43 --> Could not find the language line "Home"
ERROR - 2025-04-29 14:51:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:51:01 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 14:51:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:51:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 14:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:52:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 14:52:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 14:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:53:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:53:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:54:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:55:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 14:56:45 --> Could not find the language line "Other"
ERROR - 2025-04-29 14:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 14:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:10:18 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:11:23 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:18:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:20:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 15:21:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 15:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:24:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:27:47 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:29:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:30:05 --> Could not find the language line "Perfume"
ERROR - 2025-04-29 15:30:11 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:42:02 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-29 15:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:44:04 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:44:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 15:45:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:48:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:53:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 15:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:56:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 15:56:58 --> Could not find the language line "Other"
ERROR - 2025-04-29 15:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 15:57:35 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:00:07 --> Could not find the language line "Socks"
ERROR - 2025-04-29 16:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:18:08 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:18:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:35:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 16:35:31 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:36:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:36:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:37:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:37:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:37:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:37:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-29 16:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:43:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 16:43:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 16:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:45:30 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:48:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:48:49 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:49:28 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-29 16:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:53:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:53:33 --> Could not find the language line "Home"
ERROR - 2025-04-29 16:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 16:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:02:08 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:08:50 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:18:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:20:36 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:23:48 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-29 17:23:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:26:07 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:30:26 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:32:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 17:32:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-29 17:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:48:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:49:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 17:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:53:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 17:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:56:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 17:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 17:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:04:22 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:05:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 18:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:18:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:22:55 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:24:33 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:33:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:33:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:34:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:34:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:34:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:34:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-29 18:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:34:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 18:34:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-29 18:34:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-29 18:34:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-29 18:34:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-29 18:35:02 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-29 18:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:48:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 18:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 18:59:12 --> Could not find the language line "Home"
ERROR - 2025-04-29 18:59:41 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:02:28 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:06:26 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:09:55 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:11:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:12:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-29 19:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:15:10 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:18:38 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 19:18:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 19:18:44 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:25:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 19:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:34:42 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:36:31 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 19:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:48:45 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:56:13 --> Could not find the language line "Home"
ERROR - 2025-04-29 19:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 19:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:00:19 --> Could not find the language line "Home"
ERROR - 2025-04-29 20:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:05:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 20:05:32 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-29 20:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:12:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 20:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:13:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 20:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:18:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 20:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:45:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 20:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:48:45 --> Could not find the language line "Home"
ERROR - 2025-04-29 20:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 20:52:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 20:52:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 21:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:10:52 --> Could not find the language line "Home"
ERROR - 2025-04-29 21:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:12:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-29 21:12:04 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-29 21:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:18:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 21:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:27:40 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 21:29:17 --> Could not find the language line "Home"
ERROR - 2025-04-29 21:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:38:19 --> Could not find the language line "Home"
ERROR - 2025-04-29 21:38:26 --> Could not find the language line "Other"
ERROR - 2025-04-29 21:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:48:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 21:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 21:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:02:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:04:24 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:12:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 22:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:18:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:23:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-29 22:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:29:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:29:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:30:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:30:53 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:32:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:32:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:32:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:33:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-29 22:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:37:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 22:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:42:31 --> Could not find the language line "Crocs"
ERROR - 2025-04-29 22:43:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 22:43:55 --> Could not find the language line "0"
ERROR - 2025-04-29 22:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:44:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 22:44:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 22:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:48:49 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:49:58 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:50:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 22:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 22:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:05:16 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:05:46 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:06:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-29 23:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:13:01 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-29 23:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:18:28 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-29 23:18:51 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:19:48 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:20:19 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:25:45 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:28:11 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:28:51 --> 404 Page Not Found: Users/users
ERROR - 2025-04-29 23:29:27 --> 404 Page Not Found: Indexhtml/index
ERROR - 2025-04-29 23:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:32:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-29 23:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:39:32 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:41:54 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:42:00 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:47:29 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:48:30 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:48:47 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:49:56 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:53:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-29 23:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:55:14 --> Could not find the language line "Home"
ERROR - 2025-04-29 23:57:53 --> 404 Page Not Found: Home/accounts
ERROR - 2025-04-29 23:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-29 23:58:33 --> 404 Page Not Found: Assets/css
