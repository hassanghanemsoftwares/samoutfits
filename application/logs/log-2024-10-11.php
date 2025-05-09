<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-11 00:11:31 --> Could not find the language line "Home"
ERROR - 2024-10-11 00:41:31 --> Could not find the language line "Home"
ERROR - 2024-10-11 01:06:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-11 01:11:31 --> Could not find the language line "Home"
ERROR - 2024-10-11 01:41:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 02:11:35 --> Could not find the language line "Home"
ERROR - 2024-10-11 02:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 02:41:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 02:56:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-11 03:11:34 --> Could not find the language line "Home"
ERROR - 2024-10-11 03:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 03:41:32 --> Could not find the language line "Home"
ERROR - 2024-10-11 03:44:19 --> Could not find the language line "Home"
ERROR - 2024-10-11 04:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-11 04:11:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 04:41:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 05:11:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 05:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 05:41:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 06:11:32 --> Could not find the language line "Home"
ERROR - 2024-10-11 06:36:48 --> Could not find the language line "Home"
ERROR - 2024-10-11 06:36:49 --> 404 Page Not Found: App/index
ERROR - 2024-10-11 06:36:49 --> 404 Page Not Found: Login/index
ERROR - 2024-10-11 06:36:49 --> Could not find the language line "Home"
ERROR - 2024-10-11 06:36:50 --> 404 Page Not Found: Assets/mail
ERROR - 2024-10-11 06:36:50 --> 404 Page Not Found: App/index
ERROR - 2024-10-11 06:36:50 --> 404 Page Not Found: Login/index
ERROR - 2024-10-11 06:36:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-11 06:36:50 --> 404 Page Not Found: Assets/mail
ERROR - 2024-10-11 06:41:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 07:11:31 --> Could not find the language line "Home"
ERROR - 2024-10-11 07:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:41:31 --> Could not find the language line "Home"
ERROR - 2024-10-11 07:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 07:54:20 --> Could not find the language line "Home"
ERROR - 2024-10-11 07:59:09 --> Could not find the language line "Home"
ERROR - 2024-10-11 08:11:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 08:23:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 08:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 08:41:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 08:44:56 --> Could not find the language line "Home"
ERROR - 2024-10-11 08:56:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-11 09:11:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 09:17:58 --> Could not find the language line "Home"
ERROR - 2024-10-11 09:39:01 --> Could not find the language line "Home"
ERROR - 2024-10-11 09:41:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 09:47:29 --> Could not find the language line "Home"
ERROR - 2024-10-11 10:11:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 10:27:08 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-11 10:27:08 --> Could not find the language line "Home"
ERROR - 2024-10-11 10:27:08 --> Could not find the language line "Home"
ERROR - 2024-10-11 10:41:32 --> Could not find the language line "Home"
ERROR - 2024-10-11 11:11:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 11:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 11:34:03 --> Could not find the language line "Home"
ERROR - 2024-10-11 11:41:33 --> Could not find the language line "Home"
ERROR - 2024-10-11 12:11:34 --> Could not find the language line "Home"
ERROR - 2024-10-11 12:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 12:41:34 --> Could not find the language line "Home"
ERROR - 2024-10-11 12:59:28 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:03:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:04:22 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:04:50 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:04:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-11 13:06:59 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:08:06 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:11:35 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:18:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 13:24:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-11 13:41:35 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:53:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 13:53:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 14:11:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 14:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 14:41:34 --> Could not find the language line "Home"
ERROR - 2024-10-11 15:11:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 15:41:35 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:11:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:13:11 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-10-11 16:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 16:33:10 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:41:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:43:26 --> Could not find the language line "Home"
ERROR - 2024-10-11 16:43:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-11 16:43:56 --> Could not find the language line "Other"
ERROR - 2024-10-11 16:43:56 --> Could not find the language line "Clothing"
ERROR - 2024-10-11 16:43:59 --> Could not find the language line "Clothing"
ERROR - 2024-10-11 16:45:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 17:11:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 17:12:32 --> Could not find the language line "Home"
ERROR - 2024-10-11 17:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 17:41:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 18:11:38 --> Could not find the language line "Home"
ERROR - 2024-10-11 18:27:05 --> Could not find the language line "Home"
ERROR - 2024-10-11 18:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 18:41:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 19:00:50 --> Could not find the language line "Home"
ERROR - 2024-10-11 19:01:56 --> Could not find the language line "Home"
ERROR - 2024-10-11 19:01:57 --> Could not find the language line "Home"
ERROR - 2024-10-11 19:11:37 --> Could not find the language line "Home"
ERROR - 2024-10-11 19:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 19:41:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:08:50 --> 404 Page Not Found: Products/products
ERROR - 2024-10-11 20:11:38 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:41:38 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:47:18 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:47:20 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:47:26 --> Could not find the language line "Home"
ERROR - 2024-10-11 20:47:30 --> Could not find the language line "Home"
ERROR - 2024-10-11 21:08:44 --> Could not find the language line "products"
ERROR - 2024-10-11 21:11:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 21:15:35 --> Could not find the language line "Home"
ERROR - 2024-10-11 21:26:30 --> Could not find the language line "products"
ERROR - 2024-10-11 21:40:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-10-11 21:41:41 --> Could not find the language line "Home"
ERROR - 2024-10-11 22:11:42 --> Could not find the language line "Home"
ERROR - 2024-10-11 22:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-11 22:41:43 --> Could not find the language line "Home"
ERROR - 2024-10-11 22:47:50 --> Could not find the language line "Home"
ERROR - 2024-10-11 22:58:23 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:11:41 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:23:48 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:28:32 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:30:49 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:31:13 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:33:36 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:33:39 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:33:43 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:33:53 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:41:45 --> Could not find the language line "Home"
ERROR - 2024-10-11 23:42:32 --> Could not find the language line "Home"
