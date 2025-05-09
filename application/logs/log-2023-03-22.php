<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-22 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 00:27:45 --> Could not find the language line "Home"
ERROR - 2023-03-22 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-03-22 01:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 01:21:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 01:21:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 01:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 02:10:36 --> Could not find the language line "Crocs"
ERROR - 2023-03-22 02:10:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-22 02:26:30 --> Could not find the language line "Home"
ERROR - 2023-03-22 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 02:38:55 --> Could not find the language line "Home"
ERROR - 2023-03-22 02:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 02:48:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 03:01:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 03:12:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 03:33:09 --> Could not find the language line "Home"
ERROR - 2023-03-22 03:39:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 03:42:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 03:51:42 --> Could not find the language line "Home"
ERROR - 2023-03-22 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 04:01:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 05:31:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 05:35:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 05:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 05:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 05:41:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 05:54:38 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:13:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:38:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:42:47 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:43:17 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:43:51 --> Could not find the language line "Home"
ERROR - 2023-03-22 06:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:48:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 06:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 06:56:59 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:06:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:07:47 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:12:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:12:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:12:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:26:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:26:55 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:39:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:39:56 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:40:17 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:46:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 07:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 07:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:06:43 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:14:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 08:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:16:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:16:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 08:18:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-22 08:18:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-22 08:18:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-22 08:18:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-22 08:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:20:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:20:41 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:20:52 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 08:21:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-22 08:21:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-22 08:21:25 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:21:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:21:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:24:33 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 08:24:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:24:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:24:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 08:24:53 --> 404 Page Not Found: Admin/jquery-file-upload
ERROR - 2023-03-22 08:26:53 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:48:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 08:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 08:50:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:50:35 --> Could not find the language line "Home"
ERROR - 2023-03-22 08:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:05:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:06:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:20:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 09:20:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:20:47 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:20:47 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:23:46 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:35:21 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 09:44:38 --> Could not find the language line "Home"
ERROR - 2023-03-22 09:44:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-22 09:51:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 09:55:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:06:11 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:09:08 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:09:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 10:12:17 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:14:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 10:14:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:14:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 10:18:56 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:18:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 10:19:36 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:25:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:26:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:30:21 --> Could not find the language line "Home"
ERROR - 2023-03-22 10:30:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 10:30:31 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:30:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:31:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:31:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:32:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 10:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 10:42:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 10:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:19:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:23:50 --> Could not find the language line "Other"
ERROR - 2023-03-22 11:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:25:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:25:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:25:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:26:51 --> Could not find the language line "Crocs"
ERROR - 2023-03-22 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:35:47 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:38:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 11:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:41:26 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:41:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:43:11 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:49:10 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:49:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 11:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 11:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 11:51:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 11:51:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 11:52:56 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:53:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:58:44 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:58:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 11:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 11:59:30 --> Could not find the language line "Home"
ERROR - 2023-03-22 11:59:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:07:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:07:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:07:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:07:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:07:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:09:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 12:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:30:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:30:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:35:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:35:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:35:46 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:36:36 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:36:49 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:37:23 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:37:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 12:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:37:49 --> Could not find the language line "Home"
ERROR - 2023-03-22 12:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 12:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:03:09 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:03:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:05:18 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:05:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:06:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:06:25 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:06:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:07:37 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:07:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:07:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:07:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:07:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:07:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:08:02 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:08:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:08:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:08:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:08:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:09:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:09:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:09:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:10:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:10:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:10:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 13:10:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:10:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:12:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:13:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:30:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 13:30:33 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:30:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 13:34:22 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:36:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:36:59 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:37:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:39:50 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:39:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:40:24 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:40:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:40:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:40:31 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:41:28 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:41:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:44:22 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:47:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:47:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:47:35 --> Could not find the language line "Hair%20"
ERROR - 2023-03-22 13:48:13 --> Could not find the language line "Hair%20"
ERROR - 2023-03-22 13:48:51 --> Could not find the language line "Hair%20"
ERROR - 2023-03-22 13:48:55 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:51:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:53:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:54:31 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:54:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:55:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:55:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:57:53 --> Could not find the language line "Home"
ERROR - 2023-03-22 13:58:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 13:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:58:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 13:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:00:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 14:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:01:28 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:01:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 14:02:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 14:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:02:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:03:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 14:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:04:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 14:04:57 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:05:55 --> Could not find the language line "Hair%20"
ERROR - 2023-03-22 14:16:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:16:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:17:08 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:17:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:17:33 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:17:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:22:56 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:22:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:23:21 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:31:50 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:31:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:32:31 --> Could not find the language line "Home"
ERROR - 2023-03-22 14:32:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 14:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 14:33:39 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 15:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 15:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:30:50 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:36:58 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:37:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:38:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:38:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:38:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:50:59 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:51:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:51:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:58:20 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:58:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:58:32 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 15:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 15:58:37 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 15:58:38 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 15:58:54 --> Could not find the language line "Bracelets"
ERROR - 2023-03-22 15:58:55 --> Could not find the language line "assets"
ERROR - 2023-03-22 15:58:55 --> Could not find the language line "assets"
ERROR - 2023-03-22 15:58:55 --> Could not find the language line "assets"
ERROR - 2023-03-22 15:58:55 --> Could not find the language line "assets"
ERROR - 2023-03-22 15:58:55 --> Could not find the language line "assets"
ERROR - 2023-03-22 15:59:06 --> Could not find the language line "Home"
ERROR - 2023-03-22 15:59:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 15:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:01:25 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-22 16:01:26 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-22 16:01:26 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-22 16:01:26 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-22 16:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:05:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 16:14:53 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:15:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 16:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 16:17:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 16:17:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:18:35 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:18:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 16:19:17 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:33:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 16:47:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 16:48:01 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:19:18 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:19:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 17:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 17:21:39 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:23:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:33:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 17:33:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 17:49:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:02:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:02:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 18:03:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 18:07:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 18:08:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 18:08:41 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:10:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 18:12:03 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:22:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 18:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 18:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:54:50 --> Could not find the language line "Home"
ERROR - 2023-03-22 18:55:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 18:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:11:02 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:11:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:11:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 19:21:49 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:21:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 19:22:01 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:22:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 19:27:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 19:27:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 19:27:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 19:27:59 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-22 19:28:24 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-22 19:28:50 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-22 19:29:18 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-22 19:29:44 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-22 19:30:10 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-22 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:30:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:35:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:36:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:39:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:39:57 --> Could not find the language line "Perfume"
ERROR - 2023-03-22 19:41:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:42:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:44:11 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:44:12 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:45:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:46:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:48:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:49:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:52:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:52:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-22 19:54:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:54:44 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 19:55:23 --> Could not find the language line "Home"
ERROR - 2023-03-22 19:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 19:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:00:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:01:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:01:38 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:01:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:01:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:02:07 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:02:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:03:09 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:03:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:03:25 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:03:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:04:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:07:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:08:26 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:09:33 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:09:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:10:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:11:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 20:19:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 20:20:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-22 20:26:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-22 20:26:53 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-22 20:26:53 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-22 20:26:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-22 20:27:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:29:21 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:29:21 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:29:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:30:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:31:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:32:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:33:01 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:33:38 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:33:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:40:22 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:41:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:41:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:48:18 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:48:18 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:52:38 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:52:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:53:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 20:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:54:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 20:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:55:16 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:57:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:57:39 --> Could not find the language line "Home"
ERROR - 2023-03-22 20:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 20:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:00:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:00:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:00:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:00:41 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:00:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:00:46 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:00:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-22 21:00:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:01:46 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:01:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:01:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:01:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:01:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:02:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:02:02 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:02:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:02:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:05:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 21:06:16 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:06:20 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:06:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:07:33 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:07:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:10:00 --> Could not find the language line "Hair%20"
ERROR - 2023-03-22 21:10:05 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:10:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:12:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:12:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:13:32 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:13:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:13:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:14:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:14:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-22 21:14:23 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:24:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 21:26:39 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:42:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:45:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 21:46:05 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:46:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 21:46:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 21:52:34 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:04:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 22:24:22 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:24:39 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:24:59 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:25:01 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:25:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:25:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-22 22:32:50 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:32:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:32:53 --> 404 Page Not Found: Feed/index
ERROR - 2023-03-22 22:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 22:49:48 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:49:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:50:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:50:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:52:29 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:52:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 22:53:27 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:53:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:53:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-22 22:53:52 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:54:04 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:54:40 --> Could not find the language line "Home"
ERROR - 2023-03-22 22:54:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 22:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 22:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 22:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 22:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 23:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-22 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-22 23:00:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 23:01:34 --> Could not find the language line "Home"
ERROR - 2023-03-22 23:01:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 23:05:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 23:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 23:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-22 23:14:54 --> Could not find the language line "Home"
ERROR - 2023-03-22 23:14:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 23:15:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-22 23:30:19 --> Could not find the language line "Home"
ERROR - 2023-03-22 23:43:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-22 23:54:00 --> Could not find the language line "Home"
