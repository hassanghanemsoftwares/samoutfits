<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-12 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 00:12:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-12 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 00:43:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 00:51:10 --> Could not find the language line "Home"
ERROR - 2023-03-12 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-03-12 01:43:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 02:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 02:21:10 --> Could not find the language line "Home"
ERROR - 2023-03-12 02:23:22 --> Could not find the language line "Home"
ERROR - 2023-03-12 02:25:41 --> Could not find the language line "Home"
ERROR - 2023-03-12 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 02:47:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 03:00:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 03:04:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 03:21:33 --> Could not find the language line "Home"
ERROR - 2023-03-12 03:29:37 --> Could not find the language line "Home"
ERROR - 2023-03-12 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 03:31:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 03:41:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 04:13:17 --> Could not find the language line "Home"
ERROR - 2023-03-12 04:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 04:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 04:21:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:07:31 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 05:11:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 05:13:58 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 05:27:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 05:34:24 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-12 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:05:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:12:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:47:19 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:48:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:48:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:49:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:49:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 06:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:50:16 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:50:24 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:50:41 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:51:36 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:51:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:52:44 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:54:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:54:57 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:56:18 --> Could not find the language line "Home"
ERROR - 2023-03-12 06:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 06:58:21 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:06:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 07:16:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:18:49 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:21:53 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 07:22:04 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:22:05 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:23:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:28:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:33:48 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 07:46:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 07:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 07:54:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 07:54:37 --> Could not find the language line "Home"
ERROR - 2023-03-12 07:59:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:08:55 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 08:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:14:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:17:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-12 08:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:18:49 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:42:17 --> Could not find the language line "Home"
ERROR - 2023-03-12 08:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 08:52:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 08:53:08 --> Could not find the language line "socks"
ERROR - 2023-03-12 08:55:56 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:04:07 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:04:23 --> Could not find the language line "Socks"
ERROR - 2023-03-12 09:04:52 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:06:22 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:06:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:06:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:07:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 09:08:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:13:22 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:13:23 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-12 09:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:26:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:27:47 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:33:46 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:35:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:38:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:18 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:42:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:42:50 --> 404 Page Not Found: Assets/images
ERROR - 2023-03-12 09:42:50 --> 404 Page Not Found: Assets/images
ERROR - 2023-03-12 09:43:03 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:45:33 --> Could not find the language line "Home"
ERROR - 2023-03-12 09:50:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 09:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 09:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:02:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 10:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:05:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:05:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:05:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:05:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:06:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 10:09:58 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:29:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:31:06 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:32:42 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 10:35:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:36:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:37:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 10:37:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 10:52:23 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:06:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:13:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:13:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 11:36:33 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:42:53 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:43:25 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:44:02 --> Could not find the language line "Home"
ERROR - 2023-03-12 11:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:07:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:07:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:12:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:13:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:13:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:13:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:13:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:14:43 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:19:37 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:19:43 --> Could not find the language line "Bracelets"
ERROR - 2023-03-12 12:26:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:26:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:29:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:29:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 12:51:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:51:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:51:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:51:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:51:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:51:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:53:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:54:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 12:54:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 12:54:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:18:45 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:21:24 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:21:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:21:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 13:21:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:22:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:22:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:22:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:22:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 13:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:22:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 13:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:40:17 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:40:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:40:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 13:40:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:50:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 13:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:53:55 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:54:33 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:56:27 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:56:48 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:57:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 13:58:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:03:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:08:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:09:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:10:18 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:13:04 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:16:54 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:35:42 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:39:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 14:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 14:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 14:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 14:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:40:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 14:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:41:03 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:42:02 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:55:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 14:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 14:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:05:54 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:09:43 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:15:00 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:28:18 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:34:56 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:51:43 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:54:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:56:02 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:56:26 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:57:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 15:57:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 15:59:08 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:59:09 --> Could not find the language line "Home"
ERROR - 2023-03-12 15:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 15:59:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 16:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-12 16:08:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 16:08:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 16:12:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 16:12:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 16:25:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 16:45:52 --> Could not find the language line "Home"
ERROR - 2023-03-12 16:47:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:29:21 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:30:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:35:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-12 17:37:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:37:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:38:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:38:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:38:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:38:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:39:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:40:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:41:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:44:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:44:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 17:46:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 17:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:48:02 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:48:33 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:50:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:50:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:52:09 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:52:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:52:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 17:54:35 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:55:19 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:56:27 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:56:40 --> Could not find the language line "Perfume"
ERROR - 2023-03-12 17:56:52 --> Could not find the language line "Home"
ERROR - 2023-03-12 17:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 17:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:00:34 --> Could not find the language line "Bracelets"
ERROR - 2023-03-12 18:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:18:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:19:15 --> 404 Page Not Found: Wp-ccphp/index
ERROR - 2023-03-12 18:19:15 --> 404 Page Not Found: Wp-commentinphp/index
ERROR - 2023-03-12 18:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:24:01 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:24:08 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:25:32 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:28:40 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:29:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:41:21 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-12 18:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:45:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:46:06 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:46:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 18:46:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 18:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:52:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 18:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 18:53:59 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:54:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 18:54:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 18:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:55:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 18:55:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 18:55:46 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:56:25 --> Could not find the language line "Home"
ERROR - 2023-03-12 18:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 18:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 19:05:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 19:05:52 --> Could not find the language line "Home"
ERROR - 2023-03-12 19:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 19:25:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-12 19:39:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 19:39:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 19:40:00 --> 404 Page Not Found: Admin/assets
ERROR - 2023-03-12 19:40:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 19:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 19:44:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:06:20 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:07:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:17:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:35:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 20:48:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:50:34 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:51:49 --> Could not find the language line "Perfume"
ERROR - 2023-03-12 20:51:55 --> Could not find the language line "Home"
ERROR - 2023-03-12 20:51:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-12 20:52:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-12 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:08:17 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:09:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:09:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:09:39 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:30:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:31:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 21:31:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 21:31:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 21:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 21:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 21:33:25 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:35:02 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:35:42 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:35:43 --> Could not find the language line "Home"
ERROR - 2023-03-12 21:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 21:48:13 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:08:54 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:09:01 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:15:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-12 22:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:18:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:18:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:21:59 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:24:55 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:29:38 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:35:28 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 22:37:02 --> Could not find the language line "Bracelets"
ERROR - 2023-03-12 22:37:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 22:37:21 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:37:28 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 22:37:44 --> Could not find the language line "Bracelets"
ERROR - 2023-03-12 22:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 22:37:51 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:37:53 --> Could not find the language line "Bracelets"
ERROR - 2023-03-12 22:37:56 --> Could not find the language line "Home"
ERROR - 2023-03-12 22:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 22:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-12 22:40:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:41:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:41:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:42:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-12 22:59:24 --> Could not find the language line "Home"
ERROR - 2023-03-12 23:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-12 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-12 23:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 23:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-12 23:58:48 --> Could not find the language line "Home"
