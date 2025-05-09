<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-19 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:01:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:02:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:07:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:08:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:09:02 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 00:09:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:17:54 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:18:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:19:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 00:19:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 00:20:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:20:29 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 00:20:29 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 00:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:22:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:23:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:23:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 00:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 00:24:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 00:24:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 00:24:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:27:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:29:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:29:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:30:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:30:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:30:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:31:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:35:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:35:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:46:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 00:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 00:56:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 00:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:01:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:01:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 01:02:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 01:02:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:02:44 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 01:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:03:08 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 01:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:03:19 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 01:03:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:03:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 01:03:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 01:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:04:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 01:04:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 01:04:18 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:04:24 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 01:04:59 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 01:05:06 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 01:05:33 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:05:53 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 01:05:56 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 01:05:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 01:06:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:18:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:19:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:20:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:28:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:30:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:30:39 --> Could not find the language line "Socks"
ERROR - 2023-02-19 01:30:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 01:41:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 01:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 01:41:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 01:41:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 01:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 01:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 01:41:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 01:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 01:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 01:43:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:09:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 02:09:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 02:14:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:21:48 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 02:22:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 02:23:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:23:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 02:23:58 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 02:27:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:28:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:46:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:49:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 02:49:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:50:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:55:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 02:58:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:00:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:02:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:06:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:43:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 03:43:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 03:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 03:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 03:59:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:00:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:00:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:01:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:19:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 04:19:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:19:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:19:40 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-19 04:19:40 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-19 04:19:44 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:19:44 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:19:59 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:20:03 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-19 04:20:06 --> 404 Page Not Found: Assets/mail
ERROR - 2023-02-19 04:20:07 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:08 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:08 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:09 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:09 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:10 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-02-19 04:20:14 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:20:15 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:20:15 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:20:16 --> 404 Page Not Found: Home/home
ERROR - 2023-02-19 04:20:22 --> Could not find the language line "Disclaimer"
ERROR - 2023-02-19 04:20:23 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-19 04:20:23 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-19 04:20:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:20:24 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-19 04:20:24 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-19 04:20:24 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-19 04:20:39 --> 404 Page Not Found: Cart/assets
ERROR - 2023-02-19 04:20:39 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-19 04:20:39 --> 404 Page Not Found: Cart/home
ERROR - 2023-02-19 04:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 04:28:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:32:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:35:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:35:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:37:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 04:38:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 04:57:33 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:09:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:14:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 05:14:28 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-02-19 05:14:29 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-02-19 05:14:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:17:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:32:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:32:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:33:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:34:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 05:35:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 05:35:14 --> Could not find the language line "Socks"
ERROR - 2023-02-19 05:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 05:35:42 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 05:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:39:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:46:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:48:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:50:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 05:56:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:56:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 05:56:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:03:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:17:25 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:19:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:20:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:20:10 --> Could not find the language line "Socks"
ERROR - 2023-02-19 06:20:28 --> Could not find the language line "Socks"
ERROR - 2023-02-19 06:20:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:20:37 --> Could not find the language line "Socks"
ERROR - 2023-02-19 06:20:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:24:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:24:39 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 06:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:25:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:25:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-19 06:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:27:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:32:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:33:21 --> 404 Page Not Found: Env/index
ERROR - 2023-02-19 06:36:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:37:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:38:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:39:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 06:39:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:47:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 06:48:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:00:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:01:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:03:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:18:20 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-02-19 07:26:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:31:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:48:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:49:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 07:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 07:55:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 07:58:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:01:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:15:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:15:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:16:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:17:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-19 08:17:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:17:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:17:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:17:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:17:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-19 08:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:18:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:18:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:19:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 08:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:24:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:26:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:35:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:36:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:37:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:37:44 --> Could not find the language line "Socks"
ERROR - 2023-02-19 08:37:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 08:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:44:50 --> Could not find the language line "Socks"
ERROR - 2023-02-19 08:44:55 --> Could not find the language line "Socks"
ERROR - 2023-02-19 08:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:45:03 --> Could not find the language line "Socks"
ERROR - 2023-02-19 08:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:46:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 08:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:50:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:51:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 08:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:55:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 08:55:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 08:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:56:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 08:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:57:11 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 08:57:16 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 08:57:41 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 08:57:45 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 08:57:59 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 08:58:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 08:58:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 08:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 08:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:01:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:02:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:12:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 09:13:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:13:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:15:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:16:50 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 09:16:50 --> 404 Page Not Found: Assets/images
ERROR - 2023-02-19 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:19:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:20:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:20:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:21:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:21:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:21:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:21:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:21:43 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71 583 236&amp;text=7215%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-02-19 09:22:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:22:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:22:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:25:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:25:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 09:26:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 09:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:26:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 09:26:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 09:26:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 09:26:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:34:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:37:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:38:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:38:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:39:18 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:39:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:39:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:40:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:41:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:43:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:45:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:48:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 09:48:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 09:48:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 09:49:01 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-19 09:49:04 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-19 09:49:06 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-19 09:49:10 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-19 09:49:12 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-19 09:49:14 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-19 09:49:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:49:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:49:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:51:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:51:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:52:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:52:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:53:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:53:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:53:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:53:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:54:54 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:55:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:55:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:56:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:56:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 09:56:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:57:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:58:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:58:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:58:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:59:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 09:59:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 09:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:05:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:08:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:10:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:13:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:20:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:25:25 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:26:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:28:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:33:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 10:38:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:46:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:48:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:49:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:50:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:51:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 10:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:56:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:56:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 10:58:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:02:36 --> 404 Page Not Found: C001-shoes/index
ERROR - 2023-02-19 11:08:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:20:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:21:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:23:38 --> 404 Page Not Found: Plugins/content
ERROR - 2023-02-19 11:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:25:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:30:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:31:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:36:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-19 11:36:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-19 11:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:37:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:38:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:51:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:51:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:51:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:51:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:51:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:52:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:52:40 --> Could not find the language line "Socks"
ERROR - 2023-02-19 11:52:43 --> Could not find the language line "Socks"
ERROR - 2023-02-19 11:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:53:02 --> Could not find the language line "Socks"
ERROR - 2023-02-19 11:53:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:53:11 --> Could not find the language line "Socks"
ERROR - 2023-02-19 11:53:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 11:53:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 11:53:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:53:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 11:53:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 11:53:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:54:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:54:29 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 11:54:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:54:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:54:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:54:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:55:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:55:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:55:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:55:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 11:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:56:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:56:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 11:57:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:57:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:57:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 11:58:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 11:59:52 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 11:59:55 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 12:00:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:00:13 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:00:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:00:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:00:18 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 12:00:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:00:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:00:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:00:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:01:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:01:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:01:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:02:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:02:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:02:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:02:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:07:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 12:08:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:10:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:11:51 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-19 12:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:12:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:13:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:13:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:22:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:28:08 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-19 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 12:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 12:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 12:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 12:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 12:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 12:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 12:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 12:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:32:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:32:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:33:12 --> Could not find the language line "Socks"
ERROR - 2023-02-19 12:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:33:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:33:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:33:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:34:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:34:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:34:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:34:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:35:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 12:35:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:39:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:39:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:39:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:40:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 12:40:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:40:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:42:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:42:04 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 12:42:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:42:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 12:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:42:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 12:43:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:43:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 12:43:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 12:44:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 12:44:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 12:44:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 12:44:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:44:54 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:45:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:45:56 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:46:01 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 12:46:01 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 12:46:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 12:47:35 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 12:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 12:58:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:03:59 --> Could not find the language line "Socks"
ERROR - 2023-02-19 13:05:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:08:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 13:08:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:11:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:16:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:32:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:32:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:33:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:33:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:33:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 13:33:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 13:34:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 13:34:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:36:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:36:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:37:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:38:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:38:48 --> Could not find the language line "Socks"
ERROR - 2023-02-19 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:39:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:39:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:40:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:40:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:40:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:40:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:41:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 13:41:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:44:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:46:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:49:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:52:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 13:53:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:54:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 13:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 13:59:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:08:05 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 14:14:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 14:14:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:17:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:17:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:17:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:18:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:19:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:20:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:21:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:21:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:30:25 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:39:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:42:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:43:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:43:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:44:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:45:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:49:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 14:49:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 14:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 14:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 14:49:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 14:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 14:49:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 14:49:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 14:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 14:56:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 14:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:05:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:12:32 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-19 15:16:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:18:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:18:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:21:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:24:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:24:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:27:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:28:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-19 15:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:34:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:35:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:37:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:37:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:40:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 15:40:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 15:41:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 15:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:43:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 15:44:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 15:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 15:53:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:00:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:01:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:03:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:06:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:06:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:10:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:10:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:10:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:10:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:10:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:11:25 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 16:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:17:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:17:30 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:17:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:17:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:18:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:18:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:18:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:18:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 16:18:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:18:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:19:02 --> Could not find the language line "Socks"
ERROR - 2023-02-19 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:20:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:21:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:21:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 16:22:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:22:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:23:04 --> Could not find the language line "Socks"
ERROR - 2023-02-19 16:23:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:23:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:27:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:28:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:28:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:28:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:29:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:29:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:30:09 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:30:26 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:30:54 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:30:56 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:30:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:31:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:32:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:32:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:32:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:33:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:34:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:35:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:35:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:36:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:36:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:36:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:37:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:37:33 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:37:33 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:38:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:38:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:39:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:39:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-19 16:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:39:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:40:30 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:42:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:45:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:45:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:45:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:46:02 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:47:06 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:47:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:48:03 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:48:34 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 16:48:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:48:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 16:48:45 --> 404 Page Not Found: Components/com_sexycontactform
ERROR - 2023-02-19 16:49:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:49:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 16:49:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 16:49:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:50:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 16:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 16:50:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:51:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:51:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 16:51:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:51:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:52:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:52:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:52:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:52:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:52:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:52:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:52:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 16:52:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 16:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 16:56:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 16:58:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:00:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:01:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:03:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:11:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:17:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:21:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:23:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:23:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:24:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:24:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:26:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:27:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:28:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:29:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:31:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:32:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:32:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:34:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:34:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:35:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:35:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:36:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 17:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 17:36:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 17:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 17:36:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 17:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 17:36:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 17:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 17:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:36:27 --> 404 Page Not Found: Git/HEAD
ERROR - 2023-02-19 17:36:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:36:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 17:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:38:33 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:40:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:41:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:41:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:41:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:42:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:42:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:42:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:42:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 17:49:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:51:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:52:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:52:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:53:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:55:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:59:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:59:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:59:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 17:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:59:51 --> Could not find the language line "Home"
ERROR - 2023-02-19 17:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 17:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:02:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:03:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:03:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:06:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:07:12 --> Could not find the language line "Socks"
ERROR - 2023-02-19 18:08:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:08:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:09:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:09:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:12:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:12:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:12:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:12:22 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 18:13:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:13:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:13:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:13:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:14:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:14:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:15:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:15:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:17:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:19:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:19:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:20:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 18:20:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:20:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:22:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:25:11 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:25:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:25:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:25:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:25:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:25:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:27:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:27:53 --> Could not find the language line "Socks"
ERROR - 2023-02-19 18:28:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:29:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:31:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:32:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 18:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:33:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:34:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:35:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:35:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:36:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:37:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:37:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:38:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:38:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:39:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:39:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:39:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:39:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:39:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:40:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:40:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:41:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 18:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:42:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 18:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:42:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 18:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:49:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:49:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:49:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:49:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:49:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:49:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:50:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:50:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 18:50:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:51:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:51:37 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 18:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:52:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:55:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:56:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 18:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 18:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:00:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 19:00:44 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 19:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:03:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:04:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:07:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:08:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:09:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:09:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:09:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:10:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:11:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:11:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:12:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:12:45 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 19:12:56 --> Could not find the language line "Socks"
ERROR - 2023-02-19 19:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:16:02 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 19:16:15 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 19:16:25 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 19:16:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:20:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:22:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:23:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:26:17 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:27:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:27:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:27:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:28:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:28:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:29:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:30:42 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:30:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:32:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:35:31 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-19 19:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:38:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 19:38:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:40:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:40:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:42:00 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:42:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:42:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:42:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:43:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:43:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:44:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:45:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:45:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:45:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:45:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:46:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:46:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:46:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:46:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:46:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:46:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:46:56 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:47:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:47:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:47:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:47:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:48:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:48:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:48:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:48:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 19:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:51:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:55:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 19:55:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 19:55:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 19:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 19:55:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 19:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 19:55:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 19:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 19:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:55:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:55:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 19:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:56:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 19:56:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:56:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:56:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:57:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:57:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:43 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:57:44 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:57:52 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 19:57:56 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:58:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:58:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:58:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 19:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:59:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:59:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:59:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 19:59:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 19:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 19:59:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 20:00:00 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 20:00:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 20:00:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 20:00:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 20:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:00:16 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 20:00:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 20:00:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 20:01:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 20:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:01:28 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 20:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:03:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:04:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:04:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 20:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 20:04:20 --> Could not find the language line "Socks"
ERROR - 2023-02-19 20:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 20:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 20:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 20:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 20:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 20:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 20:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:04:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 20:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:05:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:05:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:05:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:06:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:07:38 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:10:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:14:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:15:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:16:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:20:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:23:28 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:23:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 20:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:23:54 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:24:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 20:24:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:27:04 --> Could not find the language line "Socks"
ERROR - 2023-02-19 20:27:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 20:27:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 20:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:29:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:36:26 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:36:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:40:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-19 20:40:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-19 20:40:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-19 20:40:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-19 20:41:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:41:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:45:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:49:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:50:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:50:53 --> Could not find the language line "Socks"
ERROR - 2023-02-19 20:51:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:51:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:51:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:51:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:53:02 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:53:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 20:53:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:53:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:53:23 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 20:53:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:53:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 20:54:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:54:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:54:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:54:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:54:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:54:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 20:54:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 20:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 20:54:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:00:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:01:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:09:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:10:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:11:14 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:12:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:12:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:12:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:12:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:12:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:12:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:18:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:22:18 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:22:20 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:22:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 21:22:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:22:38 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:22:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:22:57 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:23:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:23:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:23:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 21:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:23:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:32:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:32:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:35:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:36:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:36:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:36:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:36:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:36:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:36:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:36:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 21:36:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 21:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:37:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:37:37 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:39:34 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:39:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:42:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 21:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:42:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:43:01 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:43:56 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:44:29 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 21:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:44:48 --> Could not find the language line "Perfume"
ERROR - 2023-02-19 21:45:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:45:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:45:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:45:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:45:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:45:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:46:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:47:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:47:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:47:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:47:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 21:47:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 21:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:48:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 21:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:48:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:48:54 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:48:59 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:49:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 21:49:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:49:29 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:49:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:49:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 21:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:50:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 21:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:51:13 --> Could not find the language line "Socks"
ERROR - 2023-02-19 21:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:52:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 21:53:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 21:53:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 21:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 21:55:23 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:55:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:56:49 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 21:56:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:57:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:58:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:59:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:59:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 21:59:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:00:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:01:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:01:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:02:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 22:03:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 22:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:03:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 22:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:04:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:05:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-19 22:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:08:25 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:10:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:10:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:10:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:13:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:14:10 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:15:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:19:04 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:20:32 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:21:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:22:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:22:15 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:22:19 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:22:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:23:05 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:23:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:23:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:23:53 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:23:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:23:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:24:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:24:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:24:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-19 22:24:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:24:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:25:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:25:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:25:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:25:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:26:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:26:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:27:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 22:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:27:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:27:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:27:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:28:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:28:10 --> Could not find the language line "Socks"
ERROR - 2023-02-19 22:28:25 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 22:28:27 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:29:22 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:29:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 22:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:29:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 22:29:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:30:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 22:30:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:32:23 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:32:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:34:50 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:42:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-19 22:44:58 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:45:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 22:45:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:45:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:46:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:46:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:47:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:48:08 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 22:50:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 22:54:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:54:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:54:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:54:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:54:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 22:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 22:58:07 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:02:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:04:49 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:05:31 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:06:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:07:06 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:07:20 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:07:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:07:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:08:18 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:08:26 --> Could not find the language line "Bracelets"
ERROR - 2023-02-19 23:08:46 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:08:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 23:08:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-19 23:09:09 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:09:55 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:13:39 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:14:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:14:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 23:14:31 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:15:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:15:48 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:15:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:16:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:17:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:19:46 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:20:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:20:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:20:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:20:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:21:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-19 23:21:13 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:21:20 --> Could not find the language line "Socks"
ERROR - 2023-02-19 23:21:35 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:21:57 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:23:21 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:23:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-19 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:23:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-19 23:24:03 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:24:41 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:25:52 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:26:16 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:27:47 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:38:12 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-19 23:38:40 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:45:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 23:45:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 23:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 23:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 23:45:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 23:45:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 23:45:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-19 23:45:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-19 23:52:24 --> Could not find the language line "Home"
ERROR - 2023-02-19 23:56:26 --> Could not find the language line "Home"
