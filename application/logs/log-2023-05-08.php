<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-08 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 00:06:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 00:06:06 --> Could not find the language line "Home"
ERROR - 2023-05-08 00:19:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-08 00:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 00:32:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-08 00:51:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-08 01:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 02:24:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 02:24:35 --> Could not find the language line "Home"
ERROR - 2023-05-08 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 02:34:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 02:41:06 --> Could not find the language line "Other"
ERROR - 2023-05-08 02:57:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-08 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 03:19:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 03:21:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-05-08 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 03:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 03:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:14:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 04:16:24 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:17:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:17:24 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:23:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:38:24 --> Could not find the language line "Home"
ERROR - 2023-05-08 04:40:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 04:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-08 04:53:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 04:53:08 --> Could not find the language line "Home"
ERROR - 2023-05-08 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 05:19:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 05:25:18 --> Could not find the language line "Home"
ERROR - 2023-05-08 05:25:36 --> Could not find the language line "Home"
ERROR - 2023-05-08 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 05:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:01:38 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:04:08 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:15:23 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:16:29 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:23:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:31:29 --> Could not find the language line "Bracelets"
ERROR - 2023-05-08 06:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:40:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 06:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:47:28 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:47:29 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:47:39 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:50:42 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:51:33 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:51:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:52:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:52:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:52:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:53:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:54:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:54:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:54:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:54:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:54:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 06:54:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:54:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:54:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 06:54:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 06:55:05 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:55:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:56:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:57:25 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:57:32 --> Could not find the language line "Perfume"
ERROR - 2023-05-08 06:57:41 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:57:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 06:57:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:57:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:57:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:58:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:58:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:58:34 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:58:53 --> Could not find the language line "Socks"
ERROR - 2023-05-08 06:58:58 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:59:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 06:59:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 06:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 06:59:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 06:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 06:59:39 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:00:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:02:58 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:04:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:06:36 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:08:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:08:19 --> Could not find the language line "Socks"
ERROR - 2023-05-08 07:08:48 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:10:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:10:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:12:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:12:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:12:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:12:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 07:13:03 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:13:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:14:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 07:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:15:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-08 07:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:16:22 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:16:44 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:18:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 07:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:44:48 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:45:59 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:46:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:47:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:48:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:50:16 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 07:55:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 07:57:50 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:07:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:07:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:20:05 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:20:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 08:20:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-08 08:20:24 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:20:52 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:30:21 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:30:33 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:31:40 --> Could not find the language line "Home"
ERROR - 2023-05-08 08:36:18 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:09:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:09:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:09:56 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:10:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:11:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:11:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:11:28 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:11:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 09:27:18 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:41:38 --> Could not find the language line "Home"
ERROR - 2023-05-08 09:43:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 09:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 09:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:04:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:07:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:09:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:13:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:20:31 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:21:16 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:27:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:33:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:40:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:40:57 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:41:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:45:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:49:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:50:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:51:48 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:52:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 10:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:52:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:53:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:53:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:56:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:56:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:57:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 10:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 10:57:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:00:56 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:04:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 11:06:59 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:15:05 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:19:30 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:19:43 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:20:21 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:51:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:53:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:54:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 11:55:18 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 11:56:05 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 11:57:03 --> Could not find the language line "Home"
ERROR - 2023-05-08 11:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:09:59 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:12:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:12:20 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:15:00 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:15:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:15:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 12:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:17:08 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:17:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:17:25 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:17:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 12:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 12:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:19:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 12:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 12:21:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 12:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:23:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:24:32 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:24:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:25:31 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 12:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 12:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:09:28 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:10:21 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:10:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:16:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 13:16:38 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:17:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 13:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 13:17:29 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:17:31 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 13:30:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:32:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 13:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:34:50 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:35:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:35:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:35:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:36:33 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:36:53 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:40:20 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:41:56 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:41:57 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:44:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 13:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:58:31 --> Could not find the language line "Home"
ERROR - 2023-05-08 13:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 13:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:02:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:20:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 14:25:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:27:23 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:28:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 14:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:31:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 14:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:32:22 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:32:41 --> Could not find the language line "Perfume"
ERROR - 2023-05-08 14:32:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:32:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 14:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 14:33:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 14:33:34 --> Could not find the language line "Crocs"
ERROR - 2023-05-08 14:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 14:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:35:44 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:50:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 14:50:04 --> Could not find the language line "Home"
ERROR - 2023-05-08 14:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 14:53:02 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:03:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:10:35 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:10:35 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 15:16:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 15:30:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:32:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:33:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 15:33:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 15:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:34:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 15:50:46 --> Could not find the language line "Other"
ERROR - 2023-05-08 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:02:43 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:02:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-08 16:02:45 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-08 16:02:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-08 16:02:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-08 16:11:55 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:22:52 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:22:54 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:23:34 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 16:24:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:26:40 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:28:48 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:53:58 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 16:55:00 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 16:56:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 16:57:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 16:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 16:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:00:21 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:01:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:02:23 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:03:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:08:30 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-08 17:13:25 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:13:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:13:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-08 17:13:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-08 17:13:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-08 17:13:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-08 17:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:18:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 17:33:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 17:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 17:58:47 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:28:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 18:28:18 --> Could not find the language line "Other"
ERROR - 2023-05-08 18:30:08 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:37:53 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:48:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 18:55:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 18:57:21 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:15:01 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:16:48 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:17:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:18:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-08 19:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:29:34 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:30:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:30:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 19:30:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 19:30:45 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:31:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 19:31:23 --> Could not find the language line "Home"
ERROR - 2023-05-08 19:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 19:36:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 19:49:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-08 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:04:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 20:06:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 20:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 20:12:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 20:20:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 20:21:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 20:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 20:21:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 20:24:23 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-08 20:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 20:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 20:28:49 --> 404 Page Not Found: Admin/elfinder
ERROR - 2023-05-08 20:29:03 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:33:58 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:38:30 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 20:39:17 --> Could not find the language line "Home"
ERROR - 2023-05-08 20:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:05:46 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:05:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-08 21:08:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:08:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-08 21:09:26 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:10:05 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:12:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-08 21:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:17:02 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:17:09 --> Could not find the language line "Bracelets"
ERROR - 2023-05-08 21:17:18 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:18:04 --> Could not find the language line "Socks"
ERROR - 2023-05-08 21:18:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:19:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:19:52 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:20:38 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 21:21:30 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 21:56:35 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:03:51 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:19:37 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:33:24 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 22:35:02 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:35:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 22:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 22:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-08 22:36:50 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 22:52:58 --> Could not find the language line "Home"
ERROR - 2023-05-08 22:59:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-08 23:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 23:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-08 23:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-08 23:53:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-08 23:56:07 --> 404 Page Not Found: Assets/css
