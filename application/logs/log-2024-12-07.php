<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-07 00:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 00:16:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 00:18:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 00:19:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 00:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 00:22:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 00:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 00:30:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-07 00:39:06 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-07 00:46:46 --> Could not find the language line "Home"
ERROR - 2024-12-07 00:48:12 --> Could not find the language line "Home"
ERROR - 2024-12-07 00:48:13 --> 404 Page Not Found: Wp-json/index
ERROR - 2024-12-07 01:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 01:16:35 --> Could not find the language line "Home"
ERROR - 2024-12-07 01:27:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 01:31:19 --> Could not find the language line "Home"
ERROR - 2024-12-07 01:42:47 --> Could not find the language line "Home"
ERROR - 2024-12-07 01:46:21 --> Could not find the language line "Home"
ERROR - 2024-12-07 01:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 02:04:56 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:11:48 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:15:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 02:16:20 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:29:16 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:30:05 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:30:19 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:30:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:30:27 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:30:42 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:30:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 02:30:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 02:30:49 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:30:52 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:30:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:31:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 02:31:07 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:31:08 --> Could not find the language line "Home"
ERROR - 2024-12-07 02:46:20 --> Could not find the language line "Home"
ERROR - 2024-12-07 03:16:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 03:18:06 --> Could not find the language line "Home"
ERROR - 2024-12-07 03:46:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 04:06:36 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-07 04:16:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 04:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 04:46:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 04:51:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-07 04:51:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 04:51:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 05:16:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 05:43:44 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:46:21 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 05:51:18 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:51:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:51:54 --> Could not find the language line "Disclaimer"
ERROR - 2024-12-07 05:51:58 --> Could not find the language line "Home"
ERROR - 2024-12-07 05:52:16 --> Could not find the language line "Other"
ERROR - 2024-12-07 05:52:17 --> Could not find the language line "Other"
ERROR - 2024-12-07 05:52:18 --> Could not find the language line "Perfume"
ERROR - 2024-12-07 05:52:23 --> Could not find the language line "Socks"
ERROR - 2024-12-07 05:52:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-07 05:52:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 05:52:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 06:16:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:29:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:32:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:34:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:35:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:41:42 --> Could not find the language line "Perfume"
ERROR - 2024-12-07 06:46:21 --> Could not find the language line "Home"
ERROR - 2024-12-07 06:55:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-07 06:59:44 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:00:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-07 07:02:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:03:52 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:06:35 --> Could not find the language line "Other"
ERROR - 2024-12-07 07:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:16:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:18:34 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:18:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:19:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:19:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:27:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:31:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:31:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:31:17 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:32:32 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:36:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:36:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:37:15 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:37:27 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:37:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:37:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:37:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:38:27 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:38:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:38:55 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:38:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:39:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:19 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:28 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:39:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:39:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:40:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 07:46:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-07 07:46:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 07:55:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:03:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:03:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:03:34 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:11:42 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:11:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:11:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:17 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:16:21 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:30:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:30:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:31:39 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:32:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:46:21 --> Could not find the language line "Home"
ERROR - 2024-12-07 08:48:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-07 08:50:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 08:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 08:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:16:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:18:45 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:20:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:27:09 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:32:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 09:33:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 09:34:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 09:36:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 09:37:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:37:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:46:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:50:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:50:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:50:59 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:51:04 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:53:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:53:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:54:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:54:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:54:50 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:54:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:54:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 09:55:44 --> Could not find the language line "Home"
ERROR - 2024-12-07 09:55:57 --> Could not find the language line "Other"
ERROR - 2024-12-07 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:56:13 --> Could not find the language line "Other"
ERROR - 2024-12-07 09:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 09:56:38 --> Could not find the language line "Other"
ERROR - 2024-12-07 09:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 10:16:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:16:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:16:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 10:16:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:16:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:19:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:19:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:19:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:19:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:20:35 --> Could not find the language line "Home"
ERROR - 2024-12-07 10:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 10:28:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:28:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:28:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:28:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 10:28:10 --> Could not find the language line "Socks"
ERROR - 2024-12-07 10:46:22 --> Could not find the language line "Home"
ERROR - 2024-12-07 10:50:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 10:50:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 10:52:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:52:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:52:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:54:43 --> Could not find the language line "Home"
ERROR - 2024-12-07 10:58:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 10:58:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 11:01:35 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 11:01:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 11:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:01:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 11:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:02:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 11:16:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:28:38 --> Could not find the language line "Other"
ERROR - 2024-12-07 11:46:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:49:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:49:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:50:32 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:50:55 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:51:12 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:51:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-07 11:51:53 --> Could not find the language line "Home"
ERROR - 2024-12-07 11:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 11:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 12:00:02 --> Could not find the language line "Home"
ERROR - 2024-12-07 12:11:15 --> Could not find the language line "Home"
ERROR - 2024-12-07 12:16:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 12:25:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-07 12:46:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 12:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 12:55:43 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 12:58:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 12:58:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 12:58:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 12:59:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-07 13:16:01 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:16:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:27:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-07 13:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:38:37 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:38:55 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:39:07 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:40:55 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:41:19 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:41:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 13:41:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 13:41:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:41:45 --> Could not find the language line "Home"
ERROR - 2024-12-07 13:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 13:46:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:05:05 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:06:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:06:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:07:06 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:16:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:37:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-07 14:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 14:46:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:47:56 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:48:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 14:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 14:49:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 14:50:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:50:31 --> Could not find the language line "Home"
ERROR - 2024-12-07 14:50:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:55 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 14:50:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-07 14:50:58 --> 404 Page Not Found: Products/assets
ERROR - 2024-12-07 14:50:58 --> 404 Page Not Found: Products/assets
ERROR - 2024-12-07 14:50:58 --> 404 Page Not Found: Products/assets
ERROR - 2024-12-07 14:50:58 --> 404 Page Not Found: Products/assets
ERROR - 2024-12-07 14:50:58 --> 404 Page Not Found: Products/assets
ERROR - 2024-12-07 14:52:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 14:58:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 15:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 15:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 15:16:26 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:25:24 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 15:34:15 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:42:05 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:42:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-07 15:46:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:47:10 --> Could not find the language line "Home"
ERROR - 2024-12-07 15:59:48 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:00:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:05:38 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:09:46 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 16:15:28 --> Could not find the language line "Socks"
ERROR - 2024-12-07 16:16:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:22:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-07 16:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-07 16:22:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 16:24:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:32:41 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:32:56 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:32:58 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:33:32 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:40:53 --> Could not find the language line "Home"
ERROR - 2024-12-07 16:46:25 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:04:30 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:08:57 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:16:26 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:33:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:34:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-07 17:34:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-07 17:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:35:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-07 17:35:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-07 17:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-07 17:37:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-07 17:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-07 17:37:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-07 17:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 17:38:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-12-07 17:38:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-12-07 17:46:26 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:49:04 --> Could not find the language line "Home"
ERROR - 2024-12-07 17:49:04 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:16:26 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:22:56 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:31:10 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 18:42:05 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:46:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 18:53:20 --> Could not find the language line "Home"
ERROR - 2024-12-07 19:16:27 --> Could not find the language line "Home"
ERROR - 2024-12-07 19:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-07 19:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-07 19:27:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-07 19:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:46:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 19:47:41 --> Could not find the language line "Home"
ERROR - 2024-12-07 19:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 19:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 20:04:42 --> Could not find the language line "Other"
ERROR - 2024-12-07 20:08:31 --> Could not find the language line "Home"
ERROR - 2024-12-07 20:16:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 20:28:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-07 20:35:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 20:46:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 21:08:23 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:09:01 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:16:28 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:24:08 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:26:49 --> Could not find the language line "Clothing"
ERROR - 2024-12-07 21:30:20 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 21:42:16 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:46:29 --> Could not find the language line "Home"
ERROR - 2024-12-07 21:55:56 --> 404 Page Not Found: Samoutfitscom/products
ERROR - 2024-12-07 22:06:16 --> Could not find the language line "Home"
ERROR - 2024-12-07 22:16:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 22:28:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 22:29:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 22:30:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-07 22:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-07 22:46:31 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-07 23:16:32 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:30:31 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:34:48 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-07 23:35:33 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:35:34 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:43:14 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:46:32 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:55:17 --> Could not find the language line "Home"
ERROR - 2024-12-07 23:56:43 --> Could not find the language line "Home"
