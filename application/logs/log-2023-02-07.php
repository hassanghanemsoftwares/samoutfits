<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-07 00:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 00:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 00:20:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 00:22:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 00:22:54 --> Could not find the language line "Bracelets"
ERROR - 2023-02-07 00:25:41 --> Could not find the language line "Home"
ERROR - 2023-02-07 00:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 00:31:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 00:42:00 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-07 00:45:03 --> Could not find the language line "Home"
ERROR - 2023-02-07 00:46:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 00:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-07 01:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 01:03:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 01:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 01:08:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 01:12:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 01:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 01:32:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 01:32:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 01:36:32 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 02:50:25 --> Could not find the language line "Home"
ERROR - 2023-02-07 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 03:25:53 --> Could not find the language line "Home"
ERROR - 2023-02-07 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 03:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 03:49:37 --> Could not find the language line "Home"
ERROR - 2023-02-07 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 04:47:00 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-07 05:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 05:00:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 05:12:19 --> Could not find the language line "Home"
ERROR - 2023-02-07 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 05:41:46 --> Could not find the language line "Home"
ERROR - 2023-02-07 05:54:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 05:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 05:54:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 05:54:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 05:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 05:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 06:39:44 --> Could not find the language line "Home"
ERROR - 2023-02-07 06:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 06:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 06:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 06:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:18:02 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:21:36 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:29:53 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:32:15 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:37:14 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:44:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:46:04 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:47:31 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:47:53 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:47:58 --> Could not find the language line "Bracelets"
ERROR - 2023-02-07 07:48:21 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:49:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 07:51:03 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 07:51:20 --> Could not find the language line "Home"
ERROR - 2023-02-07 07:51:28 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:06:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 08:14:15 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:27:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:27:21 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:36:29 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:37:20 --> Could not find the language line "Home"
ERROR - 2023-02-07 08:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 08:47:12 --> Could not find the language line "Bracelets"
ERROR - 2023-02-07 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:06:06 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:06:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 09:06:17 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:07:24 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:10:48 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:10:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:10:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:11:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:11:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:12:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:12:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:12:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:12:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 09:13:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:15:36 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:16:02 --> Could not find the language line "Socks"
ERROR - 2023-02-07 09:16:19 --> Could not find the language line "Socks"
ERROR - 2023-02-07 09:16:23 --> Could not find the language line "Socks"
ERROR - 2023-02-07 09:16:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 09:17:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 09:17:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 09:17:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 09:18:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 09:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:18:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:19:30 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:19:33 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 09:19:40 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:22:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-07 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:32:52 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:52 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:53 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:55 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:56 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:32:58 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:36:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:36:39 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:36:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 09:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:37:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 09:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:37:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 09:38:02 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:38:08 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 09:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:38:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 09:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:38:37 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 09:38:41 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:38:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 09:39:05 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:40:50 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:41:32 --> Could not find the language line "Home"
ERROR - 2023-02-07 09:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 09:46:54 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:06:34 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:08:49 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:13:16 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:14:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 10:21:41 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:21:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 10:22:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 10:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:23:49 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 10:26:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 10:26:25 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:51:06 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:52:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 10:52:16 --> Could not find the language line "Socks"
ERROR - 2023-02-07 10:52:55 --> Could not find the language line "Socks"
ERROR - 2023-02-07 10:53:03 --> Could not find the language line "Socks"
ERROR - 2023-02-07 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:04:44 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:05:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:05:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:07:19 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 11:07:21 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:10:28 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:10:37 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:10:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:30 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:11:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:13:26 --> Could not find the language line "Socks"
ERROR - 2023-02-07 11:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:13:53 --> Could not find the language line "Socks"
ERROR - 2023-02-07 11:14:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 11:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:15:09 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:15:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:22:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 11:22:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 11:22:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 11:29:38 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:31:03 --> Could not find the language line "Socks"
ERROR - 2023-02-07 11:32:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:32:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:32:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:32:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 11:35:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 11:35:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 11:35:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 11:35:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 11:35:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 11:35:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 11:37:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-07 11:37:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-07 11:37:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-07 11:37:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-07 11:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:42:20 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:44:52 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:46:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:48:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:49:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:49:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:49:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 11:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:51:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:51:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:52:56 --> Could not find the language line "Home"
ERROR - 2023-02-07 11:53:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:53:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:53:37 --> 404 Page Not Found: 400shtml/index
ERROR - 2023-02-07 11:53:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:53:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:53:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:54:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:54:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:54:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 11:54:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 11:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 12:01:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:09:47 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:19:25 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:50:20 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:58:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 12:59:26 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:01:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:01:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:05:16 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:05:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 13:05:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 13:05:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 13:05:17 --> 404 Page Not Found: Home/accounts
ERROR - 2023-02-07 13:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:11:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:14:01 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:14:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 13:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:19:41 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:33:53 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:45:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 13:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:56:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:57:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:58:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:58:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:58:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 13:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 13:58:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:00:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 14:00:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 14:00:28 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:01:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:01:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:02:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:02:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:02:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:02:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:03:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:03:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:03:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:03:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:04:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:04:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:04:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:05:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:06:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:07:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:07:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:07:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:07:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:08:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:08:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:08:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:09:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:10:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:10:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:10:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:11:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:11:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:11:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:12:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:12:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:13:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:13:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:13:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:14:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:14:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:24:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-07 14:25:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:32:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:32:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:32:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:32:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:32:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:33:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:34:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:34:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:34:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:36:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:37:30 --> 404 Page Not Found: 400shtml/index
ERROR - 2023-02-07 14:37:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 14:45:50 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:46:05 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:47:45 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 14:49:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 14:50:32 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:51:39 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:53:07 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:53:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-07 14:53:37 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:57:47 --> Could not find the language line "Home"
ERROR - 2023-02-07 14:58:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 14:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 14:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 15:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 15:00:07 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:00:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-07 15:01:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:01:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 15:02:38 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:03:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:03:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:03:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:03:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 15:21:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-07 15:21:24 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:31:55 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:31:55 --> Could not find the language line "Home"
ERROR - 2023-02-07 15:37:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:38:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-07 15:49:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 15:49:56 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:00:26 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:22:59 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:27:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 16:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 16:27:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 16:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 16:27:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 16:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 16:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-07 16:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 16:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 17:16:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 17:26:01 --> Could not find the language line "Home"
ERROR - 2023-02-07 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 17:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 17:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 18:05:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 18:05:06 --> Could not find the language line "Home"
ERROR - 2023-02-07 18:20:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 18:20:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 18:20:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 18:20:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-07 18:25:58 --> Could not find the language line "Home"
ERROR - 2023-02-07 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 18:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:54:54 --> Could not find the language line "Home"
ERROR - 2023-02-07 18:55:13 --> Could not find the language line "Perfume"
ERROR - 2023-02-07 18:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 18:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 19:00:27 --> Could not find the language line "Socks"
ERROR - 2023-02-07 19:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:18:51 --> Could not find the language line "Home"
ERROR - 2023-02-07 19:22:40 --> Could not find the language line "Home"
ERROR - 2023-02-07 19:28:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:28:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:28:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 19:30:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:30:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:30:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 19:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 19:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 19:33:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 19:33:43 --> Could not find the language line "socks"
ERROR - 2023-02-07 19:49:28 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:11 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:26 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:15:39 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:16:40 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:16:49 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:17:09 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 20:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 20:18:25 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:18:29 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:40:30 --> Could not find the language line "Home"
ERROR - 2023-02-07 20:40:35 --> 404 Page Not Found: Admin/index
ERROR - 2023-02-07 20:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 21:25:46 --> Could not find the language line "Home"
ERROR - 2023-02-07 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 21:46:16 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-07 21:55:33 --> Could not find the language line "Home"
ERROR - 2023-02-07 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-07 22:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:25:06 --> Could not find the language line "Home"
ERROR - 2023-02-07 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-07 22:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:40:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 22:40:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 22:40:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 22:40:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 22:40:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-07 22:40:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-07 22:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 22:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-07 23:06:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-07 23:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-07 23:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 23:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 23:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-07 23:56:14 --> Could not find the language line "Home"
