<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-25 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:03:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:04:33 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:06:09 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:14:16 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:16:46 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:42:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 00:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 00:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 00:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 00:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 01:01:37 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-25 01:01:37 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-02-25 01:14:51 --> Could not find the language line "Home"
ERROR - 2023-02-25 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 01:46:00 --> Could not find the language line "Home"
ERROR - 2023-02-25 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 02:18:23 --> Could not find the language line "Home"
ERROR - 2023-02-25 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 02:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 03:08:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-25 03:08:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 03:11:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-25 03:17:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 04:29:36 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-25 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 04:33:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 04:36:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 04:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 04:51:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:08:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 05:08:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:25:52 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 05:58:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 05:58:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 05:58:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 05:58:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 05:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:01:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:03:07 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:09:51 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:10:54 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:30:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:31:47 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:31:49 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:32:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 06:35:52 --> Could not find the language line "Home"
ERROR - 2023-02-25 06:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:12:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 07:12:50 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:17:44 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:26:53 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:27:21 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:27:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 07:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 07:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:27:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:40:35 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 07:46:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:50:17 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:51:08 --> Could not find the language line "Home"
ERROR - 2023-02-25 07:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:05:35 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:06:26 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:07:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:07:53 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:08:02 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:08:49 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:08:54 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 08:09:01 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:09:06 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 08:09:09 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:16:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 08:18:07 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:42:25 --> Could not find the language line "Home"
ERROR - 2023-02-25 08:46:52 --> Could not find the language line "Socks"
ERROR - 2023-02-25 08:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 08:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:05:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-25 09:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:14:15 --> 404 Page Not Found: Components/com_jbusinessdirectory
ERROR - 2023-02-25 09:15:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:18:40 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 09:18:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:19:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:19:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:20:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:20:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:20:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:21:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:21:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:21:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 09:21:40 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:21:46 --> Could not find the language line "Socks"
ERROR - 2023-02-25 09:21:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:22:00 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 09:22:10 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:23:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:41:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:43:58 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:45:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:46:02 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:47:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:47:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:47:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-25 09:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:51:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-25 09:51:09 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:51:23 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:52:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 09:58:21 --> Could not find the language line "Home"
ERROR - 2023-02-25 09:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:03:07 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:03:09 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:10:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:12:21 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:18:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:23:43 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:25:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-25 10:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:37:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:38:33 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:38:33 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:38:34 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:38:34 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:38:37 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:38:38 --> 404 Page Not Found: /All
ERROR - 2023-02-25 10:39:07 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:50:04 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:53:43 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:56:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 10:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:56:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 10:57:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 10:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 10:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:19:38 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:20:35 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:21:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-25 11:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:22:44 --> 404 Page Not Found: /All
ERROR - 2023-02-25 11:23:26 --> Could not find the language line "Hats%D8%AE%D8%B5%D9%88%D9%85%D8%A7%D8%AA"
ERROR - 2023-02-25 11:23:26 --> Could not find the language line "Hats%D8%AE%D8%B5%D9%88%D9%85%D8%A7%D8%AA"
ERROR - 2023-02-25 11:24:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:16 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:16 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:17 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:17 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-25 11:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-25 11:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-25 11:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-25 11:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-25 11:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-25 11:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-25 11:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-25 11:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-25 11:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '9'
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-02-25 11:35:28 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:42:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:55:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 11:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 11:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 12:18:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:20:40 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:30:28 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:49:44 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 12:50:17 --> Could not find the language line "Home"
ERROR - 2023-02-25 12:50:41 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:14:51 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:16:03 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:17:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:22:16 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:26:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 13:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:28:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-25 13:28:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-25 13:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:34:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:35:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:37:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 13:37:40 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:46:25 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:55:00 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:55:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:55:47 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 13:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:56:08 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:56:53 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:56:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 13:57:33 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:57:34 --> Could not find the language line "Home"
ERROR - 2023-02-25 13:58:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:11:34 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:12:26 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:12:28 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:12:32 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:12:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:18:00 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:27:14 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 14:29:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:29:50 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:31:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:31:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:40:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:42:02 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:42:32 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:43:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:43:41 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:47:49 --> Could not find the language line "Home"
ERROR - 2023-02-25 14:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 14:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 14:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:02:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 15:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:03:02 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 15:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:04:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 15:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:05:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 15:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 15:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:14:37 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:25:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:34:46 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:45:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:54:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 15:54:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 15:54:56 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-25 15:54:57 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-25 15:54:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-25 15:54:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-25 15:55:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 15:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:56:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-25 15:57:58 --> Could not find the language line "Socks"
ERROR - 2023-02-25 15:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 15:58:08 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:16:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:18:16 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:21:10 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:34:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:37:47 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:38:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:39:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:40:04 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 16:40:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:40:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:40:20 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 16:40:23 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:40:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:40:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:40:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:40:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:41:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:41:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:41:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:41:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:42:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:42:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:42:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:46:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:46:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:46:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:49:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:53:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:53:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:53:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:53:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:53:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:53:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:54:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:54:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:54:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:54:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:55:17 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:55:27 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 16:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:55:53 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:56:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:56:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:56:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:56:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:57:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 16:57:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:57:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 16:57:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:57:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:58:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-25 16:59:31 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 17:11:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:19:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:32:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:32:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:41:32 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:41:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:46:52 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 17:47:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 17:53:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:54:17 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 17:54:28 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 17:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 17:54:45 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 17:54:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:57:54 --> Could not find the language line "Home"
ERROR - 2023-02-25 17:59:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:05:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:05:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:05:20 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:05:54 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:06:26 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:06:58 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:20 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:21 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:58 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:08:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:10:51 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:19:47 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:19:50 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:19:50 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:20:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:20:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:20:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:20:37 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:26:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:27:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:38:35 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:46:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:52:03 --> Could not find the language line "Home"
ERROR - 2023-02-25 18:55:54 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 19:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 19:03:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 19:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 19:03:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 19:03:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 19:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 19:03:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 19:10:21 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 19:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 19:12:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 19:13:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:13:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 19:21:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:32:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:33:49 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:33:51 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:45:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:46:03 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 19:47:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:53:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:54:52 --> Could not find the language line "Home"
ERROR - 2023-02-25 19:57:44 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:00:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:01:52 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:02:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:02:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:13:23 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:13:40 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:14:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:21:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 20:22:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:29:45 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:36:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:44:12 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 20:47:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:51:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:56:29 --> Could not find the language line "Home"
ERROR - 2023-02-25 20:56:33 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:06:03 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:09:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:09:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:12:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:17:09 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:17:35 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 21:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 21:17:57 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 21:18:11 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 21:18:37 --> Could not find the language line "Bracelets"
ERROR - 2023-02-25 21:18:39 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:20:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 21:22:22 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:22:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 21:22:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 21:23:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-25 21:23:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 21:24:24 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 21:25:31 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:25:46 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:25:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:26:15 --> Could not find the language line "Socks"
ERROR - 2023-02-25 21:26:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:28:00 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:28:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 21:29:42 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:29:57 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:32:41 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:34:06 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:37:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:38:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:42:37 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:45:48 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:46:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-25 21:46:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-25 21:46:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-25 21:46:07 --> 404 Page Not Found: Home/accounting
ERROR - 2023-02-25 21:49:50 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:52:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:52:32 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:53:05 --> Could not find the language line "Home"
ERROR - 2023-02-25 21:53:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 21:53:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 21:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 21:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 21:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 21:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 21:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 21:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 21:53:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-25 21:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:07:30 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 22:11:08 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:11:19 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:13:22 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:13:56 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:22:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-25 22:22:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:30:38 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:31:26 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:31:34 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:33:31 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:33:41 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:33:59 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:37:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 22:45:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-25 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 23:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 23:05:18 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-25 23:10:27 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:11:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:11:55 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:34:20 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:36:44 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-25 23:37:30 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 23:38:34 --> Could not find the language line "Perfume"
ERROR - 2023-02-25 23:38:36 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:49:54 --> Could not find the language line "Home"
ERROR - 2023-02-25 23:58:50 --> Could not find the language line "Home"
