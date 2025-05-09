<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-05 00:00:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 00:00:41 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 00:01:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:06:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:06:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:09:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:10:53 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:17:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 00:43:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 00:47:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-05 00:50:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:51:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 00:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 00:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 01:00:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 01:04:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 01:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 01:50:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 01:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 01:58:55 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 02:15:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:19:23 --> 404 Page Not Found: Env/index
ERROR - 2023-10-05 02:19:24 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-10-05 02:37:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 02:37:16 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:37:16 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:37:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:49:35 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 02:50:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:54:39 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:54:53 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 02:56:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 02:56:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 02:58:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 02:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:00:35 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:00:56 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:02:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:03:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:03:45 --> Could not find the language line "Socks"
ERROR - 2023-10-05 03:04:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:06:32 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:07:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:07:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:07:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:08:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:09:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 03:09:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:10:05 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:10:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:12:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:12:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-05 03:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 03:16:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:16:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:17:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:18:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:18:35 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:20:05 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:21:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:22:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:23:42 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:23:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 03:23:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 03:24:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:24:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:45:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:46:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:47:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:48:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 03:49:19 --> Could not find the language line "Home"
ERROR - 2023-10-05 03:52:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 04:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 04:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 04:22:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 04:22:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 04:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 04:41:48 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:41:48 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 04:55:56 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:56:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 04:57:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:00:39 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 05:11:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:25:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 05:25:55 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:26:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 05:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:27:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:27:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:29:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:31:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:37:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:38:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:39:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:42:19 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:48:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:53:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 05:55:31 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:11:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:11:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 06:12:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:14:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:21:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:22:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:22:11 --> Could not find the language line "Socks"
ERROR - 2023-10-05 06:22:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:22:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 06:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:22:36 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 06:22:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 06:23:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 06:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:31:46 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:31:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 06:31:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 06:31:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 06:31:48 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-05 06:31:48 --> 404 Page Not Found: Home/home
ERROR - 2023-10-05 06:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:37:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:40:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 06:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:43:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 06:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 06:50:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 06:58:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:01:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 07:02:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:04:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:04:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:04:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:05:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:05:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:06:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:07:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:07:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:07:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 07:08:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:11:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:12:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:27:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:28:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:28:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:29:05 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:29:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:39:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 07:42:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:43:59 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 07:44:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:47:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 07:47:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:48:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:50:28 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:50:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:50:53 --> Could not find the language line "Perfume"
ERROR - 2023-10-05 07:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:51:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:51:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:53:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 07:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 07:54:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 07:59:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:02:39 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:09:03 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 08:09:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 08:14:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:20:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:27:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:33:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 08:35:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 08:35:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 08:35:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 08:39:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:40:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:47:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:49:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:49:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:49:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 08:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 08:50:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 08:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:52:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 08:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 08:57:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 08:58:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:00:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:04:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 09:04:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-05 09:04:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 09:07:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 09:08:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:09:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:11:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 09:11:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:13:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:13:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:13:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:14:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:16:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 09:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 09:16:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 09:19:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:20:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:20:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:24:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:24:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:32:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:34:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:34:24 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:37 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:35:19 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:36:35 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:36:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:37:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:38:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 09:38:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:39:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 09:39:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 09:39:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:40:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:41:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:41:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 09:41:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 09:41:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:41:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-05 09:41:57 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:42:07 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:42:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:42:21 --> Could not find the language line "Socks"
ERROR - 2023-10-05 09:43:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:43:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:43:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:44:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:45:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:45:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:45:28 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:46:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:46:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:48:01 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:48:42 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:50:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:51:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 09:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 09:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 09:56:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 09:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:01:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 10:02:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:07:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 10:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 10:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:09:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:19:24 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:21:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 10:22:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 10:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:32:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 10:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:38:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:39:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:41:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 10:41:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 10:41:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 10:42:10 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-05 10:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 10:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 10:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 10:55:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 10:56:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 10:58:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:00:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:00:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:01:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:01:42 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:01:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-05 11:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 11:05:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 11:06:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:11:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:15:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 11:15:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:16:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:16:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 11:33:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:37:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:38:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 11:38:34 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:40:42 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:45:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:50:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 11:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 11:51:28 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:52:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 11:59:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:08:26 --> Could not find the language line "products"
ERROR - 2023-10-05 12:11:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:11:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:11:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:11:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:12:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:13:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:17:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:19:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:20:55 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:25:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 12:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 12:25:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 12:25:10 --> Could not find the language line "Socks"
ERROR - 2023-10-05 12:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:25:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:26:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:28:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:34:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:36:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 12:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '28'
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 12:36:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 12:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:39:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 12:39:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 12:43:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:45:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:45:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:50:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:50:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 12:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 12:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 12:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 13:03:08 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:03:55 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:04:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:04:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:05:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:06:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 13:06:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:11:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 13:12:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:12:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:14:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:14:32 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:15:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:16:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 13:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:19:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:22:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 13:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:27:03 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 13:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 13:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:28:31 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-05 13:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:28:37 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-05 13:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:29:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:30:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:31:32 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:33:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:35:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:47:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 13:48:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 13:49:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:50:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 13:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 13:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 13:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 13:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 13:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 13:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 13:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 13:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 13:50:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:51:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 13:53:41 --> Could not find the language line "Home"
ERROR - 2023-10-05 13:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:00:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:00:41 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:00:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:05:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:06:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:13:41 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:14:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:21:33 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:24:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:24:46 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:25:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:27:34 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:31:53 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:32:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:34:31 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:36:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:37:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:42:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:43:45 --> Could not find the language line "Socks"
ERROR - 2023-10-05 14:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:46:34 --> Could not find the language line "Hair%20"
ERROR - 2023-10-05 14:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:48:18 --> Could not find the language line "Socks"
ERROR - 2023-10-05 14:48:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:53:58 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:55:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:56:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 14:56:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 14:58:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 14:58:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:03:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 15:07:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:11:14 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:15:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:17:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:33:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 15:33:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 15:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:38:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 15:39:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 15:41:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:41:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:43:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 15:43:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 15:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 15:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 15:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 15:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 15:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 15:43:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 15:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:46:12 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:48:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:49:52 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:50:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:50:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:50:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:55:03 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:55:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:56:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:56:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 15:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 15:58:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 15:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:01:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:03:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:04:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:04:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 16:04:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 16:06:32 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:11:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:13:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:13:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:14:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:14:34 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:14:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 16:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:16:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:21:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:24:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:26:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 16:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:26:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:28:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 16:29:47 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:32:56 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:33:48 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-05 16:34:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:35:05 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-05 16:35:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:35:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:35:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:37:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 16:43:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 16:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:01:40 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:02:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:04:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:04:56 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:10:30 --> Could not find the language line "Socks"
ERROR - 2023-10-05 17:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:28:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:30:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:31:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:33:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:33:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:34:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:37:15 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:37:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:37:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:37:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:38:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:40:05 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:40:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:46:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:46:11 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:46:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:49:57 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:50:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:51:12 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:51:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:52:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:52:37 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:53:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:53:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:53:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:53:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:54:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:54:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:54:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:54:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 17:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:55:31 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:55:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:55:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 17:57:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:57:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:58:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 17:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 17:58:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 17:59:53 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:02:19 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:02:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 18:03:14 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:03:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:10:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:11:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:13:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:15:19 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:15:41 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:15:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:17:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:18:14 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:19:41 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:20:33 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:20:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:21:03 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:21:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:22:33 --> Could not find the language line "Perfume"
ERROR - 2023-10-05 18:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:22:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:22:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:22:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:23:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:23:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:23:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:23:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:25:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:25:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:25:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:25:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:26:07 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:26:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 18:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:27:16 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:28:27 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:32:08 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:32:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 18:32:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:34:37 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:35:41 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-05 18:37:03 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:38:46 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:38:49 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:39:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:42:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:43:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:43:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 18:44:04 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:44:11 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 18:44:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 18:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:45:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 18:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:45:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 18:49:30 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:50:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 18:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:52:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 18:52:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 18:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 18:52:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 18:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 18:59:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:01:10 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:01:33 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:03:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-05 19:03:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-05 19:03:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-05 19:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:03:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:04:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:04:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:04:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:06:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 19:06:35 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:08:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 19:15:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-05 19:16:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:18:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:18:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:18:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:18:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:18:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:18:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:22:25 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:26:02 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 19:37:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:40:28 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:41:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:41:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:41:20 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:41:21 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-05 19:41:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:45:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:45:56 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 19:46:55 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-05 19:47:38 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:52:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 19:52:45 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:54:02 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:54:33 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:54:50 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:55:13 --> Could not find the language line "Home"
ERROR - 2023-10-05 19:55:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:02:16 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-05 20:03:44 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:04:54 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:15:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-05 20:25:14 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:29:02 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:35:52 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:39:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:51:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:53:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:53:31 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:57:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:57:04 --> Could not find the language line "products"
ERROR - 2023-10-05 20:57:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 20:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:57:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:58:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:59:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 20:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 20:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 21:00:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 21:00:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 21:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 21:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 21:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 21:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 21:03:28 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:04:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 21:07:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:07:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:12:57 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 21:23:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:23:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:23:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:36:17 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:38:43 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:51:18 --> Could not find the language line "Home"
ERROR - 2023-10-05 21:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:03:14 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:03:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 22:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:03:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 22:04:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:04:06 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:26:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-05 22:26:21 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:32:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:34:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:34:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-05 22:35:26 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:36:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:36:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:36:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:37:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-05 22:37:29 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 22:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 22:38:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:38:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:38:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:39:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:39:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 22:39:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:39:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-05 22:39:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:39:44 --> Could not find the language line "Perfume"
ERROR - 2023-10-05 22:39:48 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:39:53 --> Could not find the language line "Socks"
ERROR - 2023-10-05 22:39:59 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:40:36 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:58:02 --> Could not find the language line "Home"
ERROR - 2023-10-05 22:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:07:05 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-05 23:10:34 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:29:22 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 23:32:00 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:32:13 --> Could not find the language line "Socks"
ERROR - 2023-10-05 23:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-05 23:38:39 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:42:48 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:44:09 --> Could not find the language line "Home"
ERROR - 2023-10-05 23:45:25 --> Could not find the language line "Perfume"
ERROR - 2023-10-05 23:51:18 --> 404 Page Not Found: Robotstxt/index
