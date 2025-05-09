<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-29 00:01:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 00:04:17 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 00:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 00:25:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 00:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 00:43:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-29 00:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 00:50:15 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 01:09:09 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:10:18 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 01:11:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-29 01:11:51 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 01:15:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:24:58 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:27:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:30:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:45:03 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:45:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 01:51:26 --> Could not find the language line "Home"
ERROR - 2024-10-29 02:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 02:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 02:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 02:39:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 02:45:37 --> Could not find the language line "Home"
ERROR - 2024-10-29 02:49:24 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 02:56:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-29 03:15:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 03:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 03:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 03:26:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:36:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 03:45:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 03:48:16 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 03:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 03:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 04:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 04:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 04:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 05:05:22 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:15:33 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:15:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:29:26 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 05:43:23 --> Could not find the language line "Other"
ERROR - 2024-10-29 05:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:52:29 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:52:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:52:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:52:32 --> Could not find the language line "Home"
ERROR - 2024-10-29 05:58:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:02:51 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:15:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:16:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 06:19:02 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 06:19:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 06:29:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 06:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 06:37:47 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-29 06:45:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-29 06:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 06:58:29 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:03:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 07:13:32 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 07:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:23:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:25:15 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:26:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 07:26:37 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:26:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 07:30:13 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:30:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 07:30:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:31:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:31:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 07:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 07:45:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:57:57 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:57:58 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:58:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 07:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 07:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:15:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:16:35 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:19:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:35:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 08:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:38:11 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:42:25 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:42:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 08:42:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 08:44:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-10-29 08:44:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:44:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 08:45:14 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 08:45:38 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:45:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-29 08:45:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 08:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:47:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:53:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:53:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:53:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 08:53:17 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-29 08:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 08:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 08:57:59 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:01:05 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:01:38 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:02:11 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:02:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:03:24 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:04:01 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:04:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:04:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:04:36 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 09:07:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:07:23 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:08:34 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:11:03 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:12:10 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 09:15:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 09:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 09:42:04 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 09:45:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:45:49 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-10-29 09:48:52 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 09:57:24 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:57:38 --> Could not find the language line "Socks"
ERROR - 2024-10-29 09:58:10 --> Could not find the language line "Home"
ERROR - 2024-10-29 09:58:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 09:58:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 10:03:05 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 10:15:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:16:21 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:40:55 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 10:45:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:46:52 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:49:55 --> Could not find the language line "Home"
ERROR - 2024-10-29 10:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 11:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:05:07 --> Could not find the language line "Home"
ERROR - 2024-10-29 11:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:10:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 11:15:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 11:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 11:45:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 11:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-10-29 12:10:15 --> Could not find the language line "Home"
ERROR - 2024-10-29 12:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 12:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 12:44:22 --> Could not find the language line "Home"
ERROR - 2024-10-29 12:45:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 12:50:07 --> Could not find the language line "Home"
ERROR - 2024-10-29 13:03:59 --> Could not find the language line "Home"
ERROR - 2024-10-29 13:04:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-29 13:15:12 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-10-29 13:15:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 13:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 13:28:07 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-29 13:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 13:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 13:42:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-29 13:42:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 13:45:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 14:05:30 --> Could not find the language line "Home"
ERROR - 2024-10-29 14:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 14:15:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 14:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 14:45:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:06:54 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:10:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-29 15:15:44 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:16:30 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:22:58 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:28:33 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:35:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:39:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-29 15:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-29 15:39:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 15:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:45:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 15:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 15:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:05:55 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:11:24 --> Could not find the language line "products"
ERROR - 2024-10-29 16:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:15:44 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:15:53 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:38:25 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:38:37 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:39:01 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:41:00 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:42:15 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:42:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:42:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:43:00 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 16:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:43:16 --> Could not find the language line "Other"
ERROR - 2024-10-29 16:43:21 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 16:43:39 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 16:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 16:45:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:48:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:48:50 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-29 16:48:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 16:59:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:02:06 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:02:21 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:07:01 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:07:54 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:08:04 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:08:07 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:09:25 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:09:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:09:55 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:10:53 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:11:26 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:11:38 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:11:48 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:11:51 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:11:54 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:12:04 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:12:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:15:04 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:15:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:16:20 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:18:56 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:19:15 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:19:20 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:19:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:19:42 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:20:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:20:15 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:20:30 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:20:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:20:58 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 17:21:02 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:21:16 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 17:21:21 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 17:21:21 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 17:21:27 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:21:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 17:21:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:21:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:22:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:23:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:23:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:23:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:24:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 17:24:04 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:24:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:24:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:24:40 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:24:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:24:47 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:24:47 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:04 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:10 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:10 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:10 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:26 --> Could not find the language line "Socks"
ERROR - 2024-10-29 17:25:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:25:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:26:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:26:32 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:28:33 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:29:21 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:29:44 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:29:55 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:30:10 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:30:11 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:30:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 17:31:57 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:35:07 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:35:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:35:16 --> Could not find the language line "products"
ERROR - 2024-10-29 17:36:56 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:37:32 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:37:32 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:39:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:40:33 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:41:11 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:43:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:45:45 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:47:53 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:48:13 --> Could not find the language line "Home"
ERROR - 2024-10-29 17:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 17:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 17:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 17:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 17:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 17:57:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 17:58:16 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-29 17:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 18:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 18:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 18:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 18:04:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 18:04:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 18:04:05 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:08:00 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:08:30 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:15:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:17:33 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:17:44 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-29 18:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:18:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-29 18:21:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-29 18:21:13 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:23:36 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:23:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:24:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:24:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:24:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:24:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:28:37 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:28:39 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:45:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:46:03 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:46:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:48:07 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:50:03 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 18:58:22 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:58:22 --> Could not find the language line "Home"
ERROR - 2024-10-29 18:58:22 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:05:05 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:08:36 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:15:34 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 19:15:45 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:16:00 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 19:16:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-29 19:17:24 --> Could not find the language line "Other"
ERROR - 2024-10-29 19:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-29 19:19:50 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 19:19:54 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 19:20:07 --> Could not find the language line "Socks"
ERROR - 2024-10-29 19:20:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 19:20:12 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 19:20:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 19:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:30:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:36:19 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:36:21 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:41:23 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:42:40 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:44:30 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 19:45:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:48:31 --> Could not find the language line "Home"
ERROR - 2024-10-29 19:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:15:47 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:22:55 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:31:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:33:02 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:34:07 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:35:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:45:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:47:26 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:48:30 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:48:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:48:52 --> Could not find the language line "Home"
ERROR - 2024-10-29 20:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 20:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:03:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-29 21:07:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:07:45 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:08:57 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:10:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:15:47 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:16:23 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:16:25 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 21:16:40 --> Could not find the language line "Bracelets"
ERROR - 2024-10-29 21:16:53 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:16:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:17:08 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:17:22 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:17:55 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:05 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:26 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:32 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:45 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:18:54 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:18:57 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:19:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:19:34 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:19:40 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:19:45 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:19:53 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:19:53 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:20:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:20:39 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 21:20:53 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:21:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:21:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 21:21:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 21:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:22:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 21:22:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-29 21:22:20 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:22:24 --> Could not find the language line "Perfume"
ERROR - 2024-10-29 21:22:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:22:30 --> Could not find the language line "Socks"
ERROR - 2024-10-29 21:22:50 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:22:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:22:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:23:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:23:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:23:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:23:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-29 21:23:06 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:27:35 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:45:46 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:46:08 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:48:16 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:48:32 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 21:55:25 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:55:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 21:56:47 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:04:09 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:06:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-29 22:07:15 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:10:43 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:15:47 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 22:19:03 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-29 22:19:03 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:22:12 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:23:48 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:25:54 --> 404 Page Not Found: Cart/products
ERROR - 2024-10-29 22:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 22:29:45 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-10-29 22:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 22:37:11 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-29 22:37:12 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:38:59 --> Could not find the language line "Other"
ERROR - 2024-10-29 22:42:24 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 22:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 22:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 22:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-10-29 22:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-29 22:42:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-29 22:44:28 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:45:49 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:56:58 --> Could not find the language line "Clothing"
ERROR - 2024-10-29 22:59:41 --> Could not find the language line "Home"
ERROR - 2024-10-29 22:59:42 --> Could not find the language line "Home"
ERROR - 2024-10-29 23:15:54 --> Could not find the language line "Home"
ERROR - 2024-10-29 23:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-29 23:45:51 --> Could not find the language line "Home"
ERROR - 2024-10-29 23:52:52 --> Could not find the language line "Home"
ERROR - 2024-10-29 23:59:14 --> Could not find the language line "Home"
