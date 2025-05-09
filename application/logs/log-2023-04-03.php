<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-03 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 00:16:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 00:29:08 --> Could not find the language line "Home"
ERROR - 2023-04-03 00:29:09 --> Could not find the language line "Home"
ERROR - 2023-04-03 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 00:41:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 00:43:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 00:46:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 00:52:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-03 01:26:49 --> Could not find the language line "Home"
ERROR - 2023-04-03 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 01:39:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 01:49:55 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:00:29 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 02:20:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:22:07 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:22:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 02:23:01 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 02:36:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 02:42:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 02:47:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 02:54:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:03:22 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:24:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:50:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:50:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:50:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 03:50:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 04:10:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 04:14:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 04:49:45 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-04-03 04:49:56 --> 404 Page Not Found: Sites/default
ERROR - 2023-04-03 04:50:03 --> 404 Page Not Found: Admin/controller
ERROR - 2023-04-03 04:50:09 --> 404 Page Not Found: Uploads/index
ERROR - 2023-04-03 04:50:18 --> 404 Page Not Found: Files/index
ERROR - 2023-04-03 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:38:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 05:46:38 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:16 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:40 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:42 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:52 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:53 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:54 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:47:54 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:57:55 --> Could not find the language line "Home"
ERROR - 2023-04-03 05:58:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:06:16 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:06:23 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:25:33 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:25:36 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 06:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:00:07 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-04-03 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:00:14 --> 404 Page Not Found: Sites/default
ERROR - 2023-04-03 07:00:16 --> 404 Page Not Found: Admin/controller
ERROR - 2023-04-03 07:00:21 --> 404 Page Not Found: Uploads/index
ERROR - 2023-04-03 07:00:31 --> 404 Page Not Found: Files/index
ERROR - 2023-04-03 07:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 07:09:20 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:09:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:23:35 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:29:06 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:30:18 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:30:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:30:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 07:30:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 07:30:56 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:35:41 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:39:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:40:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:43:42 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:44:22 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:46:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:46:52 --> Could not find the language line "Socks"
ERROR - 2023-04-03 07:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 07:55:59 --> Could not find the language line "Home"
ERROR - 2023-04-03 07:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:04:02 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:20:45 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:21:26 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:21:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:22:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:22:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:22:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:22:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:42 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:22:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:22:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:23:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:23:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 08:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:34:28 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:34:28 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:34:31 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:34:32 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:34:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:34:37 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:35:33 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 08:42:41 --> Could not find the language line "Home"
ERROR - 2023-04-03 08:59:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 09:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 09:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 09:56:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 09:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:01:55 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:02:49 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:06:38 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:20:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:21:24 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:21:46 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:21:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:21:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:23:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 10:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:33:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 10:37:32 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:38:36 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:45:03 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:45:31 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:47:16 --> Could not find the language line "Crocs"
ERROR - 2023-04-03 10:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:50:16 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:50:17 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:50:17 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:50:56 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:50:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 10:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 10:55:05 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:56:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-03 10:59:26 --> Could not find the language line "Home"
ERROR - 2023-04-03 10:59:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:15:53 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:28:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:29:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:30:01 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:30:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 11:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 11:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 12:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:09:18 --> Could not find the language line "Home"
ERROR - 2023-04-03 12:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:19:16 --> Could not find the language line "Home"
ERROR - 2023-04-03 12:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 12:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 12:44:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 12:57:54 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:27:10 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-04-03 13:27:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:28:03 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:28:35 --> Could not find the language line "Perfume"
ERROR - 2023-04-03 13:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:28:36 --> Could not find the language line "Perfume"
ERROR - 2023-04-03 13:29:18 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:34:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:35:09 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:44:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 13:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:56:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 13:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 13:59:14 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:12:00 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:12:57 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:15:22 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:19:44 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:51:20 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:57:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 14:58:08 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:58:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 14:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 14:59:35 --> Could not find the language line "Home"
ERROR - 2023-04-03 14:59:40 --> Could not find the language line "Home"
ERROR - 2023-04-03 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 15:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 15:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 15:08:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 15:08:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 15:23:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:06:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 16:10:16 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 16:21:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-03 16:22:16 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-04-03 16:28:07 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:29:09 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:40:05 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:40:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 16:40:24 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:41:06 --> Could not find the language line "Home"
ERROR - 2023-04-03 16:57:36 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:22:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 17:35:23 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:39:40 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 17:40:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 17:40:23 --> Could not find the language line "Home"
ERROR - 2023-04-03 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 18:03:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 18:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:13:51 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:14:54 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 19:15:40 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:32:58 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:35:06 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:35:55 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:36:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:36:37 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:37:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:37:36 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 19:40:21 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:40:47 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:40:48 --> Could not find the language line "Home"
ERROR - 2023-04-03 19:53:45 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:07:34 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:14:01 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:14:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-03 20:14:53 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 20:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:24:05 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 20:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 20:25:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 20:25:33 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:25:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:25:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:26:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:26:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:26:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:26:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 20:26:53 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:27:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:28:15 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:28:32 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:29:43 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:29:58 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-03 20:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 20:30:44 --> Could not find the language line "Bracelets"
ERROR - 2023-04-03 20:44:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-03 20:45:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-03 21:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:00:27 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:00:54 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:04:20 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:04:26 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:04:36 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-03 21:05:33 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:05:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:06:40 --> Could not find the language line "Socks"
ERROR - 2023-04-03 21:06:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:07:01 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:07:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 21:07:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-03 21:07:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:08:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:08:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:09:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:09:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:10:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:10:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:10:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:11:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:11:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:11:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:12:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:12:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:12:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:12:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:13:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:13:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:13:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:13:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:14:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:14:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:15:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:15:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:15:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:15:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 21:16:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:16:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:16:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-03 21:26:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 21:30:06 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 21:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-03 21:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:09:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 22:09:43 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:20:42 --> 404 Page Not Found: Magmi-git/magmi
ERROR - 2023-04-03 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:32:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-03 22:46:12 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:48:30 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:49:29 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:51:39 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:52:32 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-03 22:52:56 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:52:56 --> Could not find the language line "Home"
ERROR - 2023-04-03 22:53:33 --> Could not find the language line "Home"
ERROR - 2023-04-03 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-03 23:13:41 --> Could not find the language line "Home"
ERROR - 2023-04-03 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-03 23:37:52 --> Could not find the language line "Home"
ERROR - 2023-04-03 23:46:12 --> 404 Page Not Found: Assets/css
