<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-09 00:17:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 00:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 00:27:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 00:27:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 00:47:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 01:28:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 01:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 01:36:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-09 01:47:29 --> Could not find the language line "Home"
ERROR - 2024-07-09 01:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 01:55:25 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:05:52 --> Could not find the language line "products"
ERROR - 2024-07-09 02:09:17 --> Could not find the language line "products"
ERROR - 2024-07-09 02:12:32 --> Could not find the language line "products"
ERROR - 2024-07-09 02:16:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 02:16:19 --> Could not find the language line "products"
ERROR - 2024-07-09 02:17:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:18:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 02:24:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 02:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 02:26:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 02:26:12 --> Could not find the language line "products"
ERROR - 2024-07-09 02:29:11 --> Could not find the language line "products"
ERROR - 2024-07-09 02:33:11 --> Could not find the language line "products"
ERROR - 2024-07-09 02:36:01 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:36:18 --> Could not find the language line "products"
ERROR - 2024-07-09 02:37:20 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:41:34 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:42:51 --> Could not find the language line "products"
ERROR - 2024-07-09 02:42:58 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:44:23 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:45:52 --> Could not find the language line "products"
ERROR - 2024-07-09 02:47:29 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:49:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 02:49:35 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:51:27 --> Could not find the language line "Home"
ERROR - 2024-07-09 02:59:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 03:01:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 03:17:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 03:23:18 --> Could not find the language line "products"
ERROR - 2024-07-09 03:36:05 --> Could not find the language line "Home"
ERROR - 2024-07-09 03:47:23 --> Could not find the language line "Home"
ERROR - 2024-07-09 03:55:36 --> Could not find the language line "products"
ERROR - 2024-07-09 03:57:16 --> Could not find the language line "products"
ERROR - 2024-07-09 04:14:07 --> Could not find the language line "Home"
ERROR - 2024-07-09 04:17:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 04:17:47 --> Could not find the language line "Home"
ERROR - 2024-07-09 04:23:00 --> Could not find the language line "products"
ERROR - 2024-07-09 04:25:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 04:37:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 04:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 04:47:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 05:01:17 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 05:15:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 05:17:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 05:27:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 05:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 05:29:48 --> Could not find the language line "products"
ERROR - 2024-07-09 05:34:53 --> Could not find the language line "products"
ERROR - 2024-07-09 05:43:59 --> Could not find the language line "Home"
ERROR - 2024-07-09 05:47:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:01:05 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:01:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 06:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:01:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 06:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:01:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 06:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:05:43 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:06:27 --> Could not find the language line "products"
ERROR - 2024-07-09 06:10:11 --> Could not find the language line "products"
ERROR - 2024-07-09 06:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:12:04 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:17:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:20:15 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:29:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:29:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 06:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:32:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 06:38:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 06:46:56 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:47:34 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:48:02 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:50:20 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:51:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:51:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 06:52:02 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 06:54:22 --> Could not find the language line "Home"
ERROR - 2024-07-09 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:00:55 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:01:37 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:01:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:02:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:02:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:02:47 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:03:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:04:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:04:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 07:09:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:09:21 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:09:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 07:09:23 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:09:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:10:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:11:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:13:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:13:43 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:13:58 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:14:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:15:04 --> Could not find the language line "products"
ERROR - 2024-07-09 07:15:20 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:15:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:16:02 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:17:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:17:55 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:18:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:20:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:20:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:21:34 --> 404 Page Not Found: Metajson/index
ERROR - 2024-07-09 07:21:34 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:21:37 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:22:12 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:22:49 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:24:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:25:02 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:25:56 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:27:11 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:28:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:30:09 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:31:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 07:34:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 07:34:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 07:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 07:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:36:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:39:04 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:47:33 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:50:58 --> Could not find the language line "products"
ERROR - 2024-07-09 07:51:12 --> Could not find the language line "Home"
ERROR - 2024-07-09 07:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:51:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:51:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:53:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 07:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 07:59:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:00:59 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:01:47 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:10:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:10:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:12:27 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:12:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:14:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:15:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:15:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:15:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:15:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:15:51 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:17:33 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:20:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 08:21:18 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:21:37 --> Could not find the language line "products"
ERROR - 2024-07-09 08:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:31:30 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:37:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:39:29 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:40:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:40:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:40:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:40:19 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:40:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:40:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:40:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:40:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:40:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:41:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:41:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 08:46:10 --> Could not find the language line "hats"
ERROR - 2024-07-09 08:46:11 --> Could not find the language line "hats"
ERROR - 2024-07-09 08:47:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:47:34 --> Could not find the language line "Home"
ERROR - 2024-07-09 08:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:50:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 08:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 08:54:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 09:01:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-09 09:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-07-09 09:01:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-09 09:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:08:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 09:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:17:34 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:23:18 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:36:25 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:36:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:40:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 09:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 09:48:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 09:48:33 --> Could not find the language line "Home"
ERROR - 2024-07-09 09:57:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 10:06:17 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:10:51 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:14:12 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:17:03 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:17:35 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:17:47 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:42:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 10:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:53:03 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:55:26 --> Could not find the language line "Home"
ERROR - 2024-07-09 10:58:00 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:06:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 11:06:21 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:11:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 11:15:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 11:16:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 11:17:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:19:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 11:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 11:22:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:23:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 11:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-09 11:37:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:38:10 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:38:16 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:39:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 11:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 11:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:51:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 11:52:59 --> Could not find the language line "Home"
ERROR - 2024-07-09 11:59:33 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 11:59:50 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:02:42 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 12:04:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 12:06:10 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 12:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 12:16:10 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:17:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:22:09 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 12:26:52 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:30:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 12:30:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 12:43:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 12:43:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 12:43:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 12:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 12:44:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 12:47:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 12:51:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 12:57:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 12:57:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-09 13:07:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 13:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:07:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 13:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:08:00 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 13:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:08:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 13:17:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:18:08 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:18:19 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 13:18:21 --> Could not find the language line "Perfume"
ERROR - 2024-07-09 13:18:30 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 13:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:19:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-09 13:19:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-09 13:19:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-09 13:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:20:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 13:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:22:16 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:22:25 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:22:30 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2024-07-09 13:22:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
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
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2024-07-09 13:22:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-09 13:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 13:25:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:25:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:25:07 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:25:09 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:25:10 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:30:39 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2024-07-09 13:30:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
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
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2024-07-09 13:30:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-09 13:43:13 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:43:26 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:44:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 13:44:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:47:37 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:47:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:48:04 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:48:49 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:49:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 13:50:36 --> Could not find the language line "products"
ERROR - 2024-07-09 13:57:27 --> Could not find the language line "products"
ERROR - 2024-07-09 14:03:29 --> Could not find the language line "products"
ERROR - 2024-07-09 14:08:50 --> Could not find the language line "Home"
ERROR - 2024-07-09 14:10:20 --> Could not find the language line "products"
ERROR - 2024-07-09 14:16:23 --> Could not find the language line "products"
ERROR - 2024-07-09 14:16:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 14:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 14:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 14:17:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 14:29:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 14:29:49 --> Could not find the language line "products"
ERROR - 2024-07-09 14:33:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 14:35:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 14:35:22 --> Could not find the language line "products"
ERROR - 2024-07-09 14:47:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 14:47:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 14:52:09 --> Could not find the language line "Home"
ERROR - 2024-07-09 14:52:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 14:55:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:08:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:08:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:10:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-09 15:16:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 15:17:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 15:22:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 15:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 15:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 15:33:02 --> Could not find the language line "products"
ERROR - 2024-07-09 15:34:29 --> Could not find the language line "products"
ERROR - 2024-07-09 15:40:42 --> Could not find the language line "hats"
ERROR - 2024-07-09 15:40:43 --> Could not find the language line "hats"
ERROR - 2024-07-09 15:43:03 --> Could not find the language line "products"
ERROR - 2024-07-09 15:47:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 15:47:38 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:48:43 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:48:56 --> Could not find the language line "Home"
ERROR - 2024-07-09 15:50:29 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-09 16:05:07 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:09:41 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:10:01 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 16:10:42 --> Could not find the language line "products"
ERROR - 2024-07-09 16:12:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 16:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 16:17:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 16:19:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 16:24:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 16:27:19 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-09 16:33:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-09 16:40:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:47:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:50:28 --> Could not find the language line "products"
ERROR - 2024-07-09 16:58:09 --> Could not find the language line "Home"
ERROR - 2024-07-09 16:59:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 17:03:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 17:10:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 17:16:19 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 17:17:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 17:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:23:27 --> Could not find the language line "Home"
ERROR - 2024-07-09 17:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:30:26 --> Could not find the language line "Home"
ERROR - 2024-07-09 17:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:32:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 17:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:47:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 17:47:39 --> Could not find the language line "Home"
ERROR - 2024-07-09 17:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 17:48:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 17:51:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 17:55:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 17:59:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 18:01:54 --> Could not find the language line "products"
ERROR - 2024-07-09 18:04:03 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:05:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:06:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:10:50 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:11:27 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:15:48 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:16:17 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:17:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:18:11 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-09 18:18:35 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 18:23:07 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:24:24 --> Could not find the language line "products"
ERROR - 2024-07-09 18:24:50 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:32:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 18:34:20 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:35:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:36:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 18:36:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 18:37:03 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:38:12 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:38:17 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 18:42:03 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 18:43:28 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 18:43:53 --> Could not find the language line "Other"
ERROR - 2024-07-09 18:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:47:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:47:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 18:47:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 18:49:17 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:50:21 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:50:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 18:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:54:55 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:56:03 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 18:57:22 --> Could not find the language line "Home"
ERROR - 2024-07-09 18:58:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:04:20 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-09 19:06:58 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-09 19:13:08 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:17:41 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:18:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:20:28 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:23:13 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 19:24:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 19:25:13 --> Could not find the language line "products"
ERROR - 2024-07-09 19:30:03 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 19:30:06 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:32:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:45:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:47:41 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:49:16 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:56:05 --> Could not find the language line "Home"
ERROR - 2024-07-09 19:58:17 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 20:12:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 20:17:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 20:23:19 --> Could not find the language line "products"
ERROR - 2024-07-09 20:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 20:26:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:46:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 20:47:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 20:51:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 20:53:32 --> Could not find the language line "Home"
ERROR - 2024-07-09 20:54:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:54:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-09 20:54:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-09 20:54:32 --> Could not find the language line "Socks"
ERROR - 2024-07-09 20:54:53 --> Could not find the language line "Other"
ERROR - 2024-07-09 20:55:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:55:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 20:55:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 20:56:32 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-09 20:57:43 --> Could not find the language line "Perfume"
ERROR - 2024-07-09 20:57:50 --> Could not find the language line "Bracelets"
ERROR - 2024-07-09 20:57:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:58:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-09 20:58:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:58:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:58:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:59:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 20:59:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:00:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:00:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 21:00:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 21:00:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:01:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:01:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:01:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:01:53 --> Could not find the language line "Other"
ERROR - 2024-07-09 21:02:18 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:02:40 --> Could not find the language line "Other"
ERROR - 2024-07-09 21:14:36 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:17:01 --> Could not find the language line "Clothing"
ERROR - 2024-07-09 21:17:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:22:40 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:23:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-09 21:23:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 21:24:24 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:24:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-09 21:24:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-09 21:24:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:25:05 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 21:25:08 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 21:28:51 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:29:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:34:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 21:34:53 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:46:42 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:47:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 21:54:47 --> Could not find the language line "products"
ERROR - 2024-07-09 22:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-09 22:06:29 --> Could not find the language line "Home"
ERROR - 2024-07-09 22:07:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 22:17:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 22:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 22:33:22 --> 404 Page Not Found: Products/products
ERROR - 2024-07-09 22:36:26 --> Could not find the language line "Home"
ERROR - 2024-07-09 22:47:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 22:52:39 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-09 22:55:20 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:01:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:11:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:16:57 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:17:44 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:18:27 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-09 23:23:31 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:37:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:38:46 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:45:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:47:45 --> Could not find the language line "Home"
ERROR - 2024-07-09 23:49:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-09 23:59:30 --> 404 Page Not Found: Robotstxt/index
