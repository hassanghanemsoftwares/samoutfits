<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-06 00:04:49 --> Could not find the language line "products"
ERROR - 2024-07-06 00:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 00:06:53 --> Could not find the language line "products"
ERROR - 2024-07-06 00:09:56 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:10:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 00:10:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 00:10:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:10:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:10:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:11:23 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:11:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:11:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:12:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:47 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:13:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:14:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:14:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:14:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 00:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:16:35 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:18:26 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:18:29 --> Could not find the language line "products"
ERROR - 2024-07-06 00:21:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-06 00:22:33 --> Could not find the language line "products"
ERROR - 2024-07-06 00:23:33 --> Could not find the language line "products"
ERROR - 2024-07-06 00:24:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-06 00:24:34 --> Could not find the language line "products"
ERROR - 2024-07-06 00:25:35 --> Could not find the language line "products"
ERROR - 2024-07-06 00:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 00:38:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 00:41:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 00:42:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 00:43:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 00:45:05 --> Could not find the language line "products"
ERROR - 2024-07-06 00:46:07 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:46:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:54:23 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:55:08 --> Could not find the language line "Home"
ERROR - 2024-07-06 00:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 01:01:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:11:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:12:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:13:34 --> Could not find the language line "Home"
ERROR - 2024-07-06 01:16:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:16:39 --> Could not find the language line "Home"
ERROR - 2024-07-06 01:20:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:21:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:29:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 01:37:01 --> Could not find the language line "products"
ERROR - 2024-07-06 01:46:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 01:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 01:52:17 --> Could not find the language line "0"
ERROR - 2024-07-06 01:58:02 --> Could not find the language line "Home"
ERROR - 2024-07-06 01:59:00 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:11:06 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:16:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:18:44 --> Could not find the language line "products"
ERROR - 2024-07-06 02:21:51 --> Could not find the language line "products"
ERROR - 2024-07-06 02:29:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:29:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:30:22 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 02:32:03 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:32:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 02:36:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:39:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 02:46:42 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 02:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 02:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 02:58:02 --> Could not find the language line "Home"
ERROR - 2024-07-06 02:58:10 --> Could not find the language line "products"
ERROR - 2024-07-06 03:02:24 --> Could not find the language line "products"
ERROR - 2024-07-06 03:09:55 --> Could not find the language line "Socks"
ERROR - 2024-07-06 03:10:20 --> Could not find the language line "Home"
ERROR - 2024-07-06 03:16:15 --> Could not find the language line "Home"
ERROR - 2024-07-06 03:16:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 03:22:23 --> Could not find the language line "Home"
ERROR - 2024-07-06 03:29:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 03:46:39 --> Could not find the language line "Home"
ERROR - 2024-07-06 03:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 03:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 04:04:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 04:16:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 04:17:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 04:17:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 04:17:50 --> Could not find the language line "products"
ERROR - 2024-07-06 04:27:48 --> Could not find the language line "products"
ERROR - 2024-07-06 04:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 04:29:12 --> Could not find the language line "products"
ERROR - 2024-07-06 04:32:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-06 04:33:08 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 04:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 04:39:37 --> Could not find the language line "Perfume"
ERROR - 2024-07-06 04:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 04:45:59 --> Could not find the language line "Other"
ERROR - 2024-07-06 04:46:41 --> Could not find the language line "Home"
ERROR - 2024-07-06 04:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 04:50:42 --> Could not find the language line "Socks"
ERROR - 2024-07-06 04:54:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:06:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 05:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 05:16:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:19:08 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:19:09 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:26:11 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:46:39 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:49:10 --> Could not find the language line "Home"
ERROR - 2024-07-06 05:54:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 06:09:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 06:09:07 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:09:32 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:09:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:09:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 06:10:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 06:10:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 06:16:41 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:35:02 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 06:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 06:37:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:37:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:39:38 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 06:42:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 06:46:40 --> Could not find the language line "Home"
ERROR - 2024-07-06 06:48:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 06:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 06:56:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-06 06:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:11:52 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:12:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:16:40 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:16:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:17:07 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:17:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:17:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:17:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 07:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:19:12 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:20:59 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:24:35 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:29:05 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:33:27 --> Could not find the language line "products"
ERROR - 2024-07-06 07:34:02 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:43:19 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:43:19 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:45:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:46:41 --> Could not find the language line "Home"
ERROR - 2024-07-06 07:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:50:26 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-06 07:50:26 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-06 07:50:28 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-06 07:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 07:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:03:33 --> Could not find the language line "products"
ERROR - 2024-07-06 08:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:12:29 --> Could not find the language line "products"
ERROR - 2024-07-06 08:13:39 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:15:38 --> Could not find the language line "products"
ERROR - 2024-07-06 08:16:41 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:22:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:26:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 08:26:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 08:26:47 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:26:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 08:28:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:28:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:32:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 08:33:24 --> Could not find the language line "products"
ERROR - 2024-07-06 08:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:39:24 --> Could not find the language line "products"
ERROR - 2024-07-06 08:41:25 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:41:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:42:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 08:44:28 --> Could not find the language line "Other"
ERROR - 2024-07-06 08:46:42 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:47:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 08:47:14 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:47:20 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:48:17 --> Could not find the language line "Other"
ERROR - 2024-07-06 08:48:25 --> Could not find the language line "Other"
ERROR - 2024-07-06 08:48:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 08:48:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 08:48:56 --> Could not find the language line "Other"
ERROR - 2024-07-06 08:49:03 --> Could not find the language line "Perfume"
ERROR - 2024-07-06 08:49:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 08:49:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 08:49:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:49:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:49:49 --> Could not find the language line "Other"
ERROR - 2024-07-06 08:53:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 08:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:01:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-06 09:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 09:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:03:27 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 09:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:15:23 --> Could not find the language line "products"
ERROR - 2024-07-06 09:16:42 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:24:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:25:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:25:55 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:26:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:29:01 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:36:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:37:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:38:14 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:38:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 09:38:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:38:43 --> 404 Page Not Found: Home/assets
ERROR - 2024-07-06 09:38:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 09:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 09:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 09:46:42 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:51:13 --> Could not find the language line "products"
ERROR - 2024-07-06 09:52:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 09:53:06 --> Could not find the language line "Home"
ERROR - 2024-07-06 09:56:17 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:00:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:00:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 10:04:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:05:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:07:17 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:09:47 --> Could not find the language line "products"
ERROR - 2024-07-06 10:12:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-06 10:16:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:20:01 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:22:08 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-06 10:22:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:24:27 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:26:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 10:27:25 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:27:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:27:59 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:29:27 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:36:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-06 10:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:38:13 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-06 10:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:39:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:39:53 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:46:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:51:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:52:47 --> Could not find the language line "products"
ERROR - 2024-07-06 10:55:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 10:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 10:55:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 10:59:53 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:09:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:12:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 11:13:35 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:14:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 11:15:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 11:16:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:18:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 11:19:30 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:25:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 11:25:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 11:26:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-06 11:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:27:56 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:35:00 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 11:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:46:43 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:47:19 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:50:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:50:42 --> Could not find the language line "products"
ERROR - 2024-07-06 11:52:36 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:53:21 --> Could not find the language line "Perfume"
ERROR - 2024-07-06 11:53:40 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:53:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:54:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:54:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 11:54:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:54:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:55:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:55:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-06 11:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 11:59:25 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:12:19 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:12:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:12:45 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:14:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:15:30 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2024-07-06 12:15:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2024-07-06 12:15:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-06 12:15:45 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2024-07-06 12:15:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2024-07-06 12:15:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-06 12:15:54 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2024-07-06 12:15:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0' at line 15 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2024-07-06 12:15:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-06 12:16:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-06 12:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:16:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-06 12:16:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:17:22 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 12:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:18:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 12:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:21:33 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 12:21:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 12:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:26:35 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:30:36 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:30:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:30:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:31:27 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:31:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:33:07 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:34:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 12:34:33 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:34:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 12:35:06 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:41:01 --> Could not find the language line "Other"
ERROR - 2024-07-06 12:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 12:42:42 --> Could not find the language line "Socks"
ERROR - 2024-07-06 12:46:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:50:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 12:51:53 --> Could not find the language line "Home"
ERROR - 2024-07-06 12:54:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 13:07:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 13:09:56 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:16:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:23:08 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:24:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 13:24:54 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:28:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 13:31:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 13:32:42 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:32:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:33:53 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:39:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 13:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:42:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 13:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:43:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 13:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:43:12 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 13:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:44:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 13:44:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 13:46:45 --> Could not find the language line "Home"
ERROR - 2024-07-06 13:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 13:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:05:57 --> Could not find the language line "Home"
ERROR - 2024-07-06 14:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:16:45 --> Could not find the language line "Home"
ERROR - 2024-07-06 14:22:48 --> Could not find the language line "products"
ERROR - 2024-07-06 14:24:04 --> Could not find the language line "Home"
ERROR - 2024-07-06 14:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 14:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 14:42:37 --> Could not find the language line "products"
ERROR - 2024-07-06 14:46:45 --> Could not find the language line "Home"
ERROR - 2024-07-06 14:52:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 14:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 14:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 15:02:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 15:06:02 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 15:06:06 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-06 15:06:06 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-06 15:06:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-06 15:06:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-06 15:10:07 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 15:12:01 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:12:05 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:16:46 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 15:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 15:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 15:46:46 --> Could not find the language line "Home"
ERROR - 2024-07-06 15:49:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 15:53:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 15:53:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 16:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:02:45 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:02:54 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:14:23 --> Could not find the language line "Other"
ERROR - 2024-07-06 16:16:46 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:18:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 16:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:23:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:46:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 16:46:47 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:47:16 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:47:16 --> Could not find the language line "Home"
ERROR - 2024-07-06 16:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 16:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 17:00:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 17:00:21 --> Could not find the language line "Home"
ERROR - 2024-07-06 17:08:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 17:08:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 17:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 17:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 17:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 17:15:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 17:16:47 --> Could not find the language line "Home"
ERROR - 2024-07-06 17:19:42 --> Could not find the language line "Socks"
ERROR - 2024-07-06 17:28:56 --> Could not find the language line "Home"
ERROR - 2024-07-06 17:44:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 17:46:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 17:48:20 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-06 17:58:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 18:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 18:16:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:17:14 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:17:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:17:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:17:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:17:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:18:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:18:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 18:18:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 18:18:28 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:20:30 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:20:38 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-07-06 18:20:38 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-07-06 18:20:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-07-06 18:20:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-07-06 18:21:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 18:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 18:28:33 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:30:23 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:34:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 18:34:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:40:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 18:46:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:47:32 --> Could not find the language line "Home"
ERROR - 2024-07-06 18:56:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 18:59:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 19:07:47 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 19:10:24 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:10:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 19:12:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 19:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:16:48 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:28:26 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:38:38 --> 404 Page Not Found: Packages/barryvdh
ERROR - 2024-07-06 19:42:46 --> Could not find the language line "products"
ERROR - 2024-07-06 19:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:46:05 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:46:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:47:49 --> Could not find the language line "products"
ERROR - 2024-07-06 19:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-06 19:48:15 --> Could not find the language line "Other"
ERROR - 2024-07-06 19:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:49:44 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:49:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 19:49:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 19:49:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 19:50:23 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 19:50:34 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 19:51:37 --> Could not find the language line "Home"
ERROR - 2024-07-06 19:52:45 --> Could not find the language line "products"
ERROR - 2024-07-06 19:54:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 20:11:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-06 20:12:55 --> Could not find the language line "products"
ERROR - 2024-07-06 20:13:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 20:16:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 20:18:22 --> Could not find the language line "products"
ERROR - 2024-07-06 20:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 20:23:30 --> 404 Page Not Found: Products/products
ERROR - 2024-07-06 20:37:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 20:39:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 20:43:47 --> Could not find the language line "Home"
ERROR - 2024-07-06 20:46:50 --> Could not find the language line "Home"
ERROR - 2024-07-06 20:48:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 20:53:51 --> Could not find the language line "products"
ERROR - 2024-07-06 20:58:37 --> Could not find the language line "Other"
ERROR - 2024-07-06 21:03:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 21:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 21:12:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 21:16:50 --> Could not find the language line "Home"
ERROR - 2024-07-06 21:16:55 --> Could not find the language line "products"
ERROR - 2024-07-06 21:21:05 --> Could not find the language line "Home"
ERROR - 2024-07-06 21:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 21:27:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 21:29:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 21:34:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-07-06 21:46:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 21:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:03:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 22:08:54 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:09:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 22:09:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-06 22:09:18 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:09:23 --> Could not find the language line "Clothing"
ERROR - 2024-07-06 22:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:16:51 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:18:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 22:18:26 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:19:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:19:53 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:20:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 22:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:21:21 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-06 22:24:59 --> Could not find the language line "products"
ERROR - 2024-07-06 22:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 22:41:05 --> Could not find the language line "products"
ERROR - 2024-07-06 22:45:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 22:46:51 --> Could not find the language line "Home"
ERROR - 2024-07-06 22:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-07-06 22:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:16:52 --> Could not find the language line "Home"
ERROR - 2024-07-06 23:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:36:49 --> Could not find the language line "Home"
ERROR - 2024-07-06 23:44:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-06 23:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-06 23:50:09 --> Could not find the language line "products"
ERROR - 2024-07-06 23:51:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-06 23:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-06 23:54:40 --> 404 Page Not Found: Robotstxt/index
