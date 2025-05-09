<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-09 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 00:08:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 00:08:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 00:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 00:20:49 --> Could not find the language line "Home"
ERROR - 2023-03-09 00:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 00:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 00:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 00:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 01:06:40 --> Could not find the language line "Home"
ERROR - 2023-03-09 01:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 01:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 01:23:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:17:09 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:17:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:17:36 --> 404 Page Not Found: Ftpconfig/index
ERROR - 2023-03-09 02:22:46 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:26:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:48:28 --> Could not find the language line "Home"
ERROR - 2023-03-09 02:49:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:10:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 03:10:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 03:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 03:10:29 --> Could not find the language line "Socks"
ERROR - 2023-03-09 03:10:30 --> Could not find the language line "Socks"
ERROR - 2023-03-09 03:10:44 --> 404 Page Not Found: Products/index
ERROR - 2023-03-09 03:10:44 --> 404 Page Not Found: Products/index
ERROR - 2023-03-09 03:10:44 --> 404 Page Not Found: Products/index
ERROR - 2023-03-09 03:10:45 --> 404 Page Not Found: Products/index
ERROR - 2023-03-09 03:10:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:10:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:10:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:10:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:10:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:10:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 03:13:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 03:13:44 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-03-09 03:13:45 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-03-09 03:13:46 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:26:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:41:01 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 03:41:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:41:57 --> Could not find the language line "Home"
ERROR - 2023-03-09 03:44:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-03-09 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:14:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 04:14:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 04:17:51 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:17:53 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:18:29 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:36:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 04:36:18 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:38:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-03-09 04:53:06 --> Could not find the language line "Home"
ERROR - 2023-03-09 04:53:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 05:18:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 05:21:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 05:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-03-09 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 05:42:39 --> Could not find the language line "Home"
ERROR - 2023-03-09 05:42:40 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:19:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:36:38 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:37:25 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:49:52 --> Could not find the language line "Bracelets"
ERROR - 2023-03-09 06:50:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 06:50:22 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:53:01 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:58:56 --> Could not find the language line "Home"
ERROR - 2023-03-09 06:59:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:05:43 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:07:08 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:07:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:12:17 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:13:12 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-09 07:13:12 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-09 07:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:28:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:28:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:28:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:28:28 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:28:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:28:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 07:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:28:46 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:28:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 07:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:29:05 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 07:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:29:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 07:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 07:29:28 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:29:57 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:30:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:31:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:31:37 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:35:28 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:35:58 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:37:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:38:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:39:59 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:40:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:41:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:41:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 07:41:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:42:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:43:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 07:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:43:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:43:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:45:37 --> Could not find the language line "Home"
ERROR - 2023-03-09 07:47:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 07:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 07:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:00:25 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:11:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:11:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:11:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:12:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:13:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:13:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:15:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:16:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:16:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:16:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:16:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:17:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:17:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:17:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:19:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:19:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:19:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:19:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:19:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:19:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:19:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:20:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:20:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:22:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 08:22:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 08:23:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:23:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 08:27:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:27:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:28:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:28:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:28:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 08:28:45 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:34:01 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:34:38 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:37:57 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:38:25 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 08:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:48:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:52:03 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:52:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 08:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 08:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:05:59 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:19:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:20:54 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:23:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:23:49 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-03-09 09:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
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
ERROR - 2023-03-09 09:23:52 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:24:05 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-03-09 09:24:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
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
ERROR - 2023-03-09 09:24:07 --> Severity: Notice --> Undefined variable: keywords /home/samfit/public_html/application/models/Item.php 294
ERROR - 2023-03-09 09:24:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY a.id
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
ERROR - 2023-03-09 09:24:08 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:24:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 09:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:24:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 09:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:38:03 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:52:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:53:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 09:53:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 09:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:53:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 09:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 09:55:44 --> Could not find the language line "Home"
ERROR - 2023-03-09 09:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:09:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-09 10:09:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-09 10:09:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-09 10:09:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-09 10:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:18:32 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:21:23 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:22:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:23:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:25:46 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:39:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:44:01 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:45:48 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 10:51:38 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-09 10:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:51:52 --> 404 Page Not Found: Git/index
ERROR - 2023-03-09 10:53:03 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:53:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:54:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 10:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 10:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:00:55 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:02:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:02:40 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:09:57 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:11:24 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:12:56 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:15:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:17:35 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:19:20 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:20:41 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:20:45 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:21:56 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:33:51 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:38:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:38:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:38:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:38:31 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:38:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:39:40 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:45:18 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 11:49:07 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:51:58 --> Could not find the language line "Home"
ERROR - 2023-03-09 11:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:02:46 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-03-09 12:02:47 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-03-09 12:03:22 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:05:00 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:05:22 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:05:35 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:05:41 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:06:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:09:50 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:09:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 12:10:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:10:16 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:10:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 12:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 12:10:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 12:10:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:15:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 12:25:20 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-03-09 12:26:26 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:27:38 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:32:42 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:50:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:52:11 --> Could not find the language line "Socks"
ERROR - 2023-03-09 12:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:52:24 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 12:56:51 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:57:02 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:57:17 --> Could not find the language line "Home"
ERROR - 2023-03-09 12:57:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 12:58:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:02:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:02:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:03:07 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:06:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:06:33 --> Could not find the language line "Perfume"
ERROR - 2023-03-09 13:06:41 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:15:38 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:19:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:19:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:20:58 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:22:34 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-09 13:22:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-09 13:22:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-09 13:22:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-09 13:24:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:30:47 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:41:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:42:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 13:42:42 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:44:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 13:49:32 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-09 13:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:50:49 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:52:24 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:57:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 13:58:30 --> Could not find the language line "Home"
ERROR - 2023-03-09 13:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 13:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:02:52 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:06:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:06:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:07:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 14:07:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:07:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:07:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:08:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:08:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:08:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:08:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:08:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 14:11:01 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:13:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:13:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:13:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 14:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:19:37 --> Could not find the language line "0"
ERROR - 2023-03-09 14:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:26:29 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:26:42 --> Could not find the language line "Perfume"
ERROR - 2023-03-09 14:26:46 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:27:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 14:40:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:40:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:55:29 --> Could not find the language line "Home"
ERROR - 2023-03-09 14:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:01:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-09 15:01:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-09 15:01:48 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-09 15:01:49 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-09 15:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:03:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:03:40 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:03:44 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:04:32 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:05:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:05:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:05:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:05:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:05:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:07:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:07:45 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:19:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:19:49 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:20:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-09 15:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-09 15:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:37:49 --> Could not find the language line "Bracelets"
ERROR - 2023-03-09 15:45:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:45:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:46:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:46:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 15:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 15:47:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:49:56 --> Could not find the language line "Home"
ERROR - 2023-03-09 15:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:06:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:08:16 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 16:27:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2023-03-09 16:27:56 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:27:58 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 16:38:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 16:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:01:09 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:01:10 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:02:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:02:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:02:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:02:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:03:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:03:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:03:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:04:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:04:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 17:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 17:04:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:04:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:04:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:04:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:04:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:05:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:05:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 17:06:20 --> Could not find the language line "Bracelets"
ERROR - 2023-03-09 17:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:11:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:12:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 17:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 17:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 17:13:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 17:14:02 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:14:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:14:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:14:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 17:15:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:15:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:15:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:16:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:17:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-09 17:18:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:43:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 17:44:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 17:55:42 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:07:47 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:13:36 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:19:24 --> 404 Page Not Found: Admin/assets
ERROR - 2023-03-09 18:28:42 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:42:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:51:59 --> Could not find the language line "Home"
ERROR - 2023-03-09 18:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:04:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 19:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 19:07:00 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 19:09:23 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-09 19:29:33 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:32:00 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 19:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 19:33:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:42:28 --> Could not find the language line "Home"
ERROR - 2023-03-09 19:54:04 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:04:55 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:08:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 20:11:24 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:12:37 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:16:38 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:16:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-09 20:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:18:08 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:21:08 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:25:52 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:26:18 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:27:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:27:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:27:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-09 20:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:28:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:28:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:29:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:30:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:30:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 20:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 20:30:31 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:31:25 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 20:31:39 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:31:44 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:31:51 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 20:32:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:32:29 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:45:45 --> Could not find the language line "Home"
ERROR - 2023-03-09 20:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 21:05:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 21:05:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 21:07:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 21:07:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 21:21:13 --> Could not find the language line "Home"
ERROR - 2023-03-09 21:26:00 --> Could not find the language line "Home"
ERROR - 2023-03-09 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 21:37:21 --> Could not find the language line "Home"
ERROR - 2023-03-09 21:49:31 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:00:48 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 22:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 22:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 22:28:08 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:31:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:31:42 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:39:45 --> Could not find the language line "Home"
ERROR - 2023-03-09 22:41:57 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:01:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-09 23:01:05 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:03:22 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 23:19:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 23:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:19:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 23:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-09 23:20:29 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:21:34 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:21:42 --> Could not find the language line "Bracelets"
ERROR - 2023-03-09 23:22:17 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:22:30 --> Could not find the language line "Perfume"
ERROR - 2023-03-09 23:22:35 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-09 23:23:27 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-09 23:48:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-09 23:48:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
