<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-07 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:11:27 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:15:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:20:38 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:28:26 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-07 00:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 00:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 00:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 01:56:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:02:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:04:35 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 02:14:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-07 02:19:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 02:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 02:20:49 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 02:48:55 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:03:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 03:23:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-07 03:28:20 --> Could not find the language line "socks"
ERROR - 2023-03-07 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:31:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:33:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:44:55 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:44:58 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:53:57 --> Could not find the language line "Home"
ERROR - 2023-03-07 03:54:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 03:54:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 03:55:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 03:55:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 03:55:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 03:55:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:05:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:44:29 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:44:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:44:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:45:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:45:02 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:47:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:47:44 --> Could not find the language line "Home"
ERROR - 2023-03-07 04:55:38 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:02:17 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:09:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 05:15:24 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 05:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 05:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 05:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 05:20:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:29:30 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:30:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:42:44 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:49:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:49:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 05:51:18 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:52:28 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:55:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:59:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 05:59:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:00:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:03:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:08:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:26:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:27:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:28:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:28:22 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:37:39 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:45:56 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:46:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 06:46:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 06:46:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:47:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:47:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 06:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 06:48:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:50:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 06:54:37 --> Could not find the language line "socks"
ERROR - 2023-03-07 06:58:15 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:06:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:08:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:09:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-07 07:13:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:14:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:14:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:23:26 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:24:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:25:05 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:26:08 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:26:22 --> Could not find the language line "Socks"
ERROR - 2023-03-07 07:26:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-07 07:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:31:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:32:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:32:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:33:16 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:19 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:22 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 07:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:33:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 07:33:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:58 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:33:59 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:34:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:35:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:35:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 07:35:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 07:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 07:59:18 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:03:58 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:04:38 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:04:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 08:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:05:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:05:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:06:57 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:11:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:11:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:11:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:11:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:11:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:12:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:12:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:12:58 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 08:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:13:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 08:13:26 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 08:13:39 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 08:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:16:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:16:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:16:28 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:20:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:21:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:34:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:39:53 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:40:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:41:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:41:47 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:43:02 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 08:43:06 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:48:49 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:50:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:51:03 --> Could not find the language line "Socks"
ERROR - 2023-03-07 08:51:22 --> Could not find the language line "Socks"
ERROR - 2023-03-07 08:51:31 --> Could not find the language line "Socks"
ERROR - 2023-03-07 08:51:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:51:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:51:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:52:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:52:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:52:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:52:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 08:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 08:57:24 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:57:35 --> Could not find the language line "Home"
ERROR - 2023-03-07 08:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:06:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:07:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:08:19 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:09:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 09:09:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 09:17:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 09:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:21:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-07 09:22:47 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:25:29 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:41:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:46:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:51:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:52:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:52:55 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:53:44 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:54:08 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:54:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 09:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 09:57:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:00:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-03-07 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:02:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 10:03:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:03:22 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:03:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:06:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:06:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:06:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:06:40 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:06:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:06:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:06:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:06:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:07:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:07:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:07:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:08:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:08:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:08:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:08:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:08:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:08:05 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:08:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:08:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:19 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:40 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:10:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:11:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:11:15 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:13:05 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:13:53 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:16:06 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:17:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:18:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:42:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:42:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 10:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:44:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:47:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:56:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:57:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:57:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 10:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:58:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 10:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 10:58:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 10:59:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 10:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:16:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:19:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:21:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 11:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:23:29 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:32:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:36:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 11:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:51:45 --> Could not find the language line "Home"
ERROR - 2023-03-07 11:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 11:58:34 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 11:58:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 11:58:55 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 11:59:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:02:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 12:03:39 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:04:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:05:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:07:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:08:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:08:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:09:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:09:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 12:09:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 12:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:09:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 12:09:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:09:58 --> Could not find the language line "Socks"
ERROR - 2023-03-07 12:10:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:10:22 --> Could not find the language line "Socks"
ERROR - 2023-03-07 12:10:29 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:10:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:10:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:10:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:11:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:11:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:11:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:11:58 --> Could not find the language line "Socks"
ERROR - 2023-03-07 12:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:12:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:12:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:12:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 12:12:50 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 12:13:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:13:05 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 12:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:13:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:14:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:16:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 12:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:17:36 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:17:37 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:18:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:18:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:18:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:18:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 12:19:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:19:24 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:26:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:30:40 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:33:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 12:33:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 12:33:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:33:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:34:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 12:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:40:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:40:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:42:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:43:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:46:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:46:17 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:50:02 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:55:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 12:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 12:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:02:44 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:02:54 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 13:03:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:03:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:08:08 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:08:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:11:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 13:11:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 13:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:21:59 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:34:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:34:40 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:35:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:45:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:46:53 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 13:56:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 13:56:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:02:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:04:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:09:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:09:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 14:09:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-07 14:09:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-07 14:09:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-07 14:09:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-07 14:10:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 14:10:37 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:12:47 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:15:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:16:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:16:02 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:16:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:17:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 14:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:21:49 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:29:39 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:33:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:41:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 14:41:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 14:41:56 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:42:56 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:46:11 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 14:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:46:52 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 14:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:47:06 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:51:55 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:53:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 14:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-07 14:55:27 --> Could not find the language line "Home"
ERROR - 2023-03-07 14:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:20:06 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 15:21:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:21:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:22:40 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-07 15:22:40 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-07 15:22:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-07 15:22:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-07 15:22:57 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-07 15:22:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-07 15:22:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-07 15:22:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-07 15:24:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:24:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 15:24:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 15:24:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 15:24:07 --> 404 Page Not Found: Home/accounts
ERROR - 2023-03-07 15:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:26:36 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:28:18 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:36:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:47:38 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:50:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:51:24 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:55:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:55:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:56:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:56:49 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:57:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:57:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:58:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:58:19 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:58:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 15:58:52 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:59:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 15:59:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:18:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:38:59 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:40:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 16:52:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-07 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:00:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:04:05 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:05:27 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:07:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-07 17:11:19 --> Could not find the language line "Perfume"
ERROR - 2023-03-07 17:11:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-07 17:16:33 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:18:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 17:25:26 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:27:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:31:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:38:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 17:55:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:02:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:03:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:03:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:03:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:04:28 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:10:59 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:12:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:17:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:44:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:47:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:48:30 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:49:16 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:50:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:50:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 18:51:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:51:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:52:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:52:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:52:31 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:54:23 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:54:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:54:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:54:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:54:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:54:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:54:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-07 18:55:27 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 18:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 18:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 18:56:36 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:57:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:58:45 --> Could not find the language line "Home"
ERROR - 2023-03-07 18:58:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:00:05 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:02:18 --> Could not find the language line "Socks"
ERROR - 2023-03-07 19:02:42 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:02:47 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:02:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:03:45 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:04:15 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:04:19 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:07:37 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:16:07 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:30:50 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:33:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:33:28 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:34:43 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:39:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:40:49 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 19:55:40 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:56:30 --> Could not find the language line "Home"
ERROR - 2023-03-07 19:57:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-07 19:57:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:11:35 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-07 20:15:27 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:15:54 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:19:30 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:20:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:23:24 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:24:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:27:57 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:28:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:28:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:30:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:31:56 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 20:36:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:37:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:38:11 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:39:30 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:42:22 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:47:06 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:50:51 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:57:58 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:59:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 20:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 21:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 21:29:20 --> Could not find the language line "Home"
ERROR - 2023-03-07 21:29:36 --> Could not find the language line "Home"
ERROR - 2023-03-07 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 21:32:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:03:47 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 22:06:18 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 22:15:03 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:15:04 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:15:05 --> 404 Page Not Found: Env/index
ERROR - 2023-03-07 22:21:06 --> Could not find the language line "socks"
ERROR - 2023-03-07 22:24:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:47:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:48:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-07 22:49:17 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:50:22 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:50:55 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:50:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 22:51:08 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:51:11 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 22:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:53:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 22:54:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 22:55:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-07 22:55:09 --> Could not find the language line "Home"
ERROR - 2023-03-07 22:55:25 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:02:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 23:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:03:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 23:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 23:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 23:05:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-07 23:08:02 --> Could not find the language line "Bracelets"
ERROR - 2023-03-07 23:10:32 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:10:41 --> Could not find the language line "Socks"
ERROR - 2023-03-07 23:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:11:04 --> Could not find the language line "Socks"
ERROR - 2023-03-07 23:11:06 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:11:41 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:30:34 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:31:21 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:43:00 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:43:01 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:43:46 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:44:48 --> Could not find the language line "Home"
ERROR - 2023-03-07 23:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-07 23:56:07 --> 404 Page Not Found: Assets/css
