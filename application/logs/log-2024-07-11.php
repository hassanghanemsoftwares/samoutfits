<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-11 00:08:08 --> Could not find the language line "Home"
ERROR - 2024-07-11 00:12:18 --> Could not find the language line "Bracelets"
ERROR - 2024-07-11 00:14:30 --> Could not find the language line "Home"
ERROR - 2024-07-11 00:19:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 00:33:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-11 00:44:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 00:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:00:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:03:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 01:07:48 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:08:52 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:13:43 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:14:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:18:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:21:58 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:25:26 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:26:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:30:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:33:12 --> Could not find the language line "Socks"
ERROR - 2024-07-11 01:34:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 01:44:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:54:13 --> Could not find the language line "Home"
ERROR - 2024-07-11 01:56:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 02:02:33 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:07:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:09:09 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:14:31 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:28:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-11 02:41:18 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:44:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:52:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 02:55:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 02:55:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 02:59:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 03:04:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:05:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:07:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:11:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:14:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 03:15:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 03:38:33 --> Could not find the language line "Home"
ERROR - 2024-07-11 03:39:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 03:44:35 --> Could not find the language line "Home"
ERROR - 2024-07-11 03:49:42 --> Could not find the language line "Home"
ERROR - 2024-07-11 03:50:56 --> Could not find the language line "Home"
ERROR - 2024-07-11 03:51:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 03:51:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 03:52:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 03:52:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 03:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 03:53:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 04:07:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 04:12:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 04:14:33 --> Could not find the language line "Home"
ERROR - 2024-07-11 04:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 04:38:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 04:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-11 04:44:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 04:52:07 --> Could not find the language line "Home"
ERROR - 2024-07-11 04:52:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 04:54:42 --> Could not find the language line "hats"
ERROR - 2024-07-11 05:01:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 05:04:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 05:04:57 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:06:01 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:07:18 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:07:36 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:07:53 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:08:01 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:08:19 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:09:47 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:09:54 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:10:48 --> Could not find the language line "Perfume"
ERROR - 2024-07-11 05:13:08 --> Could not find the language line "Socks"
ERROR - 2024-07-11 05:14:35 --> Could not find the language line "Home"
ERROR - 2024-07-11 05:14:53 --> Could not find the language line "Socks"
ERROR - 2024-07-11 05:18:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 05:18:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 05:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 05:19:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 05:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 05:30:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 05:31:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 05:31:28 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:31:35 --> Could not find the language line "Other"
ERROR - 2024-07-11 05:31:44 --> Could not find the language line "Perfume"
ERROR - 2024-07-11 05:32:01 --> Could not find the language line "Socks"
ERROR - 2024-07-11 05:32:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 05:33:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 05:33:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 05:38:46 --> Could not find the language line "Home"
ERROR - 2024-07-11 05:44:33 --> Could not find the language line "Home"
ERROR - 2024-07-11 05:48:04 --> Could not find the language line "Home"
ERROR - 2024-07-11 05:59:38 --> Could not find the language line "products"
ERROR - 2024-07-11 06:02:36 --> Could not find the language line "products"
ERROR - 2024-07-11 06:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 06:06:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:13:48 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:14:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:18:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 06:26:49 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:28:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 06:30:08 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 06:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 06:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 06:44:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:55:14 --> Could not find the language line "Home"
ERROR - 2024-07-11 06:59:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:00:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 07:00:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:05:12 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:07:33 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:11:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:11:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:11:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 07:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:14:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:16:36 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:18:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 07:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 07:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:29:49 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:30:31 --> Could not find the language line "products"
ERROR - 2024-07-11 07:31:31 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:31:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:31:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 07:32:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:32:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:32:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 07:34:04 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:42:53 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:43:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 07:43:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 07:43:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 07:43:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:44:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:45:58 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:52:01 --> Could not find the language line "Home"
ERROR - 2024-07-11 07:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 07:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:04:24 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:07:20 --> Could not find the language line "products"
ERROR - 2024-07-11 08:14:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:19:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 08:19:52 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:25:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:25:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:27:07 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:30:08 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:35:09 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:39:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:44:35 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:45:11 --> Could not find the language line "Other"
ERROR - 2024-07-11 08:45:58 --> Could not find the language line "Socks"
ERROR - 2024-07-11 08:56:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 08:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:01:46 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:07:21 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:07:23 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:07:50 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:10:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:14:36 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:18:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:20:23 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:22:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:26:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:27:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 09:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:32:59 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:44:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:48:36 --> Could not find the language line "products"
ERROR - 2024-07-11 09:48:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 09:49:22 --> Could not find the language line "products"
ERROR - 2024-07-11 09:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 09:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:01:04 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:03:02 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:14:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:17:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 10:21:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:21:43 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:21:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 10:21:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 10:21:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:21:45 --> Could not find the language line "Other"
ERROR - 2024-07-11 10:21:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:21:45 --> Could not find the language line "Perfume"
ERROR - 2024-07-11 10:21:46 --> Could not find the language line "Bracelets"
ERROR - 2024-07-11 10:21:46 --> Could not find the language line "Other"
ERROR - 2024-07-11 10:21:49 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-11 10:22:20 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:29:21 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:30:50 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:30:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:30:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 10:31:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:31:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 10:31:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 10:31:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 10:31:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:32:16 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:36:22 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:40:10 --> Could not find the language line "hats"
ERROR - 2024-07-11 10:40:13 --> Could not find the language line "hats"
ERROR - 2024-07-11 10:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:44:37 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:46:21 --> Could not find the language line "Home"
ERROR - 2024-07-11 10:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 10:51:16 --> Could not find the language line "products"
ERROR - 2024-07-11 10:52:19 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 11:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 11:14:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:15:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%D010%' OR a.description LIKE '%D010%' OR a.color LIKE '%D010%' OR a.barcode LIKE '%D010%' OR a.category LIKE '%D010%' OR a.sub_category LIKE '%D010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-11 11:16:44 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 11:25:55 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-11 11:43:07 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:43:56 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:44:06 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:44:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:44:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:46:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 11:49:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 11:50:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 11:51:09 --> Could not find the language line "Home"
ERROR - 2024-07-11 11:54:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:03:18 --> Could not find the language line "products"
ERROR - 2024-07-11 12:14:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:19:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:26:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 12:30:55 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:31:10 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:34:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:34:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:41:01 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:42:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 12:43:12 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:43:49 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 12:43:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 12:43:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 12:43:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 12:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 12:44:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 12:44:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 12:44:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 12:44:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:45:16 --> Could not find the language line "Home"
ERROR - 2024-07-11 12:56:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 13:01:05 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:02:42 --> Could not find the language line "products"
ERROR - 2024-07-11 13:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:07:00 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:11:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:12:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 13:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 13:14:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:20:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 13:22:27 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:22:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 13:26:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:31:39 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 13:44:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-11 13:44:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:46:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-11 13:48:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 13:48:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 13:48:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 13:51:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 13:55:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 13:59:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 14:03:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:04:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 14:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:05:04 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:05:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:06:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 14:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:06:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 14:06:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 14:07:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 14:08:10 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:11:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 14:13:14 --> Could not find the language line "Perfume"
ERROR - 2024-07-11 14:13:15 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:14:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:15:03 --> Could not find the language line "Bracelets"
ERROR - 2024-07-11 14:17:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 14:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:18:44 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 14:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:20:06 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:20:45 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 14:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:22:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 14:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:23:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 14:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:29:02 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:30:07 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:35:19 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:35:44 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:40:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 14:42:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:44:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:47:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 14:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 14:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 14:55:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 14:57:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 15:03:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 15:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:03:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 15:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:13:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:14:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:15:52 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 15:16:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 15:19:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 15:21:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:22:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 15:30:40 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:33:28 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:35:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 15:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:41:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:44:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:46:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:55:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 15:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 15:58:15 --> Could not find the language line "Home"
ERROR - 2024-07-11 15:59:01 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:03:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 16:04:22 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:08:01 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:09:26 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:11:32 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:14:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:24:46 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 16:40:07 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:44:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:47:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 16:49:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:49:35 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-11 16:50:26 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-11 16:50:51 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-11 16:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 16:52:01 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:53:04 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:54:51 --> Could not find the language line "Home"
ERROR - 2024-07-11 16:54:53 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-11 16:55:13 --> Could not find the language line "products"
ERROR - 2024-07-11 16:56:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 16:56:18 --> 404 Page Not Found: Storage/settings
ERROR - 2024-07-11 16:56:19 --> Could not find the language line "products"
ERROR - 2024-07-11 16:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 16:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 16:58:30 --> Could not find the language line "products"
ERROR - 2024-07-11 17:00:21 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 17:04:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-11 17:05:22 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:08:21 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:13:34 --> Could not find the language line "products"
ERROR - 2024-07-11 17:14:41 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:16:34 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:19:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 17:21:14 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:21:55 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:29:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 17:34:11 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:37:38 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:39:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:44:42 --> Could not find the language line "Home"
ERROR - 2024-07-11 17:47:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 17:47:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-11 17:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:49:16 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 17:50:19 --> Could not find the language line "products"
ERROR - 2024-07-11 17:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 17:56:09 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-11 18:06:56 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:08:59 --> Could not find the language line "hats"
ERROR - 2024-07-11 18:09:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 18:09:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-11 18:09:59 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:14:42 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:17:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 18:18:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-11 18:19:25 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 18:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 18:31:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:32:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 18:33:09 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 18:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 18:44:42 --> Could not find the language line "Home"
ERROR - 2024-07-11 18:48:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 18:53:16 --> Could not find the language line "products"
ERROR - 2024-07-11 18:53:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 19:03:58 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:14:43 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:17:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-11 19:21:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 19:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:22:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 19:23:09 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:23:57 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:26:49 --> Could not find the language line "products"
ERROR - 2024-07-11 19:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:36:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:36:54 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:37:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:42:20 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:44:44 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:44:59 --> Could not find the language line "Home"
ERROR - 2024-07-11 19:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 19:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:00:20 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:01:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 20:01:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 20:08:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-11 20:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:14:44 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:24:02 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:24:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:24:29 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:25:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:26:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:26:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:39 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 20:27:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:27:53 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:28:26 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:28:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:29:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:29:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:29:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:29:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:30:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:31:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 20:31:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-11 20:31:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:31:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-11 20:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 20:44:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 20:45:44 --> Could not find the language line "Other"
ERROR - 2024-07-11 20:46:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 20:51:32 --> Could not find the language line "Socks"
ERROR - 2024-07-11 20:53:23 --> 404 Page Not Found: Products/products
ERROR - 2024-07-11 20:55:57 --> 404 Page Not Found: Products/products
ERROR - 2024-07-11 21:03:21 --> Could not find the language line "Home"
ERROR - 2024-07-11 21:08:11 --> Could not find the language line "Home"
ERROR - 2024-07-11 21:12:08 --> Could not find the language line "products"
ERROR - 2024-07-11 21:13:41 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 21:14:44 --> Could not find the language line "Home"
ERROR - 2024-07-11 21:16:25 --> Could not find the language line "Home"
ERROR - 2024-07-11 21:18:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 21:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 21:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 21:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 21:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 21:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 21:28:45 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 21:31:36 --> 404 Page Not Found: Metajson/index
ERROR - 2024-07-11 21:41:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 21:43:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-11 21:44:46 --> Could not find the language line "Home"
ERROR - 2024-07-11 21:49:06 --> 404 Page Not Found: Products/products
ERROR - 2024-07-11 21:58:49 --> Could not find the language line "Home"
ERROR - 2024-07-11 22:14:45 --> Could not find the language line "Home"
ERROR - 2024-07-11 22:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 22:40:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 22:44:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 22:50:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-07-11 22:54:56 --> Could not find the language line "hats"
ERROR - 2024-07-11 23:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 23:12:15 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:14:14 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:14:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:20:39 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-11 23:27:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 23:30:06 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-07-11 23:38:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-11 23:44:47 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:47:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-11 23:47:19 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:49:24 --> Could not find the language line "Home"
ERROR - 2024-07-11 23:57:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-11 23:59:10 --> 404 Page Not Found: Robotstxt/index
