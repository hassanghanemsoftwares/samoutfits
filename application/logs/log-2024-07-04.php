<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-04 00:13:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:17:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 00:21:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-04 00:21:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 00:30:56 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 00:31:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:31:37 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 00:33:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:33:21 --> Could not find the language line "products"
ERROR - 2024-07-04 00:34:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:38:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 00:43:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 00:43:21 --> Could not find the language line "products"
ERROR - 2024-07-04 00:44:36 --> Could not find the language line "products"
ERROR - 2024-07-04 00:46:20 --> Could not find the language line "Home"
ERROR - 2024-07-04 00:46:28 --> Could not find the language line "products"
ERROR - 2024-07-04 00:47:29 --> Could not find the language line "products"
ERROR - 2024-07-04 00:49:10 --> Could not find the language line "products"
ERROR - 2024-07-04 00:51:37 --> Could not find the language line "Home"
ERROR - 2024-07-04 00:53:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 01:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 01:03:57 --> Could not find the language line "Home"
ERROR - 2024-07-04 01:06:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 01:07:23 --> Could not find the language line "Other"
ERROR - 2024-07-04 01:17:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 01:21:36 --> Could not find the language line "Home"
ERROR - 2024-07-04 01:45:09 --> Could not find the language line "products"
ERROR - 2024-07-04 01:51:37 --> Could not find the language line "Home"
ERROR - 2024-07-04 01:55:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 01:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 01:59:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 02:09:59 --> Could not find the language line "products"
ERROR - 2024-07-04 02:21:37 --> Could not find the language line "Home"
ERROR - 2024-07-04 02:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 02:30:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 02:35:20 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 02:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 02:55:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 03:08:29 --> Could not find the language line "Home"
ERROR - 2024-07-04 03:21:36 --> Could not find the language line "Home"
ERROR - 2024-07-04 03:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 03:36:05 --> Could not find the language line "products"
ERROR - 2024-07-04 03:49:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 03:51:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 03:53:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 04:13:53 --> Could not find the language line "products"
ERROR - 2024-07-04 04:20:46 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 04:21:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 04:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 04:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 04:43:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 04:51:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 04:54:00 --> Could not find the language line "products"
ERROR - 2024-07-04 05:12:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 05:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 05:21:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:24:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 05:35:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 05:35:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 05:44:07 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:45:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 05:45:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:46:33 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 05:51:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 05:52:24 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:05:35 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 06:11:28 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:14:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 06:21:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:24:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 06:24:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 06:33:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 06:33:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 06:40:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 06:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 06:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 06:50:18 --> Could not find the language line "products"
ERROR - 2024-07-04 06:51:37 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:52:31 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 06:53:11 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:53:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 06:53:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:54:27 --> Could not find the language line "Home"
ERROR - 2024-07-04 06:58:36 --> Could not find the language line "Home"
ERROR - 2024-07-04 07:06:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 07:10:46 --> Could not find the language line "products"
ERROR - 2024-07-04 07:12:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 07:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:21:39 --> Could not find the language line "Home"
ERROR - 2024-07-04 07:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 07:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 07:43:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 07:43:37 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 07:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 07:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 08:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 08:02:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 08:03:02 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:24 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:26 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:32 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:35 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:03:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:04:10 --> Could not find the language line "products"
ERROR - 2024-07-04 08:16:50 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:16:52 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:21:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:26:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 08:36:40 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-07-04 08:43:37 --> Could not find the language line "Socks"
ERROR - 2024-07-04 08:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 08:51:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 08:52:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 08:53:43 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 08:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 09:00:37 --> Could not find the language line "Other"
ERROR - 2024-07-04 09:05:56 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:21:11 --> Could not find the language line "products"
ERROR - 2024-07-04 09:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:21:43 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 09:26:35 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-07-04 09:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:28:37 --> Could not find the language line "products"
ERROR - 2024-07-04 09:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:31:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:40:48 --> Could not find the language line "Socks"
ERROR - 2024-07-04 09:44:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 09:47:04 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:48:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 09:48:50 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 09:49:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 09:49:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 09:50:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 09:51:27 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:51:44 --> Could not find the language line "Home"
ERROR - 2024-07-04 09:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 09:58:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 10:06:09 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:12:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:16:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:16:28 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:21:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:34:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:34:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:39:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:44:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:50:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:50:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:50:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 10:50:30 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:57:35 --> Could not find the language line "Home"
ERROR - 2024-07-04 10:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 10:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:00:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 11:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:14:21 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 11:21:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:22:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 11:27:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 11:34:24 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-04 11:34:27 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:36:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 11:39:39 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:39:47 --> Could not find the language line "products"
ERROR - 2024-07-04 11:40:34 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:43:13 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:50:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:54:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:54:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:54:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:54:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:54:59 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:55:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 11:56:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 11:58:00 --> Could not find the language line "Home"
ERROR - 2024-07-04 11:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 11:59:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:00:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:00:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:00:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:00:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:03:02 --> Could not find the language line "hair%20%26%20skin%20products"
ERROR - 2024-07-04 12:03:02 --> Could not find the language line "hair%20%26%20skin%20products"
ERROR - 2024-07-04 12:03:08 --> Could not find the language line "products"
ERROR - 2024-07-04 12:06:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 12:09:01 --> Could not find the language line "products"
ERROR - 2024-07-04 12:09:15 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:10:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 12:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:14:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:17:50 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 12:21:42 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:22:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:22:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:22:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:22:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:23:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:23:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:23:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:31:18 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-04 12:36:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 12:36:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 12:36:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:40:23 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:41:04 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:45:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 12:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 12:48:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 12:48:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:50:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 12:51:42 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:55:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:56:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:56:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:57:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:57:30 --> Could not find the language line "Home"
ERROR - 2024-07-04 12:58:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 12:59:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 12:59:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 13:05:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 13:06:04 --> Could not find the language line "Other"
ERROR - 2024-07-04 13:10:33 --> Could not find the language line "Socks"
ERROR - 2024-07-04 13:17:39 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:17:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:19:24 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:19:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-04 13:21:42 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:35:55 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:38:21 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:46:05 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:51:09 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:51:43 --> Could not find the language line "Home"
ERROR - 2024-07-04 13:53:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-04 13:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 13:53:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-04 13:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:04:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:04:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:04:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:04:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:04:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:04:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:05:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:05:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:05:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:11:09 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:11:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 14:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 14:14:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 14:20:35 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:21:03 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:21:42 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:37:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 14:38:50 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 14:45:06 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 14:45:06 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 14:45:09 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 14:45:09 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 14:51:44 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:53:51 --> Could not find the language line "Home"
ERROR - 2024-07-04 14:53:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 14:58:13 --> Could not find the language line "products"
ERROR - 2024-07-04 15:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 15:05:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 15:05:38 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:07:01 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:08:42 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:17:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 15:17:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-04 15:21:45 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 15:29:08 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:46:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 15:47:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 15:49:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 15:49:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-07-04 15:49:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-07-04 15:49:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-07-04 15:49:05 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2024-07-04 15:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 15:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 15:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 15:51:44 --> Could not find the language line "Home"
ERROR - 2024-07-04 15:53:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 15:54:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:02:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:02:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:03:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 16:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:03:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 16:03:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 16:03:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 16:04:01 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:04:08 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:05:36 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:06:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:07:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 16:07:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 16:07:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 16:08:35 --> Could not find the language line "products"
ERROR - 2024-07-04 16:10:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:17:17 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:17:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:18:02 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:21:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 16:42:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 16:46:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-04 16:48:43 --> Could not find the language line "products"
ERROR - 2024-07-04 16:49:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 16:51:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:53:00 --> Could not find the language line "Home"
ERROR - 2024-07-04 16:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 17:01:28 --> Could not find the language line "Home"
ERROR - 2024-07-04 17:19:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 17:21:45 --> Could not find the language line "Home"
ERROR - 2024-07-04 17:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 17:28:22 --> Could not find the language line "Home"
ERROR - 2024-07-04 17:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:31:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 17:31:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 17:35:56 --> Could not find the language line "Home"
ERROR - 2024-07-04 17:40:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 17:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:42:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 17:42:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-07-04 17:42:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 17:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 17:48:37 --> Could not find the language line "Other"
ERROR - 2024-07-04 17:51:45 --> Could not find the language line "Home"
ERROR - 2024-07-04 17:54:37 --> Could not find the language line "Socks"
ERROR - 2024-07-04 17:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 18:03:41 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:04:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-04 18:04:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-04 18:04:26 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:04:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:04:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:11:51 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 18:15:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 18:18:41 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-04 18:19:05 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:20:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 18:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:21:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:21:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 18:21:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '31'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 18:21:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 18:22:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 18:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:23:54 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:26:26 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-04 18:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:31:57 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:46:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 18:46:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 18:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 18:50:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 18:51:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 18:51:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 18:51:46 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:52:44 --> Could not find the language line "Home"
ERROR - 2024-07-04 18:59:55 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Could not find the language line "assets"
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Sunglasses'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-04 19:05:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-04 19:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:19:27 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:21:48 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:25:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 19:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:25:40 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:26:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:33:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 19:33:19 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:33:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 19:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:40:08 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:41:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 19:41:06 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:44:24 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:44:29 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:46:13 --> Could not find the language line "Home"
ERROR - 2024-07-04 19:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 19:48:40 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-04 20:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 20:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 20:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 20:06:06 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:06:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-04 20:06:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-04 20:14:30 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:14:43 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-04 20:16:14 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:22:21 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:22:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 20:22:56 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:22:59 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:25:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 20:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 20:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 20:30:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 20:31:33 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:41:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 20:45:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 20:46:14 --> Could not find the language line "Home"
ERROR - 2024-07-04 20:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 21:10:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 21:10:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 21:16:16 --> Could not find the language line "Home"
ERROR - 2024-07-04 21:19:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 21:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 21:25:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 21:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 21:27:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 21:39:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-04 21:46:18 --> Could not find the language line "Home"
ERROR - 2024-07-04 21:53:22 --> Could not find the language line "Socks"
ERROR - 2024-07-04 21:58:19 --> Could not find the language line "Home"
ERROR - 2024-07-04 22:08:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 22:08:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 22:15:47 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-04 22:16:17 --> Could not find the language line "Home"
ERROR - 2024-07-04 22:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 22:26:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 22:27:23 --> Could not find the language line "Home"
ERROR - 2024-07-04 22:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-04 22:45:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-04 22:46:20 --> Could not find the language line "Home"
ERROR - 2024-07-04 22:46:41 --> Could not find the language line "products"
ERROR - 2024-07-04 22:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 22:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-04 22:56:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:01:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:01:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:02:30 --> Could not find the language line "products"
ERROR - 2024-07-04 23:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-04 23:10:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 23:16:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-04 23:16:21 --> Could not find the language line "Home"
ERROR - 2024-07-04 23:24:13 --> Could not find the language line "0"
ERROR - 2024-07-04 23:28:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:31:25 --> Could not find the language line "Home"
ERROR - 2024-07-04 23:32:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:32:57 --> 404 Page Not Found: Products/products
ERROR - 2024-07-04 23:37:25 --> Could not find the language line "products"
ERROR - 2024-07-04 23:39:33 --> Could not find the language line "products"
ERROR - 2024-07-04 23:44:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-04 23:44:35 --> Could not find the language line "Home"
ERROR - 2024-07-04 23:44:54 --> Could not find the language line "Home"
ERROR - 2024-07-04 23:46:21 --> Could not find the language line "Home"
ERROR - 2024-07-04 23:57:37 --> Could not find the language line "Home"
