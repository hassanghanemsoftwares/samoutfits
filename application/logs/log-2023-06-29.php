<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-29 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:00:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 00:00:52 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:14:04 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:14:33 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 00:17:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 00:17:04 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:24:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:40:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 00:48:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 00:57:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-29 01:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 01:14:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 01:14:08 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-06-29 01:14:09 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-06-29 01:14:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 01:30:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 01:45:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 01:54:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 02:13:34 --> Could not find the language line "Other"
ERROR - 2023-06-29 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 03:18:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 03:27:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 03:58:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 03:58:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 03:59:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 04:15:44 --> Could not find the language line "Home"
ERROR - 2023-06-29 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 04:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 04:54:48 --> Could not find the language line "Home"
ERROR - 2023-06-29 04:55:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 04:55:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 05:04:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:04:23 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:04:46 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:05:55 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:06:53 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:16:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:19:18 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:19:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 05:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:21:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 05:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 05:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:25:59 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:26:46 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:27:07 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:27:07 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:27:07 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:27:26 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-29 05:27:26 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-29 05:27:26 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-29 05:27:26 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-29 05:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:28:02 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:28:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:28:12 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:28:16 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 05:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 05:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:28:50 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 05:29:07 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 05:29:08 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:36:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 05:45:33 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:46:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:54:09 --> Could not find the language line "Home"
ERROR - 2023-06-29 05:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 05:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 06:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 06:25:00 --> Could not find the language line "Home"
ERROR - 2023-06-29 06:25:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 06:25:29 --> Could not find the language line "Home"
ERROR - 2023-06-29 06:26:38 --> Could not find the language line "Home"
ERROR - 2023-06-29 06:30:19 --> Could not find the language line "Home"
ERROR - 2023-06-29 06:50:38 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-06-29 06:59:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:00:43 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:00:43 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:00:44 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:09:38 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:09:38 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:21:50 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 07:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 07:44:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:04:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 08:04:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:18:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 08:18:45 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:20:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 08:28:36 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:29:22 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:29:48 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:30:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 08:31:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:31:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:32:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:32:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:34:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 08:50:54 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:51:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:51:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 08:51:48 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:51:52 --> Could not find the language line "Socks"
ERROR - 2023-06-29 08:51:56 --> Could not find the language line "Home"
ERROR - 2023-06-29 08:54:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-29 08:58:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:23:00 --> 404 Page Not Found: Admin/assets
ERROR - 2023-06-29 09:24:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:26:03 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:26:40 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:26:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 09:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:27:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 09:27:02 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:27:22 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:27:55 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:32:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 09:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:35:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:35:57 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:36:19 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:36:19 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:36:57 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:37:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 09:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 09:51:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 10:22:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 10:38:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-29 10:55:39 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:11:41 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:21:44 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:21:49 --> 404 Page Not Found: Assets/mail
ERROR - 2023-06-29 11:21:49 --> 404 Page Not Found: Assets/mail
ERROR - 2023-06-29 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:34:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 11:43:46 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 11:52:22 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 11:52:46 --> Could not find the language line "Home"
ERROR - 2023-06-29 11:58:05 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:07:36 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:10:34 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 12:11:28 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:12:04 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 12:23:51 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:23:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:31:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:31:37 --> Could not find the language line "Home"
ERROR - 2023-06-29 12:33:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:06:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:10:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:12:04 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:12:04 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:24:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:24:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 13:32:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 13:36:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:14:23 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:16:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:18:31 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:18:31 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:18:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:40:00 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:43:29 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:43:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:51:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 14:53:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:53:44 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:53:54 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 14:54:25 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:54:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:54:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:54:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:54:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 14:55:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:55:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:55:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:55:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 14:55:31 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 14:55:53 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 14:55:58 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 14:56:03 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 14:56:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 14:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 14:56:39 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:56:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-29 14:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 14:58:00 --> Could not find the language line "Home"
ERROR - 2023-06-29 14:59:25 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:04:54 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:07:05 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:07:06 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:07:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:19:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:23:49 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:24:29 --> Could not find the language line "Home"
ERROR - 2023-06-29 15:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 15:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:06:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-29 16:13:23 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:21:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:21:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 16:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:22:03 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:23:44 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:33:47 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:33:53 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 16:34:18 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 16:34:37 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 16:34:39 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:34:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:35:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:36:59 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:44:43 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:44:54 --> Could not find the language line "Socks"
ERROR - 2023-06-29 16:45:40 --> Could not find the language line "Socks"
ERROR - 2023-06-29 16:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:45:50 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:45:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 16:45:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 16:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:46:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 16:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 16:46:25 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:46:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:47:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:47:41 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:47:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:48:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 16:48:18 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:48:25 --> Could not find the language line "Home"
ERROR - 2023-06-29 16:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 16:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:01:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:08:34 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:08:34 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:13:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:15:43 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:54:50 --> Could not find the language line "Home"
ERROR - 2023-06-29 17:56:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-29 17:56:31 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:00:09 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:00:58 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:08:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:18:00 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 18:29:24 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:29:24 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:29:24 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:30:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:33:45 --> Could not find the language line "Home"
ERROR - 2023-06-29 18:33:46 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:09 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:21 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:21 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:00:21 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:05:53 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:05:53 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:11:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-29 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:38:56 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:48:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:48:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:51:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:51:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-29 19:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:51:51 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:52:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:52:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:52:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:52:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 19:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:53:50 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:53:56 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:54:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 19:54:47 --> Could not find the language line "Home"
ERROR - 2023-06-29 19:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 19:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:00:19 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:04:09 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:04:12 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:07:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:07:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:08:17 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:08:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 20:08:23 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:08:39 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:09:20 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:09:30 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:09:32 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:09:56 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:10:03 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:10:21 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:10:50 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:11:05 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:11:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:11:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:11:36 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:11:38 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:11:42 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:11:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:12:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:12:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:12:26 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:12:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:13:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:14:02 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-06-29 20:14:20 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:15:06 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:15:44 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:16:35 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:16:47 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:17:10 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:17:12 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:17:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:17:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:18:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:18:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-29 20:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:18:34 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:18:39 --> Could not find the language line "Perfume"
ERROR - 2023-06-29 20:18:48 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:18:53 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:18:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 20:19:18 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:19:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:20:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:20:47 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:20:54 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:21:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-29 20:21:28 --> Could not find the language line "Bracelets"
ERROR - 2023-06-29 20:21:32 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:21:42 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:21:58 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:21:58 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:22:27 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:22:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 20:22:42 --> Could not find the language line "Socks"
ERROR - 2023-06-29 20:22:51 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:23:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-29 20:23:50 --> Could not find the language line "Other"
ERROR - 2023-06-29 20:24:52 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:24:56 --> Could not find the language line "Socks"
ERROR - 2023-06-29 20:25:01 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:25:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:26:07 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:26:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-29 20:26:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-29 20:26:41 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:26:44 --> Could not find the language line "Perfume"
ERROR - 2023-06-29 20:29:38 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 20:39:31 --> Could not find the language line "Home"
ERROR - 2023-06-29 20:40:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-29 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:04:53 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:30:45 --> Could not find the language line "Other"
ERROR - 2023-06-29 21:32:16 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:32:22 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:32:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-29 21:32:50 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 21:34:36 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 21:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 21:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-29 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-29 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-29 22:37:40 --> Could not find the language line "Home"
ERROR - 2023-06-29 22:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-29 22:44:21 --> Could not find the language line "Home"
ERROR - 2023-06-29 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-29 23:17:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-29 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-29 23:54:03 --> Could not find the language line "Home"
