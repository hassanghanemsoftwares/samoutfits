<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-19 00:09:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 00:09:26 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 00:18:06 --> Could not find the language line "Perfume"
ERROR - 2023-09-19 00:21:25 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:27:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:41:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:46:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-19 00:46:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-19 00:46:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-19 00:46:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-19 00:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:47:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 00:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:48:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 00:48:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:49:37 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:50:52 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:51:26 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:51:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-19 00:51:38 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:51:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-19 00:52:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-19 00:52:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:52:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-19 00:52:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-19 00:52:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 00:53:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 00:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 00:57:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:03:45 --> Could not find the language line "products"
ERROR - 2023-09-19 01:04:48 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-19 01:13:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:27:50 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:28:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 01:28:37 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:33:09 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:33:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:33:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:33:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:34:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:34:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:34:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 01:35:12 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:35:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:35:20 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 01:35:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 01:35:53 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:36:06 --> Could not find the language line "Socks"
ERROR - 2023-09-19 01:36:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 01:40:09 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:43:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 01:45:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 01:57:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 02:19:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 02:27:44 --> Could not find the language line "Home"
ERROR - 2023-09-19 02:27:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 02:52:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 02:58:00 --> Could not find the language line "Home"
ERROR - 2023-09-19 03:08:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 03:14:35 --> 404 Page Not Found: Wp-includes/Requests
ERROR - 2023-09-19 03:14:35 --> 404 Page Not Found: Wp-includes/Requests
ERROR - 2023-09-19 03:27:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 03:47:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 03:56:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 03:57:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 03:57:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:11:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 04:12:53 --> Could not find the language line "products"
ERROR - 2023-09-19 04:25:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 04:26:09 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:26:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:26:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 04:27:49 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:28:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 04:28:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:30:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:31:20 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:32:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 04:48:57 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-09-19 04:57:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 04:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 05:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 05:11:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:20:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:22:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:25:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 05:27:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 05:40:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 05:42:04 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:49:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 05:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 05:52:12 --> Could not find the language line "Home"
ERROR - 2023-09-19 05:57:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:10:53 --> Could not find the language line "products"
ERROR - 2023-09-19 06:15:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 06:20:59 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:27:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:28:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-09-19 06:34:55 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 06:41:05 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:41:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 06:42:20 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:43:04 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:43:04 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 06:52:46 --> 404 Page Not Found: Congphp/index
ERROR - 2023-09-19 06:52:46 --> 404 Page Not Found: Stphp/index
ERROR - 2023-09-19 06:52:47 --> 404 Page Not Found: Css/index.php
ERROR - 2023-09-19 06:52:47 --> 404 Page Not Found: Radiophp/index
ERROR - 2023-09-19 06:54:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 06:54:33 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 06:57:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 06:58:09 --> Could not find the language line "Home"
ERROR - 2023-09-19 07:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:06:56 --> Could not find the language line "products"
ERROR - 2023-09-19 07:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:11:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 07:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:15:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-19 07:18:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 07:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:27:44 --> Could not find the language line "Home"
ERROR - 2023-09-19 07:46:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 07:46:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 07:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 07:50:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 07:57:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 08:11:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:13:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 08:17:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:18:37 --> Could not find the language line "products"
ERROR - 2023-09-19 08:20:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 08:27:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:34:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 08:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 08:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 08:51:09 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-19 08:52:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 08:54:23 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:55:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-19 08:56:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 08:56:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:57:44 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 08:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 08:58:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 08:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:00:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 09:07:16 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:10:30 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:11:13 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:17:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 09:20:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:27:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 09:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:46:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 09:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 09:54:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 09:57:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:02:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 10:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:11:10 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:12:14 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:20:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:27:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 10:53:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 10:57:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:59:12 --> Could not find the language line "Home"
ERROR - 2023-09-19 10:59:17 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:00:08 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:01:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 11:02:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 11:02:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:04:32 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:11:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 11:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 11:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 11:26:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 11:27:44 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:33:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:34:04 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:43:58 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 11:57:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 11:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:06:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:07:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 12:10:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:22:53 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:25:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-19 12:25:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-19 12:25:10 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-19 12:25:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-19 12:27:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:29:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-19 12:29:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-19 12:29:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-19 12:32:19 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:36:19 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:40:23 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:43:11 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 12:46:11 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:57:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 12:58:38 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:06:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 13:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:27:50 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:49:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:51:22 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:53:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 13:57:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:57:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 13:58:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 13:58:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:00:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:09:24 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:27:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:36:59 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:38:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 14:54:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 14:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 14:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 14:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 14:54:31 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-19 14:54:32 --> 404 Page Not Found: Home/home
ERROR - 2023-09-19 14:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 14:57:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:02:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:03:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 15:03:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 15:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:11:24 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:12:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:13:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:19:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:22:14 --> Could not find the language line "Perfume"
ERROR - 2023-09-19 15:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:22:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:22:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:23:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:23:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:23:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 15:27:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:42:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 15:42:11 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:57:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 15:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 15:57:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 15:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 15:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 16:00:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:02:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 16:17:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:18:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:18:48 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:19:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 16:20:04 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 16:25:38 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:27:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 16:37:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 16:37:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-19 16:39:24 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:40:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:40:59 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:40:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-09-19 16:41:03 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 16:57:01 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:57:12 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 16:57:27 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 16:57:35 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 16:57:37 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:57:40 --> Could not find the language line "Perfume"
ERROR - 2023-09-19 16:57:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:57:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:58:33 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:59:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 16:59:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 16:59:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-19 17:04:06 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:05:14 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:05:16 --> Could not find the language line "Perfume"
ERROR - 2023-09-19 17:05:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:19:37 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:19:52 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:19:52 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 17:27:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 17:27:17 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:27:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:33:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:34:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:39:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:28 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:40:29 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 17:41:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 17:44:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 17:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 17:44:20 --> Could not find the language line "products"
ERROR - 2023-09-19 17:45:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:46:11 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:46:16 --> Could not find the language line "Bracelets"
ERROR - 2023-09-19 17:46:19 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:46:44 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:49:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 17:50:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 17:50:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-19 17:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:57:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 17:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 17:59:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 17:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:20:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:25:37 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:27:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 18:27:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:28:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 18:33:32 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:43:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-19 18:43:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-19 18:43:52 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:44:23 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:44:45 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:55 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:49:57 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:57:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 18:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 18:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:07:29 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-19 19:07:29 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-19 19:07:30 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-19 19:07:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-19 19:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:21:26 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:24:03 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:26:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 19:27:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:37:54 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:39:19 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:44:50 --> Could not find the language line "Home"
ERROR - 2023-09-19 19:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 19:57:48 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:07:17 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:10:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 20:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 20:10:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:10:56 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:10:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:11:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:11:04 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:11:06 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-19 20:14:20 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:17:27 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:18:05 --> 404 Page Not Found: App-adstxt/index
ERROR - 2023-09-19 20:18:05 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-09-19 20:18:05 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-09-19 20:18:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-19 20:18:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-09-19 20:18:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-09-19 20:18:22 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-09-19 20:19:08 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:20:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:21:05 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:22:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 20:22:55 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:22:56 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-19 20:27:06 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:27:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:43:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:43:59 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:45:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 20:45:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:45:35 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-19 20:53:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-19 20:53:42 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 20:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 20:54:50 --> Could not find the language line "Home"
ERROR - 2023-09-19 20:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 20:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 20:57:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:02:21 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:03:02 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:03:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:06:50 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:14:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:15:24 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 21:19:41 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:20:39 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:20:51 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:18 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:21:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:39:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 21:41:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:46 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:41:47 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:45:19 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:45:48 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:47:08 --> Could not find the language line "Home"
ERROR - 2023-09-19 21:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-19 22:00:27 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-19 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:35 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 22:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:13:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 23:13:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-19 23:22:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:22:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:22:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:22:43 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:27:31 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:27:40 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:28:31 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:30:20 --> Could not find the language line "Home"
ERROR - 2023-09-19 23:54:43 --> 404 Page Not Found: Robotstxt/index
