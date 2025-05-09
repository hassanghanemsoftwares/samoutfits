<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-20 00:03:06 --> Could not find the language line "Home"
ERROR - 2024-07-20 00:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-20 00:03:46 --> Could not find the language line "Home"
ERROR - 2024-07-20 00:17:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 00:47:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 01:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 01:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 01:17:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 01:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 01:28:45 --> Could not find the language line "Other"
ERROR - 2024-07-20 01:30:22 --> Could not find the language line "Socks"
ERROR - 2024-07-20 01:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 01:36:47 --> Could not find the language line "Home"
ERROR - 2024-07-20 01:47:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 02:10:18 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-20 02:17:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 02:47:09 --> Could not find the language line "Home"
ERROR - 2024-07-20 03:12:58 --> Could not find the language line "Home"
ERROR - 2024-07-20 03:17:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 03:47:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 04:17:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 04:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 04:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 04:47:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 04:48:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 05:17:11 --> Could not find the language line "Home"
ERROR - 2024-07-20 05:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 05:36:23 --> Could not find the language line "Home"
ERROR - 2024-07-20 05:39:28 --> Could not find the language line "Other"
ERROR - 2024-07-20 05:44:54 --> Could not find the language line "Socks"
ERROR - 2024-07-20 05:47:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 06:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:05:37 --> Could not find the language line "Home"
ERROR - 2024-07-20 06:17:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 06:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:38:41 --> Could not find the language line "Home"
ERROR - 2024-07-20 06:45:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-20 06:47:12 --> Could not find the language line "Home"
ERROR - 2024-07-20 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 06:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:17:12 --> Could not find the language line "Home"
ERROR - 2024-07-20 07:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 07:47:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 07:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:17:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:45:16 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:45:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:47:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:48:03 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:48:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-20 08:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-20 08:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-20 08:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-20 08:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-20 08:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:49:44 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:56:22 --> Could not find the language line "Home"
ERROR - 2024-07-20 08:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 08:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:03:37 --> Could not find the language line "Other"
ERROR - 2024-07-20 09:06:47 --> Could not find the language line "Socks"
ERROR - 2024-07-20 09:17:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 09:21:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 09:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:23:05 --> Could not find the language line "Home"
ERROR - 2024-07-20 09:47:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 09:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:06:29 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:06:41 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:06:45 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-20 10:06:45 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-20 10:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:11:44 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-20 10:11:44 --> 404 Page Not Found: Assets/images
ERROR - 2024-07-20 10:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:17:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:19:45 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:20:45 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 10:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 10:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 11:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 11:14:54 --> Could not find the language line "Home"
ERROR - 2024-07-20 11:17:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 11:20:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 11:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 11:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 11:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 11:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 11:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 11:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:17:16 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:25:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:27:25 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:29:11 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:35:11 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:46:29 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:47:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:50:41 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:51:04 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:51:20 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:52:06 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 12:53:19 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:54:04 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:55:08 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:57:42 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:58:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 12:58:35 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:01:37 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:02:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:02:39 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 13:07:55 --> 404 Page Not Found: Cart/assets
ERROR - 2024-07-20 13:07:55 --> 404 Page Not Found: Cart/assets
ERROR - 2024-07-20 13:07:55 --> 404 Page Not Found: Cart/assets
ERROR - 2024-07-20 13:07:55 --> 404 Page Not Found: Cart/assets
ERROR - 2024-07-20 13:07:55 --> 404 Page Not Found: Cart/assets
ERROR - 2024-07-20 13:08:24 --> Could not find the language line "Other"
ERROR - 2024-07-20 13:17:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:22:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 13:22:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 13:22:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 13:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 13:24:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 13:38:59 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:47:16 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:54:11 --> Could not find the language line "Home"
ERROR - 2024-07-20 13:56:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:17:16 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:43:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-20 14:43:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-20 14:43:33 --> Could not find the language line "Perfume"
ERROR - 2024-07-20 14:44:30 --> Could not find the language line "Clothing"
ERROR - 2024-07-20 14:44:51 --> Could not find the language line "Clothing"
ERROR - 2024-07-20 14:45:56 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:47:17 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:47:42 --> Could not find the language line "Clothing"
ERROR - 2024-07-20 14:48:21 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:48:23 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:57:40 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:57:46 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-20 14:58:00 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:58:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:58:16 --> Could not find the language line "Bracelets"
ERROR - 2024-07-20 14:58:34 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:59:02 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:59:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 14:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 14:59:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 14:59:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 14:59:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-20 14:59:49 --> Could not find the language line "Home"
ERROR - 2024-07-20 14:59:51 --> Could not find the language line "Perfume"
ERROR - 2024-07-20 15:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:00:07 --> Could not find the language line "Perfume"
ERROR - 2024-07-20 15:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:00:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:00:12 --> Could not find the language line "Socks"
ERROR - 2024-07-20 15:00:41 --> Could not find the language line "Socks"
ERROR - 2024-07-20 15:01:04 --> Could not find the language line "Socks"
ERROR - 2024-07-20 15:01:07 --> Could not find the language line "Socks"
ERROR - 2024-07-20 15:01:08 --> Could not find the language line "Socks"
ERROR - 2024-07-20 15:01:10 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:01:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:01:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:02:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:02:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:02:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:02:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:02:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:03:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:03:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-20 15:03:23 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:04:30 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:04:44 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:05:13 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:05:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:07:03 --> Could not find the language line "Other"
ERROR - 2024-07-20 15:07:13 --> Could not find the language line "Other"
ERROR - 2024-07-20 15:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 15:17:17 --> Could not find the language line "Home"
ERROR - 2024-07-20 15:47:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 16:17:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 16:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 16:47:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 17:17:18 --> Could not find the language line "Home"
ERROR - 2024-07-20 17:17:33 --> Could not find the language line "Socks"
ERROR - 2024-07-20 17:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 17:31:33 --> Could not find the language line "Home"
ERROR - 2024-07-20 17:47:19 --> Could not find the language line "Home"
ERROR - 2024-07-20 17:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 18:17:19 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 18:36:55 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 18:37:16 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:39:12 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:39:24 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:47:19 --> Could not find the language line "Home"
ERROR - 2024-07-20 18:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:15:28 --> Could not find the language line "Home"
ERROR - 2024-07-20 19:17:20 --> Could not find the language line "Home"
ERROR - 2024-07-20 19:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:27:12 --> Could not find the language line "Home"
ERROR - 2024-07-20 19:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:31:57 --> Could not find the language line "Home"
ERROR - 2024-07-20 19:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 19:47:21 --> Could not find the language line "Home"
ERROR - 2024-07-20 19:56:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 20:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:07:55 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:17:20 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:23:48 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:24:37 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:29:03 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:29:03 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:29:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-20 20:31:39 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:47:21 --> Could not find the language line "Home"
ERROR - 2024-07-20 20:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 20:54:42 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-20 21:02:16 --> Could not find the language line "Other"
ERROR - 2024-07-20 21:05:38 --> Could not find the language line "Socks"
ERROR - 2024-07-20 21:14:15 --> Could not find the language line "Home"
ERROR - 2024-07-20 21:14:51 --> Could not find the language line "Home"
ERROR - 2024-07-20 21:17:17 --> Could not find the language line "Home"
ERROR - 2024-07-20 21:17:22 --> Could not find the language line "Home"
ERROR - 2024-07-20 21:47:22 --> Could not find the language line "Home"
ERROR - 2024-07-20 22:01:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 22:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-20 22:17:23 --> Could not find the language line "Home"
ERROR - 2024-07-20 22:38:06 --> Could not find the language line "Home"
ERROR - 2024-07-20 22:38:14 --> Could not find the language line "Home"
ERROR - 2024-07-20 22:38:49 --> Could not find the language line "Bracelets"
ERROR - 2024-07-20 22:39:02 --> Could not find the language line "Home"
ERROR - 2024-07-20 22:47:23 --> Could not find the language line "Home"
ERROR - 2024-07-20 23:17:25 --> Could not find the language line "Home"
ERROR - 2024-07-20 23:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-20 23:47:24 --> Could not find the language line "Home"
