<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-06 00:06:28 --> Could not find the language line "Home"
ERROR - 2025-04-06 00:16:11 --> Could not find the language line "Home"
ERROR - 2025-04-06 00:16:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 00:19:46 --> Could not find the language line "Other"
ERROR - 2025-04-06 00:41:00 --> Could not find the language line "Home"
ERROR - 2025-04-06 00:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 00:46:10 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:09:50 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:16:11 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:19:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 01:23:15 --> 404 Page Not Found: Users/home
ERROR - 2025-04-06 01:36:37 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:37:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:37:42 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:37:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 01:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 01:46:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 01:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 01:54:52 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:06:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-06 02:16:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:23:02 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:23:32 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:24:05 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 02:24:12 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 02:24:12 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 02:24:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:27:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:27:18 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-06 02:27:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 02:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 02:43:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 02:46:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 02:47:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 02:48:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 02:48:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 02:48:52 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 03:04:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 03:04:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 03:04:55 --> Could not find the language line "Home"
ERROR - 2025-04-06 03:06:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 03:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 03:16:13 --> Could not find the language line "Home"
ERROR - 2025-04-06 03:21:28 --> Could not find the language line "Socks"
ERROR - 2025-04-06 03:27:04 --> Could not find the language line "Home"
ERROR - 2025-04-06 03:27:07 --> Could not find the language line "Other"
ERROR - 2025-04-06 03:39:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 03:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 03:40:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-06 03:46:13 --> Could not find the language line "Home"
ERROR - 2025-04-06 03:46:43 --> Could not find the language line "Home"
ERROR - 2025-04-06 04:16:14 --> Could not find the language line "Home"
ERROR - 2025-04-06 04:20:49 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 04:25:55 --> Could not find the language line "Other"
ERROR - 2025-04-06 04:32:43 --> Could not find the language line "Home"
ERROR - 2025-04-06 04:37:34 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-06 04:46:14 --> Could not find the language line "Home"
ERROR - 2025-04-06 04:51:27 --> Could not find the language line "0"
ERROR - 2025-04-06 04:51:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 05:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 05:13:48 --> Could not find the language line "Home"
ERROR - 2025-04-06 05:16:14 --> Could not find the language line "Home"
ERROR - 2025-04-06 05:19:18 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-06 05:19:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 05:46:14 --> Could not find the language line "Home"
ERROR - 2025-04-06 05:47:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 05:51:09 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 06:02:19 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-06 06:02:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:02:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 06:05:30 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:16:16 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:17:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 06:28:57 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:30:55 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:38:58 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 06:45:04 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:46:15 --> Could not find the language line "Home"
ERROR - 2025-04-06 06:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 06:53:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 07:16:15 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-06 07:28:02 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:29:59 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:30:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 07:30:54 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:33:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-06 07:35:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 07:38:03 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:44:07 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:46:15 --> Could not find the language line "Home"
ERROR - 2025-04-06 07:50:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 07:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:58:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 07:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 07:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:03 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:01:03 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2025-04-06 08:01:03 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:01:24 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:01:26 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:26 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:01:27 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:01:27 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:01:27 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:01:27 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-04-06 08:01:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:02:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:03:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 08:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:03:49 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:03:50 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:03:51 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:04:13 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-04-06 08:05:01 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:05:02 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:05:02 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Assets/img
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-04-06 08:05:03 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2025-04-06 08:05:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-06 08:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:05:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-06 08:06:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-06 08:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 08:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:09:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 08:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:11:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:12:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:12:27 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 08:12:49 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 08:14:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:14:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 08:16:05 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 08:16:16 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:16:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 08:17:06 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 08:17:20 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:17:48 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:18:15 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:19:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:19:22 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:19:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:20:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:21:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:21:42 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:21:50 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:21:58 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:22:05 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:22:32 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:22:43 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:22:57 --> Could not find the language line "Other"
ERROR - 2025-04-06 08:23:44 --> Could not find the language line "Other"
ERROR - 2025-04-06 08:23:57 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:24:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-06 08:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 08:24:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-06 08:24:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:24:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:25:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:25:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:25:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:25:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:25:57 --> Could not find the language line "Other"
ERROR - 2025-04-06 08:27:59 --> Could not find the language line "Other"
ERROR - 2025-04-06 08:30:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 08:38:23 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-06 08:38:24 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:38:24 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:39:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:39:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:39:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:39:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 08:40:28 --> Could not find the language line "Perfume"
ERROR - 2025-04-06 08:46:16 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:54:56 --> Could not find the language line "Home"
ERROR - 2025-04-06 08:55:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 08:59:02 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:01:21 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-06 09:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:10:29 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:15:26 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:15:26 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:16:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:19:04 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:19:25 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 09:41:31 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:42:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 09:43:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 09:46:15 --> Could not find the language line "Home"
ERROR - 2025-04-06 09:47:45 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 10:16:15 --> Could not find the language line "Home"
ERROR - 2025-04-06 10:18:43 --> Could not find the language line "Home"
ERROR - 2025-04-06 10:27:46 --> Could not find the language line "Home"
ERROR - 2025-04-06 10:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 10:38:51 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 10:42:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 10:46:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 10:50:51 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:13:29 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:14:52 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:16:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:23:53 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-06 11:31:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:37:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:39:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:40:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:41:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:42:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:43:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:44:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 11:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:46:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 11:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 11:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:11:46 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-06 12:11:46 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:16:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:18:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 12:19:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:29:47 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:30:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 12:30:13 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:30:16 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 12:30:24 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:30:48 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:31:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 12:31:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-06 12:31:21 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:46:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 12:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 12:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 12:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 13:01:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 13:16:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 13:46:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 13:46:46 --> Could not find the language line "Home"
ERROR - 2025-04-06 13:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 13:55:51 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:00:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-06 14:16:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:18:52 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:27:00 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 14:34:40 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:39:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 14:43:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 14:45:14 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:46:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 14:55:17 --> Could not find the language line "Home"
ERROR - 2025-04-06 15:01:13 --> Could not find the language line "Home"
ERROR - 2025-04-06 15:16:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 15:26:53 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-04-06 15:31:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 15:42:13 --> Could not find the language line "Home"
ERROR - 2025-04-06 15:46:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 16:01:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-06 16:16:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 16:16:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 16:18:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 16:21:58 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2025-04-06 16:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 16:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 16:37:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 16:37:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 16:45:08 --> Could not find the language line "Home"
ERROR - 2025-04-06 16:45:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 16:46:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 16:50:12 --> Could not find the language line "Home"
ERROR - 2025-04-06 16:58:11 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-06 16:58:11 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:01:10 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-06 17:01:10 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:01:10 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:15:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 17:16:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:26:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:32:49 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-04-06 17:40:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 17:46:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 18:05:17 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-04-06 18:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 18:06:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 18:14:26 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:16:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:36:07 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 18:41:31 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:41:44 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:41:46 --> Could not find the language line "Home"
ERROR - 2025-04-06 18:46:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-06 18:46:20 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:15:23 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:16:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:17:37 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:22:09 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:23:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:25:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:25:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:26:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:26:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:26:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:27:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:27:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:29:17 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 19:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:38:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-04-06 19:41:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 19:41:32 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:43:08 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:44:49 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 19:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 19:46:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:46:27 --> Could not find the language line "Home"
ERROR - 2025-04-06 19:53:44 --> Could not find the language line "accounts"
ERROR - 2025-04-06 19:58:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 19:58:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 19:59:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 19:59:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-06 20:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:16:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:25:56 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:26:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:28:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 20:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:42:16 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-06 20:42:16 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:42:16 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-06 20:42:17 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-06 20:42:17 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-06 20:42:17 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-06 20:42:17 --> 404 Page Not Found: New/index
ERROR - 2025-04-06 20:42:18 --> 404 Page Not Found: Main/index
ERROR - 2025-04-06 20:42:18 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:46:22 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 20:52:04 --> Could not find the language line "Home"
ERROR - 2025-04-06 20:52:06 --> 404 Page Not Found: Home/accounts
ERROR - 2025-04-06 20:52:07 --> 404 Page Not Found: Home/home
ERROR - 2025-04-06 20:52:07 --> 404 Page Not Found: Home/assets
ERROR - 2025-04-06 20:56:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-06 20:58:23 --> Could not find the language line "accounts"
ERROR - 2025-04-06 20:59:19 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 21:13:48 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:16:24 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:23:50 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:26:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 21:26:51 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:35:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-06 21:37:04 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:37:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-06 21:42:03 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-06 21:42:03 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:42:03 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:46:30 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:50:54 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:53:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 21:56:25 --> Could not find the language line "Home"
ERROR - 2025-04-06 21:57:35 --> Could not find the language line "Home"
ERROR - 2025-04-06 22:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 22:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 22:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 22:16:05 --> Could not find the language line "Home"
ERROR - 2025-04-06 22:16:26 --> Could not find the language line "Home"
ERROR - 2025-04-06 22:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 22:46:27 --> Could not find the language line "Home"
ERROR - 2025-04-06 22:47:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-06 22:49:06 --> Could not find the language line "Crocs"
ERROR - 2025-04-06 22:50:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-06 22:53:27 --> Could not find the language line "Home"
ERROR - 2025-04-06 23:16:26 --> Could not find the language line "Home"
ERROR - 2025-04-06 23:25:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-06 23:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-06 23:28:39 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-04-06 23:33:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-06 23:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-06 23:46:49 --> Could not find the language line "Home"
