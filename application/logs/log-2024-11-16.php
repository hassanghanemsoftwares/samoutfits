<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-16 00:00:09 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:09:15 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:11:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:31:32 --> Could not find the language line "Other"
ERROR - 2024-11-16 00:36:17 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:41:46 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:48:37 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:50:28 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:52:17 --> Could not find the language line "Home"
ERROR - 2024-11-16 00:56:10 --> Could not find the language line "Home"
ERROR - 2024-11-16 01:07:41 --> Could not find the language line "Home"
ERROR - 2024-11-16 01:11:26 --> Could not find the language line "Home"
ERROR - 2024-11-16 01:14:27 --> 404 Page Not Found: Env/index
ERROR - 2024-11-16 01:29:06 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-16 01:41:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 01:48:30 --> Could not find the language line "Home"
ERROR - 2024-11-16 01:54:56 --> Could not find the language line "Home"
ERROR - 2024-11-16 02:11:20 --> Could not find the language line "Home"
ERROR - 2024-11-16 02:18:00 --> Could not find the language line "Home"
ERROR - 2024-11-16 02:41:19 --> Could not find the language line "Home"
ERROR - 2024-11-16 03:11:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 03:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 03:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 03:41:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 03:53:31 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-16 04:11:19 --> Could not find the language line "Home"
ERROR - 2024-11-16 04:15:49 --> Could not find the language line "Home"
ERROR - 2024-11-16 04:34:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-16 04:41:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 04:50:32 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-16 05:01:00 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-16 05:01:00 --> Could not find the language line "Home"
ERROR - 2024-11-16 05:01:00 --> Could not find the language line "Home"
ERROR - 2024-11-16 05:11:19 --> Could not find the language line "Home"
ERROR - 2024-11-16 05:15:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-16 05:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 05:24:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-16 05:41:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 05:42:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-16 05:45:20 --> Could not find the language line "Home"
ERROR - 2024-11-16 06:05:37 --> Could not find the language line "Home"
ERROR - 2024-11-16 06:11:19 --> Could not find the language line "Home"
ERROR - 2024-11-16 06:19:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 06:19:47 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 06:20:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 06:20:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 06:21:59 --> Could not find the language line "Other"
ERROR - 2024-11-16 06:41:19 --> Could not find the language line "Home"
ERROR - 2024-11-16 06:46:13 --> Could not find the language line "Home"
ERROR - 2024-11-16 06:57:12 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:04:56 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:07:38 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:11:20 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:41:20 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:42:34 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:48:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 07:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 07:54:37 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:08:02 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:08:22 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:08:34 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 08:10:49 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:10:56 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:10:58 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:11:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:03 --> 404 Page Not Found: Assets/img
ERROR - 2024-11-16 08:11:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:20 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-16 08:11:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:11:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 08:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 08:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 08:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 08:27:55 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:30:25 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:31:10 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:39:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 08:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 08:40:57 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-16 08:41:20 --> Could not find the language line "Home"
ERROR - 2024-11-16 08:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 08:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 09:00:10 --> Could not find the language line "Home"
ERROR - 2024-11-16 09:00:48 --> Could not find the language line "Home"
ERROR - 2024-11-16 09:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 09:10:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 09:11:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 09:12:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-16 09:16:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-16 09:41:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 09:48:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-16 09:48:30 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-16 09:58:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 10:06:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 10:07:36 --> Could not find the language line "Home"
ERROR - 2024-11-16 10:07:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-16 10:11:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 10:21:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-16 10:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 10:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 10:41:22 --> Could not find the language line "Home"
ERROR - 2024-11-16 10:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 11:05:46 --> Could not find the language line "Home"
ERROR - 2024-11-16 11:11:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 11:20:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 11:41:22 --> Could not find the language line "Home"
ERROR - 2024-11-16 11:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 12:09:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-16 12:11:22 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:18:34 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:23:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:33:35 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:38:30 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:41:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:43:33 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 12:53:34 --> Could not find the language line "Home"
ERROR - 2024-11-16 12:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 13:11:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 13:11:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 13:13:37 --> Could not find the language line "Home"
ERROR - 2024-11-16 13:23:36 --> Could not find the language line "Home"
ERROR - 2024-11-16 13:30:18 --> Could not find the language line "Home"
ERROR - 2024-11-16 13:41:23 --> Could not find the language line "Home"
ERROR - 2024-11-16 13:43:33 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:11:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:11:30 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:20:53 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:21:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-16 14:38:46 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:38:53 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-16 14:40:29 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-16 14:41:07 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-16 14:41:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 14:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 14:42:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 14:42:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 14:42:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 14:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 15:05:44 --> Could not find the language line "Home"
ERROR - 2024-11-16 15:11:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 15:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 15:23:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-16 15:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 15:24:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-16 15:25:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-16 15:25:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-16 15:41:25 --> Could not find the language line "Home"
ERROR - 2024-11-16 16:11:25 --> Could not find the language line "Home"
ERROR - 2024-11-16 16:24:57 --> Could not find the language line "Home"
ERROR - 2024-11-16 16:39:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-16 16:41:25 --> Could not find the language line "Home"
ERROR - 2024-11-16 16:58:05 --> Could not find the language line "Home"
ERROR - 2024-11-16 17:03:33 --> Could not find the language line "Home"
ERROR - 2024-11-16 17:11:25 --> Could not find the language line "Home"
ERROR - 2024-11-16 17:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 17:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 17:41:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:11:26 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:20:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:22:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 18:22:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 18:23:25 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 18:23:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-16 18:24:12 --> Could not find the language line "Other"
ERROR - 2024-11-16 18:41:26 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:51:31 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:54:15 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:54:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 18:54:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:54:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:55:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:55:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:55:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:55:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:56:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 18:57:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 18:57:44 --> Could not find the language line "Home"
ERROR - 2024-11-16 18:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 18:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 18:59:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 19:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:02:24 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:04:45 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:07:42 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:11:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:12:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 19:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:19:08 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:29:28 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:41:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 19:54:47 --> Could not find the language line "Home"
ERROR - 2024-11-16 19:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 20:11:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 20:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 20:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-16 20:41:27 --> Could not find the language line "Home"
ERROR - 2024-11-16 20:58:53 --> Could not find the language line "Home"
ERROR - 2024-11-16 20:59:32 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:00:02 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:09:35 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:09:36 --> 404 Page Not Found: App/index
ERROR - 2024-11-16 21:09:36 --> 404 Page Not Found: Login/index
ERROR - 2024-11-16 21:09:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-16 21:09:37 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-16 21:09:37 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-16 21:11:28 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:12:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 21:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:25:07 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:27:48 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:34:47 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:34:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:35:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:35:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:36:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:36:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:37:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:38:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:38:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:27 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:31 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:39:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:36 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:39:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:40:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:40:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 21:40:06 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:40:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:40:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:41:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 21:41:09 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:41:21 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:41:31 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:42:00 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-16 21:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:55:50 --> Could not find the language line "Home"
ERROR - 2024-11-16 21:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 21:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 22:00:07 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:00:31 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:01:50 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:02:18 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:02:45 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:03:30 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:03:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-16 22:03:57 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:04:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-16 22:04:07 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:04:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-16 22:04:15 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:11:30 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:13:34 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 22:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 22:35:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-16 22:35:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-16 22:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 22:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-16 22:41:29 --> Could not find the language line "Home"
ERROR - 2024-11-16 22:42:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-16 23:11:31 --> Could not find the language line "Home"
ERROR - 2024-11-16 23:41:40 --> Could not find the language line "Home"
ERROR - 2024-11-16 23:50:40 --> Could not find the language line "Clothing"
