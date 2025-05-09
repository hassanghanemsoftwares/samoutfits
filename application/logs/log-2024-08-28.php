<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-08-28 00:19:06 --> Could not find the language line "Home"
ERROR - 2024-08-28 00:49:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 00:59:53 --> Could not find the language line "Home"
ERROR - 2024-08-28 01:19:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 01:23:54 --> Could not find the language line "Home"
ERROR - 2024-08-28 01:49:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 01:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-28 02:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 02:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 02:19:08 --> Could not find the language line "Home"
ERROR - 2024-08-28 02:49:08 --> Could not find the language line "Home"
ERROR - 2024-08-28 03:07:35 --> Could not find the language line "Other"
ERROR - 2024-08-28 03:08:52 --> Could not find the language line "Socks"
ERROR - 2024-08-28 03:19:09 --> Could not find the language line "Home"
ERROR - 2024-08-28 03:49:09 --> Could not find the language line "Home"
ERROR - 2024-08-28 04:19:09 --> Could not find the language line "Home"
ERROR - 2024-08-28 04:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 04:49:12 --> Could not find the language line "Home"
ERROR - 2024-08-28 05:12:12 --> Could not find the language line "Home"
ERROR - 2024-08-28 05:19:11 --> Could not find the language line "Home"
ERROR - 2024-08-28 05:21:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-28 05:37:15 --> Could not find the language line "Home"
ERROR - 2024-08-28 05:37:51 --> Could not find the language line "Home"
ERROR - 2024-08-28 05:49:11 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:02:15 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-28 06:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:19:12 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:20:19 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:21:40 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:39:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-28 06:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-28 06:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:49:11 --> Could not find the language line "Home"
ERROR - 2024-08-28 06:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 06:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:07:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:07:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:07:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:07:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:19:10 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:19:13 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:20:49 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:38:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 07:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:43:22 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-28 07:47:33 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:49:13 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:57:29 --> Could not find the language line "Home"
ERROR - 2024-08-28 07:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 07:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:00:28 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:16:33 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:16:40 --> Could not find the language line "Clothing"
ERROR - 2024-08-28 08:16:56 --> Could not find the language line "Clothing"
ERROR - 2024-08-28 08:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:19:12 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:20:00 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:22:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:24:15 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:25:49 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:26:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:31:38 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:43:45 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:44:11 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:45:45 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:49:13 --> Could not find the language line "Home"
ERROR - 2024-08-28 08:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 08:58:50 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:19:13 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:37:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:37:07 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:37:45 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:49:14 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:54:04 --> Could not find the language line "Home"
ERROR - 2024-08-28 09:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 09:58:54 --> Could not find the language line "Home"
ERROR - 2024-08-28 10:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:10:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-08-28 10:19:14 --> Could not find the language line "Home"
ERROR - 2024-08-28 10:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:47:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 10:47:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 10:47:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 10:47:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-08-28 10:49:14 --> Could not find the language line "Home"
ERROR - 2024-08-28 10:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 10:52:56 --> Could not find the language line "Other"
ERROR - 2024-08-28 10:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 11:09:58 --> Could not find the language line "Home"
ERROR - 2024-08-28 11:19:15 --> Could not find the language line "Home"
ERROR - 2024-08-28 11:49:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:01:54 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:08:03 --> 404 Page Not Found: Cart/cart
ERROR - 2024-08-28 12:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:19:16 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:31:37 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:37:25 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:37:25 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:49:16 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:53:20 --> Could not find the language line "Home"
ERROR - 2024-08-28 12:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 12:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:19:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 13:23:12 --> Could not find the language line "Other"
ERROR - 2024-08-28 13:28:47 --> Could not find the language line "Home"
ERROR - 2024-08-28 13:29:23 --> Could not find the language line "Socks"
ERROR - 2024-08-28 13:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:31:24 --> Could not find the language line "Home"
ERROR - 2024-08-28 13:34:16 --> Could not find the language line "Home"
ERROR - 2024-08-28 13:34:31 --> Could not find the language line "Home"
ERROR - 2024-08-28 13:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 13:49:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 14:01:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-08-28 14:19:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 14:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 14:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 14:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 14:49:18 --> Could not find the language line "Home"
ERROR - 2024-08-28 14:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 14:56:32 --> Could not find the language line "Home"
ERROR - 2024-08-28 15:19:17 --> Could not find the language line "Home"
ERROR - 2024-08-28 15:40:41 --> Could not find the language line "Home"
ERROR - 2024-08-28 15:49:18 --> Could not find the language line "Home"
ERROR - 2024-08-28 15:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 15:53:38 --> Could not find the language line "Home"
ERROR - 2024-08-28 15:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 16:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 16:19:20 --> Could not find the language line "Home"
ERROR - 2024-08-28 16:22:56 --> Could not find the language line "Home"
ERROR - 2024-08-28 16:49:19 --> Could not find the language line "Home"
ERROR - 2024-08-28 16:53:15 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:00:30 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:03:30 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:03:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-28 17:04:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-28 17:04:30 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-28 17:04:33 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:04:41 --> Could not find the language line "Bracelets"
ERROR - 2024-08-28 17:04:41 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:05:10 --> Could not find the language line "Bracelets"
ERROR - 2024-08-28 17:05:28 --> Could not find the language line "Bracelets"
ERROR - 2024-08-28 17:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:06:23 --> Could not find the language line "Bracelets"
ERROR - 2024-08-28 17:06:31 --> Could not find the language line "Perfume"
ERROR - 2024-08-28 17:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:06:52 --> Could not find the language line "Perfume"
ERROR - 2024-08-28 17:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:17:33 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:17:36 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2024-08-28 17:17:37 --> 404 Page Not Found: Contact_us/index
ERROR - 2024-08-28 17:19:19 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 17:44:10 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:46:24 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:49:20 --> Could not find the language line "Home"
ERROR - 2024-08-28 17:54:13 --> Could not find the language line "Other"
ERROR - 2024-08-28 17:55:08 --> Could not find the language line "Socks"
ERROR - 2024-08-28 18:15:57 --> Could not find the language line "Home"
ERROR - 2024-08-28 18:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 18:19:20 --> Could not find the language line "Home"
ERROR - 2024-08-28 18:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 18:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 18:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 18:49:21 --> Could not find the language line "Home"
ERROR - 2024-08-28 18:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:14:09 --> Could not find the language line "Home"
ERROR - 2024-08-28 19:14:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-28 19:14:42 --> Could not find the language line "Home"
ERROR - 2024-08-28 19:19:21 --> Could not find the language line "Home"
ERROR - 2024-08-28 19:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 19:44:54 --> Could not find the language line "Home"
ERROR - 2024-08-28 19:49:23 --> Could not find the language line "Home"
ERROR - 2024-08-28 20:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 20:10:06 --> Could not find the language line "Home"
ERROR - 2024-08-28 20:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 20:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 20:16:46 --> Could not find the language line "Home"
ERROR - 2024-08-28 20:19:21 --> Could not find the language line "Home"
ERROR - 2024-08-28 20:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 20:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 20:49:22 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:07:04 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:19:23 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:25:27 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:26:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-28 21:26:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-08-28 21:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 21:27:54 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 21:29:53 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 21:32:48 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 21:35:59 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:36:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-08-28 21:36:22 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:36:32 --> Could not find the language line "Clothing"
ERROR - 2024-08-28 21:36:52 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:36:58 --> Could not find the language line "Perfume"
ERROR - 2024-08-28 21:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 21:37:25 --> Could not find the language line "Home"
ERROR - 2024-08-28 21:44:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-08-28 21:49:22 --> Could not find the language line "Home"
ERROR - 2024-08-28 22:15:50 --> Could not find the language line "Home"
ERROR - 2024-08-28 22:16:02 --> Could not find the language line "Home"
ERROR - 2024-08-28 22:16:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-08-28 22:19:24 --> Could not find the language line "Home"
ERROR - 2024-08-28 22:49:25 --> Could not find the language line "Home"
ERROR - 2024-08-28 22:57:00 --> Could not find the language line "Socks"
ERROR - 2024-08-28 23:19:24 --> Could not find the language line "Home"
ERROR - 2024-08-28 23:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-08-28 23:49:24 --> Could not find the language line "Home"
