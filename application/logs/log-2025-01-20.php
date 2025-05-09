<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-20 00:09:13 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:12:05 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:13:40 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:19:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-20 00:25:29 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:41:34 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:43:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:47:05 --> Could not find the language line "Home"
ERROR - 2025-01-20 00:53:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-20 00:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 00:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 01:13:53 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 01:38:44 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-01-20 01:38:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:38:48 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-01-20 01:38:51 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:38:53 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-01-20 01:38:54 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:38:57 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:01 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:04 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:08 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:11 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:15 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:39:18 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:40:28 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-20 01:40:31 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-20 01:40:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:40:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 01:43:52 --> Could not find the language line "Home"
ERROR - 2025-01-20 02:13:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 02:43:39 --> Could not find the language line "Home"
ERROR - 2025-01-20 02:47:00 --> Could not find the language line "0"
ERROR - 2025-01-20 02:47:12 --> Could not find the language line "Bracelets"
ERROR - 2025-01-20 02:47:14 --> Could not find the language line "Bracelets"
ERROR - 2025-01-20 02:47:17 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:19 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:21 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:26 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:30 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:34 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:38 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:44 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:49 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:50 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:53 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:47:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:48:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:48:03 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:48:05 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 02:48:57 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:00 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:02 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:04 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:06 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:08 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:11 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:13 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:16 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:18 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:21 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:23 --> Could not find the language line "Other"
ERROR - 2025-01-20 02:49:25 --> Could not find the language line "Perfume"
ERROR - 2025-01-20 02:49:28 --> Could not find the language line "Perfume"
ERROR - 2025-01-20 02:50:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-20 02:50:48 --> Could not find the language line "Socks"
ERROR - 2025-01-20 02:50:50 --> Could not find the language line "Socks"
ERROR - 2025-01-20 02:50:52 --> Could not find the language line "Stock_clearance"
ERROR - 2025-01-20 02:50:54 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 02:50:57 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 02:51:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 02:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 03:13:51 --> Could not find the language line "Home"
ERROR - 2025-01-20 03:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 03:32:03 --> Could not find the language line "Home"
ERROR - 2025-01-20 03:43:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 03:45:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-20 03:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 04:13:52 --> Could not find the language line "Home"
ERROR - 2025-01-20 04:43:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 05:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 05:13:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 05:16:38 --> Could not find the language line "Home"
ERROR - 2025-01-20 05:43:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 05:53:17 --> Could not find the language line "Home"
ERROR - 2025-01-20 06:13:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 06:42:26 --> Could not find the language line "Home"
ERROR - 2025-01-20 06:43:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 06:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-20 06:49:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-20 06:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 06:56:10 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:10:01 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:13:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:22:10 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:23:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:24:20 --> 404 Page Not Found: Storage/settings
ERROR - 2025-01-20 07:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:40:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 07:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:43:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:58:27 --> Could not find the language line "Home"
ERROR - 2025-01-20 07:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 07:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:03:55 --> Could not find the language line "Home"
ERROR - 2025-01-20 08:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:11:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 08:13:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 08:18:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 08:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:36:07 --> Could not find the language line "Home"
ERROR - 2025-01-20 08:38:37 --> Could not find the language line "Home"
ERROR - 2025-01-20 08:43:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 08:53:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-20 08:57:53 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:03:52 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:13:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:29:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:29:49 --> 404 Page Not Found: Home/assets
ERROR - 2025-01-20 09:29:49 --> 404 Page Not Found: Home/accounts
ERROR - 2025-01-20 09:29:49 --> 404 Page Not Found: Cart/home
ERROR - 2025-01-20 09:35:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:35:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:35:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:35:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:36:25 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 09:43:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:56:09 --> Could not find the language line "Home"
ERROR - 2025-01-20 09:56:27 --> Could not find the language line "Home"
ERROR - 2025-01-20 10:04:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 10:08:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-20 10:13:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 10:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:19:35 --> Could not find the language line "Home"
ERROR - 2025-01-20 10:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:41:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 10:43:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 10:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 10:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:04:36 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:13:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:27:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-20 11:31:18 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:31:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 11:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:31:41 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:31:43 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-20 11:31:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:31:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-20 11:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:34:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:43:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:43:48 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:45:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:45:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:32 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:50:34 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:51:02 --> Could not find the language line "Home"
ERROR - 2025-01-20 11:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 11:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:01:22 --> Could not find the language line "Home"
ERROR - 2025-01-20 12:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:04:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-20 12:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 12:07:46 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-20 12:08:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-20 12:12:12 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-20 12:12:12 --> Could not find the language line "Home"
ERROR - 2025-01-20 12:13:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 12:28:08 --> Could not find the language line "Home"
ERROR - 2025-01-20 12:43:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 12:43:56 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-20 12:50:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:03:34 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:05:11 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:05:22 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:05:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:37 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:43 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:48 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:49 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:54 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:05:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:06:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:06:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:06:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:06:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:47 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:48 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:06:53 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:07 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:11 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:21 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:07:30 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:20 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 13:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:08:37 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:12:15 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:12:19 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-20 13:12:38 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-20 13:12:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:12:55 --> Could not find the language line "Perfume"
ERROR - 2025-01-20 13:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:13:10 --> Could not find the language line "Perfume"
ERROR - 2025-01-20 13:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:13:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:15:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 13:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:35:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 13:43:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 13:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 13:50:57 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:04:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 14:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:13:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:18:11 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:18:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 14:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:22:25 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 14:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:43:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:47:36 --> Could not find the language line "products"
ERROR - 2025-01-20 14:48:15 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:48:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 14:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 14:53:02 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:53:22 --> Could not find the language line "Home"
ERROR - 2025-01-20 14:55:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 15:00:43 --> Could not find the language line "Home"
ERROR - 2025-01-20 15:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:01:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 15:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:13:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 15:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:33:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 15:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:38:35 --> Could not find the language line "Home"
ERROR - 2025-01-20 15:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:43:46 --> Could not find the language line "Home"
ERROR - 2025-01-20 15:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 15:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 16:13:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:22:44 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:24:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:38:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-20 16:38:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-20 16:38:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-20 16:43:48 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:46:48 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:47:06 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:48:42 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:55:16 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:55:31 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:55:33 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:56:16 --> Could not find the language line "Home"
ERROR - 2025-01-20 16:58:29 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 17:13:47 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 17:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 17:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 17:18:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-20 17:27:20 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:27:22 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:34:19 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:43:48 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:47:55 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:48:57 --> Could not find the language line "Home"
ERROR - 2025-01-20 17:57:56 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:01:17 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:13:48 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:18:59 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:19:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-20 18:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:34:18 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:34:28 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 18:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:34:40 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-20 18:34:52 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:37:36 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-20 18:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-20 18:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-20 18:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-20 18:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 18:42:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-20 18:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 18:43:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:45:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-20 18:47:13 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:50:31 --> Could not find the language line "Home"
ERROR - 2025-01-20 18:59:15 --> Could not find the language line "Home"
ERROR - 2025-01-20 19:13:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 19:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:20:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 19:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:29:20 --> Could not find the language line "Other"
ERROR - 2025-01-20 19:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:30:09 --> Could not find the language line "Home"
ERROR - 2025-01-20 19:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 19:41:09 --> Could not find the language line "Home"
ERROR - 2025-01-20 19:43:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 20:13:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 20:43:49 --> Could not find the language line "Home"
ERROR - 2025-01-20 20:47:03 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:00:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-20 21:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 21:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 21:02:21 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:04:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-20 21:11:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 21:11:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-20 21:13:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:15:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-20 21:25:10 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:30:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-20 21:43:50 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:48:12 --> Could not find the language line "Home"
ERROR - 2025-01-20 21:59:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-20 22:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 22:09:55 --> Could not find the language line "Home"
ERROR - 2025-01-20 22:13:51 --> Could not find the language line "Home"
ERROR - 2025-01-20 22:23:45 --> Could not find the language line "Home"
ERROR - 2025-01-20 22:43:01 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-01-20 22:43:02 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-01-20 22:43:02 --> Could not find the language line "Home"
ERROR - 2025-01-20 22:43:51 --> Could not find the language line "Home"
ERROR - 2025-01-20 23:06:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-20 23:14:01 --> Could not find the language line "Home"
ERROR - 2025-01-20 23:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 23:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 23:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 23:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-20 23:43:53 --> Could not find the language line "Home"
