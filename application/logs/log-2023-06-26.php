<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-26 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 00:36:14 --> 404 Page Not Found: Products/products
ERROR - 2023-06-26 00:45:43 --> Could not find the language line "products"
ERROR - 2023-06-26 00:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-26 00:55:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:11:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:13:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 01:20:42 --> Could not find the language line "products"
ERROR - 2023-06-26 01:30:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:32:21 --> 404 Page Not Found: Products/products
ERROR - 2023-06-26 01:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 01:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 01:42:28 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:42:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 01:45:57 --> 404 Page Not Found: Products/products
ERROR - 2023-06-26 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:05:05 --> Could not find the language line "products"
ERROR - 2023-06-26 02:10:22 --> Could not find the language line "products"
ERROR - 2023-06-26 02:13:53 --> Could not find the language line "products"
ERROR - 2023-06-26 02:17:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:17:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 02:24:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:26:10 --> Could not find the language line "products"
ERROR - 2023-06-26 02:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:37:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 02:38:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 02:40:39 --> Could not find the language line "products"
ERROR - 2023-06-26 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-06-26 03:15:36 --> 404 Page Not Found: Products/products
ERROR - 2023-06-26 03:19:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:30:19 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:32:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:32:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:33:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:33:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:33:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:50:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:50:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:54:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 03:55:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:03:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:07:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 04:09:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:11:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:14:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:20:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 04:20:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:21:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:23:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:25:40 --> Could not find the language line "Disclaimer"
ERROR - 2023-06-26 04:27:21 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:30:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:34:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 04:51:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:07:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 05:14:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:18:24 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:20:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:20:47 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:25:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:39:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 05:47:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:05:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:06:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:06:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:07:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:07:35 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:08:33 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:09:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:09:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:12:37 --> Could not find the language line "Other"
ERROR - 2023-06-26 06:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:18:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:20:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:20:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:22:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:22:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 06:23:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:25:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 06:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:27:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:27:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:27:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:27:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:27:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:28:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:32:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:34:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:35:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:35:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:35:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:37:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:41:02 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:41:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:44:43 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:44:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:45:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:46:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:47:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:48:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:48:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:50:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:52:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:54:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:56:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 06:58:21 --> Could not find the language line "Home"
ERROR - 2023-06-26 06:59:10 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:00:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:02:30 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:02:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:06:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:07:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 07:08:34 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:09:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:15:43 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:16:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:17:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:17:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:18:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:18:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:19:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 07:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:25:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:28:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:30:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:30:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:30:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:37:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:39:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:39:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:40:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:40:24 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:41:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:41:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:41:31 --> Could not find the language line "products"
ERROR - 2023-06-26 07:42:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:42:24 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:43:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:44:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:45:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 07:45:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:45:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 07:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:46:47 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:47:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 07:48:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:48:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:49:49 --> Could not find the language line "Socks"
ERROR - 2023-06-26 07:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:51:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 07:51:48 --> Could not find the language line "products"
ERROR - 2023-06-26 07:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 07:55:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:01:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:02:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:05:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:06:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:06:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:06:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:06:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:06:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:08:03 --> Could not find the language line "products"
ERROR - 2023-06-26 08:09:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:10:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:11:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:13:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:14:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:17:25 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:17:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:18:43 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:26:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:34:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:35:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:35:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:37:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:38:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:38:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:38:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:38:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:38:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:38:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:38:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:39:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:39:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-26 08:39:50 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 08:39:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:40:22 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 08:40:42 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 08:40:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:42:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:43:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:44:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:44:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:45:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:46:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:46:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:46:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:46:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:46:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:46:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:47:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:47:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:47:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:47:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:47:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:48:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:48:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:48:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:48:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:48:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:48:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:49:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:50:33 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:51:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 08:51:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:53:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:53:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:53:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:54:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:54:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:54:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:54:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:54:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:54:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:55:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:55:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:55:59 --> Could not find the language line "Perfume"
ERROR - 2023-06-26 08:56:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:56:08 --> Could not find the language line "Socks"
ERROR - 2023-06-26 08:56:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 08:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:57:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:58:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:58:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 08:58:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 08:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 08:59:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:00:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:01:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:02:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:02:10 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:07:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:12:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:12:43 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:13:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:17:49 --> 404 Page Not Found: Public/assets
ERROR - 2023-06-26 09:18:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:18:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:18:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:18:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:18:48 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:19:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:22:35 --> Could not find the language line "products"
ERROR - 2023-06-26 09:26:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:31:00 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:31:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:33:25 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-26 09:36:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:42:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:44:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:47:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:48:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:49:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:50:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 09:50:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:50:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:51:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:51:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:52:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:52:19 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:52:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 09:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 09:55:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:56:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:56:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 09:58:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:01:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:01:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:02:00 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:07:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:07:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:10:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:10:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:12:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:13:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:14:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 10:14:01 --> Could not find the language line "products"
ERROR - 2023-06-26 10:17:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:21:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:29:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:31:21 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:38:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:38:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 10:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:39:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 10:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 10:41:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:41:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 10:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:43:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 10:43:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 10:43:28 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 10:43:57 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 10:44:17 --> Could not find the language line "Perfume"
ERROR - 2023-06-26 10:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:44:34 --> Could not find the language line "Perfume"
ERROR - 2023-06-26 10:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 10:46:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:49:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 10:49:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:52:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:53:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 10:57:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:02:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:02:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:05:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:12:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:16:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:17:22 --> Could not find the language line "products"
ERROR - 2023-06-26 11:17:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:18:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:25:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:26:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:27:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:28:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 11:28:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 11:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 11:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 11:33:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:35:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:35:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:37:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:52:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:56:10 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:57:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:58:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 11:59:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:01:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:01:10 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:03:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:03:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:03:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:03:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:04:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:05:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:06:19 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:06:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:06:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:06:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:07:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:08:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:10:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:15:19 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:15:25 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:16:34 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:18:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:20:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:23:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:24:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:25:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:26:37 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:27:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:28:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:28:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:28:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:32:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:32:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:33:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:33:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:34:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:34:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:34:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 12:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:35:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:35:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 12:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:38:35 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:39:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:41:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:41:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:42:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:43:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:47:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:47:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:48:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:49:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:51:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:51:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 12:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:51:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 12:55:34 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:55:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:57:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 12:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 13:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:15:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:15:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:18:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:21:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:21:18 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:21:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 13:21:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 13:22:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 13:22:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 13:23:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:23:22 --> Could not find the language line "Socks"
ERROR - 2023-06-26 13:23:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:23:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:25:00 --> Could not find the language line "products"
ERROR - 2023-06-26 13:25:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:33:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:40:25 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:43:33 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:51:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:51:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:51:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:51:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:55:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:55:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 13:56:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:41 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:56:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:58:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:58:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:58:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 13:59:41 --> Could not find the language line "products"
ERROR - 2023-06-26 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:00:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:01:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:02:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 14:07:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:09:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:11:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:11:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:12:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:13:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:13:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:14:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:18:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:22:02 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:22:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:24:24 --> Could not find the language line "products"
ERROR - 2023-06-26 14:24:37 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:25:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:27:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:27:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:28:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 14:42:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:46:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 14:46:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:01:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:01:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:01:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:02:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 15:02:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:05:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 15:12:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:15:41 --> Could not find the language line "products"
ERROR - 2023-06-26 15:21:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 15:29:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:32:08 --> Could not find the language line "products"
ERROR - 2023-06-26 15:32:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:46:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 15:47:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:50:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:51:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:51:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 15:54:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 15:57:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:02:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:05:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:10:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:11:19 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:12:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:12:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:12:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:12:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:13:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:13:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:14:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:14:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:14:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:14:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:15:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:15:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:16:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:31:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:31:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:32:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:32:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:32:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:32:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:33:09 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 16:33:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:36:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:39:35 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:47:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:49:28 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:49:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:50:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:51:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 16:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 16:52:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:52:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:52:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 16:52:41 --> Could not find the language line "clothing"
ERROR - 2023-06-26 16:52:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 16:56:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 16:57:48 --> Could not find the language line "products"
ERROR - 2023-06-26 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:00:37 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:03:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:09:00 --> Could not find the language line "products"
ERROR - 2023-06-26 17:10:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:12:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:13:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:15:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:15:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:16:24 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:17:58 --> Could not find the language line "products"
ERROR - 2023-06-26 17:19:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-26 17:23:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:24:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 17:24:21 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:25:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:25:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:26:56 --> Could not find the language line "products"
ERROR - 2023-06-26 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:30:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:34:54 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:36:43 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:43:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:43:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:44:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:44:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:45:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:46:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:46:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:46:59 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:47:06 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-26 17:47:07 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-26 17:47:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-26 17:47:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-26 17:47:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:47:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:52:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:52:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:53:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 17:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 17:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 17:58:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:02:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:02:40 --> Could not find the language line "Socks"
ERROR - 2023-06-26 18:03:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 18:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:03:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 18:04:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:04:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:05:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-26 18:07:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:10:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:11:10 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:11:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:11:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:14:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:16:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:17:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:18:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:20:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 18:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 18:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 18:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 18:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 18:20:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 18:22:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:23:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:25:33 --> Could not find the language line "products"
ERROR - 2023-06-26 18:25:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:26:03 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:26:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:27:31 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 18:28:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:29:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:32:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:34:26 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-06-26 18:34:28 --> 404 Page Not Found: Wp/index
ERROR - 2023-06-26 18:34:32 --> 404 Page Not Found: Blog/index
ERROR - 2023-06-26 18:34:37 --> 404 Page Not Found: New/index
ERROR - 2023-06-26 18:34:42 --> 404 Page Not Found: Backup/index
ERROR - 2023-06-26 18:34:45 --> 404 Page Not Found: Temp/index
ERROR - 2023-06-26 18:34:47 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:34:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:36:12 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:39:25 --> Could not find the language line "products"
ERROR - 2023-06-26 18:39:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:44:58 --> Could not find the language line "products"
ERROR - 2023-06-26 18:45:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 18:46:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:47:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:51:38 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-26 18:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:00:45 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:01:37 --> Could not find the language line "products"
ERROR - 2023-06-26 19:07:51 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:11:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:12:52 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:15:02 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:15:30 --> Could not find the language line "products"
ERROR - 2023-06-26 19:16:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 19:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 19:17:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 19:17:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 19:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 19:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 19:17:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 19:17:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 19:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 19:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 19:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:20:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:21:54 --> Could not find the language line "Socks"
ERROR - 2023-06-26 19:22:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:22:20 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 19:23:22 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:23:27 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:24:10 --> Could not find the language line "Crocs"
ERROR - 2023-06-26 19:24:39 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:25:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:27:29 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:32:09 --> Could not find the language line "products"
ERROR - 2023-06-26 19:33:24 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:35:35 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:44:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:46:01 --> Could not find the language line "products"
ERROR - 2023-06-26 19:49:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 19:51:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:51:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:51:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 19:51:56 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:52:07 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:52:11 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:52:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-26 19:52:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:52:26 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:52:30 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:56:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 19:58:25 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:00:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:03:37 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:03:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:07:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:07:58 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:10:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:13:31 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:14:36 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:17:04 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:21:47 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:22:53 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:23:00 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:23:46 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:24:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:24:08 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:32:25 --> Could not find the language line "Bracelets"
ERROR - 2023-06-26 20:36:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 20:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 20:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 20:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 20:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 20:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 20:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 20:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 20:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 20:38:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-26 20:38:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-26 20:48:55 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:58:21 --> Could not find the language line "Home"
ERROR - 2023-06-26 20:58:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:58:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:59:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:59:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 20:59:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 21:00:01 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:06:37 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:09:57 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-26 21:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 21:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 21:55:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 21:55:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-26 21:55:42 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:07:01 --> Could not find the language line "products"
ERROR - 2023-06-26 22:19:09 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:21:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:22:05 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:25:49 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:25:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:25:50 --> Could not find the language line "Home"
ERROR - 2023-06-26 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:05:02 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:07:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-26 23:10:23 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:20:44 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:24:20 --> 404 Page Not Found: Wp-ccphp/index
ERROR - 2023-06-26 23:24:20 --> 404 Page Not Found: Wp-commentinphp/index
ERROR - 2023-06-26 23:27:06 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:30:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 23:36:16 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:40:32 --> Could not find the language line "Home"
ERROR - 2023-06-26 23:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 23:41:19 --> Could not find the language line "products"
ERROR - 2023-06-26 23:55:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 23:55:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-26 23:56:04 --> 404 Page Not Found: Assets/css
