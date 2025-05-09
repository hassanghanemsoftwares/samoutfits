<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-21 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:09:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 00:09:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 00:09:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 00:09:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 00:09:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 00:09:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 00:09:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 00:09:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 00:09:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:09:51 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:10:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:11:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:11:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:11:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:11:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:11:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:11:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:12:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:13:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:13:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:13:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:13:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:14:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:14:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:14:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:14:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:14:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:15:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:15:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:15:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:16:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:16:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:16:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:16:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 00:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:16:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:16:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:17:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:17:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:17:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:17:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:18:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:18:32 --> Could not find the language line "Socks"
ERROR - 2023-02-21 00:18:51 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:18:54 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 00:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:19:07 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 00:19:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:21:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:25:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:25:54 --> 404 Page Not Found: Pr/index
ERROR - 2023-02-21 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:35:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:36:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:37:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:50:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:52:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:52:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 00:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 00:58:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:59:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 00:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 01:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 01:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 01:25:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 01:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 01:26:44 --> Could not find the language line "Home"
ERROR - 2023-02-21 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 01:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-02-21 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 02:49:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 02:49:59 --> Could not find the language line "Home"
ERROR - 2023-02-21 02:58:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 02:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 02:58:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 02:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 02:58:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 02:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 02:58:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 02:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 02:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:11:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:30:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:42:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:42:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 03:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:43:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 03:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:43:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 03:43:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 03:50:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 03:57:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:13:44 --> Could not find the language line "socks"
ERROR - 2023-02-21 04:24:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:31:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:32:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 04:38:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:41:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 04:54:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:56:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 04:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:07:36 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:08:32 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:08:37 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 05:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:13:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:23:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:34:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:35:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 05:43:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:43:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:55:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:55:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 05:56:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 05:56:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:10:41 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 06:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 06:15:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:33:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 06:43:39 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:47:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:50:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:51:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 06:51:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 06:51:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 06:51:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 06:51:13 --> 404 Page Not Found: Home/accounts
ERROR - 2023-02-21 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:04:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 07:05:38 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:15:17 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:24:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:27:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 07:27:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 07:27:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 07:27:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 07:27:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 07:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 07:27:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 07:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 07:34:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 07:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 07:50:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-21 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:06:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:23:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:27:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:35:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:44:31 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:45:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:48:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 08:48:17 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:48:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:48:21 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-21 08:48:23 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-21 08:48:23 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:24 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:24 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:24 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:26 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-21 08:48:28 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-21 08:48:28 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:29 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:29 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:29 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:30 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:30 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:30 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:31 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:31 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:32 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-21 08:48:35 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:39 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:39 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:39 --> 404 Page Not Found: Home/home
ERROR - 2023-02-21 08:48:56 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-21 08:48:59 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:49:01 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:01 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-21 08:49:04 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:06 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:10 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:49:11 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:12 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-21 08:49:12 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-21 08:49:13 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-21 08:49:13 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 08:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:49:14 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:15 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:15 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:16 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:16 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:17 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:17 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:17 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:18 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:18 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:18 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:20 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:20 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:21 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:24 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:24 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:25 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:29 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:29 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:33 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:33 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:34 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:38 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:39 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:41 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:41 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:42 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:46 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:46 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:50 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:50 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:50 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:52 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:52 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:52 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:54 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:54 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:54 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:54 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:54 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:55 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:55 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:55 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:55 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:55 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:57 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:57 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:58 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:58 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:58 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:58 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:58 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:59 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:59 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:59 --> Could not find the language line "assets"
ERROR - 2023-02-21 08:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:49:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:50:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:39 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:46 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:50:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 08:51:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:51:08 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 08:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 08:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:51:26 --> Could not find the language line "Socks"
ERROR - 2023-02-21 08:51:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 08:51:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 08:52:01 --> 404 Page Not Found: Products/home
ERROR - 2023-02-21 08:52:05 --> 404 Page Not Found: Products/home
ERROR - 2023-02-21 08:52:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:52:39 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:52:42 --> Could not find the language line "Home"
ERROR - 2023-02-21 08:52:45 --> 404 Page Not Found: Installphp/index
ERROR - 2023-02-21 08:52:45 --> 404 Page Not Found: Util/login.aspx
ERROR - 2023-02-21 08:52:45 --> 404 Page Not Found: Magento_version/index
ERROR - 2023-02-21 08:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 08:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:06:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:07:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:07:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:16:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:16:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:22:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 09:23:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:38:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:38:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:39:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-21 09:51:56 --> Could not find the language line "Home"
ERROR - 2023-02-21 09:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 09:58:01 --> 404 Page Not Found: Products/index
ERROR - 2023-02-21 09:58:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 09:58:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:02:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 10:06:43 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:06:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:25:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:27:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:31:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:31:56 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:32:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 10:32:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 10:33:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 10:33:53 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:34:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:34:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:35:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 10:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 10:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 10:55:29 --> 404 Page Not Found: Products/index
ERROR - 2023-02-21 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:00:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:04:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:12:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:13:02 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:13:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:14:01 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:16:44 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:23:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:23:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:25:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:34:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:34:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:34:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:34:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:34:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:34:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 11:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 11:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:35:33 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:36:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:36:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:51:44 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:56:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 11:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:56:22 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 11:56:38 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 11:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:56:46 --> Could not find the language line "Socks"
ERROR - 2023-02-21 11:56:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:56:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 11:56:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 11:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:57:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 11:57:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 11:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 11:57:57 --> Could not find the language line "Socks"
ERROR - 2023-02-21 11:57:57 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 11:58:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 11:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:08:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 12:15:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 12:15:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:20:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:20:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:20:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 12:26:16 --> Could not find the language line "socks"
ERROR - 2023-02-21 12:26:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:26:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:26:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:26:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:26:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:26:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:26:31 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:26:33 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:26:39 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:26:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:26:46 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:28:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 12:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 12:32:53 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:36:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:41:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:44:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:45:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:45:27 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 12:45:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:46:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:46:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 12:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:46:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:46:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:46:42 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:46:49 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:52:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:52:17 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:54:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:55:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:58:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 12:59:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 12:59:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:00:49 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:01:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:02:03 --> Could not find the language line "Socks"
ERROR - 2023-02-21 13:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:02:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:03:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:13:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:26:42 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:28:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:29:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:35:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:41:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:42:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:42:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:42:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:42:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:42:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:47:39 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:48:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 13:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 13:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:03:46 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:09:43 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:10:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:11:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:11:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:11:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 14:11:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:11:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:11:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:12:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:12:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 14:13:14 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 14:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:14:30 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 14:14:32 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:14:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:15:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:16:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:16:59 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:18:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:18:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:18:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:18:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:18:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:18:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:18:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:19:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:20:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:20:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:20:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 14:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:21:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:22:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 14:22:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 14:22:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:24:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:24:36 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:25:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:30:25 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:30:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:31:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-21 14:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:31:31 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:31:41 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:32:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:33:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:33:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:36:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:48:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:50:19 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:52:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:54:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:54:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:55:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:56:05 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:56:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 14:56:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 14:57:00 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:58:01 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 14:59:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:59:19 --> Could not find the language line "Home"
ERROR - 2023-02-21 14:59:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 14:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:00:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:00:58 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:00:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-21 15:01:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:03:38 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:03:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:03:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:04:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:04:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:05:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:06:25 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 15:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:06:45 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 15:06:48 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 15:06:52 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 15:06:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:07:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-21 15:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:07:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-21 15:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:22:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:33 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:23:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:24:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:26:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:26:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:27:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:27:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:28:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:29:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:29:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:29:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:29:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:31:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:34:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:34:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:34:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 15:34:59 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:35:49 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:35:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 15:36:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:37:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:37:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:38:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:38:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:39:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:39:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:39:33 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:39:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:40:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:40:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:41:10 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 15:41:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:41:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:42:46 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:44:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:44:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:44:52 --> Could not find the language line "Socks"
ERROR - 2023-02-21 15:45:02 --> Could not find the language line "Socks"
ERROR - 2023-02-21 15:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:49:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 15:49:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:55:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:55:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:55:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 15:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:56:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:58:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:58:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 15:58:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 15:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:04:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:04:41 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:06:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:06:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:06:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:06:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:06:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:08:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:08:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:11:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:12:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:12:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:14:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:14:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:15:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:16:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:16:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:16:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:16:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:17:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:17:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:17:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:17:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:04 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:05 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:18:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:19:04 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-21 16:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:19:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:19:36 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:19:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:19:48 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 16:19:58 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:20:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:21:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:21:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:22:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:22:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:22:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:24:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:24:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:24:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:28:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-21 16:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:33:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:33:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:33:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:34:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:34:10 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-02-21 16:34:11 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-02-21 16:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:34:25 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:34:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-21 16:34:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:34:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:35:07 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:35:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:35:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:36:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:36:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:25 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:36:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:36:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:40:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-02-21 16:40:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-02-21 16:40:04 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:42:58 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:43:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:43:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:43:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:43:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:44:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:44:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:45:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:46:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:46:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:46:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 16:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 16:48:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 16:53:52 --> 404 Page Not Found: Components/com_creativecontactform
ERROR - 2023-02-21 16:54:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:08:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:21:29 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:24:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 17:26:08 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:26:14 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 17:26:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:37:53 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:38:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 17:56:41 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:56:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 17:58:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 17:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 17:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:02:41 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:06:19 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:07:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:15:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 18:15:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 18:15:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:21:56 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:23:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:32:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 18:33:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:33:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 18:34:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 18:34:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 18:35:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:35:36 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:36:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:41:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:42:02 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 18:44:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 18:49:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:54:32 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:59:22 --> Could not find the language line "Home"
ERROR - 2023-02-21 18:59:59 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:05:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:09:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:09:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 19:10:01 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:10:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:10:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:11:51 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 19:12:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 19:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 19:12:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:13:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 19:13:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 19:16:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:27:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:27:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:27:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:28:36 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:28:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:28:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:29:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 19:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 19:50:46 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:02:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 20:02:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:05:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 20:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:21:58 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:22:43 --> Could not find the language line "Socks"
ERROR - 2023-02-21 20:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:41:40 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:42:51 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:43:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-21 20:43:52 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:44:18 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:47:50 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:50:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:51:27 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:51:44 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:52:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 20:53:06 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:53:54 --> Could not find the language line "Home"
ERROR - 2023-02-21 20:54:49 --> Could not find the language line "Socks"
ERROR - 2023-02-21 20:55:07 --> Could not find the language line "Socks"
ERROR - 2023-02-21 20:55:11 --> Could not find the language line "Socks"
ERROR - 2023-02-21 20:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 20:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:01:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:01:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:10:26 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:14:05 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:14:37 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:14:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:15:30 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:17:45 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:17:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 21:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:18:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 21:18:09 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:18:13 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 21:18:20 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:18:28 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 21:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:18:48 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 21:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:18:54 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 21:18:57 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:22:23 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:23:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 21:23:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:42:03 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:42:04 --> Could not find the language line "Home"
ERROR - 2023-02-21 21:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 21:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 21:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 21:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 21:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 21:58:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 21:58:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 21:58:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-21 21:58:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-21 21:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:15:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 22:15:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 22:17:11 --> 404 Page Not Found: Products/index
ERROR - 2023-02-21 22:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:22:31 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:22:35 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:23:47 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:24:34 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:24:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-21 22:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:25:55 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:26:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:28:32 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:28:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 22:28:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-21 22:29:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:29:35 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 22:29:46 --> Could not find the language line "Bracelets"
ERROR - 2023-02-21 22:30:02 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:30:09 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:30:24 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 22:30:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 22:31:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 22:31:16 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:31:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:31:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:31:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:31:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:31:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:32:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:32:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 22:33:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 22:34:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-21 22:34:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:35:31 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:35:43 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:36:11 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:36:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-21 22:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:36:48 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:51:05 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:52:05 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:52:21 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:55:48 --> Could not find the language line "Home"
ERROR - 2023-02-21 22:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 22:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:04:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:04:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:04:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:04:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:04:53 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:06:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-21 23:07:04 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:07:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-21 23:07:51 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:10:28 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:24:04 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:27:10 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-21 23:28:01 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:39:01 --> Could not find the language line "Home"
ERROR - 2023-02-21 23:58:27 --> 404 Page Not Found: Robotstxt/index
