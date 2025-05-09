<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-09 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 00:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 00:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 00:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 00:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 00:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-02-09 00:44:17 --> Could not find the language line "Home"
ERROR - 2023-02-09 00:49:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 00:49:03 --> Could not find the language line "Home"
ERROR - 2023-02-09 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-09 01:42:30 --> Could not find the language line "Home"
ERROR - 2023-02-09 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 02:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 02:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 02:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 02:40:43 --> Could not find the language line "Home"
ERROR - 2023-02-09 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-09 03:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 03:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 03:38:56 --> Could not find the language line "Home"
ERROR - 2023-02-09 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 04:01:39 --> Could not find the language line "Home"
ERROR - 2023-02-09 04:01:40 --> Could not find the language line "Home"
ERROR - 2023-02-09 04:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 04:18:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 04:37:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 05:35:19 --> Could not find the language line "Home"
ERROR - 2023-02-09 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 06:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 06:48:33 --> Could not find the language line "Home"
ERROR - 2023-02-09 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 07:16:42 --> Could not find the language line "Home"
ERROR - 2023-02-09 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 07:35:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 07:46:09 --> Could not find the language line "Home"
ERROR - 2023-02-09 07:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 08:06:47 --> Could not find the language line "Home"
ERROR - 2023-02-09 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 08:40:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 09:05:59 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 09:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 09:27:22 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:50:56 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:50:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 09:50:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 09:54:08 --> Could not find the language line "Home"
ERROR - 2023-02-09 09:54:14 --> Could not find the language line "Socks"
ERROR - 2023-02-09 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:07:54 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:07:54 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:23:38 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:23:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 10:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 10:23:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 10:23:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 10:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 10:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 10:23:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 10:24:08 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:24:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 10:24:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 10:24:57 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:25:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:25:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:26:00 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:26:10 --> Could not find the language line "Socks"
ERROR - 2023-02-09 10:26:37 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 10:26:52 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:27:05 --> Could not find the language line "Perfume"
ERROR - 2023-02-09 10:29:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:39:31 --> Could not find the language line "Home"
ERROR - 2023-02-09 10:42:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 10:42:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:11:27 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 11:28:50 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 11:32:18 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:32:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-09 11:49:53 --> Could not find the language line "Home"
ERROR - 2023-02-09 11:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 11:50:29 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:04:28 --> Could not find the language line "Socks"
ERROR - 2023-02-09 12:17:27 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:18:19 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:18:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-09 12:18:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-09 12:18:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-09 12:18:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-09 12:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 12:27:16 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:31:35 --> Could not find the language line "Home"
ERROR - 2023-02-09 12:50:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:05:32 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:06:29 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:06:32 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:06:32 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:06:36 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:07:24 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:13:26 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:13:59 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:20:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-09 13:23:56 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:25:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 13:25:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 13:25:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:30:35 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:35:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 13:35:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 13:35:30 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:38:59 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:39:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:40:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:40:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:40:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:41:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:56:47 --> Could not find the language line "Home"
ERROR - 2023-02-09 13:57:02 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:57:53 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:57:56 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 13:58:22 --> Could not find the language line "Socks"
ERROR - 2023-02-09 13:58:24 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:14:29 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:28:42 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:38:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:38:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:38:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:39:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:39:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:39:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:40:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:40:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:40:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-09 14:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V00%' OR a.description LIKE '%V00%' OR a.color LIKE '%V00%' OR a.barcode LIKE '%V00%' OR a.category LIKE '%V00%' OR a.sub_category LIKE '%V00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-09 14:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:44:03 --> Could not find the language line "Socks"
ERROR - 2023-02-09 14:49:54 --> Could not find the language line "Home"
ERROR - 2023-02-09 14:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 14:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:01:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:01:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:01:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:02:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:02:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-09 15:26:47 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:31:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-09 15:38:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 15:38:52 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 15:49:32 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:49:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:50:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:50:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:51:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:51:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:51:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:51:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:59:28 --> Could not find the language line "Home"
ERROR - 2023-02-09 15:59:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 15:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 16:00:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:00:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:01:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:01:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:01:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:02:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:03:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:03:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:03:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:04:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:04:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:04:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:05:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:05:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:06:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 16:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 16:16:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 16:24:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 16:24:57 --> Could not find the language line "Home"
ERROR - 2023-02-09 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 16:35:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 16:36:36 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:01:14 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:01:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:03:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:03:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:04:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:04:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:05:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:05:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:05:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:05:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:05:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:06:17 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:06:20 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:09 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:18 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:23 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:27 --> Could not find the language line "Bracelets"
ERROR - 2023-02-09 17:07:27 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:07:53 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:08:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 17:08:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 17:08:06 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:08:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:09:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:09:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:10:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:16:55 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:17:08 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:17:27 --> Could not find the language line "Socks"
ERROR - 2023-02-09 17:18:20 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:18:22 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:18:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:19:29 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:19:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:19:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:19:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:20:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:22:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 17:24:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:26:22 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:30:26 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:30:44 --> Could not find the language line "Socks"
ERROR - 2023-02-09 17:31:03 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 17:39:47 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:39:52 --> Could not find the language line "Bracelets"
ERROR - 2023-02-09 17:40:00 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:40:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:41:03 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:41:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 17:41:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-09 17:41:30 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:41:33 --> Could not find the language line "Perfume"
ERROR - 2023-02-09 17:41:42 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:41:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:42:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:42:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:43:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:43:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:43:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:43:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-09 17:43:59 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:45:18 --> Could not find the language line "Home"
ERROR - 2023-02-09 17:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 18:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 18:23:02 --> Could not find the language line "Home"
ERROR - 2023-02-09 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 18:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 18:52:22 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:05:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 19:06:28 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 19:11:03 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:29:33 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:29:34 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:30:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-09 19:31:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 19:40:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 19:40:45 --> Could not find the language line "Home"
ERROR - 2023-02-09 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 20:04:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-09 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 20:40:41 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:19:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 21:19:56 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:26:45 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:27:32 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-09 21:52:30 --> Could not find the language line "Perfume"
ERROR - 2023-02-09 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 22:16:24 --> 404 Page Not Found: Components/com_jbcatalog
ERROR - 2023-02-09 22:17:58 --> 404 Page Not Found: Storage/settings
ERROR - 2023-02-09 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-09 22:30:49 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:00:21 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:27:51 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-09 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:36:44 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:39:28 --> Could not find the language line "Home"
ERROR - 2023-02-09 23:46:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-09 23:46:25 --> Could not find the language line "socks"
