<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-08 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:02:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 00:18:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:29:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:42:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:47:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:52:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 00:54:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:15:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:37:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:50:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:50:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 01:55:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:00:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:13:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:24:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:27:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:27:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:34:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 02:48:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:01:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:10:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:22:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:25:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:28:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:30:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:30:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:30:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:37:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:39:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:43:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:47:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:49:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 03:50:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:00:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:00:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:04:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:06:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:13:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-08 04:20:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:21:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:22:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:27:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:28:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:31:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:37:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 04:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 04:38:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 04:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 04:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 04:41:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-08 04:42:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:44:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:45:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:48:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:48:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:49:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:49:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:51:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:53:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:58:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 04:59:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:00:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:00:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:01:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:02:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:02:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:05:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:07:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:08:05 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-08 05:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:10:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:14:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:15:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:18:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:18:34 --> 404 Page Not Found: Env/index
ERROR - 2023-06-08 05:18:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:18:45 --> 404 Page Not Found: Core/.env
ERROR - 2023-06-08 05:18:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:18:58 --> 404 Page Not Found: App/.env
ERROR - 2023-06-08 05:19:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:19:11 --> 404 Page Not Found: Public/.env
ERROR - 2023-06-08 05:19:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:21:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:24:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:29:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 05:29:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:34:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:36:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:39:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:39:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:43:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:45:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:47:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:53:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:53:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:54:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:54:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:57:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 05:57:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:57:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 05:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 05:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:03:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:04:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:05:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:06:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:06:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:06:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:07:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:08:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:08:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:08:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:08:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:08:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:09:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:10:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:11:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:12:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:13:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:13:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 06:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:14:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:15:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 06:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:17:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:17:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:18:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:18:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:20:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:20:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:21:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:21:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:24:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:27:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:33:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:35:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:38:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:38:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:39:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:40:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:41:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:43:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:44:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:44:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:45:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 06:45:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 06:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:46:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 06:47:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:47:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-08 06:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 06:50:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:51:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:53:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:53:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:54:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:55:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:55:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:56:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:57:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:58:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 06:59:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:02:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:04:14 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:04:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:04:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:04:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:08:47 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:09:03 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:09:37 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:10:09 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:10:33 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:10:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:10:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:12:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:12:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:12:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:12:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:13:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:13:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:14:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:14:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:14:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:14:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:16:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:16:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:17:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:18:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:19:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:19:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:20:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:22:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-08 07:23:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:23:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:23:49 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:24:31 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:24:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:24:49 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 07:25:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:27:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:28:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:30:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:30:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:32:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:33:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:34:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:34:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:35:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:36:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:37:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:37:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:37:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:40:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:40:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:40:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:42:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:45:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:47:01 --> Could not find the language line "Disclaimer"
ERROR - 2023-06-08 07:47:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:47:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:48:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:49:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:50:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:51:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-08 07:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:57:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:57:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 07:58:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:59:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 07:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 07:59:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:00:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:04:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:05:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:05:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:06:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:06:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:07:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:07:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:08:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:09:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:12:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:12:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:12:39 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-06-08 08:12:42 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-06-08 08:12:44 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-06-08 08:13:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:14:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:14:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:16:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:18:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:19:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:20:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:20:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:22:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:24:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:25:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:27:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:28:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:31:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:32:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:32:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:33:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:33:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:34:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:34:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:34:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:35:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:36:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 08:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 08:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:41:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:41:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:42:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:42:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:43:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:44:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:44:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:45:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:46:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:47:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:48:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:49:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:50:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:50:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:50:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:52:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:54:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:55:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:56:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:56:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 08:58:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 08:59:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:00:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:03:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:03:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:04:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:04:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:04:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:05:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-08 09:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-08 09:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:05:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:06:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:08:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-08 09:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:09:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:10:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:10:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:11:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:11:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:13:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:14:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:14:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:14:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:15:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:15:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:15:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:16:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:18:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:18:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:19:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:19:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:20:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:20:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 09:22:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:22:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-08 09:22:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-08 09:22:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:23:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:23:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:26:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:27:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:31:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:31:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:31:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:31:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:32:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:34:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:36:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:38:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:40:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:40:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:42:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:45:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:47:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:47:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:49:34 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 09:50:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 09:53:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:53:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 09:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:54:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:54:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 09:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:54:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 09:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:54:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 09:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 09:56:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:56:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 09:59:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:01:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:04:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:04:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:05:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:06:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:06:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:07:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:08:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:09:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:09:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:10:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:11:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:11:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:13:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:14:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:16:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:16:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:16:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:16:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:22:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:25:34 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-06-08 10:26:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:26:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:27:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:27:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:28:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:28:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:29:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:29:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:32:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:32:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:33:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:33:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:34:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:36:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:40:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:41:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:43:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:43:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:46:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:51:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:51:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 10:54:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 10:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:54:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:55:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 10:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 10:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:00:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:00:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:01:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:01:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:02:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:03:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:03:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:03:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:03:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:05:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:05:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:05:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:06:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:07:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:09:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:11:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:16:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:17:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:23:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:24:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:27:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:29:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:29:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:29:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:30:20 --> 404 Page Not Found: Assets/uploadify
ERROR - 2023-06-08 11:31:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:32:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:33:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:34:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:34:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:35:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:35:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:37:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:38:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:41:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:42:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 11:42:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 11:48:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:50:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-08 11:51:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:51:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:53:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:53:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:53:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:58:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:58:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 11:59:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:01:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:01:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:02:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:02:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:02:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:03:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:04:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:05:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:06:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:06:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:06:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:07:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:07:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:09:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:09:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:09:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:09:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-08 12:10:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:13:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:14:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:14:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:15:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:16:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:16:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:16:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:16:30 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-08 12:16:30 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-08 12:16:30 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-08 12:16:31 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-08 12:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:17:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:17:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:17:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:18:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:18:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:20:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:20:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:21:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:22:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:22:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:23:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:24:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:24:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:24:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 12:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:25:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:26:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:26:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:27:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:29:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:30:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:30:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:31:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:32:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:34:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:35:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:35:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:36:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:37:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:38:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:39:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:41:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:42:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:46:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:46:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:48:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:49:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:49:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:49:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:49:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:49:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 12:52:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:53:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:53:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:55:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:56:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:56:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:59:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 12:59:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:00:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:01:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:01:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:06:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:07:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:13:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:17:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:17:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:21:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:26:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:27:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:28:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:29:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-08 13:29:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:29:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:29:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:30:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:32:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:33:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:33:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:34:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:34:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:34:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:34:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:34:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:35:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:36:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:36:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:37:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:38:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:38:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:40:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:41:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:41:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:41:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:41:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:41:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:41:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:42:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:42:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 13:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:43:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:43:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:45:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:47:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 13:48:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:50:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:50:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:55:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:55:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:57:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 13:58:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:01:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:01:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:02:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:04:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:05:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:06:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:08:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:08:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:10:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:11:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:12:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:13:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:15:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:17:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:17:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:18:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:19:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:20:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:21:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:23:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:23:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:27:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:27:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:29:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:31:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:31:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:35:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:38:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:42:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 14:42:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:42:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:45:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:45:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:46:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:47:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:48:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:49:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 14:50:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:50:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:52:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:54:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:54:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:57:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 14:59:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:01:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:03:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:03:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:08:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:08:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-08 15:08:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:09:31 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-08 15:09:33 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-08 15:09:35 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-08 15:09:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:12:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:13:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:14:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:17:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:18:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:19:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:19:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:21:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:22:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 15:27:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:29:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:31:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:32:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:34:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:37:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:40:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:40:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:41:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:45:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:46:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:46:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:47:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:47:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-08 15:48:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:51:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-08 15:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:51:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:57:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 15:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 15:59:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:01:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:03:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:03:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:03:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:04:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:06:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:07:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 16:13:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:14:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:15:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:16:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:23:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:23:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:25:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:31:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:31:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:32:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:33:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:34:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 16:34:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:35:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:38:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:40:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:40:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:41:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 16:41:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:43:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:44:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:44:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:49:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:49:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:50:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:52:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:53:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:53:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:54:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:55:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:55:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:56:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 16:57:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:00:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-08 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:00:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:01:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:02:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:03:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:04:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:04:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:05:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:05:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:06:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:07:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:07:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:10:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:10:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:11:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:12:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:13:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:14:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:15:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:16:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:21:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:23:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:23:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-08 17:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:28:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:29:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:31:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:32:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:33:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:34:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:35:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:35:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:35:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:36:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:37:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:39:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:40:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:41:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:43:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:44:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:45:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:46:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 17:46:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:47:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:50:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:51:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:51:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:55:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:55:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:57:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:58:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:59:29 --> 404 Page Not Found: Env/index
ERROR - 2023-06-08 17:59:31 --> 404 Page Not Found: Dev/.env
ERROR - 2023-06-08 17:59:32 --> 404 Page Not Found: Laravel/.env
ERROR - 2023-06-08 17:59:33 --> 404 Page Not Found: Core/.env
ERROR - 2023-06-08 17:59:34 --> 404 Page Not Found: Shop/.env
ERROR - 2023-06-08 17:59:35 --> 404 Page Not Found: Project/.env
ERROR - 2023-06-08 17:59:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 17:59:36 --> 404 Page Not Found: Blog/.env
ERROR - 2023-06-08 17:59:38 --> 404 Page Not Found: Test/.env
ERROR - 2023-06-08 17:59:39 --> 404 Page Not Found: Admin/.env
ERROR - 2023-06-08 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:02:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:04:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:04:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:05:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:08:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:08:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:08:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:10:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:12:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:12:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:14:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 18:15:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:17:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:17:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:20:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:21:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:23:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:25:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:27:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:27:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:27:54 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:29:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:29:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:31:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:31:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:32:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:32:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:32:13 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-06-08 18:32:13 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-08 18:32:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:32:15 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-08 18:32:15 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-08 18:32:15 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-08 18:32:15 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-06-08 18:32:16 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-08 18:32:16 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-06-08 18:32:16 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-06-08 18:32:16 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-08 18:32:17 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-08 18:32:17 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-08 18:32:17 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-08 18:32:17 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-06-08 18:32:17 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-08 18:32:18 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-08 18:32:18 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-06-08 18:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:33:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-08 18:33:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-08 18:33:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:33:21 --> Could not find the language line "Bracelets"
ERROR - 2023-06-08 18:33:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:35:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:35:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:35:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:37:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:37:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:38:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:40:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:40:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:41:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:42:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:43:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:45:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:45:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:47:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:47:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:49:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:49:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:50:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:51:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:51:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:54:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:54:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:55:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:55:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 18:56:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:56:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:57:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:58:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 18:59:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:00:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:00:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:01:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:01:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:02:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:02:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:03:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:04:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:05:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:05:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:05:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:06:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:09:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:09:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:09:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:09:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:10:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:11:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:11:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:12:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:13:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:14:46 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:14:58 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:15:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:15:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:16:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:17:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:17:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:18:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:20:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:21:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:21:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:23:28 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:24:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:26:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:26:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:26:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:28:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:29:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:29:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:29:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:30:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:31:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:31:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:32:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:32:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:34:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:35:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:35:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:36:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:36:30 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:38:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:38:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:39:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:39:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:40:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:41:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:41:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:41:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:41:53 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-06-08 19:41:54 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-08 19:41:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:41:57 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-08 19:41:57 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-08 19:41:57 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-08 19:41:58 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-06-08 19:41:58 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-08 19:41:58 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-06-08 19:41:59 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-06-08 19:41:59 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-08 19:41:59 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-08 19:42:00 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-08 19:42:00 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-08 19:42:00 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-06-08 19:42:00 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-08 19:42:00 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-08 19:42:01 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-06-08 19:42:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:42:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:42:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:42:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:43:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:43:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:43:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:43:22 --> Could not find the language line "Other"
ERROR - 2023-06-08 19:43:40 --> Could not find the language line "Other"
ERROR - 2023-06-08 19:43:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:44:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-08 19:44:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:44:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:45:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:46:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:47:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:47:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:48:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:48:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:48:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:49:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:51:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-08 19:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:51:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:52:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:53:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:54:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:54:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:55:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:55:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:56:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 19:57:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:57:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:58:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:59:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 19:59:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:00:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:01:21 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:01:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:02:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:03:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:04:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:05:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:07:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:07:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:10:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:10:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:12:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:13:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:15:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:16:37 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:18:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:18:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:19:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:19:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:19:18 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:19:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:21:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:21:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:23:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:24:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:24:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:27:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:27:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:27:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:28:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:29:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:30:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:30:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:30:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:31:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:32:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:33:38 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:34:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:35:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:35:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:35:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 20:36:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:40:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:41:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:42:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:43:26 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:43:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:44:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:44:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:46:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:50:09 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:50:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:54:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:54:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:59:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:59:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 20:59:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:01:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:01:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:02:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:03:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:04:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:07:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:08:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:08:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:09:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-08 21:10:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:10:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:11:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:12:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:13:47 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:13:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:14:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:17:07 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:17:43 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:18:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:19:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:19:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:21:51 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:22:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:22:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:22:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:22:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-08 21:22:27 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 21:23:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:25:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:26:32 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:26:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:27:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:28:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:28:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:30:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:34:31 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:34:42 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:35:33 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:37:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:40:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:41:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:47:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:49:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:51:25 --> Could not find the language line "Home"
ERROR - 2023-06-08 21:58:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:00:41 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:00:55 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:04:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:04:08 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:04:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:05:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:05:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:06:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:07:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:10:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:10:36 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:13:34 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:14:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:14:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:14:19 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:14:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-08 22:16:24 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:17:03 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:17:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:18:20 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:18:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:18:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:19:23 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:20:01 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:22:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:22:50 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:23:59 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:24:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:24:22 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:26:10 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:26:40 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:28:02 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:30:00 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:35:15 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:36:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:37:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:38:11 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:38:56 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:46:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:49:04 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:52:29 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:55:06 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:57:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-08 22:57:44 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:57:45 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:59:48 --> Could not find the language line "Home"
ERROR - 2023-06-08 22:59:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:09:57 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:17:49 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:24:52 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:24:53 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:27:13 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:29:39 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:35:17 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:55:35 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:58:05 --> Could not find the language line "Home"
ERROR - 2023-06-08 23:58:33 --> 404 Page Not Found: Robotstxt/index
