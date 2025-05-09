<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-29 00:01:18 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-29 00:05:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:05:20 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 00:09:41 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:14:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 00:14:43 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 00:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:28:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 00:31:59 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:32:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 00:35:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 00:35:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 00:35:28 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:38:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:42:22 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:48:34 --> Could not find the language line "products"
ERROR - 2023-10-29 00:54:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-29 00:56:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 00:57:48 --> Could not find the language line "Home"
ERROR - 2023-10-29 00:58:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 00:59:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 00:59:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 00:59:48 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 01:00:03 --> Could not find the language line "Other"
ERROR - 2023-10-29 01:00:19 --> Could not find the language line "Other"
ERROR - 2023-10-29 01:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 01:04:19 --> Could not find the language line "Home"
ERROR - 2023-10-29 01:18:35 --> Could not find the language line "Socks"
ERROR - 2023-10-29 01:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 01:19:58 --> Could not find the language line "Home"
ERROR - 2023-10-29 01:32:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 01:45:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 01:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 01:53:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 01:57:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 01:58:32 --> Could not find the language line "Home"
ERROR - 2023-10-29 01:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 02:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 02:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 02:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 02:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 02:20:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 02:26:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 02:38:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 02:41:41 --> Could not find the language line "Home"
ERROR - 2023-10-29 02:42:36 --> Could not find the language line "Home"
ERROR - 2023-10-29 02:49:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 02:55:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 02:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-29 02:56:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 03:01:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 03:20:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 03:33:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 03:45:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 03:48:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 03:48:35 --> Could not find the language line "products"
ERROR - 2023-10-29 03:50:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 03:53:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 03:56:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 03:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:03:02 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:08:35 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:08:46 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:09:16 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:09:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:10:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:10:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:11:04 --> Could not find the language line "Socks"
ERROR - 2023-10-29 04:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:11:15 --> Could not find the language line "Socks"
ERROR - 2023-10-29 04:11:30 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:11:45 --> Could not find the language line "Socks"
ERROR - 2023-10-29 04:12:01 --> Could not find the language line "Socks"
ERROR - 2023-10-29 04:12:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:13:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:13:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 04:34:06 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:34:08 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:35:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 04:40:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 04:41:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 04:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 04:53:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 04:56:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 05:06:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:07:58 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:10:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:22:14 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:22:14 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:23:16 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:23:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:24:12 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:32:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 05:33:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:33:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:34:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:35:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:35:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 05:37:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 05:37:14 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:37:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 05:38:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:42:02 --> Could not find the language line "Home"
ERROR - 2023-10-29 05:56:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 06:01:50 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:03:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-29 06:04:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:06:10 --> Could not find the language line "Socks"
ERROR - 2023-10-29 06:06:52 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:17:22 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:18:36 --> Could not find the language line "products"
ERROR - 2023-10-29 06:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:19:29 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 06:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:26:32 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:26:32 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:54:49 --> Could not find the language line "Home"
ERROR - 2023-10-29 06:56:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 07:03:36 --> Could not find the language line "products"
ERROR - 2023-10-29 07:09:37 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:11:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:11:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:23:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:25:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:26:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:32:06 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:32:27 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 07:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:32:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:32:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:33:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:33:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:36:16 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:36:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 07:37:12 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-29 07:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-29 07:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-29 07:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:48:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:48:36 --> Could not find the language line "products"
ERROR - 2023-10-29 07:48:48 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:51:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:51:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:52:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:52:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 07:52:58 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:58:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:58:30 --> Could not find the language line "Home"
ERROR - 2023-10-29 07:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 07:59:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:59:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 07:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:00:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:02:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:08:49 --> Could not find the language line "Home"
ERROR - 2023-10-29 08:08:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 08:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:10:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:11:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:12:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 08:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:26:07 --> Could not find the language line "Home"
ERROR - 2023-10-29 08:26:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 08:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:33:36 --> Could not find the language line "products"
ERROR - 2023-10-29 08:43:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 08:46:44 --> Could not find the language line "Home"
ERROR - 2023-10-29 08:48:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-29 08:48:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-29 08:48:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-29 08:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 08:54:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:01:58 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:02:05 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:03:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:07:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 09:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:12:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 09:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:17:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:18:37 --> Could not find the language line "products"
ERROR - 2023-10-29 09:19:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 09:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:20:52 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:21:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:22:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:22:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:26:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 09:30:57 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:33:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-29 09:36:49 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 09:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:44:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 09:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:47:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 09:47:44 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:48:40 --> Could not find the language line "products"
ERROR - 2023-10-29 09:49:05 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:53:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:53:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:54:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 09:55:17 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 09:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 09:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 09:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 09:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 10:00:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:00:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:10:52 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:11:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 10:11:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 10:14:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:14:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 10:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:15:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 10:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:16:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:22:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 10:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 10:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:46:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 10:46:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-29 10:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-29 10:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-29 10:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:51:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-29 10:51:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-29 10:51:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-29 10:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 10:54:57 --> Could not find the language line "Home"
ERROR - 2023-10-29 10:55:06 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:06:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:07:59 --> 404 Page Not Found: Wp-panophp/index
ERROR - 2023-10-29 11:18:41 --> Could not find the language line "products"
ERROR - 2023-10-29 11:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:22:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 11:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:26:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 11:26:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 11:28:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 11:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 11:28:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 11:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:32:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:32:47 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:38:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:41:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:46:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:46:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:47:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:53:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 11:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 11:56:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:03:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 12:06:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:17:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:25:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 12:25:57 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 12:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 12:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 12:35:49 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:35:50 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:35:52 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-10-29 12:35:53 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-10-29 12:35:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:41:28 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:43:18 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:45:25 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:45:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:47:35 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:47:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 12:47:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 12:48:40 --> Could not find the language line "products"
ERROR - 2023-10-29 12:58:12 --> Could not find the language line "products"
ERROR - 2023-10-29 13:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:03:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 13:03:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-29 13:06:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-29 13:07:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 13:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:18:39 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-29 13:26:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 13:26:25 --> Could not find the language line "Home"
ERROR - 2023-10-29 13:28:36 --> Could not find the language line "Home"
ERROR - 2023-10-29 13:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:35:39 --> Could not find the language line "products"
ERROR - 2023-10-29 13:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:48:41 --> Could not find the language line "products"
ERROR - 2023-10-29 13:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:53:39 --> Could not find the language line "products"
ERROR - 2023-10-29 13:57:41 --> Could not find the language line "products"
ERROR - 2023-10-29 13:58:39 --> Could not find the language line "Home"
ERROR - 2023-10-29 13:58:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 13:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 13:59:14 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:01:47 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:02:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 14:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:03:28 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:06:41 --> Could not find the language line "products"
ERROR - 2023-10-29 14:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:10:12 --> Could not find the language line "products"
ERROR - 2023-10-29 14:11:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:13:41 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:15:41 --> Could not find the language line "products"
ERROR - 2023-10-29 14:15:47 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:17:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:17:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:18:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:18:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:18:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:20:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 14:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:21:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:24:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:25:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:25:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:36 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:25:48 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:25:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:27:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:28:12 --> Could not find the language line "products"
ERROR - 2023-10-29 14:29:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:29:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:31:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:31:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:32:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:32:05 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:32:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:32:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:33:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:33:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:35:02 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:37:18 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:40:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:40:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:40:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:41:39 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:42:22 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:43:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:43:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-29 14:43:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('40', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-29 14:43:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-29 14:43:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 14:44:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:44:15 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:44:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:44:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:46:12 --> Could not find the language line "products"
ERROR - 2023-10-29 14:46:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:46:43 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:46:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:47:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:48:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:51:16 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:51:19 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:51:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:51:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:51:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:52:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:53:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:54:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 14:54:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-29 14:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 14:56:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 14:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:57:26 --> Could not find the language line "Home"
ERROR - 2023-10-29 14:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 14:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 15:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 15:00:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:00:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:00:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:04:12 --> Could not find the language line "products"
ERROR - 2023-10-29 15:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:14:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:15:37 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:21:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 15:22:12 --> Could not find the language line "products"
ERROR - 2023-10-29 15:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:26:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 15:26:23 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:26:28 --> Could not find the language line "Other"
ERROR - 2023-10-29 15:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 15:26:57 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:30:42 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-10-29 15:30:43 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-10-29 15:40:12 --> Could not find the language line "products"
ERROR - 2023-10-29 15:57:58 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:58:12 --> Could not find the language line "products"
ERROR - 2023-10-29 15:58:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-29 15:58:42 --> Could not find the language line "Home"
ERROR - 2023-10-29 15:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 15:59:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 15:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 15:59:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:00:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:00:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:01:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:01:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:03:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:04:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:05:50 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:06:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:10:25 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 16:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:10:40 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 16:14:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:16:12 --> Could not find the language line "products"
ERROR - 2023-10-29 16:19:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:26:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:28:07 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:33:45 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:34:12 --> Could not find the language line "products"
ERROR - 2023-10-29 16:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:34:41 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:37:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 16:48:42 --> Could not find the language line "products"
ERROR - 2023-10-29 16:48:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 16:48:43 --> Could not find the language line "Home"
ERROR - 2023-10-29 16:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 16:52:12 --> Could not find the language line "products"
ERROR - 2023-10-29 16:57:42 --> Could not find the language line "products"
ERROR - 2023-10-29 17:03:27 --> Could not find the language line "products"
ERROR - 2023-10-29 17:10:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:10:46 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:14:42 --> Could not find the language line "products"
ERROR - 2023-10-29 17:14:47 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:15:17 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:18:10 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:18:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:19:11 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:20:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:20:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:20:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:20:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:20:52 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:20:56 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 17:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:21:14 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 17:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:21:27 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 17:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:21:34 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 17:21:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:21:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:21:52 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:21:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:21:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 17:22:37 --> Could not find the language line "Perfume"
ERROR - 2023-10-29 17:24:41 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:25:57 --> Could not find the language line "products"
ERROR - 2023-10-29 17:26:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:27:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 17:35:24 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:37:12 --> Could not find the language line "products"
ERROR - 2023-10-29 17:37:45 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:42:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 17:45:49 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:48:27 --> Could not find the language line "products"
ERROR - 2023-10-29 17:49:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 17:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:54:27 --> Could not find the language line "Home"
ERROR - 2023-10-29 17:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 17:59:42 --> Could not find the language line "products"
ERROR - 2023-10-29 18:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:01:33 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:01:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:02:19 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:03:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:05:30 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:05:51 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:05:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:10:59 --> Could not find the language line "products"
ERROR - 2023-10-29 18:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:14:24 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:14:24 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:17:14 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:17:20 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:18:18 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:18:43 --> Could not find the language line "products"
ERROR - 2023-10-29 18:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:19:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 18:22:12 --> Could not find the language line "products"
ERROR - 2023-10-29 18:24:20 --> Could not find the language line "products"
ERROR - 2023-10-29 18:25:01 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:26:01 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:26:01 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-29 18:26:02 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-29 18:26:02 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-29 18:26:03 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-29 18:29:58 --> Could not find the language line "products"
ERROR - 2023-10-29 18:30:39 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:31:30 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:33:27 --> Could not find the language line "products"
ERROR - 2023-10-29 18:35:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:39:41 --> Could not find the language line "Other"
ERROR - 2023-10-29 18:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:41:05 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:41:58 --> 404 Page Not Found: Env/index
ERROR - 2023-10-29 18:41:59 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:44:14 --> 404 Page Not Found: Env/index
ERROR - 2023-10-29 18:44:42 --> Could not find the language line "products"
ERROR - 2023-10-29 18:45:07 --> Could not find the language line "Other"
ERROR - 2023-10-29 18:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:47:33 --> Could not find the language line "Other"
ERROR - 2023-10-29 18:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 18:48:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 18:55:57 --> Could not find the language line "products"
ERROR - 2023-10-29 19:07:12 --> Could not find the language line "products"
ERROR - 2023-10-29 19:13:07 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:13:31 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 19:14:56 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:14:56 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:15:01 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:18:27 --> Could not find the language line "products"
ERROR - 2023-10-29 19:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 19:29:42 --> Could not find the language line "products"
ERROR - 2023-10-29 19:34:55 --> Could not find the language line "Hair%20"
ERROR - 2023-10-29 19:35:54 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:36:43 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 19:37:09 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 19:37:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 19:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:40:57 --> Could not find the language line "products"
ERROR - 2023-10-29 19:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 19:46:47 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-29 19:48:24 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:52:12 --> Could not find the language line "products"
ERROR - 2023-10-29 19:54:35 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:54:40 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 19:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 19:59:28 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 20:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 20:03:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 20:03:27 --> Could not find the language line "products"
ERROR - 2023-10-29 20:03:36 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 20:04:36 --> Could not find the language line "Other"
ERROR - 2023-10-29 20:05:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:05:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:06:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:07:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:07:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:07:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-29 20:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 20:26:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 20:34:12 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:34:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:34:21 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:34:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 20:35:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 20:35:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 20:36:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 20:37:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-29 20:37:04 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:37:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 20:37:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 20:37:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 20:38:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 20:38:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 20:38:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-29 20:46:34 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:00:47 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:12:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:13:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-29 21:20:53 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:29:48 --> Could not find the language line "Home"
ERROR - 2023-10-29 21:37:07 --> Could not find the language line "Socks"
ERROR - 2023-10-29 21:44:42 --> Could not find the language line "Home"
ERROR - 2023-10-29 22:01:13 --> Could not find the language line "Home"
ERROR - 2023-10-29 22:14:38 --> Could not find the language line "Home"
ERROR - 2023-10-29 22:16:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 22:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 22:54:56 --> Could not find the language line "products"
ERROR - 2023-10-29 22:54:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 22:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 23:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-29 23:08:46 --> Could not find the language line "Home"
ERROR - 2023-10-29 23:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-29 23:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-29 23:38:03 --> Could not find the language line "Home"
ERROR - 2023-10-29 23:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 23:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-29 23:47:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-29 23:48:41 --> Could not find the language line "products"
ERROR - 2023-10-29 23:51:44 --> Could not find the language line "Clothing"
