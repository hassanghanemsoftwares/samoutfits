<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-15 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 00:25:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 00:34:56 --> Could not find the language line "Home"
ERROR - 2023-03-15 00:34:58 --> Could not find the language line "Home"
ERROR - 2023-03-15 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-15 01:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 01:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 01:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-15 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 01:31:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 02:05:34 --> Could not find the language line "Home"
ERROR - 2023-03-15 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 02:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-15 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 03:08:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 03:08:31 --> Could not find the language line "Home"
ERROR - 2023-03-15 03:11:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-15 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 03:36:01 --> Could not find the language line "Home"
ERROR - 2023-03-15 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 04:00:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 04:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 04:36:21 --> Could not find the language line "Home"
ERROR - 2023-03-15 04:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 04:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 05:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 05:47:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 05:59:20 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:10:42 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 06:13:55 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:16:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:23:53 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 06:25:50 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:26:52 --> Could not find the language line "Home"
ERROR - 2023-03-15 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:10:49 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:12:50 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:14:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:14:45 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:15:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:16:08 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:16:19 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:17:53 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:20:39 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:20:59 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:23:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:34:24 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:45:41 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:45:56 --> Could not find the language line "Home"
ERROR - 2023-03-15 07:45:59 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:46:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:47:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:47:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:47:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:48:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:49:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 07:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 07:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:01:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:05:17 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:05:30 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:05:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:07:32 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:08:52 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:10:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:10:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:11:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:11:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:12:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:12:25 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:20:28 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:20:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:20:34 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:20:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:20:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:21:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:21:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:24:30 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:27:23 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:28:01 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:28:25 --> 404 Page Not Found: 19837437_notfoundhtml/index
ERROR - 2023-03-15 08:28:50 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 08:31:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:39:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:39:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 08:45:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 08:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 08:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:14:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 09:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 09:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:22:01 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:22:37 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:23:17 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:27:09 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:29:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 09:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 09:29:27 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:29:28 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 09:33:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:33:37 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:33:38 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:36:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:37:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 09:37:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 09:37:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:37:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 09:37:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 09:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 09:44:57 --> Could not find the language line "Home"
ERROR - 2023-03-15 09:53:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 09:53:26 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:53:49 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:54:19 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:54:29 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:54:44 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:55:00 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:55:26 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:55:31 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:56:18 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 09:56:30 --> Could not find the language line "Hair%20"
ERROR - 2023-03-15 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:04:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 10:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:06:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 10:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:06:42 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:06:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:06:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-15 10:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:07:33 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:07:39 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:07:41 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:09:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:09:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:11:02 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:11:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:16:39 --> Could not find the language line "socks"
ERROR - 2023-03-15 10:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:23:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-15 10:24:26 --> 404 Page Not Found: Products/index
ERROR - 2023-03-15 10:27:20 --> 404 Page Not Found: Plugins/jquery-file-upload
ERROR - 2023-03-15 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:34:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:37:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:40:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:41:09 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:41:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 10:41:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 10:41:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 10:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 10:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:48:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 10:48:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 10:48:42 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:48:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:51:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 10:53:58 --> Could not find the language line "Home"
ERROR - 2023-03-15 10:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 10:58:28 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:10:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:11:25 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-15 11:21:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 11:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:25:08 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:25:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-15 11:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:28:20 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:22 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:24 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:25 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:25 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:33 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:42:55 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:44:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('owlcarousel')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('owlcarousel')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:44:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:46:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('owlcarousel')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('owlcarousel')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'owlcarousel'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('lib')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'css'
AND `items`.`color` IN('assets')
AND `transaction_item_sizes`.`size` IN('css')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('animate')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('css')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('css')
AND `items`.`price` >= 'assets'
AND `items`.`price` <= 'lib'
AND `items`.`color` IN('owlcarousel')
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounting')
AND `items`.`gender` IN('assets')
AND `items`.`price` >= 'uploads'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:46:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 11:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('assets')
AND `items`.`gender` IN('lib')
AND `items`.`price` >= 'animate'
AND `items`.`price` <= 'assets'
AND `items`.`color` IN('lib')
AND `transaction_item_sizes`.`size` IN('animate')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 11:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:52:04 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:52:04 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:53:07 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:56:56 --> Could not find the language line "Home"
ERROR - 2023-03-15 11:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 11:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 12:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:05:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 12:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:26:34 --> Could not find the language line "Home"
ERROR - 2023-03-15 12:29:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 12:29:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 12:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:32:35 --> Could not find the language line "Perfume"
ERROR - 2023-03-15 12:39:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-15 12:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:54:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 12:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 12:59:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 12:59:34 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:13:51 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:14:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 13:14:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 13:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:15:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 13:15:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 13:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:20:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 13:20:27 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 13:20:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 13:20:32 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:28:43 --> Could not find the language line "Crocs"
ERROR - 2023-03-15 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:37:54 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:38:05 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 13:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 13:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 13:39:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 13:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 13:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 13:39:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-15 13:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 13:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 13:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-15 13:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 13:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:47:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:47:47 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:48:28 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:49:54 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:51:36 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-15 13:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:52:29 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:57:17 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 13:57:49 --> Could not find the language line "Home"
ERROR - 2023-03-15 13:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:10:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 14:11:39 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:12:20 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:13:26 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:14:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:14:19 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:15:04 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:16:24 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:17:17 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:19:37 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:29:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:33:05 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:39:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 14:40:36 --> Could not find the language line "Bracelets"
ERROR - 2023-03-15 14:41:02 --> Could not find the language line "Bracelets"
ERROR - 2023-03-15 14:41:21 --> Could not find the language line "Bracelets"
ERROR - 2023-03-15 14:41:32 --> Could not find the language line "Perfume"
ERROR - 2023-03-15 14:41:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:41:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:42:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:42:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:42:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:42:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:42:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-15 14:42:43 --> Could not find the language line "Socks"
ERROR - 2023-03-15 14:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-15 14:45:55 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:47:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-15 14:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:48:35 --> Could not find the language line "Socks"
ERROR - 2023-03-15 14:48:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-15 14:48:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:48:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:48:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 14:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:49:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:49:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 14:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:53:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:53:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:53:40 --> Could not find the language line "Home"
ERROR - 2023-03-15 14:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 14:58:16 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:05:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 15:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 15:11:22 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:22:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 15:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:33:16 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:34:42 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:40:02 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 15:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 15:51:29 --> Could not find the language line "Home"
ERROR - 2023-03-15 15:53:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 15:53:27 --> Could not find the language line "Home"
ERROR - 2023-03-15 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-15 16:08:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 16:08:53 --> Could not find the language line "Home"
ERROR - 2023-03-15 16:22:08 --> Could not find the language line "Home"
ERROR - 2023-03-15 16:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 16:29:04 --> Could not find the language line "Socks"
ERROR - 2023-03-15 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 16:48:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 16:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 16:51:04 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:13:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:14:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:16:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:17:24 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:17:41 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:25:02 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:25:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:25:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 17:25:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:26:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:26:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:26:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:27:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:27:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:27:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:23 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:28:24 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:28:25 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:28:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 17:28:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:28:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:30:52 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:32:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:36:48 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 17:37:38 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:45:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 17:46:08 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:47:31 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:47:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-15 17:47:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-15 17:48:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:49:36 --> Could not find the language line "Home"
ERROR - 2023-03-15 17:57:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 17:57:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 17:59:33 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 18:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 18:10:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 18:10:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 18:10:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-15 18:14:00 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:20:40 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 18:21:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:24:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 18:27:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:36:28 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:37:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 18:37:10 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:38:36 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:55:40 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 18:56:08 --> Could not find the language line "Home"
ERROR - 2023-03-15 18:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-15 19:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 19:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 19:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 19:05:09 --> Could not find the language line "Home"
ERROR - 2023-03-15 19:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 19:22:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 19:37:06 --> Could not find the language line "Home"
ERROR - 2023-03-15 19:37:07 --> Could not find the language line "Home"
ERROR - 2023-03-15 19:49:02 --> Could not find the language line "Home"
ERROR - 2023-03-15 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 20:03:49 --> Could not find the language line "Home"
ERROR - 2023-03-15 20:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 20:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 20:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 20:34:51 --> Could not find the language line "Home"
ERROR - 2023-03-15 20:38:06 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:05:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-15 21:06:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-15 21:13:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 21:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 21:16:16 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:16:21 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 21:19:43 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:19:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:19:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 21:20:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 21:20:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:20:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:21:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:21:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:22:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 21:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 21:22:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:22:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:22:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:23:09 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:25:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-15 21:25:36 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:25:55 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 21:37:01 --> Could not find the language line "Home"
ERROR - 2023-03-15 21:37:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-15 21:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-15 21:47:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:48:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-15 21:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-15 21:49:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 21:50:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 22:00:01 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:10:35 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:19:56 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:31:30 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:33:33 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:34:22 --> Could not find the language line "Home"
ERROR - 2023-03-15 22:46:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 22:52:12 --> Could not find the language line "Home"
ERROR - 2023-03-15 23:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-15 23:22:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-15 23:30:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-15 23:30:54 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-15 23:53:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-15 23:55:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-15 23:59:18 --> 404 Page Not Found: Assets/css
