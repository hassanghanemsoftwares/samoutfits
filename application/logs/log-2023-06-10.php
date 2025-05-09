<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-10 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:06:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:15:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:16:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-10 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:32:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:32:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:41:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 00:46:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:02:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:08:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:14:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 01:17:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 01:18:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:41:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:48:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 01:50:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-10 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:03:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:08:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:24:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:35:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:35:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 02:40:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:15:52 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 03:16:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:32:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 03:32:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:34:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 03:47:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:14:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:20:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 04:21:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 04:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 04:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 04:23:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:23:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 04:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 04:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 04:24:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 04:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:34:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:35:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:36:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:48:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 04:58:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:04:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:05:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:06:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:09:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:10:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:10:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:12:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:13:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:22:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:25:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:26:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:26:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:26:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:32:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:36:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:36:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:39:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:53:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 05:53:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 05:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 05:58:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:59:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 05:59:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:01:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:02:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:05:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:05:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:06:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:06:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:15:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:17:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:19:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:21:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:23:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:26:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:27:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:29:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:32:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:38:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:38:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:38:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:44:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:46:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:47:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:50:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 06:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 06:51:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 06:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:01:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:02:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:03:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:03:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:04:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:06:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:09:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:10:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:10:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:11:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:14:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:19:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:19:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:22:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:22:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:27:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:28:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:28:52 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:30:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:31:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:31:58 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:32:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:35:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:36:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:37:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:40:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:41:17 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:41:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:41:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:42:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:42:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 07:42:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:43:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 07:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-10 07:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 07:59:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:03:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:04:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:05:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:08:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:09:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:12:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:14:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:15:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:18:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:20:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:20:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:21:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:23:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 08:24:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:26:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:27:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:28:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:28:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 08:31:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:34:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:34:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:37:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:40:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:44:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:45:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:49:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:52:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:54:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:56:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:57:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:57:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 08:59:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:00:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:02:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:05:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:05:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:09:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:09:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:12:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:13:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:14:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:14:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:14:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:16:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:19:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:19:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:19:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:21:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:23:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:24:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 09:26:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:30:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:30:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:30:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:31:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:31:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:31:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:33:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:38:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:42:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:43:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:44:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:47:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:48:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:49:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:52:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 09:53:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:55:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:59:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 09:59:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-10 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:00:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:01:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:02:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:05:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:08:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:08:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:09:58 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:11:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:12:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:14:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:14:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:15:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:16:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 10:19:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:20:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:22:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:26:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:26:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:28:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 10:28:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:31:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:35:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:36:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:37:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:40:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:40:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:42:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:42:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:46:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:47:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:48:58 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:51:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:54:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:55:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:56:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:56:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 10:59:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:02:52 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:03:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:04:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 11:05:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:07:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:10:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:10:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:14:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:15:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 11:16:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:17:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:18:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:20:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:26:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:26:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:26:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:28:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:30:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:33:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:38:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:40:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:40:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 11:40:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:41:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:41:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:42:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:42:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:43:08 --> 404 Page Not Found: Home/indexw
ERROR - 2023-06-10 11:43:11 --> 404 Page Not Found: Home/inde
ERROR - 2023-06-10 11:43:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:43:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:46:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:46:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:46:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:47:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:48:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:48:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:49:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:50:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:50:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:50:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:50:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:50:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 11:51:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:51:22 --> Could not find the language line "Socks"
ERROR - 2023-06-10 11:51:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:51:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-10 11:51:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-10 11:51:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:51:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 11:52:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 11:54:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:55:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:55:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:57:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:57:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:57:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:58:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:58:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 11:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 11:58:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 11:58:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 11:58:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 11:59:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:00:52 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:01:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:03:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:03:52 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 12:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 12:05:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:06:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:06:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-10 12:06:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 12:07:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:09:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:12:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:13:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:13:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:15:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:17:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:17:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:19:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:19:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:21:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:22:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:22:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:22:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 12:23:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:29:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:32:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:33:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:34:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:34:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:35:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:43:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:43:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:43:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:43:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:44:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:51:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:52:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:53:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:53:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 12:54:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:55:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:55:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 12:55:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:55:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:55:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:55:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 12:55:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 12:57:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:57:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:58:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:59:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 12:59:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:01:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:02:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:03:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:06:58 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:07:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:08:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:08:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:09:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:11:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:18:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:19:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 13:23:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:25:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 13:27:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:34:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:35:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:38:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 13:39:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:42:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 13:42:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:42:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:43:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:43:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:44:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 13:44:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:44:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:44:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 13:45:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:46:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:53:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:55:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:57:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 13:58:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:04:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:07:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:17:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:33:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:39:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:40:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:41:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:41:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:44:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 14:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 14:52:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:53:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 14:53:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:53:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:53:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:57:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 14:58:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 14:59:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:01:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:01:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:02:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:03:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:04:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:05:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:07:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:09:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:09:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:09:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:10:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:14:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:23:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:24:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:24:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:24:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:27:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:28:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:34:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:41:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:47:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:49:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:49:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:51:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:51:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:53:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:53:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:57:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:58:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:59:17 --> Could not find the language line "Home"
ERROR - 2023-06-10 15:59:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:05:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:08:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:08:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:09:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:11:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:12:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:19:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:20:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 16:21:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:23:17 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:25:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:26:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:27:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:28:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:28:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:32:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:33:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:35:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 16:35:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:35:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:37:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:37:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:38:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:39:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:40:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:42:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:42:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:43:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:43:08 --> Could not find the language line "Socks"
ERROR - 2023-06-10 16:43:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:43:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:44:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:44:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:45:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:47:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:47:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:48:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:48:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 16:49:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:49:20 --> Could not find the language line "Bracelets"
ERROR - 2023-06-10 16:49:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:49:39 --> Could not find the language line "Socks"
ERROR - 2023-06-10 16:50:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:50:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:51:17 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:51:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:55:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:56:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:56:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:56:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:56:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:57:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:58:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 16:58:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:58:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 16:59:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-10 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:00:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:04:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:05:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:05:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:06:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:10:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:10:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:15:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:15:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:16:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:18:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:18:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:23:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:25:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:28:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:29:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:30:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:30:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:32:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:34:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:34:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:34:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:36:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:36:40 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:38:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:41:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:42:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:44:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:44:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:45:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:45:17 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:46:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:46:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:46:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:48:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:48:34 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:48:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:49:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:50:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:50:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:50:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 17:50:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:51:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:52:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:52:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:52:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:53:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:53:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:53:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:54:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 17:54:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:54:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:54:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 17:54:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:01:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:02:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:03:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:05:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:07:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:11:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:12:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:13:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:15:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:22:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:22:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:23:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:23:58 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:26:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:28:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:28:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:31:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:32:53 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:34:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:34:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:36:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:37:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:38:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:39:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:40:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:40:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:43:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:45:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:45:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:47:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:47:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:48:33 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-06-10 18:50:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:51:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:53:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:57:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 18:58:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:00:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:00:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:00:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:04:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:05:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:05:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:06:56 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:07:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:08:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 19:08:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:09:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:09:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:10:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:12:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:14:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:17:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:18:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 19:22:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:26:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:27:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:27:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:27:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:34:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:34:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:38:44 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:39:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:45:54 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:47:27 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:47:35 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:47:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:49:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:53:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:53:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:55:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:56:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 19:57:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-10 19:57:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:00:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:01:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:02:07 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:04:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:05:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:06:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:06:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:07:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:08:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:09:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:11:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:11:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:12:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:13:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:14:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:15:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:15:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:17:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:18:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:19:39 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:19:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:22:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:26:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:30:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:34:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:35:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:36:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:38:43 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:39:21 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:43:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:44:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:46:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:47:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:47:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 20:47:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 20:48:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 20:48:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 20:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 20:49:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 20:49:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 20:50:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-10 20:50:33 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:51:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:52:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:53:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:54:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:54:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:57:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 20:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 20:59:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:02:26 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:03:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:03:30 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:03:37 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:06:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:08:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:08:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:09:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:10:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:12:41 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:13:06 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:20:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:21:19 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:23:29 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:24:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:27:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 21:29:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:31:31 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:38:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:38:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:38:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-10 21:40:51 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:43:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:43:02 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:43:46 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:46:04 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:46:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 21:49:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:55:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 21:56:36 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:00:38 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:02:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:04:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:05:03 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:13:32 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:19:50 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:25:18 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 22:25:45 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:25:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-10 22:26:00 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:26:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:26:50 --> Could not find the language line "Bracelets"
ERROR - 2023-06-10 22:27:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-10 22:27:25 --> Could not find the language line "Bracelets"
ERROR - 2023-06-10 22:27:28 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:27:35 --> Could not find the language line "Perfume"
ERROR - 2023-06-10 22:27:42 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 22:28:08 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:28:14 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:28:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-10 22:28:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-10 22:28:24 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:30:15 --> Could not find the language line "Socks"
ERROR - 2023-06-10 22:30:20 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:30:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-10 22:30:49 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:32:22 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:36:16 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:37:47 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:37:48 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:50:09 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:51:01 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:53:55 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:53:59 --> Could not find the language line "Home"
ERROR - 2023-06-10 22:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-10 22:56:10 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:05:25 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:15:05 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:19:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-10 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:37:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-10 23:38:23 --> Could not find the language line "Home"
ERROR - 2023-06-10 23:42:10 --> 404 Page Not Found: Assets/css
