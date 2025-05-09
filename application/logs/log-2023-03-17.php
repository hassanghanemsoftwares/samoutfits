<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-17 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 00:01:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 00:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 00:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 00:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 00:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 01:13:03 --> Could not find the language line "Home"
ERROR - 2023-03-17 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 01:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 02:34:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 02:34:28 --> Could not find the language line "Home"
ERROR - 2023-03-17 02:38:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 02:38:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 02:38:21 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-17 02:38:42 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-17 02:39:02 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-17 02:39:23 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-17 02:39:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 02:39:45 --> Could not find the language line "Home"
ERROR - 2023-03-17 02:43:17 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-17 02:43:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 02:45:24 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 02:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:46:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:47:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:47:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:47:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 02:50:22 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 02:52:30 --> Could not find the language line "Socks"
ERROR - 2023-03-17 02:52:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 02:56:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 02:56:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 02:58:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 03:00:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 03:00:11 --> Could not find the language line "Socks"
ERROR - 2023-03-17 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 03:01:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-17 03:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-17 03:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-17 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 03:53:36 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-17 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:04:17 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:04:18 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:05:02 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:33:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 04:36:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 04:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 04:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 04:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 04:41:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 04:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 04:42:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 04:42:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 04:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 04:45:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 05:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 05:28:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 05:28:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 05:40:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:03:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:37:18 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 06:48:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:53:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 06:58:35 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:15:06 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:15:21 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:19:53 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 07:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:55:51 --> Could not find the language line "Home"
ERROR - 2023-03-17 07:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 07:59:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 07:59:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 08:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:00:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 08:00:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:03:35 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:07:08 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:11:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:14:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:14:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 08:14:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 08:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:15:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 08:16:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 08:16:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:24:34 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:26:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 08:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:30:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 08:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:31:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 08:34:29 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:34:49 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:38:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:38:21 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 08:38:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:38:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 08:38:34 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 08:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:39:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 08:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 08:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:43:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 08:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:45:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 08:59:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:01:39 --> Could not find the language line "Socks"
ERROR - 2023-03-17 09:02:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 09:04:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 09:04:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 09:04:42 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:08:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 09:08:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 09:08:23 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:10:01 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:10:35 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:13:01 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:13:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:14:47 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:14:59 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 09:15:31 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:18:11 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:18:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 09:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:18:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 09:18:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:19:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 09:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:19:32 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:20:52 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:25:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:29:35 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:29:37 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:39:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 09:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:06 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:34 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:52:20 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 09:57:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 09:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:00:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-17 10:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:10:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:12:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:13:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:15:32 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:15:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:15:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:16:24 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-17 10:16:25 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-17 10:16:26 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-17 10:16:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 10:16:27 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-17 10:20:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 10:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:25:00 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 10:25:06 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 10:25:08 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:25:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:25:11 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:25:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:25:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:25:25 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 10:25:30 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 10:25:39 --> Could not find the language line "Socks"
ERROR - 2023-03-17 10:25:45 --> Could not find the language line "Socks"
ERROR - 2023-03-17 10:26:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 10:26:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 10:26:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 10:26:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 10:26:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:31:01 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:31:14 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:31:43 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:31:48 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:31:59 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:32:07 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:32:44 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:32:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:33:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 10:34:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:35:50 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:35:51 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 10:37:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:44:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 10:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:46:37 --> Could not find the language line "Home"
ERROR - 2023-03-17 10:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 10:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:12:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:14:59 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:15:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 11:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 11:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 11:16:24 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 11:16:36 --> Could not find the language line "Hair%20"
ERROR - 2023-03-17 11:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:25:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:26:54 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:28:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:30:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 11:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:32:40 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:32:41 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:32:42 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:33:04 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:41:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:47:51 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-17 11:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-17 11:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-17 11:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-17 11:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-17 11:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-17 11:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-17 11:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-17 11:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-17 11:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('Wallet')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-17 11:52:52 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 11:53:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 11:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:55:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:56:19 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:57:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 11:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 11:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 12:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 12:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 12:02:04 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:02:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:02:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:02:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 12:06:03 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:07:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 12:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 12:08:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 12:08:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 12:08:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 12:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 12:12:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 12:12:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 12:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 12:30:20 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 12:52:04 --> Could not find the language line "Home"
ERROR - 2023-03-17 12:57:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 12:58:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:16:01 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:16:02 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:16:03 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:16:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:16:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:19:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:19:36 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:19:41 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:20:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:20:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 13:20:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 13:21:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 13:21:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 13:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:26:25 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:31:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-17 13:31:54 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:39:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:39:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:42:47 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:43:17 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:44:22 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:44:58 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:45:05 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:45:12 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:45:42 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:46:17 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 13:48:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 13:51:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 13:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 13:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:02:09 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:03:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:03:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:04:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:09:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:12:53 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:13:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 14:13:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:13:25 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:13:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 14:14:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 14:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 14:14:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 14:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:15:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:19:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:21:29 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:21:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:21:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-17 14:21:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:29:10 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:32:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:32:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:32:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:33:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:33:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:35:13 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 14:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:35:46 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 14:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:48:47 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:55:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 14:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:58:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:58:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:59:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 14:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 14:59:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 14:59:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 15:00:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 15:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:03:06 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:04:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:04:31 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:12:39 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:17:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:17:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 15:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:23:28 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:27:53 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:30:19 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:33:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:37:35 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:37:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:40:32 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:40:55 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-17 15:40:55 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-17 15:40:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-17 15:40:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-17 15:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:42:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:42:31 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:49:19 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:49:38 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:56:34 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:56:34 --> Could not find the language line "Home"
ERROR - 2023-03-17 15:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 15:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:00:18 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:05:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 16:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:06:44 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:14:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-17 16:19:29 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:19:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 16:20:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 16:20:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 16:22:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 16:22:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 16:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:28:22 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:42:23 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:42:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 16:49:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 16:55:50 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-03-17 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:03:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-17 17:17:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 17:21:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 17:21:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 17:22:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 17:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 17:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 17:43:46 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:46:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:50:53 --> Could not find the language line "socks"
ERROR - 2023-03-17 17:52:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 17:53:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 17:55:33 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:55:39 --> Could not find the language line "Home"
ERROR - 2023-03-17 17:56:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:02:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:02:08 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:07:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-17 18:19:38 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:20:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:21:47 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:22:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 18:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:23:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 18:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:26:11 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:26:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:27:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:27:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:27:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-17 18:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:27:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:27:40 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:28:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:28:39 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:28:44 --> Could not find the language line "Socks"
ERROR - 2023-03-17 18:29:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:29:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 18:29:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:29:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 18:29:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 18:29:38 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:29:57 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:30:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:30:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 18:30:23 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:30:24 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:40:48 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-17 18:40:48 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-03-17 18:40:51 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-03-17 18:47:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 18:47:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 18:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:54:21 --> Could not find the language line "Home"
ERROR - 2023-03-17 18:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 18:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 19:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 19:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 19:10:06 --> Could not find the language line "Home"
ERROR - 2023-03-17 19:22:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 19:22:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 19:32:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 19:37:33 --> Could not find the language line "Socks"
ERROR - 2023-03-17 19:43:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 19:43:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:09:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:48:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-17 20:48:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 20:48:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-17 20:50:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 20:50:39 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:50:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-17 20:51:07 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 20:52:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 20:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 20:53:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 20:57:48 --> Could not find the language line "Home"
ERROR - 2023-03-17 20:57:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-17 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:01:02 --> 404 Page Not Found: Api/index.php
ERROR - 2023-03-17 21:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:18:08 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:22:21 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:22:30 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:32:48 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:33:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:33:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:34:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:35:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:35:56 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:36:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:37:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:37:25 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:37:40 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 21:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:38:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:38:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 21:38:49 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:39:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:37 --> Could not find the language line "Perfume"
ERROR - 2023-03-17 21:39:43 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:39:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:39:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:40:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:41:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:41:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 21:41:16 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:41:58 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:42:00 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:42:07 --> Could not find the language line "Socks"
ERROR - 2023-03-17 21:42:32 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:43:38 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:43:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 21:44:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 21:45:07 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=+961 3 575 888&amp;text=6258%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-03-17 21:45:46 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=03 575 888&amp;text=3073%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-03-17 21:46:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:48:50 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:51:26 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:51:27 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:51:41 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 21:51:51 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 21:52:25 --> Could not find the language line "Bracelets"
ERROR - 2023-03-17 21:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:53:20 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 21:59:23 --> Could not find the language line "Home"
ERROR - 2023-03-17 21:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 22:00:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-17 22:00:06 --> Could not find the language line "Home"
ERROR - 2023-03-17 22:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-17 22:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:09:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 22:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:11:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 22:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:12:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 22:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:13:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-17 22:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-17 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 22:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 22:39:41 --> Could not find the language line "Home"
ERROR - 2023-03-17 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-17 23:10:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-17 23:10:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-17 23:19:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 23:19:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-17 23:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-17 23:35:06 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-17 23:38:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-17 23:38:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
