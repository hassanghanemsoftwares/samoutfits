<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-18 00:01:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-18 00:03:23 --> Could not find the language line "products"
ERROR - 2024-12-18 00:03:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 00:04:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-18 00:09:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 00:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 00:10:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-18 00:18:51 --> Could not find the language line "Home"
ERROR - 2024-12-18 00:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 00:49:19 --> Could not find the language line "Home"
ERROR - 2024-12-18 00:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 01:01:19 --> Could not find the language line "Home"
ERROR - 2024-12-18 01:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 01:18:59 --> Could not find the language line "Home"
ERROR - 2024-12-18 01:48:59 --> Could not find the language line "Home"
ERROR - 2024-12-18 02:10:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 02:19:01 --> Could not find the language line "Home"
ERROR - 2024-12-18 02:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 02:41:14 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-18 02:46:34 --> Could not find the language line "Home"
ERROR - 2024-12-18 02:48:50 --> Could not find the language line "Home"
ERROR - 2024-12-18 02:49:39 --> Could not find the language line "Home"
ERROR - 2024-12-18 02:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 03:02:17 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:03:20 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-12-18 03:08:25 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 03:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 03:44:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-18 03:44:50 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 03:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:49:00 --> Could not find the language line "Home"
ERROR - 2024-12-18 03:56:07 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:03:24 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:18:57 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:23:19 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:38:31 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:48:51 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:49:42 --> Could not find the language line "Home"
ERROR - 2024-12-18 04:53:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-18 05:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 05:18:53 --> Could not find the language line "Home"
ERROR - 2024-12-18 05:22:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 05:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 05:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 05:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 05:52:11 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 06:18:53 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:27:14 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:27:38 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 06:37:18 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:47:43 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 06:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 06:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 06:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:11:47 --> Could not find the language line "Home"
ERROR - 2024-12-18 07:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:18:53 --> Could not find the language line "Home"
ERROR - 2024-12-18 07:36:13 --> Could not find the language line "Home"
ERROR - 2024-12-18 07:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 07:52:28 --> Could not find the language line "Home"
ERROR - 2024-12-18 07:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:52:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:52:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:53:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:53:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:53:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:53:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-18 07:53:29 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-18 07:57:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 07:57:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 07:57:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 07:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:57:55 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 07:59:08 --> Could not find the language line "Home"
ERROR - 2024-12-18 08:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:10:32 --> Could not find the language line "Home"
ERROR - 2024-12-18 08:16:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:18:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:18:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 08:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:30:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:30:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:30:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:33:17 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 08:35:00 --> Could not find the language line "Perfume"
ERROR - 2024-12-18 08:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-18 08:49:12 --> Could not find the language line "Home"
ERROR - 2024-12-18 08:51:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "assets"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "assets"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "assets"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "assets"
ERROR - 2024-12-18 08:51:36 --> Could not find the language line "assets"
ERROR - 2024-12-18 08:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 08:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:05:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-18 09:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:33:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-18 09:35:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-18 09:36:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 09:36:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-18 09:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 09:45:44 --> Could not find the language line "Home"
ERROR - 2024-12-18 09:46:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 09:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 09:48:53 --> Could not find the language line "Home"
ERROR - 2024-12-18 10:12:18 --> Could not find the language line "Home"
ERROR - 2024-12-18 10:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 10:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 10:38:57 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 10:41:26 --> Could not find the language line "Home"
ERROR - 2024-12-18 10:43:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-18 10:48:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:17:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:18:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-18 11:18:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:19:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-18 11:19:51 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:24:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-18 11:27:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-18 11:29:38 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:31:32 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:35:45 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:41:40 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:41:41 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:48:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 11:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 11:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:02:38 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:05:48 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:07:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:11:48 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:12:13 --> 404 Page Not Found: Assets/images
ERROR - 2024-12-18 12:13:58 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:16:48 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:16:49 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:17:03 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:17:15 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:18:08 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:18:29 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:18:46 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:18:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:27:14 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:27:14 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:27:14 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:28:53 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:30:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 12:30:51 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:48:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 12:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 12:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:13:26 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:18:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:27:28 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:27:35 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 13:28:10 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:28:25 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:38:16 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:42:45 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-18 13:42:45 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:42:45 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:48:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 13:53:05 --> Could not find the language line "Home"
ERROR - 2024-12-18 13:57:21 --> Could not find the language line "Home"
ERROR - 2024-12-18 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:11:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 14:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:18:55 --> Could not find the language line "Home"
ERROR - 2024-12-18 14:25:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 14:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:34:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-18 14:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:38:39 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-18 14:39:42 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 14:40:08 --> Could not find the language line "Home"
ERROR - 2024-12-18 14:45:33 --> Could not find the language line "Home"
ERROR - 2024-12-18 14:48:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 14:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 14:58:02 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 14:59:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 15:00:36 --> Could not find the language line "Other"
ERROR - 2024-12-18 15:01:38 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 15:18:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 15:21:47 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-18 15:21:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-18 15:48:57 --> Could not find the language line "Home"
ERROR - 2024-12-18 15:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 15:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 16:18:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-18 16:18:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-18 16:18:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-18 16:18:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 16:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 16:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 16:31:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 16:41:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 16:48:57 --> Could not find the language line "Home"
ERROR - 2024-12-18 16:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:18:57 --> Could not find the language line "Home"
ERROR - 2024-12-18 17:37:47 --> Could not find the language line "Home"
ERROR - 2024-12-18 17:46:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-18 17:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:48:58 --> Could not find the language line "Home"
ERROR - 2024-12-18 17:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 17:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:02:34 --> Could not find the language line "Other"
ERROR - 2024-12-18 18:07:30 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:08:01 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:11:00 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:11:33 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:18:58 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:31:12 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 18:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:48:58 --> Could not find the language line "Home"
ERROR - 2024-12-18 18:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 18:57:03 --> Could not find the language line "Other"
ERROR - 2024-12-18 18:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 19:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 19:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 19:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 19:12:45 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:15:27 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:19:00 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:19:06 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:20:16 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:23:25 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:24:08 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 19:30:15 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:32:47 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:41:34 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 19:48:59 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:51:50 --> Could not find the language line "Home"
ERROR - 2024-12-18 19:52:45 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 19:52:50 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 19:52:54 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 19:53:34 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 19:57:03 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-18 19:57:03 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:08:12 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:11:56 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:18:59 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:21:01 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:22:37 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:22:45 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:25:54 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 20:34:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-18 20:40:04 --> Could not find the language line "Home"
ERROR - 2024-12-18 20:43:18 --> Could not find the language line "Home"
ERROR - 2024-12-18 21:10:27 --> Could not find the language line "Home"
ERROR - 2024-12-18 21:13:20 --> Could not find the language line "Home"
ERROR - 2024-12-18 21:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 21:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 21:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 21:41:18 --> Could not find the language line "Home"
ERROR - 2024-12-18 21:41:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:42:15 --> Could not find the language line "Other"
ERROR - 2024-12-18 21:42:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:42:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:43:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:43:19 --> Could not find the language line "Home"
ERROR - 2024-12-18 21:43:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:44:08 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:44:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-18 21:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:08:58 --> Could not find the language line "Home"
ERROR - 2024-12-18 22:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:13:20 --> Could not find the language line "Home"
ERROR - 2024-12-18 22:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:36:52 --> Could not find the language line "Other"
ERROR - 2024-12-18 22:38:33 --> Could not find the language line "Crocs"
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-18 22:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-18 22:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-12-18 22:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-18 22:42:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-18 22:42:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-18 22:43:22 --> Could not find the language line "Home"
ERROR - 2024-12-18 22:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 22:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:13:22 --> Could not find the language line "Home"
ERROR - 2024-12-18 23:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:23:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-18 23:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:24:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-18 23:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:43:22 --> Could not find the language line "Home"
ERROR - 2024-12-18 23:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:55:35 --> Could not find the language line "Socks"
ERROR - 2024-12-18 23:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-18 23:59:37 --> 404 Page Not Found: Assets/css
