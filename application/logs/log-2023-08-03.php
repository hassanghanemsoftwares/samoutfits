<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-03 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:01:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 00:05:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 00:14:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:14:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 00:15:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 00:16:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:17:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 00:27:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:33:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:35:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:36:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:41:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:52:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:52:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 00:57:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 00:58:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:00:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:05:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:15:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:16:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:16:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:20:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:24:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 01:24:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:30:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:31:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:34:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:35:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 01:35:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:36:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:36:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:37:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:39:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:41:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:47:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:48:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:50:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:51:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 01:51:49 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-03 01:51:50 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-03 01:51:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:53:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 01:55:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:02:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:05:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 02:07:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:10:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:13:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:14:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:16:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:23:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:32:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:34:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 02:45:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:45:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:46:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:47:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 02:47:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 02:47:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 02:47:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 02:47:13 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-03 02:47:14 --> 404 Page Not Found: Home/home
ERROR - 2023-08-03 02:59:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:02:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:04:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:11:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:11:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:15:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:16:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 03:19:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 03:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 03:21:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:22:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 03:22:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 03:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 03:26:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:27:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:27:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:28:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:29:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:32:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:32:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:33:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:35:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:35:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:43:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:47:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:54:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:55:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:55:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:56:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:56:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 03:57:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:02:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:03:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:03:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:10:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:10:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:10:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:11:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:11:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:12:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:12:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:13:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:13:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:13:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:14:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:14:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:16:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:17:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 04:17:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:17:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:18:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:18:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 04:19:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:20:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:21:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:22:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:22:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:24:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:24:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:24:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:24:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:25:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:26:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:27:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:27:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:28:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:31:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:31:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:32:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:32:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:32:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:32:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:33:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:33:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 04:34:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 04:34:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 04:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:35:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:35:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:36:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:37:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:38:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:38:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:39:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:39:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:43:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:44:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:45:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:46:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:48:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:48:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:48:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:50:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:51:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:51:29 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 04:51:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:51:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 04:52:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:53:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:54:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:55:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:55:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 04:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:03:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:06:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:06:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:07:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:07:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:07:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:08:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:08:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:08:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:09:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:10:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 05:10:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:10:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:10:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:11:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 05:18:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:20:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 05:20:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:21:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:22:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:24:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:26:17 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-08-03 05:26:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:26:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:27:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:30:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:31:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:32:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:33:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:34:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:38:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:42:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:43:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:45:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:45:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:46:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:47:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:49:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:50:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:52:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:52:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:53:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:54:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:56:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:56:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:56:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:56:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 05:59:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:02:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:02:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:02:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:03:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:03:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 06:04:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:04:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:04:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:04:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:06:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:06:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:10:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:11:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:11:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:13:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:14:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:15:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:15:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:15:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:15:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:15:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:15:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:16:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 06:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 06:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 06:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 06:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 06:16:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:16:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:16:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:16:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:16:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:16:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:17:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:17:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:17:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:17:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:17:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:18:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:19:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:20:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:22:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:22:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:22:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:22:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:23:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:23:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:23:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:24:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:25:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:27:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:27:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:27:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:28:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:28:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:28:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:29:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:29:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:29:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:29:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:29:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:30:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:30:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:30:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:30:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:31:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:31:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:31:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:31:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:32:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:32:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:33:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:33:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:34:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:34:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:34:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:34:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:34:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:34:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:35:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:35:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:35:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:36:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:36:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:36:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:36:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:37:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:38:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:38:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:38:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:39:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:39:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:39:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:39:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:40:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:40:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:40:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:40:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:41:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:42:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:42:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:43:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:43:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:43:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:43:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:43:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:44:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:45:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:45:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:46:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:46:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:47:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:47:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:47:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:47:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 06:48:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 06:48:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 06:48:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:48:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:50:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:50:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:50:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:50:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:51:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:52:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:52:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 06:53:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:53:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:53:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 06:54:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:55:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:58:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 06:59:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 06:59:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:00:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:01:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:01:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 07:03:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:03:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:04:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:05:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:06:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:07:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:08:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:09:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:09:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:10:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:10:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:10:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:11:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:14:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:14:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:15:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:16:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:16:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:17:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:17:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:18:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:19:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:19:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:20:07 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:20:18 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:20:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:20:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:21:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:22:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 07:22:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:22:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:22:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:22:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:25:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:25:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:25:32 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:32 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:33 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:33 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:33 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:33 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:34 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:34 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:25:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:25:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:26:55 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-03 07:27:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:28:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:29:03 --> Could not find the language line "Bracelets"
ERROR - 2023-08-03 07:29:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:29:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:30:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:30:34 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:30:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:31:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:31:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:31:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:32:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:32:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:32:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:32:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:33:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:34:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:34:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:34:04 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:34:18 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:34:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:34:33 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:34:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:34:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:34:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:34:52 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:35:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:35:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:35:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:35:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 07:35:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:35:42 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:35:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 07:36:05 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:36:26 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:36:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:37:53 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:38:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:38:14 --> Could not find the language line "Other"
ERROR - 2023-08-03 07:38:30 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:38:44 --> Could not find the language line "Other"
ERROR - 2023-08-03 07:39:04 --> Could not find the language line "Other"
ERROR - 2023-08-03 07:39:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:39:17 --> Could not find the language line "Other"
ERROR - 2023-08-03 07:39:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:39:41 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 07:39:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:39:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 07:39:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:40:06 --> Could not find the language line "Hair%20"
ERROR - 2023-08-03 07:40:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:42:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:42:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:42:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 07:42:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 07:42:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 07:43:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:43:57 --> Could not find the language line "Socks"
ERROR - 2023-08-03 07:43:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:45:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:45:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 07:47:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:47:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:48:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:48:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:49:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:49:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:50:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 07:50:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 07:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:52:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:52:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:54:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:54:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:55:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:56:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:56:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:57:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:58:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:58:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 07:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 07:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:00:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:00:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:02:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:02:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:02:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:02:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:03:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:03:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:03:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:03:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:04:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:07:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:08:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:09:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:09:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 08:09:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 08:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:10:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:10:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 08:10:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 08:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:11:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:12:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:12:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:13:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:13:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:14:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:14:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:14:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:15:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:15:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:15:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 08:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:15:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:16:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:17:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:17:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:17:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:20:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:20:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:21:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 08:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:22:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 08:23:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:23:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:24:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:24:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:26:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:26:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:27:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:32:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:32:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:34:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 08:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:35:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:37:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:37:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:39:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:40:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:40:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:43:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:44:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:44:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:44:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:44:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:45:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:47:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:50:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:50:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:55:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:56:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 08:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:56:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 08:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:59:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:59:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 08:59:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 08:59:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 08:59:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 08:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:00:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 09:00:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:02:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:02:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:05:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:09:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:11:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 09:12:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:15:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:16:04 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:16:18 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:16:31 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:16:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:16:43 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:16:58 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:17:14 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:17:32 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-03 09:17:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:18:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:19:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:21:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:21:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:22:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 09:22:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:23:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:24:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:24:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:24:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:24:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:26:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:28:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:29:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:31:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:32:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:35:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:36:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:36:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:36:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:37:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:37:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:37:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:38:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:40:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:40:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:40:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 09:42:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:43:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:43:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:43:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:44:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:45:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:46:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:46:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 09:46:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '17'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 09:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:48:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:48:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:50:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:52:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:53:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:54:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:55:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:55:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:55:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:56:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:56:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:56:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:57:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:57:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:57:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:57:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:57:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:58:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:58:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:58:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 09:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 09:58:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 09:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 09:59:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 09:59:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:00:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:00:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:00:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:02:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:02:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:02:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:03:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:04:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:04:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:04:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:04:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:04:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:04:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 10:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '10'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 10:06:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:07:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 10:07:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 10:07:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:07:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:08:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 10:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:08:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:10:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:10:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:11:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:12:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:12:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:12:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:13:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:13:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:14:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:14:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:15:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:17:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:17:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:17:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:18:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:18:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:18:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:18:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 10:18:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 10:19:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:20:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:21:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:21:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:21:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:21:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 10:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 15 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` >= '12'
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 10:22:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:22:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:22:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:23:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:24:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:25:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:25:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:25:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:25:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:27:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:28:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:28:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:28:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:28:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:28:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:29:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:31:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:31:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:32:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:32:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:32:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:32:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:33:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:33:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:34:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:34:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:34:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:35:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:35:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:37:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:37:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:39:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:39:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:41:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:44:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:45:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 10:46:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:46:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:46:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:47:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:49:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 10:49:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:49:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:50:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:50:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:50:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:50:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:50:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:51:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:51:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:51:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:51:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:51:45 --> Could not find the language line "Socks"
ERROR - 2023-08-03 10:52:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:52:12 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-03 10:52:24 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-03 10:52:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 10:52:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 10:52:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:52:55 --> Could not find the language line "Socks"
ERROR - 2023-08-03 10:54:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:54:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:55:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:55:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:55:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:56:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:56:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:57:00 --> Could not find the language line "Other"
ERROR - 2023-08-03 10:57:09 --> Could not find the language line "Other"
ERROR - 2023-08-03 10:57:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:57:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 10:57:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:58:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 10:58:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 10:58:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:59:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:59:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:59:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 10:59:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 10:59:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:00:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:00:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:00:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:00:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:01:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:01:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 11:02:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:03:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:03:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:04:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:04:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 11:04:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:04:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:05:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:05:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:06:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:06:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:07:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:07:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 11:08:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:08:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:08:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:08:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:09:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:09:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:09:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:10:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:10:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:10:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:10:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:10:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:10:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:10:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:11:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:12:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:13:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 11:14:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:14:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:15:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:16:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:16:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:17:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:17:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:18:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:20:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:20:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:20:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:20:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:20:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:21:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:22:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:22:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:24:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:26:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:27:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:28:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:28:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:29:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:29:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:29:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:29:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:31:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:33:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:33:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:35:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:35:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:35:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:35:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:35:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:37:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:37:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:38:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:38:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 11:39:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:40:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:40:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:41:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:41:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:44:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:45:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:45:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:45:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:45:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:46:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:46:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:47:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:47:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:48:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:49:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:51:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:52:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:52:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 11:53:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:53:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:54:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:57:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 11:58:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:01:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:03:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:05:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:05:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:05:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:05:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:05:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:07:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:08:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:08:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 12:08:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 12:08:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:09:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:09:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 12:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 12:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:10:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:10:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:10:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:11:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:11:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:12:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:12:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:13:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:14:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:15:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:16:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:16:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:18:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:18:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:19:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:19:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:19:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:20:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:21:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:21:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:23:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:23:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:23:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:24:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:25:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:25:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:26:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 12:26:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:27:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:27:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:27:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:29:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 12:30:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:30:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 12:31:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:33:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:34:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:35:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:35:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 12:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:37:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:37:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:37:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:37:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:37:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:38:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:38:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:38:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:39:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:40:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:40:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:42:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:42:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:42:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:43:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:43:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:43:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:43:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:45:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:45:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:46:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:48:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:49:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:49:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:50:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:50:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:50:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:50:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:51:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:53:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:53:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:54:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:55:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 12:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('L', 'XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 12:55:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:56:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:56:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:56:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:56:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:57:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:58:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 12:59:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:59:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:59:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 12:59:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 12:59:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:00:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:01:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:01:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:01:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:01:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:02:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:02:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:02:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:03:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:03:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:03:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:04:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:04:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:05:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:05:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:07:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:08:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:08:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:08:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:08:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:08:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:08:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:10:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:10:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:13:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:15:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:15:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:15:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:16:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:16:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:16:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:16:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:16:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:17:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:17:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:17:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:18:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:20:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:21:56 --> Could not find the language line "assets"
ERROR - 2023-08-03 13:22:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:24:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:25:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 13:25:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:25:58 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 13:26:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 13:26:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 13:26:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:26:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:26:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:26:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:26:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 13:26:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 13:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:26:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:26:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:27:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:27:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:27:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:27:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:30:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:30:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:30:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:30:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:32:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:32:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:33:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:34:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:35:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:36:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-03 13:36:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-03 13:36:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-03 13:36:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-03 13:36:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:38:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:38:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:40:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:40:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:41:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:42:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:42:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:43:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:43:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:43:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 13:44:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:44:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:44:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:45:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:45:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:46:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:46:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:46:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:47:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:48:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:48:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:49:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 13:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:52:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:52:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:53:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:53:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:53:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:54:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:57:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:58:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:58:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:58:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 13:59:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 13:59:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:59:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 13:59:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 13:59:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 13:59:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 14:00:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:00:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:00:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:00:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:00:54 --> Could not find the language line "Bracelets"
ERROR - 2023-08-03 14:01:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:01:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:01:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:01:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:01:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:01:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 14:02:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:02:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:02:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:03:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:03:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:03:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:03:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:03:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:03:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:03:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:03:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:04:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:04:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:04:33 --> Could not find the language line "Socks"
ERROR - 2023-08-03 14:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:07:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:09:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:11:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:11:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:12:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:12:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:13:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:13:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:14:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:15:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:15:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:15:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:17:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:17:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:18:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:21:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:21:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:21:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:21:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:24:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:26:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:26:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 14:26:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-03 14:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:27:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:27:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:28:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:28:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:28:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:28:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:30:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:30:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:30:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:30:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:30:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:30:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:30:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:31:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:32:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:32:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:32:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:32:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:33:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-03 14:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-03 14:33:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:33:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:34:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:34:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:34:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:34:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:34:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:35:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:35:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:35:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:35:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:36:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:37:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:37:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:39:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:39:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:40:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:40:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:40:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:40:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:42:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:44:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 14:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:44:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:45:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:45:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:46:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:46:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:46:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:46:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:47:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:48:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:48:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:49:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:49:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:50:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:51:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:52:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:54:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:54:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:54:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:55:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 14:58:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:58:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:59:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:59:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 14:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:00:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 15:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 15:01:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:01:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:01:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:02:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:02:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:04:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:04:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:05:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:06:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:07:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:08:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:09:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:10:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:12:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:12:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:12:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:13:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:13:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:13:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:14:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:14:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:16:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:17:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:17:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:18:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:18:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:19:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:19:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:19:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:20:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:23:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:25:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:27:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:30:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:33:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:33:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:33:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:35:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:36:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:37:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:37:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:38:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:38:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:38:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:39:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:39:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:39:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:41:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:42:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:43:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:45:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:47:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:47:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:48:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:50:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:50:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:51:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:52:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:55:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:56:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:56:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:56:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:56:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:57:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:58:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:59:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:59:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 15:59:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:01:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:01:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:03:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:03:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:03:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:04:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:05:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:05:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:06:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:07:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:07:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:08:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:10:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:10:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:11:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:12:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:13:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:14:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:14:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:14:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:14:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:15:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:15:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:15:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:15:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:16:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:16:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:16:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:17:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:17:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:17:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:17:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:18:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:18:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:18:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:19:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:19:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:20:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:22:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:23:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:23:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:24:03 --> 404 Page Not Found: Env/index
ERROR - 2023-08-03 16:24:03 --> 404 Page Not Found: Env/index
ERROR - 2023-08-03 16:26:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:27:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:27:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:27:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 16:31:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:31:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:32:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:32:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:33:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:34:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:34:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:35:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 16:36:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:39:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:39:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:40:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:40:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:40:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:40:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:41:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:41:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:41:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:42:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:42:28 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-03 16:43:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:43:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:43:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:43:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:44:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:44:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:44:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:45:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:45:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 16:45:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:46:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:46:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:46:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:46:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:47:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 16:47:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:48:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:48:33 --> Could not find the language line "Socks"
ERROR - 2023-08-03 16:48:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:48:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:48:44 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 16:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 16:48:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 16:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 16:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 16:49:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 16:49:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:49:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 16:49:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 16:50:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:50:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:53:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:55:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:55:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:55:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:55:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:56:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:58:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 16:59:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:01:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:02:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:02:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:02:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:02:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 17:05:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:06:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:06:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:08:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:08:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:08:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:08:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:08:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:11:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:11:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:12:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:13:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:13:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:14:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:16:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:16:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:17:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:19:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:19:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:20:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:23:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:23:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:23:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:24:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:24:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:25:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:25:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:26:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:27:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:29:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:30:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:30:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:30:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:31:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:32:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:32:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:33:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:33:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:33:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 17:36:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:36:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:37:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:37:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:37:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:39:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:39:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:40:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:40:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:41:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:42:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:42:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:43:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:43:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:44:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:44:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-03 17:44:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:45:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:45:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:45:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:46:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:47:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:48:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:48:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:48:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:50:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:50:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:52:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:53:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:53:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:53:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:54:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:55:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 17:55:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:55:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:55:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:56:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:57:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:58:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 17:59:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:00:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:00:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:00:49 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 18:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:01:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:01:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:01:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:02:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:02:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:05:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:05:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:06:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:07:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:08:26 --> Could not find the language line "Bracelets"
ERROR - 2023-08-03 18:09:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:09:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:10:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:11:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:11:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:13:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:13:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:15:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:15:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:15:34 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-08-03 18:15:37 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-08-03 18:15:40 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-03 18:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:16:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:16:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:17:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:18:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:18:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:18:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:19:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:19:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:20:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:21:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:21:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:21:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:21:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:22:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:23:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:23:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:25:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:25:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:25:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:26:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:27:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:27:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:28:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 18:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:28:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:28:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:31:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:31:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:31:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:31:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:33:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:34:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:34:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:35:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:35:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:35:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-03 18:35:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-03 18:35:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-03 18:36:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-03 18:36:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:36:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:36:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:36:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-03 18:37:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:37:24 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:37:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:38:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:38:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:38:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:38:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-03 18:39:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:39:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:39:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:40:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:41:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:42:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:42:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:42:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:42:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 18:42:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:44:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:45:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:45:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:46:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:46:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:46:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:47:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:47:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:48:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:49:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:49:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:50:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 18:50:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:52:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:52:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:52:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:52:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:52:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:53:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:53:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:53:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:54:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:55:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:55:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:56:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:56:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:57:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:57:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:58:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 18:58:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:00:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:00:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:00:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:01:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:01:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:01:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:02:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:03:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:04:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:04:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:04:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:05:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:07:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:07:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:07:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:08:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:09:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:09:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:10:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:11:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:12:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:12:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:12:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:13:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:13:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:13:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 19:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:16:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:17:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:17:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:20:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:20:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:20:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:21:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 19:21:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:21:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:22:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:22:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:22:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 19:22:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:23:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:23:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:24:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:24:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:25:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:25:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:25:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:25:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:26:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:26:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:26:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:27:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:27:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:27:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:28:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:28:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:29:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:30:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:31:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:32:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:33:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:33:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:33:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:33:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:34:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:35:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 19:36:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:36:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:37:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:38:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:38:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:38:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:38:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:39:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:40:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:40:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:41:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:41:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:41:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 19:41:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 19:42:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:42:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:43:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:44:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:44:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:45:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:46:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:47:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:48:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:49:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:49:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:49:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:50:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:51:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:51:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:51:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:51:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:54:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:54:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:54:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:55:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:55:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:55:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:56:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:56:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:56:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:56:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:56:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 19:58:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 19:59:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:00:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:01:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:02:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:02:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-03 20:02:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:02:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:02:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:03:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:03:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:04:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:04:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:04:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:05:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:05:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:07:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:07:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:07:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:07:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:08:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:08:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:08:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:08:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:08:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:08:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:09:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:09:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:09:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:09:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:09:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:09:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:09:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:09:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:09:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:09:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:10:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:10:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:10:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:10:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:11:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:11:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:11:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:11:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:11:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:12:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:12:47 --> Could not find the language line "Socks"
ERROR - 2023-08-03 20:13:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:13:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:13:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:14:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:14:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:15:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:15:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:15:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:15:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:16:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:16:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:17:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:17:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:17:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:17:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:17:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:17:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-03 20:18:03 --> Could not find the language line "Other"
ERROR - 2023-08-03 20:18:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:18:16 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 20:18:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:18:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:18:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:18:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:18:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:18:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 20:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:19:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-03 20:19:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-03 20:19:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:19:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:19:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:19:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:19:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:20:18 --> Could not find the language line "Bracelets"
ERROR - 2023-08-03 20:20:37 --> Could not find the language line "Bracelets"
ERROR - 2023-08-03 20:20:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:20:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:20:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:20:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:21:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:21:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:21:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:21:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:22:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:23:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:23:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:24:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:24:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-03 20:24:46 --> Could not find the language line "Perfume"
ERROR - 2023-08-03 20:24:52 --> Could not find the language line "Other"
ERROR - 2023-08-03 20:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:25:16 --> Could not find the language line "Other"
ERROR - 2023-08-03 20:25:21 --> Could not find the language line "Socks"
ERROR - 2023-08-03 20:25:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:28:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:41:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:42:21 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:42:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:43:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:43:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:44:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:44:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:44:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:44:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-03 20:44:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:45:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:45:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:45:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:46:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:46:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:46:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:47:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:48:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:49:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:50:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:51:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:51:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:51:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:52:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:52:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 20:52:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:52:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:52:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:53:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:54:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:11 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:55:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:56:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:56:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:57:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:57:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-03 20:58:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:58:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:59:32 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:59:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 20:59:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:00:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:02:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:02:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:03:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:03:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:04:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:04:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:04:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:04:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:04:52 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:06:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:06:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:07:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:08:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:08:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:08:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:09:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:09:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:10:02 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:10:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:10:59 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:11:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:11:26 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:12:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:13:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:13:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:13:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:13:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:14:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:15:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:15:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:16:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:17:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:17:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:18:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:18:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:19:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 21:20:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:21:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 21:22:28 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:22:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:22:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:23:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:23:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:23:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:23:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:23:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:24:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:24:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 21:24:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:25:18 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:25:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:25:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 21:27:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:27:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:27:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:28:33 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:28:37 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:29:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:31:07 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:32:14 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:32:15 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:33:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:40:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 21:46:00 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:25 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:42 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:46 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:01:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:02:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:03:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:03:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:04:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:04:56 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:05:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:05:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:05:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:05:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:06:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:06:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:06:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:07:06 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:08:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:08:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:11:03 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:11:38 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:12:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:12:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:14:22 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:14:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:14:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:16:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:17:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:17:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:17:54 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:18:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:20:12 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:20:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:21:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:23:01 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:25:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:29:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:30:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:31:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:31:58 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:32:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:33:36 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:36:30 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:37:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:39:43 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:39:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:41:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:42:27 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:42:48 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:42:57 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:43:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:47:55 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:51:13 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:51:16 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:52:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:52:20 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:53:34 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:55:09 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:55:23 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:55:40 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:56:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:57:35 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:59:17 --> Could not find the language line "Home"
ERROR - 2023-08-03 22:59:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:01:08 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:04:47 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:07:19 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:09:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:13:05 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-03 23:17:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:18:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:23:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:23:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:23:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:25:05 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:25:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:28:55 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-03 23:30:39 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:30:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:30:49 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:31:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:31:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:32:50 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:37:41 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:41:31 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:46:51 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:47:10 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:49:04 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:52:29 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:54:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-03 23:54:45 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:55:44 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:58:53 --> Could not find the language line "Home"
ERROR - 2023-08-03 23:59:31 --> Could not find the language line "Home"
