<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-16 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:09:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:13:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:18:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:26:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:28:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:36:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:37:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:37:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 00:42:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 00:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 00:51:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 00:58:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:03:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:04:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:08:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:17:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-16 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:33:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:35:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 01:54:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:00:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:07:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:26:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:42:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 02:55:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:02:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:04:31 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:15:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:15:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:20:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:21:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 03:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:37:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 03:37:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:46:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:48:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:48:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:57:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 03:58:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:07:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:08:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:10:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:13:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:13:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:17:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:20:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:21:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 04:21:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:23:02 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 04:23:04 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 04:23:05 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 04:23:05 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 04:25:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:30:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:31:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-16 04:32:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:33:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:33:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:33:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:39:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:40:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 04:40:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 04:40:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 04:46:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:46:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:47:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:47:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:48:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 04:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:48:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 04:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:48:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:48:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 04:49:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:49:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:49:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:50:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:52:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:52:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:53:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:53:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 04:56:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 04:59:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:04:31 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:05:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:06:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:14:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:18:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 05:20:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:26:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:29:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 05:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:31:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:35:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:36:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:36:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:37:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 05:37:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:37:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:44:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:45:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:46:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:47:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:48:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:49:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:50:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:50:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:52:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:53:20 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-06-16 05:54:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 05:59:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:02:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:04:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:07:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:08:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:08:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:08:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:13:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:15:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:15:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:21:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:22:02 --> 404 Page Not Found: Shoes/c104-shoes
ERROR - 2023-06-16 06:24:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:24:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:24:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 06:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 06:24:29 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 06:24:30 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 06:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:27:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:32:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:33:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:33:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:34:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:36:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:37:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:38:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:38:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:39:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:40:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:44:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 06:45:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:49:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:51:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:51:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:54:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:56:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 06:58:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:03:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:04:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:07:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:12:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:12:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:12:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:12:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:16:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:17:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:18:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:18:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:18:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:19:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:21:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:23:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:23:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:24:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:24:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:25:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:25:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:26:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:26:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:26:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:26:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:27:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:27:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:28:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:28:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:28:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:29:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:29:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:29:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:29:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 07:30:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 07:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:30:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 07:30:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:30:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:32:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:33:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:34:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:34:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:34:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:34:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:35:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:36:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:37:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:37:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:53:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:53:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 07:55:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:55:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:57:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 07:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 07:58:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:02:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:04:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:06:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:11:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:11:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:12:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:15:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:26:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:27:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:29:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:31:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:31:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:31:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 08:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:32:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:33:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:37:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:42:19 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 08:42:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 08:42:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 08:42:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 08:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:43:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:46:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:46:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 08:46:18 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 08:46:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 08:46:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 08:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 08:50:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:52:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:55:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:56:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:56:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:56:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:56:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:56:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 08:56:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 08:56:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 08:56:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 08:58:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:58:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:59:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:59:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 08:59:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:00:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:03:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:04:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 09:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 09:06:31 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:06:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:06:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:06:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:09:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:12:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:13:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:14:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:15:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:16:37 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:19:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:20:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:21:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:22:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:22:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:25:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:27:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:27:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:28:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:29:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:29:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:30:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:38:37 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:39:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 09:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 09:39:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:43:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:44:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:48:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:49:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:56:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 09:57:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 09:58:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:03:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:05:37 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:07:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:11:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:11:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:12:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:16:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:17:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:17:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 10:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 10:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:21:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:21:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:23:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 10:23:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 10:26:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:28:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:32:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:32:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:33:30 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 10:33:30 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 10:33:31 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 10:33:31 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 10:36:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:38:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:39:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:41:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:44:32 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 10:44:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 10:44:33 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 10:44:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 10:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:45:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:46:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 10:48:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:49:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:50:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:51:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:53:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:53:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:55:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:56:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:58:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:58:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 10:58:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:00:46 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-06-16 11:04:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:04:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:05:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:06:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:07:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:09:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:09:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:14:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:15:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:16:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:17:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:18:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 11:18:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:20:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 11:20:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:26:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:26:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:27:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:27:37 --> 404 Page Not Found: Assets/img
ERROR - 2023-06-16 11:27:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-06-16 11:27:40 --> 404 Page Not Found: Assets/lib
ERROR - 2023-06-16 11:27:42 --> 404 Page Not Found: Assets/mail
ERROR - 2023-06-16 11:27:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:27:43 --> 404 Page Not Found: Assets/js
ERROR - 2023-06-16 11:29:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:30:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:30:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:31:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:31:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:31:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:31:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:32:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 11:32:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:32:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 11:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:33:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:33:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 11:33:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:33:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 11:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:33:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-16 11:34:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:35:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:37:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:37:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:37:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:38:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-16 11:38:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-16 11:38:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:38:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:38:11 --> Could not find the language line "Perfume"
ERROR - 2023-06-16 11:38:11 --> Could not find the language line "Perfume"
ERROR - 2023-06-16 11:38:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:38:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:38:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:39:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:39:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:39:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:39:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:40:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:40:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:40:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:41:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:41:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:42:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:42:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:42:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:42:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:42:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-16 11:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:43:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 11:44:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:44:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:44:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-16 11:44:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-16 11:45:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:45:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:47:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:51:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:51:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:53:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:54:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:55:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:56:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 11:57:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:01:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 12:08:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:09:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:10:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:11:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:14:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:14:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:16:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:22:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:24:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:25:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 12:27:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:27:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 12:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:31:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 12:34:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:35:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:35:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:36:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:37:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:37:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:41:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:44:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:44:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:47:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:49:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:51:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:53:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:57:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:57:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 12:58:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:00:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:00:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:00:42 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 13:00:43 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 13:00:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 13:00:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 13:03:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 13:05:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:05:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:10:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:10:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:10:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:10:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:10:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:15:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:16:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:17:04 --> Could not find the language line "Perfume"
ERROR - 2023-06-16 13:19:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:25:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:26:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:26:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:27:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:28:37 --> Could not find the language line "Crocs"
ERROR - 2023-06-16 13:28:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:29:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:30:44 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:30:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:31:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-16 13:32:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-16 13:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-16 13:39:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:40:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:40:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:41:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:42:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:44:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:46:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:47:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 13:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 13:54:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:05:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:05:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:06:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:07:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:08:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:13:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:13:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:14:08 --> Could not find the language line "products"
ERROR - 2023-06-16 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:15:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:15:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:17:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:17:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:17:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:17:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:18:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:18:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 14:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 14:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:19:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:21:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:22:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 14:28:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:29:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:33:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:37:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 14:44:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:44:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:46:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:46:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 14:46:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:49:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:49:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:49:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:49:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:49:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:51:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:52:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:52:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:55:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:56:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:56:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 14:59:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:00:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:01:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:05:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:07:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:12:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:22:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:22:16 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-16 15:22:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:22:16 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-16 15:22:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-16 15:22:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-16 15:22:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:22:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:22:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:22:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:23:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 15:24:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:29:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:30:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:30:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 15:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 15:32:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:32:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 15:32:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:32:42 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:39:37 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:39:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:41:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:42:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:43:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 15:48:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:48:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:48:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:59:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:59:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 15:59:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:01:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:03:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 16:04:42 --> Could not find the language line "Bracelets"
ERROR - 2023-06-16 16:06:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:10:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:14:36 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:15:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-16 16:15:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:17:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:17:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:19:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:19:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:24:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:25:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:26:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:27:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 16:28:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:31:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:31:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:34:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:34:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:36:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:36:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:38:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:40:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:41:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:44:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:44:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 16:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 16:47:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:49:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:50:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:50:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:50:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:55:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 16:59:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:00:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:00:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:01:37 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:01:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:02:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 17:02:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 17:02:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 17:02:09 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-16 17:02:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:03:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:07:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:08:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:09:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:10:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:10:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:13:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:15:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:16:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:19:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:20:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:25:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:25:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:28:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:30:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:33:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:34:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:34:09 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:35:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:35:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 17:35:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 17:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 17:36:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 17:40:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 17:42:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:42:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:43:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:45:48 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:45:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:47:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:47:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:48:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:50:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:52:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 17:56:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:00:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:01:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:03:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:03:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 18:05:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:06:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:07:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:07:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:09:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:10:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:14:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:15:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:15:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:15:09 --> 404 Page Not Found: Assets/img
ERROR - 2023-06-16 18:15:11 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-06-16 18:15:12 --> 404 Page Not Found: Assets/lib
ERROR - 2023-06-16 18:15:12 --> 404 Page Not Found: Assets/img
ERROR - 2023-06-16 18:15:13 --> 404 Page Not Found: Assets/mail
ERROR - 2023-06-16 18:15:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2023-06-16 18:15:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:18:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:19:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:19:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:21:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:22:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:23:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:28:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:29:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:30:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:34:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:34:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:34:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-16 18:37:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:39:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:41:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:42:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:45:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:47:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:49:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:50:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:51:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:51:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:51:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:53:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:56:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:58:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 18:58:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:00:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:03:40 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:03:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:05:54 --> Could not find the language line "products"
ERROR - 2023-06-16 19:06:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:07:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:08:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:12:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:12:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:13:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 19:13:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:15:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:16:35 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:19:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:22:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:26:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:27:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:27:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:28:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 19:30:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:31:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:32:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:33:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:35:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:40:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:40:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:41:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:44:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:44:46 --> Could not find the language line "Bracelets"
ERROR - 2023-06-16 19:44:59 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:45:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:45:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-16 19:45:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-16 19:45:26 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 19:52:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:52:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:53:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-16 19:55:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 19:55:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:01:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:02:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:04:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:07:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 20:07:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 20:11:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:17:52 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:19:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:24:02 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:25:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:28:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:29:38 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:31:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:31:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:33:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:33:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:34:18 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:36:31 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:38:06 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:38:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:39:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:44:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:45:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:46:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:46:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:49:24 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:49:25 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:53:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:54:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:56:34 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:58:07 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:58:32 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:59:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 20:59:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:01:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:01:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:01:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:03:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:04:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:04:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:04:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:06:22 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:10:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:11:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:13:01 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:15:17 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:17:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:17:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:17:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:22:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:25:23 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:26:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:26:39 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:32:30 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:32:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:33:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:36:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:42:54 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:43:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:44:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 21:45:00 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:46:05 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:46:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:46:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:49:09 --> Could not find the language line "hats"
ERROR - 2023-06-16 21:49:09 --> Could not find the language line "hats"
ERROR - 2023-06-16 21:57:50 --> Could not find the language line "Home"
ERROR - 2023-06-16 21:58:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:06:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:10:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:11:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:16:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:16:55 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:18:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:22:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:24:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:24:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:25:57 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:26:13 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:26:16 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:27:08 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:27:29 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:27:53 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:33:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-16 22:40:19 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:50:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 22:50:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:00:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:03:21 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:04:43 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:04:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 23:06:03 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-16 23:06:28 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:06:49 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:06:58 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:08:20 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:08:51 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:11:56 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:13:46 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:15:33 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-16 23:21:45 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:24:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:28:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:34:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:38:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:38:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:38:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:38:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-16 23:40:47 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:44:04 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:46:11 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:48:41 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:49:27 --> Could not find the language line "Home"
ERROR - 2023-06-16 23:57:56 --> Could not find the language line "Home"
