<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-29 00:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 00:08:00 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:12:44 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:15:42 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:20:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 00:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 00:29:45 --> Could not find the language line "products"
ERROR - 2024-06-29 00:32:43 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:38:56 --> Could not find the language line "products"
ERROR - 2024-06-29 00:40:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 00:40:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 00:41:40 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:47:38 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:49:08 --> Could not find the language line "products"
ERROR - 2024-06-29 00:50:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 00:53:33 --> 404 Page Not Found: Products/products
ERROR - 2024-06-29 00:58:51 --> Could not find the language line "products"
ERROR - 2024-06-29 01:14:51 --> Could not find the language line "Home"
ERROR - 2024-06-29 01:20:22 --> Could not find the language line "Home"
ERROR - 2024-06-29 01:30:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 01:33:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 01:33:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 01:33:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 01:35:54 --> Could not find the language line "Other"
ERROR - 2024-06-29 01:44:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 01:50:23 --> Could not find the language line "Home"
ERROR - 2024-06-29 02:18:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 02:20:29 --> Could not find the language line "Home"
ERROR - 2024-06-29 02:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 02:30:28 --> Could not find the language line "products"
ERROR - 2024-06-29 02:32:37 --> Could not find the language line "products"
ERROR - 2024-06-29 02:34:58 --> Could not find the language line "Socks"
ERROR - 2024-06-29 02:46:26 --> 404 Page Not Found: Products/products
ERROR - 2024-06-29 02:50:20 --> Could not find the language line "Home"
ERROR - 2024-06-29 03:05:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 03:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 03:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 03:18:37 --> Could not find the language line "products"
ERROR - 2024-06-29 03:20:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 03:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 03:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 03:24:08 --> Could not find the language line "products"
ERROR - 2024-06-29 03:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 03:50:21 --> Could not find the language line "Home"
ERROR - 2024-06-29 03:53:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 03:58:32 --> Could not find the language line "products"
ERROR - 2024-06-29 04:03:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 04:20:20 --> Could not find the language line "Home"
ERROR - 2024-06-29 04:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 04:27:38 --> Could not find the language line "Home"
ERROR - 2024-06-29 04:34:48 --> 404 Page Not Found: Products/products
ERROR - 2024-06-29 04:42:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 04:50:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 04:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 05:05:14 --> Could not find the language line "Home"
ERROR - 2024-06-29 05:15:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 05:20:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 05:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 05:31:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 05:50:23 --> Could not find the language line "Home"
ERROR - 2024-06-29 05:54:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 05:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:05:24 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:20:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:20:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:26:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 06:27:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:27:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:31:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:34:00 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:35:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:39:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 06:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:42:04 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:42:09 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:44:55 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:47:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 06:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:50:11 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:51:12 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:51:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 06:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:51:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 06:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 06:53:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 06:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:07:45 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:08:30 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:10:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-29 07:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:20:11 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:24:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 07:25:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 07:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:36:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 07:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:38:18 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 07:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:44:43 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:50:12 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 07:54:44 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:54:45 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:58:37 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:58:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 07:58:41 --> Could not find the language line "Home"
ERROR - 2024-06-29 07:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:01:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:01:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 08:01:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 08:12:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 08:12:26 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:12:39 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:12:39 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:19:27 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-29 08:20:12 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:25:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 08:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:32:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 08:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:44:37 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:50:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 08:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:53:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-29 08:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 08:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:06:01 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:08:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-29 09:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:10:57 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:11:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 09:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:14:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 09:14:35 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 09:20:14 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:27:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:28:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 09:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:43:23 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:50:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 09:54:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 09:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 09:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:02:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:03:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:03:50 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:04:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:05:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-29 10:07:55 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:07:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:18:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:20:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:25:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:26:34 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:32:04 --> Could not find the language line "products"
ERROR - 2024-06-29 10:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:33:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 10:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:35:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 10:44:00 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:44:59 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-06-29 10:46:25 --> Could not find the language line "products"
ERROR - 2024-06-29 10:49:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:50:13 --> Could not find the language line "Home"
ERROR - 2024-06-29 10:51:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 10:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 11:00:29 --> Could not find the language line "Home"
ERROR - 2024-06-29 11:02:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:03:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:04:14 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-06-29 11:04:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:04:57 --> Could not find the language line "products"
ERROR - 2024-06-29 11:05:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 11:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 11:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 11:06:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:07:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:08:54 --> Could not find the language line "Home"
ERROR - 2024-06-29 11:09:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:11:41 --> 404 Page Not Found: Products/products
ERROR - 2024-06-29 11:13:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:20:14 --> Could not find the language line "Home"
ERROR - 2024-06-29 11:27:09 --> Could not find the language line "Other"
ERROR - 2024-06-29 11:27:57 --> Could not find the language line "Home"
ERROR - 2024-06-29 11:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 11:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 11:34:12 --> Could not find the language line "Socks"
ERROR - 2024-06-29 11:36:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 11:50:14 --> Could not find the language line "Home"
ERROR - 2024-06-29 11:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 11:59:34 --> Could not find the language line "products"
ERROR - 2024-06-29 12:02:14 --> Could not find the language line "products"
ERROR - 2024-06-29 12:03:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 12:05:24 --> Could not find the language line "products"
ERROR - 2024-06-29 12:07:41 --> Could not find the language line "products"
ERROR - 2024-06-29 12:10:41 --> Could not find the language line "Home"
ERROR - 2024-06-29 12:10:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 12:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:14:10 --> Could not find the language line "products"
ERROR - 2024-06-29 12:20:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 12:20:37 --> Could not find the language line "products"
ERROR - 2024-06-29 12:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:25:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 12:26:18 --> Could not find the language line "products"
ERROR - 2024-06-29 12:26:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 12:28:02 --> Could not find the language line "Home"
ERROR - 2024-06-29 12:34:49 --> 404 Page Not Found: Products/products
ERROR - 2024-06-29 12:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:40:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 12:42:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 12:45:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 12:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 12:50:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 12:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:20:16 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:25:53 --> Could not find the language line "products"
ERROR - 2024-06-29 13:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:32:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 13:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 13:42:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 13:42:56 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:43:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 13:50:16 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:50:36 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:50:46 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:54:21 --> Could not find the language line "Home"
ERROR - 2024-06-29 13:58:41 --> Could not find the language line "products"
ERROR - 2024-06-29 14:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:06:30 --> Could not find the language line "products"
ERROR - 2024-06-29 14:06:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-29 14:11:41 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:14:06 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:14:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-29 14:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:20:16 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:23:29 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:27:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 14:27:32 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:29:53 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:29:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 14:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:30:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 14:30:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 14:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:31:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 14:31:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 14:31:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 14:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 14:45:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-29 14:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-29 14:45:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-29 14:46:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 14:50:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 15:03:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 15:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 15:05:55 --> Could not find the language line "Home"
ERROR - 2024-06-29 15:05:55 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-29 15:05:56 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-29 15:05:56 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-29 15:05:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-29 15:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 15:10:54 --> Could not find the language line "Other"
ERROR - 2024-06-29 15:15:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 15:19:08 --> Could not find the language line "Socks"
ERROR - 2024-06-29 15:20:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 15:25:47 --> Could not find the language line "Home"
ERROR - 2024-06-29 15:30:40 --> Could not find the language line "products"
ERROR - 2024-06-29 15:31:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 15:35:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 15:39:06 --> 404 Page Not Found: Cart/cart
ERROR - 2024-06-29 15:42:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 15:50:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 15:51:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 15:59:53 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:00:46 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:02:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 16:10:55 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:13:56 --> Could not find the language line "products"
ERROR - 2024-06-29 16:20:17 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:21:41 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:25:12 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 16:34:26 --> Could not find the language line "products"
ERROR - 2024-06-29 16:36:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 16:50:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 16:52:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 16:54:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 16:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 16:58:44 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:05:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 17:10:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 17:15:47 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:15:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 17:15:49 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-06-29 17:15:50 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-06-29 17:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:20:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:33:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 17:34:04 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:34:05 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:34:05 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:34:07 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:34:08 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:34:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:41:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 17:41:45 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:50:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:56:55 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:57:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:58:06 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:58:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:58:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:58:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 17:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:15 --> Could not find the language line "Home"
ERROR - 2024-06-29 17:59:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 17:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 17:59:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 18:13:22 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:13:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:13:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:13:56 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:14:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:14:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:15:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:15:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:15:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:15:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:15:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:15:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:16:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:16:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-29 18:16:14 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:19:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:19:50 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:20:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:23:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 18:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 18:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:38:25 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:39:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 18:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:40:25 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:40:31 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:43:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 18:44:01 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:45:34 --> Could not find the language line "products"
ERROR - 2024-06-29 18:50:20 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:51:00 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:51:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-29 18:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:52:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-29 18:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 18:53:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-29 18:55:47 --> Could not find the language line "Home"
ERROR - 2024-06-29 18:57:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 18:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 19:00:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 19:20:19 --> Could not find the language line "Home"
ERROR - 2024-06-29 19:22:21 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-29 19:24:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 19:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 19:45:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 19:50:19 --> Could not find the language line "Home"
ERROR - 2024-06-29 19:54:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-29 20:05:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 20:19:44 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 20:20:22 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 20:34:53 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:35:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:35:12 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:35:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:35:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:35:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 20:36:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:36:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 20:37:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 20:42:09 --> Could not find the language line "products"
ERROR - 2024-06-29 20:44:31 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:44:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:45:48 --> Could not find the language line "products"
ERROR - 2024-06-29 20:46:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:46:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:46:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:46:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 20:46:47 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:46:48 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:50:20 --> Could not find the language line "Home"
ERROR - 2024-06-29 20:58:49 --> Could not find the language line "0"
ERROR - 2024-06-29 21:01:22 --> Could not find the language line "Home"
ERROR - 2024-06-29 21:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 21:04:23 --> Could not find the language line "products"
ERROR - 2024-06-29 21:06:41 --> Could not find the language line "products"
ERROR - 2024-06-29 21:09:20 --> Could not find the language line "products"
ERROR - 2024-06-29 21:12:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 21:14:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 21:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 21:20:25 --> Could not find the language line "Home"
ERROR - 2024-06-29 21:22:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 21:37:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 21:38:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-29 21:44:35 --> Could not find the language line "products"
ERROR - 2024-06-29 21:50:22 --> Could not find the language line "Home"
ERROR - 2024-06-29 21:50:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 21:50:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 21:56:57 --> Could not find the language line "products"
ERROR - 2024-06-29 21:59:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 22:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:05:39 --> Could not find the language line "products"
ERROR - 2024-06-29 22:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:15:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 22:19:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 22:20:28 --> Could not find the language line "Home"
ERROR - 2024-06-29 22:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 22:29:48 --> Could not find the language line "products"
ERROR - 2024-06-29 22:34:56 --> Could not find the language line "products"
ERROR - 2024-06-29 22:36:16 --> Could not find the language line "products"
ERROR - 2024-06-29 22:36:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 22:41:08 --> Could not find the language line "Other"
ERROR - 2024-06-29 22:44:01 --> Could not find the language line "Home"
ERROR - 2024-06-29 22:44:23 --> Could not find the language line "Socks"
ERROR - 2024-06-29 22:49:21 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-06-29 22:50:23 --> Could not find the language line "Home"
ERROR - 2024-06-29 22:53:42 --> Could not find the language line "products"
ERROR - 2024-06-29 23:01:38 --> Could not find the language line "products"
ERROR - 2024-06-29 23:03:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:09:53 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 23:16:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:16:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:17:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:18:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:18:44 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 23:20:24 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:22:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-29 23:24:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:24:30 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:25:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-29 23:26:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:27:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:28:50 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:31:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:31:43 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:35:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:39:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-29 23:44:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-29 23:50:25 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:52:09 --> Could not find the language line "products"
ERROR - 2024-06-29 23:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-29 23:56:19 --> Could not find the language line "Home"
ERROR - 2024-06-29 23:57:57 --> Could not find the language line "Home"
