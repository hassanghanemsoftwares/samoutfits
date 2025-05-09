<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-29 00:12:19 --> Could not find the language line "Home"
ERROR - 2025-01-29 00:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 00:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 00:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 00:42:19 --> Could not find the language line "Home"
ERROR - 2025-01-29 00:43:36 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-29 00:47:36 --> Could not find the language line "Home"
ERROR - 2025-01-29 00:47:42 --> Could not find the language line "Home"
ERROR - 2025-01-29 00:48:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-29 00:49:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-29 00:49:36 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-29 00:50:57 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-29 01:12:20 --> Could not find the language line "Home"
ERROR - 2025-01-29 01:15:47 --> Could not find the language line "Home"
ERROR - 2025-01-29 01:23:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-29 01:24:49 --> Could not find the language line "Home"
ERROR - 2025-01-29 01:42:19 --> Could not find the language line "Home"
ERROR - 2025-01-29 02:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 02:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 02:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 02:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 02:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 02:12:19 --> Could not find the language line "Home"
ERROR - 2025-01-29 02:42:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 03:12:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 03:14:17 --> Could not find the language line "Home"
ERROR - 2025-01-29 03:16:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-29 03:42:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 03:43:55 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-29 03:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 03:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 04:07:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 04:12:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 04:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 04:42:23 --> Could not find the language line "Home"
ERROR - 2025-01-29 04:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 05:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 05:12:20 --> Could not find the language line "Home"
ERROR - 2025-01-29 05:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-29 05:34:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 05:42:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 05:45:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 05:48:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-29 05:52:04 --> Could not find the language line "Home"
ERROR - 2025-01-29 05:54:37 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:12:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:28:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-29 06:34:03 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 06:42:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:44:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:54:04 --> Could not find the language line "Home"
ERROR - 2025-01-29 06:57:10 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:01:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-29 07:02:29 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:09:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-29 07:12:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:21:43 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:21:43 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:42:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 07:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 07:47:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 08:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:01:30 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:04:19 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:11:56 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:12:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:24:04 --> Could not find the language line "Socks"
ERROR - 2025-01-29 08:27:16 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-29 08:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:29:26 --> Could not find the language line "Other"
ERROR - 2025-01-29 08:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:36:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 08:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:42:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:43:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 08:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:52:36 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:53:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 08:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 08:57:57 --> Could not find the language line "Home"
ERROR - 2025-01-29 08:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:12:23 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:13:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 09:25:16 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 09:27:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:30:28 --> Could not find the language line "Other"
ERROR - 2025-01-29 09:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:33:56 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 09:35:04 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:35:04 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:42:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:45:10 --> Could not find the language line "Home"
ERROR - 2025-01-29 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 09:50:59 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-29 09:57:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 09:57:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 09:57:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 09:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 09:58:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 09:58:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:06:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 10:10:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:10:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 10:12:23 --> Could not find the language line "Home"
ERROR - 2025-01-29 10:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:31:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-29 10:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:42:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 10:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:46:00 --> Could not find the language line "Home"
ERROR - 2025-01-29 10:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:58:03 --> Could not find the language line "Home"
ERROR - 2025-01-29 10:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 10:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:12:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 11:18:44 --> Could not find the language line "Home"
ERROR - 2025-01-29 11:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-29 11:42:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 11:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 11:51:34 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 12:12:25 --> Could not find the language line "Home"
ERROR - 2025-01-29 12:16:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 12:29:37 --> Could not find the language line "Home"
ERROR - 2025-01-29 12:42:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 12:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 12:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:25 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:16:07 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 13:16:30 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:16:38 --> 404 Page Not Found: Experience%20the%20aroma%20of%20sexiness%20For%20him%20and%20her/index
ERROR - 2025-01-29 13:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:28:24 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:31:09 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:34:29 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:37:37 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:39:41 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:42:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 13:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 13:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:03:47 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:12:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:19:30 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:21:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 14:31:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:33:28 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:37:25 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:39:28 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:42:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:44:14 --> Could not find the language line "Home"
ERROR - 2025-01-29 14:46:40 --> Could not find the language line "Other"
ERROR - 2025-01-29 14:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:01:32 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 15:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:12:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 15:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:26:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 15:42:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 15:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 15:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 16:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 16:12:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 16:16:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 16:16:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-29 16:18:27 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 16:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 16:42:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 16:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-29 16:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 100
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-29 16:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-29 16:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 17:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 17:12:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 17:25:09 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:25:13 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:28:34 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 17:29:23 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:42:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:46:11 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:47:02 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:52:03 --> Could not find the language line "Home"
ERROR - 2025-01-29 17:53:17 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-29 18:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:10:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-29 18:12:28 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:13:26 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:14:17 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:14:33 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:16:11 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:16:14 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:16:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-29 18:16:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-29 18:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 18:22:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:22:35 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:25:44 --> Could not find the language line "Home"
ERROR - 2025-01-29 18:42:28 --> Could not find the language line "Home"
ERROR - 2025-01-29 19:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:12:28 --> Could not find the language line "Home"
ERROR - 2025-01-29 19:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:38:47 --> Could not find the language line "Home"
ERROR - 2025-01-29 19:42:29 --> Could not find the language line "Home"
ERROR - 2025-01-29 19:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:47:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-29 19:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 19:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 20:01:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:01:34 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:01:36 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-29 20:01:45 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:01:50 --> Could not find the language line "Socks"
ERROR - 2025-01-29 20:01:53 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:01:56 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 20:02:07 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:06:40 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-29 20:12:29 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 20:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 20:21:08 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:23:27 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:26:41 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-29 20:42:30 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 20:47:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:47:34 --> Could not find the language line "Home"
ERROR - 2025-01-29 20:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 20:48:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-29 20:48:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-01-29 20:48:51 --> Unable to connect to the database
ERROR - 2025-01-29 20:48:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-29 20:49:10 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-01-29 20:49:10 --> Unable to connect to the database
ERROR - 2025-01-29 20:49:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-29 21:01:02 --> Could not find the language line "Perfume"
ERROR - 2025-01-29 21:06:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-29 21:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-29 21:06:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-29 21:17:07 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 21:17:20 --> Could not find the language line "Home"
ERROR - 2025-01-29 21:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 21:37:16 --> Could not find the language line "Home"
ERROR - 2025-01-29 21:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 21:39:53 --> Could not find the language line "Home"
ERROR - 2025-01-29 21:44:52 --> Could not find the language line "Home"
ERROR - 2025-01-29 21:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 21:47:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 21:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 21:59:51 --> Could not find the language line "Home"
ERROR - 2025-01-29 22:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 22:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 22:06:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-29 22:11:54 --> Could not find the language line "Home"
ERROR - 2025-01-29 22:17:05 --> Could not find the language line "Home"
ERROR - 2025-01-29 22:17:22 --> Could not find the language line "Home"
ERROR - 2025-01-29 22:33:13 --> Could not find the language line "Home"
ERROR - 2025-01-29 22:47:21 --> Could not find the language line "Home"
ERROR - 2025-01-29 23:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-29 23:07:03 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-29 23:17:30 --> Could not find the language line "Home"
ERROR - 2025-01-29 23:47:25 --> Could not find the language line "Home"
