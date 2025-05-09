<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-05 00:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 00:02:57 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 00:07:18 --> Could not find the language line "products"
ERROR - 2024-07-05 00:16:20 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:16:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:16:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:17:08 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:19:16 --> Could not find the language line "products"
ERROR - 2024-07-05 00:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 00:21:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-05 00:24:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:24:50 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:24:52 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:29:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:46:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 00:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 00:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 00:51:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:52:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:55:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 00:58:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:01:57 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 01:06:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:13:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:13:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:15:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-05 01:15:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 01:16:18 --> Could not find the language line "Home"
ERROR - 2024-07-05 01:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 01:30:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:35:07 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 01:43:52 --> Could not find the language line "Other"
ERROR - 2024-07-05 01:45:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:45:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 01:45:32 --> Could not find the language line "Home"
ERROR - 2024-07-05 01:45:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 01:46:19 --> Could not find the language line "Home"
ERROR - 2024-07-05 01:54:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-05 01:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 02:04:38 --> Could not find the language line "products"
ERROR - 2024-07-05 02:07:31 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-05 02:14:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 02:16:20 --> Could not find the language line "Home"
ERROR - 2024-07-05 02:31:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 02:32:13 --> Could not find the language line "products"
ERROR - 2024-07-05 02:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 02:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 02:39:33 --> Could not find the language line "products"
ERROR - 2024-07-05 02:44:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 02:46:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 02:52:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:01:00 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:02:15 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:06:17 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:11:41 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:16:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 03:27:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 03:31:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 03:32:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 03:32:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 03:44:40 --> Could not find the language line "products"
ERROR - 2024-07-05 03:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 03:46:30 --> Could not find the language line "Home"
ERROR - 2024-07-05 03:54:45 --> Could not find the language line "products"
ERROR - 2024-07-05 03:57:47 --> Could not find the language line "products"
ERROR - 2024-07-05 04:01:14 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:01:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 04:03:08 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:05:55 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:10:50 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:13:27 --> Could not find the language line "products"
ERROR - 2024-07-05 04:16:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:18:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 04:21:38 --> Could not find the language line "Home"
ERROR - 2024-07-05 04:32:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 04:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 04:46:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 05:08:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 05:13:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 05:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 05:16:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 05:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 05:28:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 05:33:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 05:33:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 05:34:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 05:46:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 06:04:58 --> Could not find the language line "Home"
ERROR - 2024-07-05 06:08:41 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 06:09:00 --> Could not find the language line "Socks"
ERROR - 2024-07-05 06:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:12:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-05 06:16:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 06:16:49 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-05 06:18:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-05 06:19:40 --> Could not find the language line "Home"
ERROR - 2024-07-05 06:21:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 06:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:35:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 06:35:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 06:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 06:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:41:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 06:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 06:46:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 06:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 06:54:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 07:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:03:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 07:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:06:05 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:07:42 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:07:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-05 07:07:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-05 07:08:05 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:08:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 07:09:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:10:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 07:11:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 07:11:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 07:12:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:16:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:21:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 07:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:28:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 07:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:34:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:34:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:36:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 07:37:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:46:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 07:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 07:50:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:51:41 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:51:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 07:52:03 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 07:52:58 --> Could not find the language line "Home"
ERROR - 2024-07-05 07:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 07:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:02:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 08:06:34 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 08:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-05 08:16:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 08:22:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 08:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 08:28:25 --> Could not find the language line "Home"
ERROR - 2024-07-05 08:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 08:35:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:38:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 08:44:12 --> Could not find the language line "Other"
ERROR - 2024-07-05 08:45:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:46:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 08:47:56 --> Could not find the language line "Home"
ERROR - 2024-07-05 08:48:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:52:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:56:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 08:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 08:59:58 --> Could not find the language line "Socks"
ERROR - 2024-07-05 09:00:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 09:00:46 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:01:18 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:11:39 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:11:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-05 09:12:13 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:13:09 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:13:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:13:21 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:13:39 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:13:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:14:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:14:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:14:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:14:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:14:56 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:15:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-05 09:15:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-05 09:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:15:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:15:32 --> Could not find the language line "Socks"
ERROR - 2024-07-05 09:15:35 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:15:43 --> Could not find the language line "Socks"
ERROR - 2024-07-05 09:15:54 --> Could not find the language line "Socks"
ERROR - 2024-07-05 09:15:58 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:16:04 --> Could not find the language line "Perfume"
ERROR - 2024-07-05 09:16:09 --> Could not find the language line "Socks"
ERROR - 2024-07-05 09:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:16:12 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:16:15 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 09:16:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:16:32 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 09:16:40 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 09:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:16:50 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:16:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:17:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:17:25 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:17:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:17:52 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:18:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:18:17 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 09:18:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:18:43 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 09:19:06 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:20:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-05 09:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:26:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:26:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:26:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:26:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 09:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:38:54 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:38:55 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:39:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 09:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 09:40:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 09:41:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 09:46:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:48:05 --> Could not find the language line "products"
ERROR - 2024-07-05 09:49:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 09:52:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:58:08 --> Could not find the language line "Home"
ERROR - 2024-07-05 09:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 09:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:08:41 --> Could not find the language line "Home"
ERROR - 2024-07-05 10:16:25 --> Could not find the language line "Home"
ERROR - 2024-07-05 10:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 10:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 10:45:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 10:45:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 10:46:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 10:59:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-05 11:01:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:02:46 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:05:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 11:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:07:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 11:07:49 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:08:27 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:10:37 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:12:05 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:16:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:21:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 11:36:36 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:36:47 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:36:57 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:37:09 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:38:49 --> Could not find the language line "products"
ERROR - 2024-07-05 11:39:50 --> Could not find the language line "products"
ERROR - 2024-07-05 11:40:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 11:40:52 --> Could not find the language line "products"
ERROR - 2024-07-05 11:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 11:43:06 --> Could not find the language line "products"
ERROR - 2024-07-05 11:44:07 --> Could not find the language line "products"
ERROR - 2024-07-05 11:45:16 --> Could not find the language line "products"
ERROR - 2024-07-05 11:46:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 11:46:42 --> Could not find the language line "products"
ERROR - 2024-07-05 11:52:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 11:53:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 11:57:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 12:01:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 12:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 12:02:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 12:04:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:07:00 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 12:07:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 12:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 12:11:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 12:16:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:23:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-05 12:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 12:29:18 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:35:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 12:35:36 --> Could not find the language line "products"
ERROR - 2024-07-05 12:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 12:41:57 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:43:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 12:46:27 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:51:12 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:52:18 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:55:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 12:56:46 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:58:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 12:58:23 --> Could not find the language line "Home"
ERROR - 2024-07-05 12:58:59 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:01:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 13:05:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 13:07:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 13:08:17 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:08:43 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:12:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 13:12:42 --> Could not find the language line "products"
ERROR - 2024-07-05 13:16:27 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:20:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:20:45 --> Could not find the language line "Perfume"
ERROR - 2024-07-05 13:20:50 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:20:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 13:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:21:02 --> Could not find the language line "products"
ERROR - 2024-07-05 13:21:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-05 13:21:20 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:21:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:31:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 13:33:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:37:33 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:37:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:41:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-05 13:41:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-05 13:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:46:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:46:43 --> Could not find the language line "Other"
ERROR - 2024-07-05 13:47:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-05 13:47:10 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:50:40 --> Could not find the language line "Socks"
ERROR - 2024-07-05 13:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 13:52:03 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:56:20 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:56:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:56:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 13:58:02 --> Could not find the language line "products"
ERROR - 2024-07-05 13:58:29 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:16:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:17:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 14:17:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:20:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 14:33:54 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:44:08 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:45:18 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 14:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 14:46:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 14:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 15:16:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:16:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 15:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 15:21:09 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:21:33 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:46:29 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:47:57 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:48:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 15:51:09 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-05 15:53:02 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:53:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 15:56:02 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 15:57:09 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:57:10 --> Could not find the language line "Home"
ERROR - 2024-07-05 15:57:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 16:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 16:06:17 --> Could not find the language line "Home"
ERROR - 2024-07-05 16:06:41 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 16:07:53 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 16:09:17 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 16:09:33 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-05 16:16:29 --> Could not find the language line "Home"
ERROR - 2024-07-05 16:21:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 16:28:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 16:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:32:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 16:36:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 16:40:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 16:46:30 --> Could not find the language line "Home"
ERROR - 2024-07-05 16:47:32 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 16:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 16:52:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 17:10:14 --> Could not find the language line "products"
ERROR - 2024-07-05 17:11:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 17:11:44 --> Could not find the language line "Bracelets"
ERROR - 2024-07-05 17:13:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 17:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 17:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 17:16:30 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:19:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:26:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:28:29 --> Could not find the language line "Other"
ERROR - 2024-07-05 17:28:49 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:29:04 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:29:06 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:29:44 --> Could not find the language line "Socks"
ERROR - 2024-07-05 17:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 17:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 17:38:47 --> Could not find the language line "products"
ERROR - 2024-07-05 17:41:30 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:46:30 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:49:15 --> Could not find the language line "Home"
ERROR - 2024-07-05 17:53:10 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:03:25 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:05:46 --> Could not find the language line "products"
ERROR - 2024-07-05 18:06:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:10:18 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-05 18:10:19 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:15:06 --> Could not find the language line "0"
ERROR - 2024-07-05 18:16:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 18:23:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 18:26:05 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:27:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 18:30:51 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:32:57 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:33:48 --> Could not find the language line "products"
ERROR - 2024-07-05 18:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 18:44:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 18:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 18:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 18:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 18:46:32 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:47:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 18:54:24 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:01:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:07:09 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:10:45 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:16:31 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:31:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 19:31:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 19:37:11 --> 404 Page Not Found: Env/index
ERROR - 2024-07-05 19:37:11 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 19:46:32 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:56:58 --> Could not find the language line "Home"
ERROR - 2024-07-05 19:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 20:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 20:09:42 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:10:12 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:10:19 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:10:20 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:10:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:16:32 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:18:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:19:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:19:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-05 20:22:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 20:27:26 --> Could not find the language line "Home"
ERROR - 2024-07-05 20:40:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 20:46:33 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 21:16:33 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:17:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 21:21:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 21:23:07 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 21:25:15 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:25:22 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:29:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 21:46:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:49:21 --> Could not find the language line "Home"
ERROR - 2024-07-05 21:49:52 --> Could not find the language line "Other"
ERROR - 2024-07-05 21:54:25 --> Could not find the language line "Socks"
ERROR - 2024-07-05 22:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 22:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 22:16:36 --> Could not find the language line "Home"
ERROR - 2024-07-05 22:20:28 --> Could not find the language line "Home"
ERROR - 2024-07-05 22:20:56 --> Could not find the language line "Clothing"
ERROR - 2024-07-05 22:21:13 --> Could not find the language line "Home"
ERROR - 2024-07-05 22:21:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 22:28:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 22:33:42 --> Could not find the language line "Home"
ERROR - 2024-07-05 22:34:36 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 22:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 22:44:23 --> 404 Page Not Found: Products/products
ERROR - 2024-07-05 22:46:35 --> Could not find the language line "Home"
ERROR - 2024-07-05 22:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 23:05:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 23:06:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 23:08:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 23:09:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-07-05 23:12:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 23:16:34 --> Could not find the language line "Home"
ERROR - 2024-07-05 23:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-05 23:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-05 23:21:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 23:31:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-05 23:46:41 --> Could not find the language line "Home"
ERROR - 2024-07-05 23:52:51 --> 404 Page Not Found: Robotstxt/index
