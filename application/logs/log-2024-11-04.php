<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-04 00:01:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-04 00:01:56 --> Could not find the language line "Home"
ERROR - 2024-11-04 00:12:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-04 00:17:00 --> Could not find the language line "Home"
ERROR - 2024-11-04 00:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 00:31:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 00:31:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 00:32:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 00:32:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 00:32:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 00:47:00 --> Could not find the language line "Home"
ERROR - 2024-11-04 01:12:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-04 01:12:57 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-04 01:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 01:17:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 01:47:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 02:17:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 02:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 02:26:55 --> Could not find the language line "Home"
ERROR - 2024-11-04 02:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 02:47:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 02:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 02:51:25 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 03:17:11 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:18:27 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2024-11-04 03:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 03:26:29 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 03:30:21 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:33:07 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:36:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 03:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 03:47:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:00:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 04:10:34 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:16:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 04:17:00 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:20:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 04:22:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 04:27:24 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:32:37 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:37:44 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:47:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 04:53:53 --> Could not find the language line "Home"
ERROR - 2024-11-04 05:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 05:17:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 05:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 05:47:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 05:47:18 --> Could not find the language line "Home"
ERROR - 2024-11-04 05:48:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-04 05:56:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 05:56:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 06:17:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:41 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:42 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:43 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:49 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:24:51 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:25:16 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:29:55 --> Could not find the language line "Home"
ERROR - 2024-11-04 06:32:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-04 06:47:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 07:02:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-04 07:17:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 07:28:26 --> Could not find the language line "Home"
ERROR - 2024-11-04 07:30:26 --> Could not find the language line "Home"
ERROR - 2024-11-04 07:47:01 --> Could not find the language line "Home"
ERROR - 2024-11-04 07:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 07:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:17:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 08:19:29 --> Could not find the language line "0"
ERROR - 2024-11-04 08:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:38:32 --> Could not find the language line "Home"
ERROR - 2024-11-04 08:47:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 08:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 08:57:33 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:00:57 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:04:11 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:17:03 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:38:29 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:40:12 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 09:43:17 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:34 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:34 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:35 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:36 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:50 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:51 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:43:52 --> Could not find the language line "Home"
ERROR - 2024-11-04 09:47:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 10:08:48 --> Could not find the language line "Home"
ERROR - 2024-11-04 10:13:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 10:13:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 10:13:44 --> Could not find the language line "Other"
ERROR - 2024-11-04 10:13:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 10:13:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 10:13:46 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 10:17:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 10:47:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 11:06:27 --> Could not find the language line "Home"
ERROR - 2024-11-04 11:17:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 11:22:54 --> Could not find the language line "Home"
ERROR - 2024-11-04 11:24:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 11:24:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 11:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:44:50 --> Could not find the language line "Other"
ERROR - 2024-11-04 11:47:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 11:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 11:56:00 --> Could not find the language line "Other"
ERROR - 2024-11-04 11:56:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 11:56:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 11:56:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 11:56:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 11:56:04 --> Could not find the language line "Other"
ERROR - 2024-11-04 12:00:20 --> Could not find the language line "Other"
ERROR - 2024-11-04 12:00:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 12:00:21 --> Could not find the language line "Other"
ERROR - 2024-11-04 12:00:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 12:06:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 12:12:19 --> Could not find the language line "Home"
ERROR - 2024-11-04 12:17:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 12:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-04 12:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-04 12:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:37:13 --> Could not find the language line "Home"
ERROR - 2024-11-04 12:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:46:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 12:47:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 12:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:56:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 12:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 12:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 12:56:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 12:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 12:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:05:34 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:05:40 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:05:55 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:04 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:32 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:33 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:17:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 13:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:31:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-04 13:38:17 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 13:47:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:54:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 13:54:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-04 13:57:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%T161%' OR a.description LIKE '%T161%' OR a.color LIKE '%T161%' OR a.barcode LIKE '%T161%' OR a.category LIKE '%T161%' OR a.sub_category LIKE '%T161%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-04 13:57:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 13:58:09 --> Could not find the language line "Home"
ERROR - 2024-11-04 13:59:07 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:00:15 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:03:27 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:06:38 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:06:50 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:17:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:24:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:30:56 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:34:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 14:34:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 14:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:46:28 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:47:05 --> Could not find the language line "Home"
ERROR - 2024-11-04 14:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 14:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:17:07 --> Could not find the language line "Home"
ERROR - 2024-11-04 15:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:18:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 15:18:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:19:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:19:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:20:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:20:37 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:20:48 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:21:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:21:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:21:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:21:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 15:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 15:47:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 15:47:53 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 16:01:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 16:06:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-04 16:06:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-11-04 16:06:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-04 16:17:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 16:19:23 --> Could not find the language line "Home"
ERROR - 2024-11-04 16:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 16:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 16:47:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 16:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:10:17 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:12:55 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:17:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:43:30 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:44:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:44:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:44:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:44:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:44:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:47:07 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:52:43 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:53:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:53:12 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:54:57 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:55:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:56:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:56:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:56:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:56:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:57:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:57:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-04 17:57:48 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 17:59:43 --> Could not find the language line "Home"
ERROR - 2024-11-04 17:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:11:45 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:11:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-04 18:11:56 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:12:34 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:12:41 --> Could not find the language line "Socks"
ERROR - 2024-11-04 18:12:53 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 18:17:07 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:40:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-04 18:47:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 18:52:33 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:03:09 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:14:22 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:14:30 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:15:48 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:17:09 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:20:18 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:26:15 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:26:51 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:27:13 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:28:44 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 19:31:15 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:31:20 --> Could not find the language line "Home"
ERROR - 2024-11-04 19:47:08 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:01:45 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:09:47 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:11:15 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:12:58 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:13:24 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:16:00 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:17:10 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:24:21 --> Could not find the language line "Other"
ERROR - 2024-11-04 20:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-04 20:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 20:47:09 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:48:55 --> Could not find the language line "Home"
ERROR - 2024-11-04 20:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 20:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:17:10 --> Could not find the language line "Home"
ERROR - 2024-11-04 21:20:35 --> Could not find the language line "Home"
ERROR - 2024-11-04 21:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:35:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:37:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:37:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:38:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:38:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:41:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:41:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:41:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:42:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:42:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:42:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:42:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:42:59 --> Could not find the language line "Home"
ERROR - 2024-11-04 21:43:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:43:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:43:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:43:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:44:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:44:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:44:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:44:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:44:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:45:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:45:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:45:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:45:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:46:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-04 21:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 21:47:09 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:13:06 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:15:52 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:17:10 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:23:38 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:26:02 --> Could not find the language line "Home"
ERROR - 2024-11-04 22:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 22:47:12 --> Could not find the language line "Home"
ERROR - 2024-11-04 23:17:13 --> Could not find the language line "Home"
ERROR - 2024-11-04 23:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-04 23:47:13 --> Could not find the language line "Home"
ERROR - 2024-11-04 23:49:34 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-04 23:49:35 --> Could not find the language line "Home"
ERROR - 2024-11-04 23:49:35 --> Could not find the language line "Home"
