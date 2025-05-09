<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-29 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 00:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-29 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 01:43:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 01:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 02:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 02:26:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 02:45:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:12:37 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:15:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 03:26:56 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:26:58 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:00 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 03:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:10 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:11 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:11 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:12 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:12 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:12 --> 404 Page Not Found: Contact/index
ERROR - 2023-07-29 03:27:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 03:27:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:39 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:42 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:45 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:27:48 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:28:58 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:29:52 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:33:46 --> Could not find the language line "Home"
ERROR - 2023-07-29 03:45:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 04:57:56 --> Could not find the language line "Home"
ERROR - 2023-07-29 04:57:58 --> Could not find the language line "Home"
ERROR - 2023-07-29 04:58:34 --> Could not find the language line "Home"
ERROR - 2023-07-29 05:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 05:05:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 05:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 05:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 05:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 05:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:02:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-29 06:02:20 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 06:14:48 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:17:00 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:18:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 06:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 06:20:43 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:21:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 06:29:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:31:49 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 06:32:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:33:35 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 06:34:51 --> Could not find the language line "Home"
ERROR - 2023-07-29 06:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 06:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 06:47:43 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:01:38 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:08:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:17:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:28:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 07:31:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-29 07:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:48:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-29 07:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 07:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 08:14:49 --> Could not find the language line "Home"
ERROR - 2023-07-29 08:28:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:00:25 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 09:25:54 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 09:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 09:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:46:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:46:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 09:46:51 --> Could not find the language line "Home"
ERROR - 2023-07-29 09:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 10:04:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 10:15:42 --> Could not find the language line "Home"
ERROR - 2023-07-29 10:26:20 --> Could not find the language line "Home"
ERROR - 2023-07-29 10:27:28 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-07-29 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 10:31:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 10:33:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 10:33:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:00:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:02:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 11:27:24 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:27:25 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:27:26 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:27:26 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:35:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:35:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:42:39 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:42:44 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:42:50 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 11:44:55 --> Could not find the language line "Home"
ERROR - 2023-07-29 11:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:16:11 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:16:19 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:16:21 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:20:23 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:24:10 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:24:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 12:24:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 13:02:39 --> Could not find the language line "Home"
ERROR - 2023-07-29 13:03:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 13:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 13:03:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 13:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-29 13:59:18 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:00:27 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:12:09 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:16:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 14:21:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:21:30 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:28:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 14:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:50:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:53:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 14:56:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 14:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:10:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 15:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:14:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:14:14 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-29 15:14:14 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-29 15:14:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:14:15 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-29 15:14:15 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-29 15:14:16 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-29 15:14:16 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-29 15:14:16 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-29 15:14:16 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-29 15:14:16 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-07-29 15:14:17 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-29 15:14:17 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-29 15:14:17 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-29 15:14:17 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-29 15:14:18 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-07-29 15:14:18 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-29 15:14:18 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-29 15:14:18 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-29 15:14:18 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-29 15:15:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:16:48 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:20:28 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:20:28 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-29 15:20:29 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-29 15:20:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:20:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-29 15:20:30 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-29 15:20:30 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-29 15:20:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-29 15:20:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-29 15:20:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-29 15:20:31 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-07-29 15:20:32 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-29 15:20:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-29 15:20:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-29 15:20:32 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-29 15:20:33 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-07-29 15:20:33 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-29 15:20:33 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-29 15:20:34 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-29 15:20:35 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-29 15:24:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 15:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:31:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:34:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:35:28 --> Could not find the language line "Socks"
ERROR - 2023-07-29 15:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 15:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 15:37:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 16:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 16:04:48 --> Could not find the language line "Other"
ERROR - 2023-07-29 16:09:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:09:30 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:18:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-29 16:18:23 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:27:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 16:30:03 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:31:08 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:38:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 16:39:51 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:43:56 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:44:02 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:45:55 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:46:49 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:46:52 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:53:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 16:53:37 --> Could not find the language line "Other"
ERROR - 2023-07-29 16:57:31 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:00:36 --> Could not find the language line "Other"
ERROR - 2023-07-29 17:01:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:01:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:01:48 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:05:32 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:14:34 --> Could not find the language line "Other"
ERROR - 2023-07-29 17:21:36 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:21:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:22:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 17:22:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:22:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:22:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:28:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:38:32 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:39:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:39:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:41:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:43:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:44:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:44:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:44:38 --> Could not find the language line "Home"
ERROR - 2023-07-29 17:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:45:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:46:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 17:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 17:53:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-29 17:55:11 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:00:45 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:04:42 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:14:35 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:34:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:34:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 18:40:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:07:09 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:08:38 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:16:01 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:25:46 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:25:47 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:25:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:26:07 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:26:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-29 19:27:26 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:27:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:27:41 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:27:48 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:28:37 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:28:45 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:29:09 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:29:27 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:29:35 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:29:48 --> Could not find the language line "Bracelets"
ERROR - 2023-07-29 19:29:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:29:50 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:30:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:30:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:30:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:30:32 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:30:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:30:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:30:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:31:54 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:31:57 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:31:57 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:31:58 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:32:02 --> Could not find the language line "Perfume"
ERROR - 2023-07-29 19:32:10 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:32:33 --> Could not find the language line "Socks"
ERROR - 2023-07-29 19:32:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 19:32:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 19:32:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 19:33:17 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-07-29 19:34:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 19:35:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:36:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:36:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:38:41 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-29 19:39:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:39:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:39:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:40:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:41:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:41:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:43:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:43:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:43:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:44:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 19:45:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:45:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 19:45:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:45:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:46:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:46:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:46:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 19:47:42 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:47:42 --> Could not find the language line "Other"
ERROR - 2023-07-29 19:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:01:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:19 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:01:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:11:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:11:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:12:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:12:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:12:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:12:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:13:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:13:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:14:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:14:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:14:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:14:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:15:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:15:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:15:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:16:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:16:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:17:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:20:46 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:23:50 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:23:52 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:24:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:24:22 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:24:52 --> Could not find the language line "Bracelets"
ERROR - 2023-07-29 20:24:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:25:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:25:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:25:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:25:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:25:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:25:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:26:26 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:26:26 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:26:27 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:26:27 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:26:27 --> Could not find the language line "Perfume"
ERROR - 2023-07-29 20:27:02 --> Could not find the language line "Socks"
ERROR - 2023-07-29 20:27:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 20:27:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 20:27:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 20:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:30:57 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-29 20:32:29 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:33:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 20:39:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:39:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:39:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:39:07 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:39:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:39:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 20:42:36 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:42:37 --> Could not find the language line "Other"
ERROR - 2023-07-29 20:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:47:23 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:51:27 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:52:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:52:38 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 20:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 20:56:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:56:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:58:02 --> Could not find the language line "Home"
ERROR - 2023-07-29 20:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:59:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 20:59:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 20:59:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:00:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:00:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:00:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:01:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:01:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:01:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:02:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:02:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:03:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-29 21:04:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:04:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 21:18:19 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:35:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-29 21:37:25 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:38:39 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:38:41 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:38:56 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:16 --> Could not find the language line "Bracelets"
ERROR - 2023-07-29 21:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:39:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:39:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 21:39:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:39:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:39:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:39:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-29 21:40:32 --> Could not find the language line "Other"
ERROR - 2023-07-29 21:40:32 --> Could not find the language line "Other"
ERROR - 2023-07-29 21:40:32 --> Could not find the language line "Other"
ERROR - 2023-07-29 21:40:33 --> Could not find the language line "Other"
ERROR - 2023-07-29 21:40:44 --> Could not find the language line "Perfume"
ERROR - 2023-07-29 21:40:50 --> Could not find the language line "Socks"
ERROR - 2023-07-29 21:41:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-29 21:41:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 21:41:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 21:42:33 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-29 21:43:33 --> Could not find the language line "Home"
ERROR - 2023-07-29 21:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 21:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:18:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-29 22:25:51 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:25:52 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:30:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:31:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-29 22:32:58 --> 404 Page Not Found: C069-shoes/index
ERROR - 2023-07-29 22:35:53 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:36:03 --> Could not find the language line "Socks"
ERROR - 2023-07-29 22:36:20 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:36:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 22:37:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:37:32 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:45:30 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:46:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:46:40 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:46:51 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-29 22:47:46 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:48:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 22:49:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-29 22:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 22:49:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:49:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-29 22:50:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-29 22:50:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:38 --> Could not find the language line "Home"
ERROR - 2023-07-29 22:50:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 22:50:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-29 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-29 23:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-29 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-29 23:44:47 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-29 23:54:47 --> Could not find the language line "Home"
ERROR - 2023-07-29 23:58:00 --> Could not find the language line "Home"
