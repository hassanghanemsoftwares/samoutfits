<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-15 00:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 00:15:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 00:19:34 --> Could not find the language line "Home"
ERROR - 2025-01-15 00:29:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-15 00:35:45 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-15 00:35:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 00:35:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 00:38:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 00:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 00:41:15 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-15 00:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 00:49:38 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:10:31 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:16:36 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:16:59 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:19:35 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:44:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:46:05 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-15 01:46:05 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:46:05 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 01:49:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 01:49:36 --> Could not find the language line "Home"
ERROR - 2025-01-15 02:04:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 02:09:17 --> Could not find the language line "Home"
ERROR - 2025-01-15 02:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 02:19:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 02:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 02:48:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-15 02:49:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 02:59:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 03:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 03:19:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 03:21:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 03:49:50 --> Could not find the language line "Home"
ERROR - 2025-01-15 03:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 03:56:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-15 04:02:17 --> Could not find the language line "Home"
ERROR - 2025-01-15 04:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 04:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 04:17:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-15 04:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 04:19:36 --> Could not find the language line "Home"
ERROR - 2025-01-15 04:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 04:49:37 --> Could not find the language line "Home"
ERROR - 2025-01-15 05:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 05:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 05:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 05:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 05:04:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-15 05:04:46 --> Could not find the language line "Home"
ERROR - 2025-01-15 05:19:38 --> Could not find the language line "Home"
ERROR - 2025-01-15 05:49:38 --> Could not find the language line "Home"
ERROR - 2025-01-15 05:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 06:19:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 06:28:15 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-15 06:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 06:49:38 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:16:19 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:19:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:21:03 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-01-15 07:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 07:25:52 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-15 07:25:52 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:25:52 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:49:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 07:49:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 07:49:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-15 07:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 07:53:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:07:11 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:19:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:34:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-15 08:49:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:53:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:56:50 --> Could not find the language line "Home"
ERROR - 2025-01-15 08:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 08:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 09:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 09:05:31 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:09:29 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:12:28 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:18:23 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:19:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:19:58 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:22:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-15 09:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 09:36:35 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:39:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-15 09:49:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:52:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 09:53:12 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:04:49 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:05:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-15 10:08:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-15 10:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 10:19:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:20:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-15 10:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 10:36:15 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:46:35 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:46:48 --> Could not find the language line "Home"
ERROR - 2025-01-15 10:49:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:03:10 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:03:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:03:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:11:02 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:11:58 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-01-15 11:11:58 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-01-15 11:11:58 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-01-15 11:12:00 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-15 11:12:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-15 11:12:17 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-01-15 11:12:26 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-01-15 11:13:59 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:14:14 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:14:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:14:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:14:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:14:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:14:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:14:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 11:15:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:15:49 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-15 11:15:49 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:16:00 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:17:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-15 11:19:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:26:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:27:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:43:53 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:48:01 --> 404 Page Not Found: Vendor/laravel-filemanager
ERROR - 2025-01-15 11:48:02 --> 404 Page Not Found: Public/vendor
ERROR - 2025-01-15 11:49:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 11:56:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-15 12:19:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 12:22:30 --> 404 Page Not Found: Media/system
ERROR - 2025-01-15 12:22:33 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-01-15 12:28:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:28:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:29:58 --> Could not find the language line "Other"
ERROR - 2025-01-15 12:32:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 12:32:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 12:34:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:11 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:37:11 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:37:11 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:37:11 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:37:11 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-15 12:37:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "Clothing"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "assets"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "assets"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "assets"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "assets"
ERROR - 2025-01-15 12:37:16 --> Could not find the language line "assets"
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m128%' OR a.description LIKE '%m128%' OR a.color LIKE '%m128%' OR a.barcode LIKE '%m128%' OR a.category LIKE '%m128%' OR a.sub_category LIKE '%m128%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:37:23 --> Could not find the language line "Other"
ERROR - 2025-01-15 12:37:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:37:24 --> 404 Page Not Found: Accounts/assets
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-15 12:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 12:46:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-15 12:47:25 --> Could not find the language line "Other"
ERROR - 2025-01-15 12:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 12:47:40 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:47:40 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:47:40 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:47:40 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:47:40 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-15 12:47:41 --> Could not find the language line "Clothing"
ERROR - 2025-01-15 12:49:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:00:33 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:07:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:19:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:44:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-01-15 13:44:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-01-15 13:44:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-01-15 13:44:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-01-15 13:45:05 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:45:18 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:46:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:46:45 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-15 13:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:49:41 --> Could not find the language line "Home"
ERROR - 2025-01-15 13:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 14:03:47 --> Could not find the language line "Home"
ERROR - 2025-01-15 14:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 14:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 14:09:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 14:10:17 --> Could not find the language line "Home"
ERROR - 2025-01-15 14:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 14:19:40 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-01-15 14:19:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-01-15 14:19:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-01-15 14:19:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-01-15 14:19:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 14:23:32 --> 404 Page Not Found: Media/system
ERROR - 2025-01-15 14:23:35 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-01-15 14:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 14:49:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:02:36 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:19:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:44:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 15:45:35 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:45:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 15:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 15:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 15:45:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 15:45:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 15:46:13 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:49:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 15:58:05 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:03:00 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:04:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:04 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:04 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:07 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:08 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:08 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:08 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 16:07:51 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 16:19:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:20:26 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:22:03 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-15 16:22:03 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:22:03 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:23:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:25:05 --> Could not find the language line "Other"
ERROR - 2025-01-15 16:28:21 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:40:08 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:43:24 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:49:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:49:56 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:56:43 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:59:20 --> Could not find the language line "Home"
ERROR - 2025-01-15 16:59:20 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:04:38 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:12:17 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:19:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:22:55 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:24:18 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:38:59 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:42:11 --> Could not find the language line "Other"
ERROR - 2025-01-15 17:44:35 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:49:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 17:50:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 17:50:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-15 18:02:49 --> Could not find the language line "Home"
ERROR - 2025-01-15 18:16:52 --> Could not find the language line "Home"
ERROR - 2025-01-15 18:19:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 18:23:07 --> Could not find the language line "Other"
ERROR - 2025-01-15 18:23:33 --> Could not find the language line "Clothing"
ERROR - 2025-01-15 18:35:33 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-15 18:36:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-15 18:49:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 18:59:39 --> Could not find the language line "Home"
ERROR - 2025-01-15 19:17:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-15 19:18:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-15 19:19:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-15 19:19:44 --> Could not find the language line "Home"
ERROR - 2025-01-15 19:29:42 --> Could not find the language line "Home"
ERROR - 2025-01-15 19:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 19:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 19:49:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 20:15:44 --> Could not find the language line "Other"
ERROR - 2025-01-15 20:19:21 --> Could not find the language line "Home"
ERROR - 2025-01-15 20:19:45 --> Could not find the language line "Home"
ERROR - 2025-01-15 20:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 20:49:48 --> Could not find the language line "Home"
ERROR - 2025-01-15 21:01:37 --> Could not find the language line "Home"
ERROR - 2025-01-15 21:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 21:05:34 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-15 21:05:34 --> Could not find the language line "Home"
ERROR - 2025-01-15 21:19:46 --> Could not find the language line "Home"
ERROR - 2025-01-15 21:19:47 --> 404 Page Not Found: Sites/all
ERROR - 2025-01-15 21:49:46 --> Could not find the language line "Home"
ERROR - 2025-01-15 22:03:24 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-15 22:03:25 --> Could not find the language line "Home"
ERROR - 2025-01-15 22:03:25 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-15 22:03:25 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-15 22:03:26 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-15 22:03:26 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-15 22:03:26 --> 404 Page Not Found: New/index
ERROR - 2025-01-15 22:03:27 --> 404 Page Not Found: Main/index
ERROR - 2025-01-15 22:03:27 --> Could not find the language line "Home"
ERROR - 2025-01-15 22:18:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-15 22:19:47 --> Could not find the language line "Home"
ERROR - 2025-01-15 22:20:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-15 22:27:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-15 22:49:46 --> Could not find the language line "Home"
ERROR - 2025-01-15 22:54:26 --> Could not find the language line "Clothing"
ERROR - 2025-01-15 23:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-15 23:05:59 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:19:53 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:30:40 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:41:37 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-15 23:41:37 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:41:37 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:42:02 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:43:36 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:45:11 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:48:24 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:49:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-15 23:49:59 --> Could not find the language line "Home"
ERROR - 2025-01-15 23:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
