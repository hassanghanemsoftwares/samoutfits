<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-22 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 00:04:41 --> Could not find the language line "Home"
ERROR - 2023-02-22 00:19:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 00:29:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 00:51:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 00:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 00:58:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:15:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 01:15:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:21:22 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:27:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:31:38 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:33:25 --> Could not find the language line "Home"
ERROR - 2023-02-22 01:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 01:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 02:25:20 --> Could not find the language line "Home"
ERROR - 2023-02-22 02:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 02:41:11 --> Could not find the language line "Home"
ERROR - 2023-02-22 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:01:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 04:01:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:18:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 04:42:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 04:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 04:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 04:49:18 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:07:59 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:08:26 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:09:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:11:35 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:12:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:12:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 05:12:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 05:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 05:14:56 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:15:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:16:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:16:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 05:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:17:05 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 05:19:45 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 05:31:50 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:05:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:07:59 --> 404 Page Not Found: Components/com_creativecontactform
ERROR - 2023-02-22 06:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 06:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:34:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:35:11 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:39:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 06:40:45 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 06:50:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 06:50:36 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:50:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 06:51:59 --> Could not find the language line "Home"
ERROR - 2023-02-22 06:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 06:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:20:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:27:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:31:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:33:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 07:37:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 07:44:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:45:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:45:44 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:46:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:46:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:46:53 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:47:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:47:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:50:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:50:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:50:21 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:50:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:51:53 --> Could not find the language line "Home"
ERROR - 2023-02-22 07:51:57 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 07:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 07:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:03:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:15:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:15:25 --> Could not find the language line "Socks"
ERROR - 2023-02-22 08:17:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:25:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:28:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 08:28:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 08:29:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 08:29:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:31:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:32:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 08:32:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:33:08 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 08:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 08:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:35:05 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:35:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:35:40 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 08:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:36:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:37:18 --> Could not find the language line "Socks"
ERROR - 2023-02-22 08:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:40:35 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:42:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:45:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:47:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:48:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:48:27 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:48:39 --> Could not find the language line "Home"
ERROR - 2023-02-22 08:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 08:52:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:02:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:03:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:04:01 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:15:32 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:18:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 09:18:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 09:18:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 09:18:52 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-22 09:18:56 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-22 09:18:59 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-02-22 09:19:03 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-22 09:19:07 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-22 09:19:10 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-22 09:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:19:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:19:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:19:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:19:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:19:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:20:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:20:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:20:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:20:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:20:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:20:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:22:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:23:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:23:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:23:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:23:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:23:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:24:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 09:29:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:30:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:30:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:30:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:30:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:30:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:30:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:31:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:31:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:31:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:31:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:31:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 09:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 09:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:34:24 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:53:20 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:55:19 --> Could not find the language line "Home"
ERROR - 2023-02-22 09:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 09:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:03:35 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:04:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:08:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:09:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:15:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:32:45 --> 404 Page Not Found: Administrator/components
ERROR - 2023-02-22 10:34:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:39:28 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 10:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 10:44:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:52:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:52:19 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:53:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 10:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 10:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 11:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 11:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:39:33 --> Could not find the language line "Home"
ERROR - 2023-02-22 11:40:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 11:40:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 11:40:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 11:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 11:40:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 11:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 11:40:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 11:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 11:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:41:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 11:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:54:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 11:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 11:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:03:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 12:03:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 12:03:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 12:03:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 12:03:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 12:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 12:10:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:10:22 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:10:35 --> Could not find the language line "Socks"
ERROR - 2023-02-22 12:10:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:11:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:11:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:15:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:15:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:17:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:22:29 --> Could not find the language line "Socks"
ERROR - 2023-02-22 12:22:43 --> Could not find the language line "Socks"
ERROR - 2023-02-22 12:22:47 --> Could not find the language line "Socks"
ERROR - 2023-02-22 12:22:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:22:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 12:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:24:45 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 12:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:31:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:33:45 --> Could not find the language line "socks"
ERROR - 2023-02-22 12:33:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:35:50 --> Could not find the language line "Home"
ERROR - 2023-02-22 12:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:35:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:36:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:36:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 12:51:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:52:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 12:58:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:03:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-22 13:03:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-22 13:03:23 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-22 13:03:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-22 13:04:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:34:41 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:40:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:40:47 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:41:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 13:41:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:47:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:47:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 13:47:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:48:08 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:48:14 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 13:48:20 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:48:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:48:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:48:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:49:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:49:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:50:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 13:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 13:51:35 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:51:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:51:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 13:52:00 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:52:04 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 13:52:29 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 13:52:35 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 13:52:39 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:53:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:53:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:53:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:54:28 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:54:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:58:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:58:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 13:59:50 --> Could not find the language line "Home"
ERROR - 2023-02-22 13:59:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:01:25 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:01:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 14:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:01:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 14:01:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:02:53 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:02:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:03:24 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 14:03:29 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:03:47 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:03:53 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:03:54 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:04:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:04:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:04:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:04:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:04:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:05:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:06:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:06:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:06:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 14:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:07:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:07:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:07:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:07:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:07:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:07:49 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 14:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:12:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:12:30 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:13:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:17:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:19:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:19:39 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:20:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:27:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:27:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-22 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-22 14:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 14:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 14:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-22 14:40:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:40:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:49:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:49:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:49:31 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:07 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:21 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:31 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:50:41 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:43 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:45 --> Could not find the language line "Socks"
ERROR - 2023-02-22 14:50:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:50:50 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:56:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 14:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 14:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:01:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:02:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:02:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:03:08 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:12:31 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:13:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:13:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:13:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:14:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:14:56 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:14:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:16:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:16:21 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:16:48 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-22 15:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:17:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:18:25 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:18:39 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:19:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:19:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:20:41 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:28:32 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:34:44 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:35:01 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:37:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:43:08 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:49:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:52:32 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 15:53:32 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:56:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 15:57:37 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:02:11 --> Could not find the language line "Socks"
ERROR - 2023-02-22 16:05:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:08:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 16:08:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 16:08:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 16:08:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 16:08:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 16:08:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 16:08:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 16:08:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 16:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:13:30 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:13:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 16:14:24 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:16:00 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:17:47 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:20:50 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:20:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 16:26:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:33:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-02-22 16:39:00 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-22 16:45:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:45:21 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 16:46:55 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:48:21 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:49:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:49:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 16:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:00:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:00:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:06:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 17:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:14:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:19:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:20:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:20:44 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:20:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:21:33 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:29:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:29:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:30:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:30:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:30:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:31:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:31:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 17:32:05 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:33:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:34:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:34:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:34:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:34:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:34:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:34:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 17:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:34:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 17:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:39:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:50:18 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:50:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:52:40 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:53:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:53:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:53:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:53:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:54:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:54:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:55:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:55:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:41 --> Could not find the language line "Home"
ERROR - 2023-02-22 17:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 17:55:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 17:55:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:01:44 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:01:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:02:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:11:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:11:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:12:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-22 18:12:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-22 18:12:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-22 18:12:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-22 18:12:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:12:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:13:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:13:27 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:13:28 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:13:39 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-02-22 18:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:13:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:14:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:14:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:14:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:14:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:14:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:14:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:14:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 18:15:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:15:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 18:16:05 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 18:16:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:16:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:17:23 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:17:34 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:17:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:18:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:20:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:22:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:22:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:24:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:24:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:27:36 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:29:04 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:29:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:29:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:30:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:31:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:31:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:31:26 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:31:26 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:36:43 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:37:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:37:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:37:59 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:38:33 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:39:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:41:37 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:42:20 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 18:44:20 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:44:31 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 18:44:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:44:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 18:46:00 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:46:18 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:48:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:48:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:50:44 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:50:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 18:50:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:51:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:52:06 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 18:52:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:53:45 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:56:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 18:57:49 --> Could not find the language line "Home"
ERROR - 2023-02-22 18:58:15 --> Could not find the language line "Socks"
ERROR - 2023-02-22 18:59:11 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:03:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:03:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:03:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:03:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:05:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:05:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:05:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:05:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:05:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:05:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:05:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:07:00 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:11:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:11:34 --> Could not find the language line "Socks"
ERROR - 2023-02-22 19:11:58 --> Could not find the language line "Socks"
ERROR - 2023-02-22 19:12:24 --> Could not find the language line "Socks"
ERROR - 2023-02-22 19:12:37 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:16:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 19:16:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:35:36 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:35:55 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:35:59 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:37:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:37:56 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:39:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:39:55 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 19:40:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:40:12 --> Could not find the language line "Socks"
ERROR - 2023-02-22 19:40:18 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 19:40:36 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 19:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:43:05 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 19:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:43:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:46:30 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 19:46:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 19:46:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:47:00 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:47:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:47:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 19:47:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 19:48:10 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 19:48:19 --> Could not find the language line "Home"
ERROR - 2023-02-22 19:52:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 20:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:27:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-22 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:36:56 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:38:11 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:38:46 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 20:39:45 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:39:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:39:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:40:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:40:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:40:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 20:41:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:44:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:46:37 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:46:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 20:51:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 20:52:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:01:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:16:52 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:17:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:29:18 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:40:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 21:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 21:40:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 21:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 21:40:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 21:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 21:40:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 21:40:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 21:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-22 21:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-22 21:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:47:16 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:48:55 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:49:48 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:49:55 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:54:19 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:54:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:54:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 21:55:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:55:09 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:55:41 --> Could not find the language line "Home"
ERROR - 2023-02-22 21:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 21:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:07:31 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:12:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:19:07 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:25:22 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:32:29 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 22:34:02 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:35:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:37:06 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:37:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 22:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:37:14 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:37:23 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:38:51 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:38:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-22 22:38:55 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 22:38:59 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 22:39:03 --> Could not find the language line "Bracelets"
ERROR - 2023-02-22 22:39:05 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:39:13 --> Could not find the language line "Perfume"
ERROR - 2023-02-22 22:39:17 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:39:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 22:39:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-22 22:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:39:36 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:39:41 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 22:39:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 22:39:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-22 22:39:55 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:40:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 22:40:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 22:40:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-22 22:40:25 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:40:26 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:40:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-22 22:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:40:57 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:41:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 22:41:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 22:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:41:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-22 22:41:54 --> Could not find the language line "Home"
ERROR - 2023-02-22 22:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 22:46:58 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:08:10 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:10:37 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:11:42 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-22 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:46:03 --> Could not find the language line "Home"
ERROR - 2023-02-22 23:46:57 --> Could not find the language line "Home"
