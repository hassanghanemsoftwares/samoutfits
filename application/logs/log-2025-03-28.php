<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-28 00:00:44 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 00:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 00:03:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:06:58 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:07:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-03-28 00:07:23 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:08:01 --> Could not find the language line "Perfume"
ERROR - 2025-03-28 00:08:06 --> Could not find the language line "Perfume"
ERROR - 2025-03-28 00:08:06 --> Could not find the language line "Perfume"
ERROR - 2025-03-28 00:08:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:08:19 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 00:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 00:08:41 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:08:55 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:14:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 00:37:54 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 00:38:39 --> Could not find the language line "Home"
ERROR - 2025-03-28 00:44:05 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:05:05 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:06:54 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-28 01:06:55 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: New/index
ERROR - 2025-03-28 01:06:55 --> 404 Page Not Found: Main/index
ERROR - 2025-03-28 01:06:55 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:14:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:24:00 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:29:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-28 01:32:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:44:37 --> Could not find the language line "Home"
ERROR - 2025-03-28 01:57:35 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:14:16 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:19:56 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:19:57 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:20:04 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:20:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:20:16 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:30:04 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:41:23 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-28 02:41:23 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:41:23 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:44:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 02:56:55 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 03:01:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-28 03:02:17 --> Could not find the language line "Home"
ERROR - 2025-03-28 03:14:05 --> Could not find the language line "Home"
ERROR - 2025-03-28 03:40:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-28 03:40:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 03:44:14 --> Could not find the language line "Home"
ERROR - 2025-03-28 03:51:25 --> Could not find the language line "Home"
ERROR - 2025-03-28 03:52:36 --> Could not find the language line "Home"
ERROR - 2025-03-28 04:11:05 --> Could not find the language line "Home"
ERROR - 2025-03-28 04:14:12 --> Could not find the language line "Home"
ERROR - 2025-03-28 04:32:31 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 04:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:14:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:19:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 05:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 05:22:22 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:35:26 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:38:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:43:12 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:47:14 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:53:06 --> Could not find the language line "Home"
ERROR - 2025-03-28 05:57:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 06:10:47 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 06:14:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 06:30:47 --> Could not find the language line "Home"
ERROR - 2025-03-28 06:33:53 --> Could not find the language line "Home"
ERROR - 2025-03-28 06:35:03 --> Could not find the language line "Home"
ERROR - 2025-03-28 06:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:00:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:04:43 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 07:14:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:14:27 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:21:20 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:24:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 07:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 07:26:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 07:32:41 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 07:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 07:48:42 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 07:56:03 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:02:38 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:04:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-28 08:08:00 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:08:02 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:08:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:08:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:08:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:08:19 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:11:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 08:14:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:14:43 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 08:40:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 08:43:42 --> Could not find the language line "Home"
ERROR - 2025-03-28 08:44:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:01:00 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:14:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:15:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 09:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:21:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 09:24:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 09:25:07 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-28 09:25:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:25:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:40:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-28 09:41:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-28 09:41:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-28 09:41:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-28 09:43:02 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:43:13 --> Could not find the language line "Other"
ERROR - 2025-03-28 09:44:08 --> Could not find the language line "Home"
ERROR - 2025-03-28 09:52:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-28 09:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 09:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:04:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 10:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:14:09 --> Could not find the language line "Home"
ERROR - 2025-03-28 10:27:23 --> Could not find the language line "Home"
ERROR - 2025-03-28 10:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:44:10 --> Could not find the language line "Home"
ERROR - 2025-03-28 10:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 10:57:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-28 10:58:34 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 11:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:14:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:15:23 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:15:32 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:15:37 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:15:56 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:16:12 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:16:17 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:11 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:47 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:19 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:23:11 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 11:24:30 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-03-28 11:24:30 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:27:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:28:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-28 11:29:45 --> Could not find the language line "hats"
ERROR - 2025-03-28 11:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:33:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-28 11:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:38:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:39:27 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:42:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:43:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:43:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:43:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:44:10 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:46:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:46:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:47:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 11:52:54 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:53:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 11:54:34 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:56:18 --> Could not find the language line "Home"
ERROR - 2025-03-28 11:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:03:05 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 12:03:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 12:05:21 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:05:31 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:06:01 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:06:29 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:07:24 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:33 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:10:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:10:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-28 12:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:14:10 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:19:41 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:19:45 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 12:20:14 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 12:22:56 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:24:36 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:25:42 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:27:46 --> Could not find the language line "hats"
ERROR - 2025-03-28 12:27:46 --> Could not find the language line "hats"
ERROR - 2025-03-28 12:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:33:51 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 12:37:29 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-28 12:40:26 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:40:28 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 12:40:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-28 12:42:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-28 12:44:10 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-28 12:46:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 12:46:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:51:43 --> Could not find the language line "Home"
ERROR - 2025-03-28 12:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:55:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 12:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 12:57:29 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 12:58:46 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 13:02:39 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 13:05:18 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:05:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-28 13:10:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:11:56 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:14:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:28:42 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:28:52 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:31:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 13:32:04 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 13:32:10 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 13:35:36 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 13:38:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 13:44:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 13:45:05 --> Could not find the language line "Home"
ERROR - 2025-03-28 14:00:35 --> Could not find the language line "Home"
ERROR - 2025-03-28 14:01:01 --> Could not find the language line "Clothing"
ERROR - 2025-03-28 14:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 14:02:02 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 14:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 14:04:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 14:13:13 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 14:14:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 14:27:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 14:32:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 14:33:25 --> Could not find the language line "Crocs"
ERROR - 2025-03-28 14:33:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 14:36:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-28 14:44:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 14:56:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 14:56:05 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 14:56:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:14:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 15:15:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 15:16:36 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 15:36:44 --> 404 Page Not Found: Metajson/index
ERROR - 2025-03-28 15:36:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:36:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:44:12 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:48:27 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:50:41 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:50:41 --> Could not find the language line "Home"
ERROR - 2025-03-28 15:50:46 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 16:14:12 --> Could not find the language line "Home"
ERROR - 2025-03-28 16:42:33 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-28 16:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:44:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 16:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:51:07 --> Could not find the language line "Home"
ERROR - 2025-03-28 16:51:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 16:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:51:48 --> Could not find the language line "Home"
ERROR - 2025-03-28 16:52:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 16:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:55:25 --> Could not find the language line "Home"
ERROR - 2025-03-28 16:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 16:59:24 --> Could not find the language line "Home"
ERROR - 2025-03-28 17:02:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-28 17:10:28 --> Could not find the language line "Home"
ERROR - 2025-03-28 17:14:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 17:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 17:44:13 --> Could not find the language line "Home"
ERROR - 2025-03-28 17:51:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 17:51:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 17:52:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 17:56:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 18:02:24 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-28 18:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 18:11:03 --> Could not find the language line "Home"
ERROR - 2025-03-28 18:11:04 --> Could not find the language line "Home"
ERROR - 2025-03-28 18:14:14 --> Could not find the language line "Home"
ERROR - 2025-03-28 18:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 18:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 18:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 18:27:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-28 18:31:18 --> Could not find the language line "Home"
ERROR - 2025-03-28 18:44:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 18:45:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 19:08:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 19:13:20 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:14:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:23:19 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 19:23:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:24:49 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:24:58 --> Could not find the language line "Sunglasses"
ERROR - 2025-03-28 19:25:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-28 19:27:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-28 19:29:44 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:31:25 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 19:34:24 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:34:45 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:44:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 19:51:28 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:11:48 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:12:25 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:14:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:16:24 --> Could not find the language line "products"
ERROR - 2025-03-28 20:22:25 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:40:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 20:44:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 20:45:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-03-28 21:14:16 --> Could not find the language line "Home"
ERROR - 2025-03-28 21:26:17 --> Could not find the language line "Home"
ERROR - 2025-03-28 21:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 21:31:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 21:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 21:44:15 --> Could not find the language line "Home"
ERROR - 2025-03-28 21:49:39 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 22:13:06 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 22:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 22:14:16 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:18:24 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:18:26 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:18:27 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:18:56 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 22:23:36 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:26:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-28 22:27:16 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 22:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 22:42:51 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:44:19 --> Could not find the language line "Home"
ERROR - 2025-03-28 22:53:11 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:06:06 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 23:07:39 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:13:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 23:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:13:44 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 23:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:13:54 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 23:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:14:04 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-03-28 23:14:19 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:21:56 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:27:16 --> Could not find the language line "Socks"
ERROR - 2025-03-28 23:39:03 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:44:19 --> Could not find the language line "Home"
ERROR - 2025-03-28 23:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-28 23:57:33 --> Could not find the language line "0"
