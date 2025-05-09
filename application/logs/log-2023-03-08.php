<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-08 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 00:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 00:02:38 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:03:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:03:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:03:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 00:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 00:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 00:04:59 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:05:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 00:05:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 00:05:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:05:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:07:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 00:07:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 00:08:00 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 00:18:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 00:19:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:20:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:40:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 00:55:39 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:29:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:40:51 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:43:16 --> Could not find the language line "Home"
ERROR - 2023-03-08 01:58:51 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:09:56 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 02:10:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:10:59 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:12:27 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:18:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 02:36:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 02:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-08 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 03:11:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 03:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 03:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 04:09:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 04:13:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 04:13:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 04:13:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 04:13:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 04:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 04:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:09:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:31:37 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:48:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 05:50:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 06:36:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-08 06:36:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-08 06:36:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-08 06:36:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-08 06:41:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 06:43:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 06:43:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 06:56:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:11:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:21:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:22:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 07:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:23:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 07:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 07:25:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 07:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:36:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 07:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:37:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 07:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:37:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 07:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:51:02 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:51:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 07:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:52:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:53:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 07:53:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 07:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:53:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:55:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 07:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:55:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 07:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 07:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:01:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 08:01:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:01:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:03:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 08:05:21 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:07:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 08:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:11:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:13:32 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:13:45 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:14:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:14:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:15:21 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 08:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:17:56 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:18:15 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:18:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:19:26 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:21:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 08:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:25:41 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:26:04 --> Could not find the language line "Socks"
ERROR - 2023-03-08 08:26:09 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:26:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:28:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:28:32 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:28:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:28:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:29:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:30:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:32:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 08:34:03 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:39:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:40:02 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:40:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:41:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:41:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:43:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:43:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:44:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:44:39 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:49:39 --> Could not find the language line "Home"
ERROR - 2023-03-08 08:50:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 08:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 08:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:01:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 09:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:07:21 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:08:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 09:08:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:08:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:08:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 09:08:57 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:08:59 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:09:26 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:13:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 09:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:14:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 09:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:15:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:18:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:19:35 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:27:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:28:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:29:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:29:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:29:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:29:44 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:30:01 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:30:05 --> Could not find the language line "Perfume"
ERROR - 2023-03-08 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:30:17 --> Could not find the language line "Socks"
ERROR - 2023-03-08 09:30:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:30:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 09:30:58 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:31:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 09:31:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:35:30 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:37:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:38:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:38:49 --> Could not find the language line "Perfume"
ERROR - 2023-03-08 09:38:56 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:39:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:39:45 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:39:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:40:21 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 09:40:26 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:40:42 --> Could not find the language line "Bracelets"
ERROR - 2023-03-08 09:40:51 --> Could not find the language line "Bracelets"
ERROR - 2023-03-08 09:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:41:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 09:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 09:54:29 --> 404 Page Not Found: Admin/assets
ERROR - 2023-03-08 09:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:23:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:29:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:32:37 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:33:29 --> Could not find the language line "Socks"
ERROR - 2023-03-08 10:33:44 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:33:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:37:02 --> Could not find the language line "Socks"
ERROR - 2023-03-08 10:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:39:49 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:40:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 10:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 10:42:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 10:42:04 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:46:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 10:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:46:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:48:18 --> Could not find the language line "Socks"
ERROR - 2023-03-08 10:48:55 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:50:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 10:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:55:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 10:58:52 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:59:02 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:59:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 10:59:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:00:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:01:27 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:02:22 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:03:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:03:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:03:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 11:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:03:50 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:04:22 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:04:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 11:04:52 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:09:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:14:50 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:15:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:18:30 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:18:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:22:02 --> Could not find the language line "Socks"
ERROR - 2023-03-08 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 11:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:32:35 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:36:16 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:38:02 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 11:38:32 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:40:16 --> Could not find the language line "Home"
ERROR - 2023-03-08 11:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:07:15 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:07:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:07:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:07:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:08:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:08:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:09:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:09:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:10:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:10:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:10:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 12:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:21:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 12:37:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 12:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:07:03 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:07:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:09:09 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:11:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:11:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:11:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:11:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:11:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 13:14:37 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:16:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:16:17 --> Could not find the language line "Socks"
ERROR - 2023-03-08 13:16:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:17:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 13:17:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:19:49 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:22:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:23:03 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:23:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:23:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:23:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 13:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:25:05 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:37:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:38:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:39:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 13:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 13:51:49 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 13:54:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 13:58:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 13:59:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:07:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 14:07:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:19:39 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:27:03 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:28:32 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:33:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:38:03 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:38:08 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:41:21 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:41:32 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 14:43:16 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:44:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 14:44:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 14:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:44:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 14:44:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 14:45:09 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:45:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 14:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:45:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 14:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:46:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 14:46:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 14:46:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:47:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-08 14:47:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:49:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 14:49:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:50:00 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:50:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:50:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:50:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:51:17 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:51:21 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:51:52 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:53:51 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:54:33 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 14:56:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 14:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 14:56:49 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:07:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:12:53 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:12:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:15:22 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:18:38 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:21:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:27:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:27:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:27:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:27:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:27:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 15:28:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:28:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:28:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:29:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:30:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:31:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:31:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 15:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:32:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:32:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 15:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:33:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 15:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:35:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 15:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:47:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 15:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 15:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 15:52:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:12:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:12:35 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:14:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 16:14:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 16:17:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:17:55 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:18:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:18:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:20:02 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:24:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 16:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:31:18 --> 404 Page Not Found: _adminerphp/index
ERROR - 2023-03-08 16:36:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:37:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 16:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 16:38:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 16:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 16:38:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 16:38:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:39:04 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:39:22 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:39:45 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 16:39:55 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:41:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:50:19 --> Could not find the language line "Home"
ERROR - 2023-03-08 16:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:22:56 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:28:15 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:44:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 17:46:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 17:46:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:46:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 17:46:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 17:47:39 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:52:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 17:57:21 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:00:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:11:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:11:27 --> Could not find the language line "Bracelets"
ERROR - 2023-03-08 18:11:51 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:12:51 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:22:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:38:58 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:40:14 --> Could not find the language line "Socks"
ERROR - 2023-03-08 18:40:56 --> Could not find the language line "Socks"
ERROR - 2023-03-08 18:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:41:05 --> Could not find the language line "Socks"
ERROR - 2023-03-08 18:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:42:35 --> Could not find the language line "Socks"
ERROR - 2023-03-08 18:42:44 --> Could not find the language line "Socks"
ERROR - 2023-03-08 18:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:43:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:43:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:44:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 18:44:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:45:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 18:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 18:57:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:14:57 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:17:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:21:37 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:21:40 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-08 19:22:12 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:22:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:23:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:23:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 19:23:50 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:26:08 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:26:10 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:26:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:26:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:26:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:39:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:39:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:39:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:40:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:40:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:40:40 --> Could not find the language line "Socks"
ERROR - 2023-03-08 19:40:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:40:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:43:36 --> Could not find the language line "Home"
ERROR - 2023-03-08 19:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:44:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 19:44:04 --> Could not find the language line "socks"
ERROR - 2023-03-08 19:44:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 19:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 19:46:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:46:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 19:47:14 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-08 19:51:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:02:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:02:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:03:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:04:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:04:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:04:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:04:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:15:58 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:16:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:17:04 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:17:38 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:17:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:17:56 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 20:21:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:21:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:36:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-08 20:37:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:44:32 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:48:35 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:51:20 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:52:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-08 20:53:27 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:53:49 --> Could not find the language line "Bracelets"
ERROR - 2023-03-08 20:54:01 --> Could not find the language line "Home"
ERROR - 2023-03-08 20:58:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-08 20:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 21:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 21:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 21:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 21:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 21:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 21:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 21:01:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 21:01:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-08 21:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-08 21:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:05:31 --> Could not find the language line "Socks"
ERROR - 2023-03-08 21:10:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:11:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:11:47 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:12:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:13:07 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:16:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-08 21:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:34:42 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:35:31 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:35:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:36:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:36:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:36:45 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 21:40:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:41:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:41:42 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:47:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:48:41 --> Could not find the language line "Home"
ERROR - 2023-03-08 21:55:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 21:55:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:29 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 21:55:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 21:55:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 21:59:34 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:00:17 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:09:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:09:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:40 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:09:41 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:44 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:10:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:10:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:02 --> 404 Page Not Found: Products/accounting
ERROR - 2023-03-08 22:11:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:12:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:12:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:12:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:12:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:12:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:29:00 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:34:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:36:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-08 22:36:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-08 22:36:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:36:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:36:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-08 22:36:50 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 22:38:37 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:38:46 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:38:48 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:39:22 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:39:40 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:40:16 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:42:23 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:52:00 --> Could not find the language line "Home"
ERROR - 2023-03-08 22:54:01 --> Could not find the language line "Bracelets"
ERROR - 2023-03-08 22:54:06 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:02:25 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:14:29 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:20:28 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:29:54 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:30:18 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 23:34:26 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:48:50 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-08 23:49:35 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:49:43 --> Could not find the language line "Home"
ERROR - 2023-03-08 23:51:35 --> 404 Page Not Found: Assets/css
