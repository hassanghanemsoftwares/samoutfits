<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-06 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 00:03:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 00:19:43 --> Could not find the language line "Home"
ERROR - 2023-02-06 00:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 00:20:39 --> Could not find the language line "Home"
ERROR - 2023-02-06 00:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 01:11:21 --> Could not find the language line "Home"
ERROR - 2023-02-06 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 02:11:23 --> Could not find the language line "Home"
ERROR - 2023-02-06 02:28:03 --> Could not find the language line "Home"
ERROR - 2023-02-06 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 02:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 03:00:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 03:25:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 03:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 03:25:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 03:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 03:25:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 03:25:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 03:34:45 --> Could not find the language line "Home"
ERROR - 2023-02-06 03:54:39 --> Could not find the language line "Home"
ERROR - 2023-02-06 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 04:32:51 --> Could not find the language line "Home"
ERROR - 2023-02-06 04:59:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 04:59:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 05:34:34 --> Could not find the language line "Socks"
ERROR - 2023-02-06 05:47:01 --> Could not find the language line "Home"
ERROR - 2023-02-06 05:48:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 05:55:01 --> Could not find the language line "Home"
ERROR - 2023-02-06 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 06:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 06:53:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:12:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:36:25 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:48:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 07:49:18 --> Could not find the language line "Home"
ERROR - 2023-02-06 07:52:48 --> Could not find the language line "accounting"
ERROR - 2023-02-06 07:52:48 --> Could not find the language line "accounting"
ERROR - 2023-02-06 07:54:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:23:46 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:23:54 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 08:24:06 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 08:25:24 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:25:31 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:26:53 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:26:56 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:26:56 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:26:56 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:27:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:27:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:27:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "assets"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "assets"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "assets"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "assets"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "assets"
ERROR - 2023-02-06 08:27:21 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:27:22 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:27:23 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:30:05 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:32:02 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:32:13 --> Could not find the language line "Socks"
ERROR - 2023-02-06 08:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 08:49:46 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 08:57:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:57:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 08:57:32 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:57:37 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 08:57:58 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:58:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 08:58:19 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:58:58 --> Could not find the language line "Home"
ERROR - 2023-02-06 08:59:21 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:10:51 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:11:27 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:11:41 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:16:53 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-06 09:18:00 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:22:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:30:58 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:32:17 --> Could not find the language line "Home"
ERROR - 2023-02-06 09:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 09:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:02:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 10:03:56 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:08:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:26:09 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:26:23 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:29:53 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:50:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 10:51:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 10:51:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 10:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 10:55:56 --> Could not find the language line "Home"
ERROR - 2023-02-06 10:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-02-06 11:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:23:39 --> Could not find the language line "Home"
ERROR - 2023-02-06 11:25:50 --> Could not find the language line "Home"
ERROR - 2023-02-06 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 11:37:06 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 11:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 11:43:39 --> Could not find the language line "Home"
ERROR - 2023-02-06 11:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:08:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:26:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 12:26:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 12:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:30:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 12:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 12:35:40 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:36:52 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:54:33 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:56:17 --> Could not find the language line "Home"
ERROR - 2023-02-06 12:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 12:57:16 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:11:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 13:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 13:11:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 13:11:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 13:11:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 13:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 13:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:16:02 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:16:29 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 13:16:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 13:17:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:17:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:17:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:17:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:18:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:18:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:18:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:18:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 13:18:45 --> Could not find the language line "Socks"
ERROR - 2023-02-06 13:19:26 --> Could not find the language line "Socks"
ERROR - 2023-02-06 13:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:30:59 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:31:00 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:34:20 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:34:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 13:34:45 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:35:18 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 13:35:42 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 13:46:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:46:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 13:46:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 13:47:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:47:35 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:48:26 --> Could not find the language line "Home"
ERROR - 2023-02-06 13:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 14:00:17 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:20:08 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:16 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:20:22 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:20:23 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:20:24 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:20:25 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:20:56 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:20:57 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:21:27 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:23:46 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:25:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:32:00 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:32:04 --> Could not find the language line "Socks"
ERROR - 2023-02-06 14:35:36 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:35:38 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:35:38 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:35:38 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:46:22 --> Could not find the language line "Home"
ERROR - 2023-02-06 14:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 14:56:06 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:11:25 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:16:41 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:17:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:17:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 15:17:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:17:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:17:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:17:48 --> Could not find the language line "Bracelets"
ERROR - 2023-02-06 15:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:23:30 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 15:25:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 15:25:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 15:25:19 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-06 15:25:24 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-06 15:25:27 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-06 15:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:25:35 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-06 15:25:42 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-06 15:25:45 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-06 15:25:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:26:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:26:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:27:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:27:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:27:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:27:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:28:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:28:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:28:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:29:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:29:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:29:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:29:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:30:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:30:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:31:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:32:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 15:38:38 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:41:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:41:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:41:26 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:41:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:41:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-06 15:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:52:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:54:05 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:55:24 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:55:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:55:42 --> Could not find the language line "Home"
ERROR - 2023-02-06 15:57:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:57:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:57:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:58:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-06 15:58:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:58:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 15:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 15:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:01:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 16:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:01:43 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:02:01 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:04:02 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:10:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-06 16:10:46 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:10:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:10:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:11:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 16:11:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:11:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:11:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:11:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:12:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:12:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:12:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:12:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:16:25 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:29:59 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:30:13 --> Could not find the language line "Socks"
ERROR - 2023-02-06 16:30:23 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:34:39 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 16:58:06 --> Could not find the language line "Home"
ERROR - 2023-02-06 16:59:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 16:59:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 17:18:22 --> Could not find the language line "Home"
ERROR - 2023-02-06 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 17:33:45 --> Could not find the language line "Home"
ERROR - 2023-02-06 17:40:22 --> Could not find the language line "socks"
ERROR - 2023-02-06 17:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 17:58:53 --> Could not find the language line "Home"
ERROR - 2023-02-06 18:00:08 --> Could not find the language line "Home"
ERROR - 2023-02-06 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 18:13:47 --> 404 Page Not Found: Components/com_facileforms
ERROR - 2023-02-06 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 18:38:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 18:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 18:38:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 18:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 18:38:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-06 18:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-06 18:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 18:50:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:05:49 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:05:56 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:21:26 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:21:58 --> Could not find the language line "Socks"
ERROR - 2023-02-06 19:22:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 19:22:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 19:22:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 19:23:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 19:23:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-06 19:23:16 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-06 19:23:37 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:34:33 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:34:45 --> Could not find the language line "Socks"
ERROR - 2023-02-06 19:35:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:35:18 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:35:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 19:36:03 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:46:50 --> Could not find the language line "Home"
ERROR - 2023-02-06 19:51:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:01:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 20:04:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:23:54 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-06 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:40:23 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:46:00 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:46:50 --> Could not find the language line "Socks"
ERROR - 2023-02-06 20:47:20 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:48:30 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:48:35 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:48:51 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:50:02 --> Could not find the language line "Home"
ERROR - 2023-02-06 20:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 20:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:02:17 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:04:00 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:24:04 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:25:10 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:26:36 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:33:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-06 21:33:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:33:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:37:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 21:37:22 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:42:32 --> Could not find the language line "Home"
ERROR - 2023-02-06 21:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 21:52:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-06 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:00:26 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:05:37 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:18:55 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:19:49 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:33:07 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:33:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 22:33:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 22:34:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 22:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:34:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-06 22:34:32 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:34:48 --> Could not find the language line "Perfume"
ERROR - 2023-02-06 22:34:55 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:38:28 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 22:56:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-06 22:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 22:58:24 --> Could not find the language line "Socks"
ERROR - 2023-02-06 22:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 22:58:32 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:59:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 22:59:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-06 22:59:22 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:59:38 --> Could not find the language line "Home"
ERROR - 2023-02-06 22:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-06 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-06 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-06 23:46:44 --> Could not find the language line "Home"
ERROR - 2023-02-06 23:57:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
